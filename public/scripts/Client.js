class Client {
    constructor() {
        /*
            Initialisation de la connexion au serveur Websocket : http://localhost:9000/
        */
        this.socket = io.connect('/'); 

        do {
            this.nickname = window.prompt('Choisissez un pseudonyme');
        } while (typeof this.nickname !== 'string' || this.nickname.trim() === '')
        this._setNickname(this.nickname);

        this.channelId = null;

  
        this.$form     = $('form#chat');
        this.$message  = $('input#message');
        this.$messages = $('ul#messages');
        this.$channelsList = $('ul#channelsList');

        this.typingNotificationTimer = 0;
 
        this.socket.once('init', (data) => this._onInit(data));
        this.socket.on('message:list', (messagesList) => this.updateMessagesList(messagesList))
        this.socket.on('message:new', ({nickname, message}) => this.receiveMessage(nickname, message));
        this.socket.on('user:list', (usernamesList) => this.updateUsersList(usernamesList));
        this.socket.on('notify:typing', (username) => this.someoneIsTyping(username));
    }
  
    _onInit({channelsList, userChannelId}) {
        this.channelId = userChannelId;
        this.updateChannelsList(channelsList);
    }

    updateChannelsList(channelsList) {
        let template = '';
        let currentChannel = '';
        channelsList.forEach(channel => {
            if(this.channelId === channel.id) {
                currentChannel = channel
            }
            template += `<li>
                <a class="text-light ${this.channelId === channel.id && 'bg-dark'}" href="#" data-channel-id="${channel.id}" title="Accéder au channel ${channel.title}">
                    ${channel.title}
                </a>
            </li>`;
        });
        $('#channelsList').html(template);

        $('span.channelTitle').text(currentChannel.title.trim())
    }

    changeChannel(channelId) {
        this.channelId = channelId
        this.socket.emit('channel:change', channelId)
    }


    _setNickname(nickname) {
        this.socket.emit('user:nickname', nickname);
    }

    /**
     * @param {String} username 
     */
    someoneIsTyping(username) {
        $('#typingNotification').text(`${username} est en train d'écrire...`);

        clearTimeout(this.typingNotificationTimer);
        this.typingNotificationTimer = window.setTimeout(() => {
            $('#typingNotification').empty();
        }, 5000);
    }

    /**
     * @param {Array} messagesList 
     */
    updateMessagesList(messagesList) {
        let html = '';

        messagesList.reverse().forEach((message) => {
            html += `<li class="list-group-item">
                        <span class="badge badge-dark">${message.nickname}</span>
                        ${message.message}
                    </li>`;
        });

        this.$messages.html(html);
    }

    /**
     * @param {Array} usernamesList
     */
    updateUsersList(usernamesList) {
        let template = '';
        usernamesList.forEach(username => {
            template += `<li>
                            ${username === this.nickname 
                                ? `<strong>${username}</strong>`
                                : username
                            }
                        </li>`;
            $('#usersList').html(template);
        })
    }


    init() {
       
        this.$form.on('submit', (event) => {
            event.preventDefault();
            this.sendMessage(this.$message.val());
            this.$message.val('')[0].focus();
        });

        
        this.$message.on('input', (event) => {
            if (this.$message.val().trim() !== '') {
                this.notifyTyping();
            }
        });

        
        this.$channelsList.on('click', 'a[data-channel-id]', (event) => {
            event.preventDefault();

            let $linkEl = $(event.currentTarget);
            let channelId = $linkEl.data('channel-id');

            this.$channelsList.find('a[data-channel-id]').removeClass('bg-dark');
            $linkEl.addClass('bg-dark');

            $('span.channelTitle').text($linkEl.text().trim());


            this.changeChannel(channelId);
            // this.updateChannelsList();
        });
    }

    notifyTyping() {
        this.socket.emit('notify:typing');
    }

 
    sendMessage(message) {
        this.socket.emit('message:new', message);
    }

    receiveMessage(nickname, message) {
        $('#typingNotification').empty();
        
        const html = `<li class="list-group-item">
                        <span class="badge badge-dark">${nickname}</span>
                        ${message}
                    </li>`;
        this.$messages.prepend(html);
    }
}

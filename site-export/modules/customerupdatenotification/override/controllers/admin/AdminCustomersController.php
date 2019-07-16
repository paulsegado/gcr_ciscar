<?php

 class AdminCustomersController extends AdminCustomersControllerCore {

    public function initProcess() {
       parent::initProcess();

       if (Tools::isSubmit('submitGuestToCustomer') && $this->id_object) {
          if ($this->tabAccess['edit'] === '1')
             $this->action = 'guest_to_customer';
          else
             $this->errors[] = Tools::displayError('You do not have permission to edit this.');
       }
       elseif (Tools::isSubmit('changeNewsletterVal') && $this->id_object) {
          if ($this->tabAccess['edit'] === '1')
             $this->action = 'change_newsletter_val';
          else
             $this->errors[] = Tools::displayError('You do not have permission to edit this.');
       }
       elseif (Tools::isSubmit('changeOptinVal') && $this->id_object) {
          if ($this->tabAccess['edit'] === '1')
             $this->action = 'change_optin_val';
          else
             $this->errors[] = Tools::displayError('You do not have permission to edit this.');
       }
       elseif (Tools::isSubmit('statuscustomer') && $this->id_object) {
          if ($this->tabAccess['edit'] === '1')
             $this->action = 'change_status_val';
          else
             $this->errors[] = Tools::displayError('You do not have permission to edit this.');
       }

       // When deleting, first display a form to select the type of deletion
       if ($this->action == 'delete' || $this->action == 'bulkdelete')
          if (Tools::getValue('deleteMode') == 'real' || Tools::getValue('deleteMode') == 'deleted')
             $this->delete_mode = Tools::getValue('deleteMode');
          else
             $this->action = 'select_delete';
    }

    public function processChangeStatusVal() {
       $customer = new Customer($this->id_object);
       if (!Validate::isLoadedObject($customer))
          $this->errors[] = Tools::displayError('An error occurred while updating customer information.');
       $customer->active = $customer->active ? 0 : 1;
       if (!$customer->update())
          $this->errors[] = Tools::displayError('An error occurred while updating customer information.');
       if ($customer->active == 1) {
          $mailsPath = realpath('../modules/customerupdatenotification/mails/');

          Mail::Send(
                        $customer->id_lang,
                        'account_activated',
                        Mail::l('Your account has been activated.', $customer->id_lang),
                        array('{email}' => $customer->email, '{firstname}' => $customer->firstname, '{lastname}' => $customer->lastname, '{shopname}' => $this->context->shop->name,),
                        $customer->email,
                        $customer->lastname,
                        NULL,
                        $this->context->shop->name,
                        NULL,
                        NULL,
                        $mailsPath.'/'
                );
       }
       Tools::redirectAdmin(self::$currentIndex . '&token=' . $this->token);
    }
 }
 
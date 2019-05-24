<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!--
 * FCKeditor - The text editor for Internet - http://www.fckeditor.net
 * Copyright (C) 2003-2010 Frederico Caldeira Knabben
 *
 * == BEGIN LICENSE ==
 *
 * Licensed under the terms of any of the following licenses at your
 * choice:
 *
 *  - GNU General Public License Version 2 or later (the "GPL")
 *    http://www.gnu.org/licenses/gpl.html
 *
 *  - GNU Lesser General Public License Version 2.1 or later (the "LGPL")
 *    http://www.gnu.org/licenses/lgpl.html
 *
 *  - Mozilla Public License Version 1.1 or later (the "MPL")
 *    http://www.mozilla.org/MPL/MPL-1.1.html
 *
 * == END LICENSE ==
 *
 * This page shows the list of available resource types.
-->
<?php
header ("content-type: text/html; charset=ISO-8859-15");
?>
<html>
<head>
<title>Available types</title>
<!--  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"> -->
<link href="browser.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript">

function SetResourceType( type )
{
	window.parent.frames["frmFolders"].SetResourceType( type ) ;
}

var aTypes = [
	['File','File'],
	['Image','Image'],
	['Flash','Flash'],
	['Media','Media']
] ;

window.onload = function()
{
	var oCombo = document.getElementById('cmbType') ;
	oCombo.innerHTML = '' ;
	for ( var i = 0 ; i < aTypes.length ; i++ )
	{
		if ( oConnector.ShowAllTypes || aTypes[i][0] == oConnector.ResourceType )
			AddSelectOption( oCombo, aTypes[i][1], aTypes[i][0] ) ;
	}
}

		</script>
</head>
<body>
	<table class="fullHeight" cellSpacing="0" cellPadding="0" width="100%"
		border="0">
		<tr>
			<td nowrap>Resource Type<BR> <select id="cmbType"
				style="WIDTH: 100%" onchange="SetResourceType(this.value);">
					<option>&nbsp;
			</select>
			</td>
		</tr>
	</table>
</body>
</html>

<?php
/*******************************************************************************
* ticket_details_op_logs.php

* 功能描述
	任务计划操作详细记录表


********************************************************************************/
require_once('ticket_op_logs.common.php');
//get post parm
$clientDst = $_REQUEST['clientdst'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<?php $xajax->printJavascript('include/'); ?>
		<meta http-equiv="Content-Language" content="utf-8" />
		<SCRIPT LANGUAGE="JavaScript">
		<!--
			function init(){
				xajax_init();
				dragresize.apply(document);
			}
			function ckbAllOnClick(objCkb){
				var ockb = document.getElementsByName('ckb[]');
				for(i=0;i<ockb.length;i++) {				
					if (ockb[i].checked != objCkb.checked){
						ockb[i].checked = objCkb.checked;
					}
				}
			}
		-->
		</SCRIPT>
		<script type="text/javascript" src="js/dragresize.js"></script>
		<script type="text/javascript" src="js/dragresizeInit.js"></script>
		<script type="text/javascript" src="js/astercrm.js"></script>
		<script type="text/javascript" src="js/ajax.js"></script>
		<script type="text/javascript" src="js/ajax-dynamic-list.js"></script>
		<LINK href="skin/default/css/style.css" type=text/css rel=stylesheet>
		<LINK href="skin/default/css/dragresize.css" type=text/css rel=stylesheet>

	</head>
	<body onload="init();">
	<div id="divNav"></div>
	<div id="divActive" name="divActive">
		<input type="button" value="TicketCategory" id="btnTicketCategory" name="btnTicketCategory" onClick="window.location='ticketcategory.php';" />
		<input type="button" value="Ticket" id="btnTicket" name="btnTicket" onClick="window.location='ticket_details.php';" />
	</div>
	<table width="100%" border="0" style="background: #F9F9F9; padding: 0px;">
		<tr>
			<td style="padding: 0px;">
				<fieldset>
					<div id="formDiv"  class="formDiv drsElement" 
						style="left: 450px; top: 50px;width:500px;"></div>
					<div id="grid" name="grid" align="center"> </div>
					<div id="msgZone" name="msgZone" align="left"> </div>
				</fieldset>
			</td>
		</tr>
	</table>
	<form name="exportForm" id="exportForm" action="dataexport.php" >
		<input type="hidden" value="" id="hidSql" name="hidSql" />
		<input type="hidden" value="" id="maintable" name="maintable" />
		<input type="hidden" value="export" id="exporttype" name="exporttype" />
	</form>
		<div id="divCopyright"></div>
	</body>
</html>
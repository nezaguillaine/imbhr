<?php
session_start();
if($_SESSION['usernamesession']==null and $_SESSION['passwordsession']==null and $_SESSION['rolesession']==null){
header('location: index1.php');
$inactive = 60;
$session_life = time() - $_SESSION['timeout'];
if($session_life < $inactive)
{ 
session_destroy(); 
header("location: index1.php"); 
}
$_SESSION['timeout']=time();
}
?>
<HTML>
 <HEAD>
  <?php
include('../headers/title.html');
?>
  <meta name="generator" content="Bluefish 1.0.7">
  <meta name="author" content="jberchmas">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">

<style type="text/css">
a{display:block;color:black;}
a:link {text-decoration:none;}    /* unvisited link */
a:visited {text-decoration:none;} /* visited link */
a:hover {background:#E8E8E8;}     /* mouse over link */
a:active {background:#E8E8E8;}    /* selected link */
</style>
	<link rel="shortcut icon" href="favicon.ico">  
        <link type="text/css" href="ui.theme.css" rel="stylesheet" />
        <script type="text/javascript" src="jquery-1.3.2.js"></script>
        <script type="text/javascript" src="ui.core.js"></script>
        <script type="text/javascript" src="ui.datepicker.js"></script>
<script type="text/javascript">
$(function() {
       $('#datepicker').datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat:'yy-mm-dd'
        });
        $('#datepickerFrom').datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat:'yy-mm-dd'
        });
	$('#datepickerTo').datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat:'yy-mm-dd'
        });
});

</script>
<!-- jquery style -->

<style type="text/css">
    .alt { background-color: #CCCC99; }
    .hover { background-color: white; }
    .althover { background-color: white; } 
	.jqueryclass {border:1px solid black;border-collapse:collapse;}
</style>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.jqueryclass tr:even').addClass('alt');
	$('.jqueryclass tr:even').hover(
			function(){$(this).addClass('hover')},
			function(){$(this).removeClass('hover')}
	);	
	$('.jqueryclass tr:odd').hover(
			function(){$(this).addClass('althover')},
			function(){$(this).removeClass('althover')}
	);
	$('.jqueryclass tr').click(
			function(){$(this).addClass('althover')}
	);
});
</script>

<!-- end jquery style -->
 </HEAD>

 <!-- <BODY bgcolor=#C0C0C0> -->
  <BODY bgcolor=#D0D0D0>
  <table width="100%">
<tr bgcolor=#C0C0C0>
<td><table>
<tr>
<td><img src="images/logo/pihHands4.gif" width="113" height="100" border="0" alt=""></td>
<td><b>PARTNERS IN HEALTH/INSHUTI MU BUZIMA <BR><BR>DEPARTMENT OF HUMAN RESOURCES</b> </td>
</tr>
</table><div align="right"><small>You are loged as <b> <?php echo $_SESSION['namesession']; ?></b><br>	 Department of &nbsp;&nbsp;&nbsp;<B><?php  echo $_SESSION['branchsession']; ?></div></small></td>
</tr>
</table>
<table width="100%" class="menu">
<tr bgcolor=#C0C0C0>
<TD><A HREF="leaverequest.php"><FONT SIZE="4" COLOR="#0000CC"><small><CENTER>Leave request(s)</CENTER></small></FONT></A></TD><!--<TD><A HREF="ticketedit.php"><FONT SIZE="4" COLOR="#0000CC"><small><CENTER>Edit ticket</a></CENTER></small></FONT></A></TD>--><td><a href="leavereport.php"><FONT SIZE="4" COLOR="#0000CC"><small><CENTER>Leave report</CENTER></small></FONT></a></td><td><a href="login/logout.php"><FONT SIZE="4" COLOR="#0000CC"><small><CENTER>Logout</CENTER></small></FONT></a></td>
</tr>
</table>

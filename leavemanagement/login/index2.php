<?php
session_start();
?>
<HTML>
<HEAD>
<?php
include('../headers/title.html');
?>
<style type="text/css">
a{display:block;color:black;}
a:link {text-decoration:none;}    /* unvisited link */
a:visited {text-decoration:none;} /* visited link */
a:hover {background:#E8E8E8;}     /* mouse over link */
a:active {background:#E8E8E8;}    /* selected link */
</style>
</HEAD>
 
<script>
alert("Invalid username or password");
</script>

 <!-- <BODY bgcolor=#C0C0C0> -->
  <BODY bgcolor=#D0D0D0><center>
 <!-- <div align=right><h6><font color=#FF0000><?php $msg=$_SESSION['invalid']; print("$msg"); ?></font></h6></div> -->
<div align="right"> <FORM METHOD=POST ACTION="login.php">Username:<INPUT TYPE="text" SIZE="17" NAME="userrole" STYLE="width:5em;">Password:<INPUT TYPE="password" SIZE="17" NAME="userpsw" STYLE="width:5em;"><INPUT TYPE="submit" NAME="sublogin" value="Login" STYLE="width:4em;"></FORM></div>
 
 <BR><BR><BR><BR><BR><BR>
<img src="../images/logo/pihHands4.gif" width="265" height="267" border="0" alt="">
<h6>Welcome to</h6><h6>IMB Leave Management System</h6><BR><BR><BR>    
  <!-- Menu -->

<!-- Content area -->

	
 </BODY>
 
 </HTML>

</HTML>

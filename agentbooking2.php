<?php session_start(); ?>
<?php include("headfile.php"); ?>
<?php include("connfile.php"); ?>
<?php
//String t2="";
$t1=$_SESSION["bno1var"];
$t2=$_SESSION["price1var"];
//int bvar =Integer.parseInt( t1);
//int pvar= Integer.parseInt(t2);
?>

  <html>
      <BR>
<A href="index.php">Log Out</a>       
<BR>
        <table border="1" align ="center" width="60%" cellpadding="10" cellspacing="10"> 
        
        <tr> <td height="20" colspan="2"> <img style="-webkit-user-select: none" src="images/pic2.bmp"> </td> </tr>  
        <tr> <td height="40"> Docket No </td> <Td><?php echo $t1; ?> </td> </tr>
        <tr> <td height="40"> Total Charges </td><Td><?php echo $t2; ?> </td> </tr>
        <tr> <td height="40" colspan="2"> <A href="agentmainpage.php">Back</a> </td> </tr>
             </table>
  </html>

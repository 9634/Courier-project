<?php session_start(); ?>
<?php include("headfile.php"); ?>
<?php include("connfile.php"); ?>
<BR>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$t1=addslashes($_POST['text1']); 
$t2=addslashes($_POST['text2']); 

$result = $conn->query("select * from AgentTab where uName= '$t1' and pWord='$t2'");
if($row = $result->fetch_row())
{
$_SESSION["agentcodevar"]= $t1 ;
header("location: agentmainpage.php");

$_SESSION['s1var']= "Record Saved Successfully";
}
else
{
$_SESSION['s1var']= "Please enter all the fields";
}
}

?>

<table border="0"> 
<tr><td height ="100" width="25%"></td><td>

        <form method="POST"    action="agentlogin.php">
    <table border="0"> 
    <tr> <td height="20" colspan="2"> <A href="adminlogin.php"><img style="-webkit-user-select: none" src="images/agentlogin3.bmp"></a> </td> </tr>    
    <tr> <td height="60" colspan="2"> </td> </tr> 
    <tr> <td height="40"><h3> User Name </h3> </td> <td> <input type="text" name="text1" value=""></td> </tr>
    <tr> <td height="40"><h3> Password </h3></td> <td> <input type="password" name="text2" value=""></td> </tr>
    <tr> <td height="40">  </td> <td align="center"> <input type="submit" name="Login" ></td> </tr>       
    </table>
        </form>
</td><td width="25%"></td></tr>
</table>
<br><br><br><br><br><br><br><br><A href="index.php"><h1 style="font-family:algerian"> Home </h1></A>

<?php include("footerfile.php"); ?>

<?php session_start(); ?>
<?php include("headfile.php"); ?>
<?php include("connfile.php"); ?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$t1=addslashes($_POST['text1']); 
$p1=addslashes($_POST['pass1']); 
$p2=addslashes($_POST['pass2']); 
$t2=addslashes($_POST['text2']); 
$t3=addslashes($_POST['text3']); 
$t4=addslashes($_POST['text4']); 
$t5=addslashes($_POST['text5']); 
$t6=addslashes($_POST['text6']); 
$t7=addslashes($_POST['text7']); 

$a1=0;
$_SESSION['s1var']="";
$result = $conn->query("select * from AgentTab where uName= '$t1'");

if($row = $result->fetch_row())
{
$_SESSION['s1var']= "This user name is all ready selected please choose another one";
$a1=1;
}

if($a1==0){
$result = $conn->query("insert into AgentTab value('$t1','$p1','$t2','$t3','$t4','$t5','$t6','$t8')");
if($result)
{
$_SESSION['s1var']= "Record Saved Successfully";
header("location: agentsignupres.php");
}
else
{
$_SESSION['s1var']= "Please enter all the fields";
}
}
}
?>
<table border="0"> 
<tr><td height ="100" width="25%"></td><td>

<form method="POST"    action="agentsignup.php">
<table border="0"> 
<tr> <td height="20" colspan="2"> <img style="-webkit-user-select: none" src="images/agentsignup3.bmp"> </td> </tr>    
<tr> <td height="5" colspan="2"> </td> </tr> 
<tr> <td height="40"> User Name </td> <td> <input type="text" name="text1" value=""></td> </tr>
<tr> <td height="40"> Password </td> <td> <input type="password" name="pass1" value=""></td> </tr>
<tr> <td height="40"> Retype Password </td> <td> <input type="password" name="pass2" value=""></td> </tr>
<tr> <td height="40"> Agent Name </td> <td> <input type="text" name="text2" value=""></td> </tr>
<tr> <td height="40"> Address </td> <td> <input type="text" name="text3" value=""></td> </tr>


<tr> <td height="40"> City Name </td> <td> 

<?php 
$result = $conn->query("select cityName from CityTab order by cityname");
echo("<select  name=text4 size=1>");
while($row = $result->fetch_row())
{
echo("<option>" . $row[0]. " </option>");
}
echo("</select>");

?>  
</td> </tr>    

<tr> <td height="40"> State Name </td> <td> 

<?php 
$result = $conn->query("select * from StateTab order by Statename");
echo("<select  name=text5 size=1>");
while($row = $result->fetch_row())
{
echo("<option>" . $row[0]. " </option>");
}
echo("</select>");
?>  
</td> </tr>    

<tr> <td height="40"> Mobile No </td> <td> <input type="text" name="text6" value=""></td> </tr>
<tr> <td height="40"> eMail Id </td> <td> <input type="text" name="text7" value=""></td> </tr>
<tr> <td height="40">  </td> <td align="center"> <input type="submit" value="&nbsp; &nbsp; &nbsp;   Submit &nbsp; &nbsp; &nbsp;" ></td> </tr>       
</table>
</form>
</td><td width="25%"></td></tr>
</table>
<h1 style="font-family:algerian"><A href="index.php">Home</a></h1> 
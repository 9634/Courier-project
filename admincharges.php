<?php
session_start();
?>
<?php include("headfile.php"); ?>
<?php include("connfile.php"); ?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{

$t1=addslashes($_POST['text1']); 
$t2=addslashes($_POST['text2']); 
$t3=addslashes($_POST['text3']); 
$t4=addslashes($_POST['text4']); 
$_SESSION['s1var']="0";

$result = $conn->query("insert into ChargeTab value('$t1','$t2','$t3',$t4)");
if($result)
{
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

    <form method="POST"    action="admincharges.php">
    <table border="0"> 
    <tr> <td height="20" colspan="2"> <img style="-webkit-user-select: none" src="images/charge.bmp"> </td> </tr>    
    <tr> <td height="20" colspan="2"> </td> </tr> 
    <tr> <td height="20"><h3> Courier Type</h3> </td> <td> 
        <?php 
                $result = $conn->query("select couriertypename from couriertypeTab order by couriertypename");
		echo("<select  name=text1 size=1>");
                while($row = $result->fetch_row())
                {
                echo("<option>" . $row[0]. " </option>");
                }
                echo("</select>");
?> 
        </td> </tr>
    <tr> <td height="20"><h3> From City </h3></td> <td> 
        <?php 
                $result = $conn->query("select cityName from CityTab order by cityName");
		echo("<select  name=text2 size=1 width=2000>");
                while($row = $result->fetch_row())
                {
                echo("<option>" . $row[0]. " </option>");
                }
                echo("</select>");
?>  
        </td> </tr>
    <tr> <td height="20"><h3> To City </h3></td> <td> 
             
<?php 
                $result = $conn->query("select cityName from CityTab order by cityName");
		echo("<select  name=text3 size=1>");
                while($row = $result->fetch_row())
                {
                echo("<option>" . $row[0]. " </option>");
                }
                echo("</select>");
?>  
     </td> </tr>    
    
      <tr> <td height="40"><h3> Price </h3></td> <td> <input type="text" name="text4" value=""></td> </tr>
    <tr> <td height="40">  </td> <td align="left"> <input type="submit" name="Save" ></td> </tr>       
    <tr> <td height="60" colspan="2"> </td> </tr> 
    <tr> <td height="20" colspan="2"><?php echo $_SESSION['s1var']; ?> </td> </tr> 
    </table>
        </form>
</td><td width="25%"></td></tr>
</table>
<A href="adminmainpage1.php"><h1 style="font-family:algerian"> Admin Main </h1></A>
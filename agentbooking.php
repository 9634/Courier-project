<?php session_start(); ?>
<?php include("headfile.php"); ?>
<?php include("connfile.php"); ?>
<BR> 
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$t1=addslashes($_POST['text1']); 
$t2=addslashes($_POST['text2']); 
$t3=addslashes($_POST['text3']); 
$t4=addslashes($_POST['text4']); 
$t5=addslashes($_POST['text5']); 
$t6=addslashes($_POST['text6']); 
$t7=addslashes($_POST['text7']); 
$t8=addslashes($_POST['text8']); 
$t9=addslashes($_POST['text9']); 
$_SESSION['s1var']="";


$cvar="";
$cvar = $_SESSION["agentcodevar"];
$d1=date("Y/m/d");

$i1=1000;
$b1var="";
$result = $conn->query("select (max(bookno) + 1) as mNo from BookingTab");
if($row = $result->fetch_row())
{if(!is_null($row[0]))
$i1= $row[0];
$b1var=$row[0];
}
$pricevar=0;
$result = $conn->query("select cPrice from Chargetab where CourierTypeName='$t1' and fPlace='$t2'  and tPlace='$t3'");
if($row = $result->fetch_row())
{
    $pricevar=$row[0];
        $price1var=$row[0];
}

echo "insert into bookingTab values($i1,'$d1','$t1','$t2','$t3',$pricevar,'$t4','$t5','$t6','$t7','$t8','$t9','$t9','$cvar','Booked')";
$result = $conn->query("insert into bookingTab values($i1,'$d1','$t1','$t2','$t3',$pricevar,'$t4','$t5','$t6','$t7','$t8','$t9','$t9','$cvar','Booked')");
if($result)
{
$_SESSION['s1var']= "Record Saved Successfully";
$_SESSION["price1var"]=$price1var;
$_SESSION["bno1var"]=$b1var;
header("location: agentbooking2.php?bno=".$b1var);
}
else {
$_SESSION['s1var']= "Please enter all the fields";
}
}
?>
<table border="0"> 
<tr><td height ="100" width="25%"></td><td>

    <form method="POST"    action="agentbooking.php">
    <table border="0"> 
    <tr> <td height="10" colspan="2"> <img style="-webkit-user-select: none" src="images/book.bmp"> </td> </tr>    
    <tr> <td height="2" colspan="2"> </td> </tr> 
    
    <tr> <td height="20"> Courier Type </td> <td> 
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
    <tr> <td height="20"> From City </td> <td> 
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
    <tr> <td height="20"> To City </td> <td> 
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
    
    
    <tr> <td height="20"> From CustName </td> <td> <input type="text" name="text4" value=""></td> </tr>
    <tr> <td height="20"> Address </td> <td> <Textarea  name="text5" rows="5"> </textarea></td> </tr>
    <tr> <td height="20"> Mobile No </td> <td> <input type="text" name="text6" value=""></td> </tr>

    <tr> <td height="60" colspan="2"> </td> </tr> 

    <tr> <td height="20"> To CustName </td> <td> <input type="text" name="text7" value=""></td> </tr>
    <tr> <td height="20"> Address </td> <td> <Textarea  name="text8" rows="5"> </textarea></td> </tr>
    <tr> <td height="20"> Mobile No </td> <td> <input type="text" name="text9" value=""></td> </tr>
    
    <tr> <td height="20">  </td> <td align="center"> <input type="submit" name="Save" ></td> </tr>       
    
     
    
    </table>
        </form>
</td><td width="25%"></td></tr>
</table>
<h1 style="font-family:algerian"><A href="agentmainpage.php">Agent Main</a></h1> 




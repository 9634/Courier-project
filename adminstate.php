<?php include("headfile.php"); ?>
<?php include("connfile.php"); ?>
<?php
session_start();
$_SESSION['s1var']= "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
		$t1=addslashes($_POST['text1']); 
		$t2=addslashes($_POST['text2']); 
                $a1=0;
                
                $result = $conn->query("select * from stateTab where stateName= '$t1'");
                if($row = $result->fetch_row())
                {
                $_SESSION['s1var']= "This record is all ready present please check";
                $a1=1;
                }
		
                if($a1!=1){
             
		$result = $conn->query("insert into StateTab value('$t1','$t2')");
                $_SESSION['s1var']= "Record Saved Successfully";
                               }
               
                	}

?>
<table border="0"> 
<tr><td height ="100" width="25%"></td><td>

    <form method="POST"    action="adminstate.php">
    <table border="0"> 
    <tr> <td height="20" colspan="2"> <img style="-webkit-user-select: none" src="images/statenames.bmp"> </td> </tr>    
    <tr> <td height="5" colspan="2"> </td> </tr> 
    <tr> <td height="40"> <h3>State Name</h3> </td> <td> <input type="text" name="text1" value=""></td> </tr>
    <tr> <td height="40"> <h3>Details</h3> </td> <td> <input type="text" name="text2" value=""></td> </tr>
    <tr> <td height="40">  </td> <td align="left"> <input type="submit" name="Save" ></td> </tr>       
    <tr> <td height="60" colspan="2"> </td> </tr> 
    <tr> <td height="20" colspan="2"><?php echo $_SESSION['s1var']?> </td> </tr> 
    </table>
        </form>
</td><td width="25%"></td></tr>
</table>
<br><br><br><br><br><br><br><A href="adminmainpage1.php"> <h1 style="font-family:algerian">Admin Main</h1> </A> 

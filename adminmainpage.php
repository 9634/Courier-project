<?php include("headfile.php"); ?>
<?php include("connfile.php"); ?>
<?php
echo "heel";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
		$t1=($_POST['text1']); 
		$t2=($_POST['text2']); 
		
		$result = $conn->query("select * from AdminloginTab where uName= '$t1' and pWord='$t2'");
		
                if($row = $result->fetch_row())
                {//echo("Login Successful");
                header("location: adminmainpage1.php");
                 }
                
                
                else
                {echo("User Name or Password is not correct");
                }
}
?>


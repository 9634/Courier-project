<?php include("headfile.php"); ?>
<?php include("connfile.php"); ?>
<BR>
 <table border="0"> 
<tr><td height ="100" width="25%"></td><td>
<table border="1" cellpadding="5" cellspacing="5"> 
    <tr> <td height="20" colspan="14"> <img style="-webkit-user-select: none" src="images/booklist.bmp"> </td> </tr>   
<?php 
                $result = $conn->query("select * from BookingTab order by bookNo desc");
		
                while($row = $result->fetch_row())
                {
                echo("<tr> <td height=20>".$row[0]. " </td> <td height=20>".$row[1]. " </td> <td> " . $row[2]. "</td><td> " .$row[3]. "</td><td> " . $row[4]. "</td><td> "  .$row[5]. "</td><td> " . $row[6]. "</td></tr>" );
                }
                
?>  
    </table>

</td><td width="25%"></td></tr>
</table>

<br><br><br><br><br><br><br><br><br><br><h1 style="font-family:algerian"><A href="agentmainpage.php">Agent Main</a></h1> 
<?php include("headfile.php"); ?>
<?php include("connfile.php"); ?>
<table border="0"> 
<tr><td height ="100" width="25%"></td><td>
<table border="1" cellpadding="5" cellspacing="5"> 
    <tr> <td height="20" colspan="2"> <img style="-webkit-user-select: none" src="images/statenames.bmp"> </td> </tr>   
<?php 
                $result = $conn->query("select * from StateTab order by statename");
		
                while($row = $result->fetch_row())
                {
                echo("<tr> <td height=20>".$row[0]. " </td> <td> " . $row[1]. "</td></tr>" );
                }
                
?>  
    </table>

</td><td width="25%"></td></tr>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><A href="adminmainpage1.php"><h1 style="font-family:algerian"> Admin Main </h1></A>



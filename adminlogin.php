<?php include("headfile.php"); ?>
<table border="0"> 
<tr><td height ="100" width="25%"></td><td>

        <form method="POST"    action="adminmainpage.php">
    <table border="0"> 
    <tr> <td height="20" colspan="2"> <A href="adminlogin.php"><img style="-webkit-user-select: none" src="images/adminlogin3.bmp"></a> </td> </tr>    
    <tr> <td height="60" colspan="2"> </td> </tr> 
    <tr> <td height="40"><h3> User Name </h3> </td> <td> <input type="text" name="text1" value=""></td> </tr>
    <tr> <td height="40"><h3> Password </h3> </td> <td> <input type="password" name="text2" value=""></td> </tr>
    <tr> <td height="40">  </td> <td align="left"> <input type="submit" name="Login" ></td> </tr>       
    </table> 
        </form>
</td><td width="25%"></td></tr>
</table>

<?php include("footerfile.php"); ?>
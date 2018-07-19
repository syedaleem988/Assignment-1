<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body >
	<table width="100%" height="100%" >
	  <tr width="200" height="100" >
	     <td ><?php include 'header.php'; ?>  </td>
	  </tr>
	  <tr height="300">
	     <td width = "220" >
	     <?php include 'nav.php'; ?>
	     </td>
	     <td width="100%" height="100%"  align="left" valign="top">
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}
$emp_id = $_GET["emp_name"];
$emp_id = stripslashes($emp_id);
$emp_id = mysql_real_escape_string($emp_id);
$sql = "DELETE FROM admin_db.emp WHERE emp. name =  $name";
//echo $sql;
$res= mysql_query($sql )
?>
        <div >
        <font size ="5"><?php echo "Employee Record Deleted....";?></font><br>
        </div>

        </td>    
	   </tr>
	       </table>	  
	</body>
</html>

<?php require_once('Connections/treephet.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_treephet, $treephet);
$query_s = "SELECT * FROM treephet_system";
$s = mysql_query($query_s, $treephet) or die(mysql_error());
$row_s = mysql_fetch_assoc($s);
$totalRows_s = mysql_num_rows($s);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
 <title>Treephet System</title>
    <style>
      body {
    font-family: 'Sarabun', sans-serif;
    background: linear-gradient(135deg, #f8c291 0%, #f6b93b 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f1f1f1;
}

td {
    border-top: none;
}

thead th {
    border-bottom: 2px solid #ddd;
}

/* Responsive Styles */
@media (max-width: 1024px) {
    table {
        font-size: 14px;
    }
    th, td {
        padding: 10px;
    }
}

@media (max-width: 768px) {
    table {
        font-size: 12px;
    }
    th, td {
        padding: 8px;
    }
}

@media (max-width: 480px) {
    table {
        font-size: 10px;
    }
    th, td {
        padding: 6px;
    }
}
</style>
   
<body>
<h1>
<div align="center">
  <p>ตารางผู้พัฒนา</p>
  <form id="form1" name="form1" method="post" action="search.php">
    <label for="search">ค้นหา :</label>
    <input type="text" name="search" id="search" />
    <input type="submit" name="btnSearch" id="btnSearch" value="Submit" />
  </form>
  <p>&nbsp;</p>
  <h1>
</div>
<div align="center">
  <table width="90%" border="1">
    <tr>
      <td width="88">id</td>
      <td width="173">username</td>
      <td width="171">password</td>
      <td width="170">nickname</td>
      <td width="126">email</td>
      <td width="133">phone</td>
      <td width="105">sex</td>
      <td width="118">age</td>
      <td width="118">&nbsp;</td>
      <td width="118">&nbsp;</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><div align="center"><?php echo $row_s['id']; ?></div></td>
        <td><div align="center"><?php echo $row_s['username']; ?></div></td>
        <td><div align="center"><?php echo $row_s['password']; ?></div></td>
        <td><div align="center"><?php echo $row_s['nickname']; ?></div></td>
        <td><div align="center"><?php echo $row_s['email']; ?></div></td>
        <td><div align="center"><?php echo $row_s['phone']; ?></div></td>
        <td><div align="center"><?php echo $row_s['sex']; ?></div></td>
        <td><div align="center"><?php echo $row_s['age']; ?></div></td>
        <td><a href="updete.php?id=<?php echo $row_s['id']; ?>">edit</a></td>
        <td><a href="delete.php?id=<?php echo $row_s['id']; ?>">delete</a></td>
      </tr>
      <?php } while ($row_s = mysql_fetch_assoc($s)); ?>
  </table>
  <h3><a href="add.php">เพิ่มข้อมูล </a></h3>
</div>
</body>
</html>
<?php
mysql_free_result($s);
?>

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

$colname_search = "-1";
if (isset($_POST['search'])) {
  $colname_search = $_POST['search'];
}
mysql_select_db($database_treephet, $treephet);
$query_search = sprintf("SELECT * FROM treephet_system WHERE username LIKE %s", GetSQLValueString("%" . $colname_search . "%", "text"));
$search = mysql_query($query_search, $treephet) or die(mysql_error());
$row_search = mysql_fetch_assoc($search);
$totalRows_search = mysql_num_rows($search);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<title>User Table</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #ddd;
    }
    h1 {
        text-align: center;
        color: #333;
    }
</style>
<body>
<table border="1">
  <tr>
    <td>id</td>
    <td>username</td>
    <td>password</td>
    <td>nickname</td>
    <td>email</td>
    <td>phone</td>
    <td>sex</td>
    <td>age</td>
    <td>admin</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_search['id']; ?></td>
      <td><?php echo $row_search['username']; ?></td>
      <td><?php echo $row_search['password']; ?></td>
      <td><?php echo $row_search['nickname']; ?></td>
      <td><?php echo $row_search['email']; ?></td>
      <td><?php echo $row_search['phone']; ?></td>
      <td><?php echo $row_search['sex']; ?></td>
      <td><?php echo $row_search['age']; ?></td>
      <td><?php echo $row_search['admin']; ?></td>
    </tr>
    <?php } while ($row_search = mysql_fetch_assoc($search)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($search);
?>

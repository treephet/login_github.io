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
        border-collapse: separate;
        border-spacing: 0;
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
</style>
   
<body>
<div align="center">
  <table border="1">
    <tr>
      <td width="87">id</td>
     
      <td width="170">nickname</td>
      <td width="126">email</td>
     
      <td width="105">sex</td>
      <td width="113">age</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><div align="center"><?php echo $row_s['id']; ?></div></td>
        
        
        <td><div align="center"><?php echo $row_s['nickname']; ?></div></td>
        <td><div align="center"><?php echo $row_s['email']; ?></div></td>
       
        <td><div align="center"><?php echo $row_s['sex']; ?></div></td>
        <td><div align="center"><?php echo $row_s['age']; ?></div></td>
      </tr>
      <?php } while ($row_s = mysql_fetch_assoc($s)); ?>
  </table>
</div>
</body>
</html>
<?php
mysql_free_result($s);
?>

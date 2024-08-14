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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE treephet_system SET username=%s, password=%s, nickname=%s, email=%s, phone=%s, sex=%s, age=%s, `admin`=%s WHERE id=%s",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['nickname'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['phone'], "text"),
                       GetSQLValueString($_POST['sex'], "text"),
                       GetSQLValueString($_POST['age'], "text"),
                       GetSQLValueString($_POST['admin'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_treephet, $treephet);
  $Result1 = mysql_query($updateSQL, $treephet) or die(mysql_error());

  $updateGoTo = "admin.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_Recordset1 = "-1";
if (isset($_GET['id'])) {
  $colname_Recordset1 = $_GET['id'];
}
mysql_select_db($database_treephet, $treephet);
$query_Recordset1 = sprintf("SELECT * FROM treephet_system WHERE id = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $treephet) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
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
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 8px;
            vertical-align: top;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        label {
            display: block;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($editFormAction); ?>" method="post" name="form1" id="form1">
            <table>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username" value="<?php echo htmlspecialchars($row_Recordset1['username']); ?>" /></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="text" id="password" name="password" value="<?php echo htmlspecialchars($row_Recordset1['password']); ?>" /></td>
                </tr>
                <tr>
                    <td><label for="nickname">Nickname:</label></td>
                    <td><input type="text" id="nickname" name="nickname" value="<?php echo htmlspecialchars($row_Recordset1['nickname']); ?>" /></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="text" id="email" name="email" value="<?php echo htmlspecialchars($row_Recordset1['email']); ?>" /></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone:</label></td>
                    <td><input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($row_Recordset1['phone']); ?>" /></td>
                </tr>
                <tr>
                    <td><label for="sex">Sex:</label></td>
                    <td><input type="text" id="sex" name="sex" value="<?php echo htmlspecialchars($row_Recordset1['sex']); ?>" /></td>
                </tr>
                <tr>
                    <td><label for="age">Age:</label></td>
                    <td><input type="text" id="age" name="age" value="<?php echo htmlspecialchars($row_Recordset1['age']); ?>" /></td>
                </tr>
                <tr>
                    <td><label for="admin">Admin:</label></td>
                    <td><input type="text" id="admin" name="admin" value="<?php echo htmlspecialchars($row_Recordset1['admin']); ?>" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update record" /></td>
                </tr>
            </table>
            <input type="hidden" name="MM_update" value="form1" />
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row_Recordset1['id']); ?>" />
      </form>
    </div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>

<?
session_start();
include "../dbconn.php";

$sql="select * from $_GET[table] where num=$_GET[num]";
$result=mysql_query($sql, $connect);
$row=mysql_fetch_array($result);

$copied_name[0]=$row[file_copied_0];
$copied_name[1]=$row[file_copied_1];
$copied_name[2]=$row[file_copied_2];

for($i=0; $i<3; $i++)
{
	if($copied_name[$i]){
		$image_name="./data/".$copied_name[$i];
		unlink($image_name);
		}
	}

$sql="delete from $_GET[table] where num=$_GET[num]";
mysql_query($sql, $connect);

mysql_close();

echo("
<script>
	location.href='../concert/list_img.php?table=$_GET[table]';
</script>
");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
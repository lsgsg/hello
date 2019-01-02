<?
	session_start();
?>
<meta charset="utf-8">
<?
	$id=$_POST['id'];
	$pass=$_POST['pass'];
	$name=$_POST['name'];
	$nick=$_POST['nick'];
	$hp=$_POST['hp1']."-".$_POST['hp2']."-".$_POST['hp3'];
	$email=$_POST['email1']."@".$_POST['email2'];
	
	$regist_day=date("Y-m-d (H:i)");
	
	include "dbconn.php";
	
	$sql="update member set pass='$pass',name='$name',nick='$nick',hp='$hp',email='$email',regist_day='$regist_day' where id='$_SESSION[userid]'";
	
	mysql_query($sql,$connect);
	mysql_close();
	echo ("
	<script>
	alert('로그아웃 후 확인해주세요');
	location.href='index.php';
	</script>
	");
?>
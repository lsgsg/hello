<meta charset="utf-8">
<?
	$id=$_POST['id'];
	$pass=$_POST['pass'];


	$regist_day=date("Y-m-d (H:i)");
	$ip=$REMOTE_ADDR;
	
	include "dbconn.php";
	$sql="select * from member where id='$id'";
	$result=mysql_query($sql,$connect);
	$exit_id=mysql_num_rows($result);
	
	if($exist_id){
		echo("
		<script>
		window.alert('해당 아이디가 존재합니다.');
		history.go(-1);
		</script>
		");
		exit;	
	}else{
		
		$id=$_POST['id'];
		$pass=$_POST['pass'];
		$name=$_POST['name'];
		$nick=$_POST['nick'];
		$hp=$_POST['hp1']."-".$_POST['hp2']."-".$_POST['hp3'];
		$email=$_POST['email1']."@".$_POST['email2'];
		
		$sql="insert into member (id,pass,name,nick,hp,email,regist_day,level)";
		$sql.="values ('$id','$pass','$name','$nick','$hp','$email','$regist_day',9)";
		mysql_query($sql,$connect);	
	}
	mysql_close();
	echo("
	<script>
	location.href='index.php';
	</script>
	");

?>
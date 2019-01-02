<?
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?
$id=$_POST['id'];
$pass=$_POST['pass'];

//데이터베이스 연결
	include "dbconn.php";
	
	$sql="select * from member where id='$id'";
	$result=mysql_query($sql,$connect);
	$num_match=mysql_num_rows($result);
	
	if(!$num_match){
		echo ("
		<script>
		window.alert('등록되지 않은 아이디입니다.');
		history.go(-1);
		</script>
		");	
		
	}else{
		
		$row=mysql_fetch_array($result);
		$db_pass=$row[pass];
		
		if($pass != $db_pass){
			echo("
			<script>
			window.alert('비밀번호가 틀립니다');
			history.go(-1);
			</script>
			");
			
			exit;
				
		}else{
			$userid=$row[id];
			$userpass=$row[pass];
			$username=$row[name];
			$usernick=$row[nick];
			$userlevel=$row[level];
			
			$hp=explode("-",$row[hp]);
			$hp1=$hp[0];
			$hp2=$hp[1];
			$hp3=$hp[2];
			
			$email=explode("@",$row[email]);
			$email1=$email[0];
			$email2=$email[1];
	
			$_SESSION['userid']=$userid;
			$_SESSION['userpass']=$userpass;
			$_SESSION['username']=$username;
			$_SESSION['usernick']=$usernick;
			$_SESSION['hp1']=$hp1;
			$_SESSION['hp2']=$hp2;
			$_SESSION['hp3']=$hp3;
			
			$_SESSION['email1']=$email1;
			$_SESSION['email2']=$email2;
			
			$_SESSION['userlevel']=$userlevel;
			
			echo ("
			<script>
			location.href='index.php';
			</script>
			");
		}
	}
?>
<title>당신의 헬로키친 로그인</title>
</head>

<body>
</body>
</html>
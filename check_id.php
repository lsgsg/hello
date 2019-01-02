<meta charset="utf-8">
<style>
body { font-size:12px; }
a { text-decoration:none; color:#06F; border:1px solid #06f; padding:5px 10px; border-radius:10px; margin:5px auto; }
</style>
<?
	$id=$_GET['id'];
	//아이디 입력폼이 비어있으면
	if(!$id){
		echo("아이디를 입력하세요.<br><br>");	
		echo("<a href='#' onClick='closefn()'>닫기</a>");
	}else{
		//데이스베이스 연결
		include "dbconn.php";
		$sql="select * from member where id='$id'";
		$result=mysql_query($sql,$connect);
		$num_record=mysql_num_rows($result);
		//만약 $num_record결과값이 있다면
		if($num_record){
			echo "아이디가 중복됩니다.<br>";
			echo "다른 아이디를 사용하세요.<br>";	
		}else{
			echo "사용가능한 아이디입니다.";	
		}
		mysql_close();
			
	}
?>
<script>
function closefn(){
	window.close();	
}
</script>
<?
//die함수는 에러가 발생하였을 때 해당 스크립트를 종료시키고 에러메시지 출력
	$connect=mysql_connect('localhost','ny45312','sjandlqj070') or die("SQL server에 연결할 수 없습니다.");
	mysql_select_db("ny45312",$connect);
	
	mysql_query("set session character_set_connection=utf8;");
	mysql_query("set session character_set_results=utf8;");
	mysql_query("set session character_set_client=utf8;");
?>
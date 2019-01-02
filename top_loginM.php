<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>헬로키친 모바일 로그인</title>
<style>

.atag2 {
	background:rgba(255,255,255,0.3);
  text-align:center;
  text-decoration:none;
  float:right;
  outline: none;

 
  display: block;
  width:auto;
  height:auto;
  padding:0.15rem 0.5rem;
  margin-left:0.3rem;
  cursor: pointer;
  font-size: 0.75rem;
  color:#9ccd62;
  position: relative;
  z-index:99;
  border: 1.4px solid rgba(156,205,98,1);

}




</style>
</head>

<body>
<div id="top_login2">

	<?
	//만약 userid변수의 값이 true가 아니라면
	// ! : ~가 아니면(not) 논리연산자
	if(!$_SESSION[userid]){
	?>
    <a href="../login_form.php" class="atag2">로그인</a>
    <a href="../member_form.php" class="atag2">회원가입</a> 
    <?
    }else{
    ?>
    <a href="#" class="atag2"><?=$_SESSION['usernick']?></a> 
    <a href="../logout.php" class="atag2">로그아웃</a> 
    <a href="../member_form_modify.php" class="atag2">정보수정</a>   
    
    <?
    }
	?>
</div>
</body>
</html>
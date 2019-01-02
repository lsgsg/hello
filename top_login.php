<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>헬로키친 탑로그인</title>
<style>

.atag {
	background:rgba(255,255,255,0.3);
  text-align:center;
  text-decoration:none;
  float:right;
  outline: none;

 
  display: block;
  width:auto;
  height:auto;
  padding:0.3vh 0.6vh;
  margin-left:5px;
  cursor: pointer;
  font-size: 0.8vw;

  position: relative;
  border: 1.4px solid rgba(255,255,255,0.5);
  transition: all 0.5s ease;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
}
.atag {
  color: rgba(255,255,255,0.5);
}

.atag:hover {
  border-color: #9ccd62;
  color: #9ccd62;
  animation: shakeThatBooty 0.3s linear 1;
  -webkit-animation: shakeThatBooty 0.3s linear 1;
  -moz-animation: shakeThatBooty 0.3s linear 1;
  -o-animation: shakeThatBooty 0.3s linear 1;
  -ms-animation: shakeThatBooty 0.3s linear 1;
}

@keyframes shakeThatBooty {
  33% {
    transform: rotateZ(10deg);
    -webkit-transform: rotateZ(10deg);
    -moz-transform: rotateZ(10deg);
    -o-transform: rotateZ(10deg);
    -ms-transform: rotateZ(10deg);
  }
  67% {
    transform: rotateZ(-10deg);
    -webkit-transform: rotateZ(-10deg);
    -moz-transform: rotateZ(-10deg);
    -o-transform: rotateZ(-10deg);
    -ms-transform: rotateZ(-10deg);
  }
  100% {
    transform: rotateZ(10deg);
    -webkit-transform: rotateZ(10deg);
    -moz-transform: rotateZ(10deg);
    -o-transform: rotateZ(10deg);
    -ms-transform: rotateZ(10deg);
  }
}
</style>
</head>

<body>
<div id="top_login">

	<?
	//만약 userid변수의 값이 true가 아니라면
	// ! : ~가 아니면(not) 논리연산자
	if(!$_SESSION[userid]){
	?>
    <a href="../login_form.php" class="atag">로그인</a>
    <a href="../member_form.php" class="atag">회원가입</a> 
    <?
    }else{
    ?>
    <a href="#" class="atag"><?=$_SESSION['usernick']?> (level:<?=$_SESSION['userlevel']?>)</a> 
    <a href="../logout.php" class="atag">로그아웃</a> 
    <a href="../member_form_modify.php" class="atag">정보수정</a>   
    
    <?
    }
	?>
</div>
</body>
</html>
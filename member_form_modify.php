<?
	session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>헬로키친 정보수정</title>
<style>
*{margin:0; padding:0;}
li{list-style:none;}
a{text-decoration: none; color:#333;}
img{width:100%; height:100%;}
@import url('https://fonts.googleapis.com/css?family=Raleway');
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
html, body{font-family: "Nanum Gothic", sans-serif; height:100%; width:100%; overflow-x:hidden}
body{
	background-color:#333;
	/*display:flex;*/
	/*flex-direction:column;
		justify-content:center;
	align-items:center;*/
	background:url(img/loginbg.png) no-repeat;
	background-size:cover;
	
}
#logo{width:15vh; position:fixed; top:3.4vh; left:5.8vw;z-index: 99}
#logo>a{width:100%; height:100%; display:block;}	
#signup{
	width:55vw ;
	max-height:80vh;  
	position:absolute; 
	left:50%; 
	margin-left:-29.5vw;
	 top:47.5%; 
	 margin-top:-30vh;
	 background-color: rgba(255,255,255,0.03);
	 box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.3);
	 border-radius:1vw 1vw 1vw 1vw;
	 padding:2.5vw;
	   }
#Sul{float:left;  width:55vw; margin:0 auto;position:relative;}
.Sull{color:#fff;}
#SulL{
	width:50%; 
	border-right:1px solid rgba(255,255,255,0.5);
	box-sizing:border-box;
	float:left;
	}
#SulR{
	width:50%;
	box-sizing:border-box;
	float:left;
	position:relative;
	}
input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

input{
	
	padding:5px 5px;
	margin:10px 0px;
	background-color:#e0dada;
	border:none;
	
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	}
p{color:#eee; font-size:1vw;}
span{color:#9ccd62;}
#SulR>ul>li{margin-left:2.5vw;}
select{width:5vw; height: 30px;padding:5px 5px;}
input.hp{width:5vw;}
input.email{width:8vw;}
#button{
	box-sizing:border-box;
	width:90%;
	margin:0 auto;
	}
.clear{width:100%; height:9vh;}


 button {
	 float:right; margin-right:1vh; padding:1vh 0.5vh;

  display: block;
  background-color: #9ccd62;
  border:none;
  color: #fff;
  font-weight: 300;
  
  border-radius: 3px;
 
  transition: all 0.3s ease-in-out;
}

button:hover {
  background-color: #ffffff;
  color: #9ccd62;
  border-color: #009ac9;
}
.userid{border:none; color:#eee; text-align:right; font-size:1.2vw;}
header{width:100vw; height:auto; position:fixed; top:3vh; right:4vh; z-index:99}
#footer { color:#eee; position:fixed; bottom:1vh; z-index:99; font-size:10px; width:100%; height:1.5vh; text-align:center; }
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
function check_id(){
	window.open("check_id.php?id="+document.member_form.id.value,"IDcheck","left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");	
}
function check_nick(){
	window.open("check_nick.php?nick="+document.member_form.nick.value,"NICKcheck","left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");	
}
function check_input(){
/*
	if(!document.member_form.id.value){
		alert("아이디를 입력하세요");
		document.member_form.id.focus();
		return;	
	}*/

	if(!document.member_form.pass.value){
		
		document.member_form.pass.focus();
		return;	
	}

	if(!document.member_form.pass_confirm.value){
		
		document.member_form.pass_confirm.focus();
		return;	
	}

	if(!document.member_form.name.value){
		
		document.member_form.name.focus();
		return;	
	}
	
	if(!document.member_form.nick.value){
		
		document.member_form.nick.focus();
		return;	
	}
	if(!document.member_form.hp2.value){
		
		document.member_form.hp2.focus();
		return;	
	}
	if(!document.member_form.hp3.value){
		
		document.member_form.hp3.focus();
		return;	
	}
	if(document.member_form.pass.value != document.member_form.pass_confirm.value){
		// \n : 줄바꿈
		alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요.");
		document.member_form.pass.focus();
		document.member_form.pass.select();
		return;	
	}
	document.member_form.submit();
	
}
function reset_form(){
	document.member_form.id.value="";
	document.member_form.pass.value="";
	document.member_form.pass_confirm.value="";	
	document.member_form.name.value="";
	document.member_form.nick.value="";
	document.member_form.hp1.value="010";
	document.member_form.hp2.value="";
	document.member_form.hp3.value="";
	document.member_form.email1.value="";
	document.member_form.email2.value="";
	document.member_form.id.focus();
	return;
}
$(document).ready(function(e) {
   $('#menu').click(function(){
		$('#menub').css({'display':'block'})
		})	
	$('#close').click(function(){
		$('#menub').css({'display':'none'})
		}); 
});
</script>
</head>

<body>
<?
	include "dbconn.php";
	
	$sql="select * from member where id='$_SESSION[userid]'";
	$result=mysql_query($sql, $connect);
	$row=mysql_fetch_array($result);
	
	$userid=$_SESSION['userid'];
	$userpass=$_SESSION['userpass'];
	$username=$_SESSION['username'];
	$usernick=$_SESSION['usernick'];
	$hp1=$_SESSION['hp1'];
	$hp2=$_SESSION['hp2'];
	$hp3=$_SESSION['hp3'];
	$email1=$_SESSION['email1'];
	$email2=$_SESSION['email2'];
	
	mysql_close();
?>
<header>
<? include "top_login.php";?>
</header>
<?
include "menu.php";
?>
<div id="logo">
    <a href="../index.php"><img src="../img/helloonlygul.png" alt="로고"></a>
    </div>
<div id="signup">
	<ul id="Sul">
    	<form name="member_form" method="post" action="modify.php">
    	<li id="SulL" class="Sull">
        	<ul>
            	<li>
                	<p><span>*</span>&nbsp;userID&nbsp;</p>
                	<input class="userid" value="<?=$userid?>" placeholder="UserID">
                </li>
                <li>
                	<p><span>*</span>&nbsp;password&nbsp;</p>
                    <input type="password" name="pass" value="<?=$userpass?>" required>
                </li>
                <li>
                	<p><span>*</span>&nbsp;confirm password&nbsp;</p>
                    <input type="password" name="pass_confirm" value="<?=$userpass?>" required>
                </li>
                <li>
                	<p><span>*</span>&nbsp;name&nbsp;</p>
                    <input type="text" name="name" value="<?=$username?>" required>
                </li>
                <li>
                	<p><span>*</span>&nbsp;nick name&nbsp;</p>
                    <input type="text" name="nick" value="<?=$usernick?>" required>
                </li>
                
            </ul>
        </li>
        <li id="SulR" class="Sull">
        	<ul>
            <li>
            	<p><span>*</span>&nbsp;phone number&nbsp;</p>
                <select class="hp" name="hp1" required>
                	<option value="010">010</option>
                    <option value="011">011</option>
                    <option value="016">016</option>
                    <option value="017">017</option>
                    <option value="018">018</option>
                    <option value="019">019</option>
                </select>
                - <input type="text" class="hp" name="hp2" value="<?=$hp2?>" required>
                - <input type="text" class="hp" name="hp3" value="<?=$hp3?>" required>
          </li>
          <li>
          		<p><span></span>&nbsp;e-mail&nbsp;</p>
                <input type="text" id="email1" class="email" name="email1" value="<?=$email1?>">
                @
                <input type="text" name="email2" class="email" value="<?=$email2?>">
          </li>
          <li class="clear"></li>
          <li class="clear"></li>
          <li class="clear"></li>
           <li id="button"> 
                <button type="submit" onClick="check_input()" value="수정하기" class="btn-1">수정하기</button>
                <button type="reset" onClick="reset_form()" value="다시작성"  class="btn-1">다시작성</button> 
           </li>
          </ul>
        </li>
        </form>
    </ul>
</div>
<div id="footer">
ⓒCoding by LSG, Design by LMS, All Right Reserved

</div>
</body>
</html>
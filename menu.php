<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>헬로키친 메뉴</title>
<style>
*{margin:0; padding:0;}
li{list-style:none;}
a{text-decoration: none; color:#333;}
img{width:100%; height:100%;border:0}
@import url('https://fonts.googleapis.com/css?family=Raleway');
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
html, body{font-family: "Nanum Gothic", sans-serif; height:100%; width:100%; overflow-x:hidden}

#menu{width:2.3vw; position:fixed; z-index:100;cursor:pointer; top:3vh; left:4vh;}
#menu>span{height:0.5vh; margin:0.6vh 0vh 0vh; background-color:#9ccd62; display:block; color:#9ccd62}
#menu>#s1{width:50%; transition:all 0.5s; position:relative; z-index:101}
#menu>#s2{width:75%;transition:all 0.5s; position:relative; z-index:102}
#menu>#s3{width:100%;transition:all 0.5s; position:relative; z-index:101}
#menu>#s4{background-color: transparent ; text-align:center; margin-top:0.4vh; font-weight:500; font-size:0.86vw; height:0.7vh !important}
#menu:hover>#s1{width:100%;}
#menu:hover>#s2{width:100%;}
#menu:hover>#s3{width:100%;}
#menub{
	width:100vw; 
	height:100vh; 
	background-color:rgba(0,0,0,0.8);
	 position:fixed; 
	 z-index:101; 
	 display:none;
	 top:0;
	 left:0;}	
#menub>ul{width:60vw; height:35vw; background-color:#fff;margin:15vh auto;position:relative; box-sizing:border-box;}
#menub>ul>#close{position:absolute;top:4.2vh; right:3vh; width:5vh; height:5vh; text-align:center; cursor:pointer;}
#menub>ul>li{float:left; margin-top:7%; box-sizing:border-box;}
#menub>ul>li:nth-child(2){width:50%; height:80%; border-right:0.2vh solid #9ccd62;}
#menub>ul>li:nth-child(3){width:50%;height:80%;}
#menub>ul>li:nth-child(2)>ul{width:100%; height:100%; position:relative;}
#menub>ul>li:nth-child(3)>ul{width:100%; height:100%; position:relative;}

#menub>ul>li:nth-child(2)>ul>li{position:absolute;}
#menub>ul>li:nth-child(2)>ul>li>span{font-size:0.7vw; color:#9ccd62;}
#menub>ul>li:nth-child(2)>ul>li>a{display:block; font-size:1vw; font-weight:bold;}
#menub>ul>li:nth-child(2)>ul>li:nth-child(1){top:-3vh; left:3.125vw; width:20vh;height:3.4vw}
#menub>ul>li:nth-child(2)>ul>li:nth-child(1)>a{width:100%; height:100%; display:block;}
#menub>ul>li:nth-child(2)>ul>li:nth-child(2){ top:9.5vh; left:5.78vw;}
#menub>ul>li:nth-child(2)>ul>li:nth-child(3){ top:18.4vh; left:5.78vw;}
#menub>ul>li:nth-child(2)>ul>li:nth-child(4){ top:26.8vh; left:5.78vw;}
#menub>ul>li:nth-child(2)>ul>li:nth-child(5){ top:35.4vh; left:5.78vw;}
#menub>ul>li:nth-child(2)>ul>li:nth-child(6){ top:44vh; left:5.78vw;}

#menub>ul>li:nth-child(3)>ul>li{position:absolute;}
#menub>ul>li:nth-child(3)>ul>li>a{width:100%; height:100%; display:inline-block;}
#menub>ul>li:nth-child(3)>ul>li>a>img{position:absolute;}
#menub>ul>li:nth-child(3)>ul>li>a>.imgh{opacity:0;}
#menub>ul>li:nth-child(3)>ul>li>a:hover>.imgh{opacity:1;}
#menub>ul>li:nth-child(3)>ul>li:nth-child(1){width:13.020833333333334vw; height:10.416666666666668vw; background-color:#FCF; top:0vh; left:50%; margin-left:-6.51vw;}
#menub>ul>li:nth-child(3)>ul>li:nth-child(2){width:13.020833333333334vw; height:10.416666666666668vw; background-color:#BFD3F4; top:23vh; left:50%; margin-left:-6.51vw;}
#menub>ul>li:nth-child(3)>ul>li:nth-child(3){width:3.125vw; height:8vh; bottom:0; left:50%; margin-left:-7vw;}
#menub>ul>li:nth-child(3)>ul>li:nth-child(3)>a>img{width:3.125vw;}
#menub>ul>li:nth-child(3)>ul>li:nth-child(4){width:5.208333333333334vw;height:3.39vw; bottom:5px; left:50%; margin-left:2vw;}
#menub>ul>li:nth-child(3)>ul>li:nth-child(4)>a>img{width:5.208333333333334vw}
.rel{position:relative;}
.rel>p{position:absolute; top:0; left:0; width:100%; height:100%;}
.rel>span{position:absolute;display:block; text-align:right; font-size:16px; font-weight:bold;color:#fff; right:5px; bottom:65px;}
.rel>a{position:absolute; width:100px !important; height:25px!important; display:inline-block!important; border:1px solid #fff; color:#fff; text-align:center; line-height:25px;z-index:10; font-size:12px; right:5px; bottom:5px;}


</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
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
<div id="menu">
	<span id="s1"></span>
    <span id="s2"></span>
    <span id="s3"></span>
    <span id="s4">MENU</span>
</div>
<div id="menub">
	
	<ul id="sub">
    <div id="close"><img src="../img/menu_close.png" alt="닫기"></div>
    	<li>
        	<ul class="sub2" id="subb1">
            	<li><a href="../index.php"><img src="../img/helloonlygul.png" alt="로고"></a></li>
                <li><span>HelloKitchen Story</span><a href="../angularintroduce.php">헬로키친을 소개합니다.</a></li>
                <li><span>Trendy Life</span><a href="../Hello_tactic.php">대세 라이프스타일에 맞춘 헬로키친의 전략</a></li>
                <li><span>Hello Brand</span><a href="hello_notice.php">여러분 곁의 헬로키친 브랜드 안내</a></li>
                <li><span>Food Tip</span><a href="../concert/list_img.php">활력 넘치는 식탁을 위한 꿀조합!</a></li>
                <li><span>Inquiry Board</span><a href="../qna_list.php">문의사항이 있다면? 여기에요, 여기!</a></li>
            </ul>
        </li>
        
        
        <li>
        	<ul class="sub2" id="subb2">
            	<li class="rel">
                	<p><img src="img/menup.jpg" alt="이벤트"></p>
                	<span>헬로키친<br>이벤트</span>
                    <a href="#">이벤트 보러가기</a>
                </li>
                <li class="rel">
                	<p><img src="img/menup2.jpg" alt="갤러리"></p>
                    <span>헬로키친<br>갤러리</span>
                    <a href="#">갤러리 보러가기</a>
                </li>
                <li>
                <?
	//만약 userid변수의 값이 true가 아니라면
	// ! : ~가 아니면(not) 논리연산자
	if(!$_SESSION['userid']){
	?>
    <a href="../login_form.php">
    <img src="../img/login.png" alt="로그인">
    <img src="../img/login2.png" alt="로그인" class="imgh">
    </a>
    <?
    }else{
    ?>
    <a href="logout.php">
    <img src="../img/logout.png" alt="로그아웃" class="Oimg"> 
    <img src="../img/logout2.png" alt="로그아웃" class="imgh Oimg">
    </a>
    <?
    }
	?>  
    
     </li> 
      
      <li>
                <?
	//만약 userid변수의 값이 true가 아니라면
	// ! : ~가 아니면(not) 논리연산자
	if(!$_SESSION['userid']){
	?>
    <a href="../member_form.php">
    <img src="../img/join.png" alt="회원가입">
    <img src="../img/join2.png" alt="회원가입" class="imgh">
    </a>
    <?
    }else{
    ?>
    	<a href="member_form_modify.php">
    	<img src="../img/modify.png" alt="정보수정" class="mimg"> 
        <img src="../img/modify2.png" alt="정보수정" class="imgh mimg">
        </a>
    <?
    }
	?>  
    </a>
     </li>           
                
                
                
                <li>
                
                
                </li>
            </ul>
        </li>
    </ul>
</div>
</body>
</html>
<?
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
<title>당신의 헬로키친</title>
<style>
*{margin:0; padding:0}
li{list-style:none;}
a{text-decoration:none; color:#333;}
@import url('https://fonts.googleapis.com/css?family=Raleway');
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
  #header2 {
    width: 100vw;
    height: auto;
    position: fixed;
    top: 3vh;
    right: 4vh;
    z-index: 99;
	float:left;
}
#logo2{position:fixed; left:17%; top:2.5vh; width:20vw;}
#menu2{width:4.5vh; position:fixed; z-index:999;cursor:pointer; top:2.5vh; left:2vh;}
#menu2>span{height:0.6vh; margin-top:0.6vh; background-color:#9ccd62; display:block; color:#54a1c6}
#menu2>#s1_2{width:100%;}
#menu2>#s2_2{width:100%;}
#menu2>#s3_2{width:100%;}
  #menub2{width:70vw; height:100vh; position:fixed; top:0vw; left:-100vw;color:#fff; background-color:#fff;z-index:1000; display:block; }
  #M1_2{ cursor:pointer;}
#M1_2>img{width:4vh; height:4vh; left:50%; margin-left:-2vh; bottom:0;position:absolute}
#menub2>ul{width:100%; height:100vh; position:absolute; bottom:0;}

#menub2>ul>li{width:100%; height:10vh; text-align:center; line-height:10vh; font-size:5vw; font-weight:600;position:relative;}
#menub2>ul>li:first-child{height:15vh;}
#menub2>ul>li:last-child{height:15vh;}

#M2_2>a{width:26.6vw !important;  height:10vw!important; margin:0 auto;}
#menub2>ul>li>a{color:#777; display:block; width:100%;height:100%;}			
#login2{position:fixed; right:3vh; top:2.5vh; z-index:99;}
#wrap{display:none;}
#wrap2{width:100vw; height:100vh; background:url(img/mobile/mobilebg.png) no-repeat; background-size:100% 100%;}

#gul{width:100vw; height:100vh; position:relative;}
#gul>p{position:absolute;width:40vw; top:25vh; right:3vh;}
#gul>#line{width:3.5rem; height:1px; background-color:#9ccd62; position:absolute; top:36.5vh; right:3vh;}
#gul>.gulgul{position:absolute; color:#9ccd62; font-size:0.6rem; line-height:1.5rem; text-align:right; top:40vh; right:3vh;}
#gul>a{padding:0.4rem 1.5rem; display: inline-block; background-color:#9ccd62; color:#fff; font-size:1rem; top:80vh; right:3vh; position:absolute; border-radius:3rem}
#gul>a>img{width:1rem; float:right;}
@media all and (min-width:1200px) {
	#wrap2{display:none;}
	#wrap{display:block;}
html, body{font-family: "Nanum Gothic", sans-serif; height:100%; width:100%; overflow:hidden}
header{width:100vw; height:auto; position:fixed; top:3vh; right:4vh; z-index:99}
img{width:100%; height:100%;}


#main{width:100vw; height:100vh; position:relative;}
#main>ul>li{position:absolute;}
#main>ul>li:nth-child(1){left:0; top:0; width:50vw; height:100%; background:url(img/main_left.png) no-repeat; background-size:100% 100%;}
#main>ul>li:nth-child(2){right:0; top:0;width:50vw; height:100%;background:url(img/main_right.png) no-repeat; background-size:100% 100%;}
#main>ul>li:nth-child(3){width:250px; height:95px; left:50%; margin-left:-125px; top:25%; margin-top:-47.5px;}
#main>ul>li:nth-child(4){width:900px; height:192px; left:50%; margin-left:-450px; top:40%; margin-top:-96px;}

#main>ul>li:nth-child(4)>#subg>li{position:absolute;width:478px; height:46px; left:50%; margin-left:-239px; top:55%; margin-top:-23px;}
#main>ul>li:nth-child(5){width:56px; height:56px; left:50%; margin-left:-40px; margin-bottom:-28px; bottom:33%;
						 cursor:pointer;z-index:99}

#main>ul>li:nth-child(5) a{width:56px; height:56px;  display:block;position:absolute}

#main>ul>li:nth-child(6) a{position:absolute; width:200px; height:56px; top:50%; margin-top:-28px; color:#eee; line-height:56px; text-align: center;display:block; font-size:18px;}
#main>ul>li:nth-child(6){width:200px; height:56px; left:50%; margin-left:-160px;margin-bottom:-28px;  bottom:33%;
						 cursor:pointer; opacity:0;}
#footer { color:#eee; position:fixed; bottom:1vh; z-index:99; font-size:10px; width:100%; height:1.5vh; text-align:center; }
#svg{position:absolute; top:40%; left:50%; width:30vw; height:10vh;z-index:88;
margin-left:-15vw; margin-top:-5vh;}

#logo{width:15vh; position:fixed; top:3.4vh; left:5.8vw;z-index: 99; opacity:0.2}
#logo:hover{opacity:1}
#logo>a{width:100%; height:100%; display:block;}
}
</style>
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script>
  $(document).ready(function(e) {
    
	
	$(document).ready(function(e) {
	var atag =$('#menub2>ul>li')
	$('#menu2').click(function(){
		$('#menub2').animate({'left':0},700)
		})
	$('#M1_2').click(function(){
		$('#menub2').animate({'left':'-'+'100'+'vw'},700)
	})
});

	  
	  

	$('#main ul li:nth-child(4)').delay(1000).animate({'opacity':'0'},100,function(){
		$(this).delay(600).animate({'opacity':1},500)
		})
	
	
	
    $('#menu').click(function(){
		$('#menub').css({'display':'block'})
		})	
	$('#close').click(function(){
		$('#menub').css({'display':'none'})
		});
		
		
	$('#main ul li:nth-child(5)').hover(function(){
		$('#main ul li:nth-child(5) a').stop().animate({'left':'5'+'vw'},800)
		$('#main ul li:nth-child(6)').stop().animate({'opacity':1},800)
		},function(){
			$('#main ul li:nth-child(5) a').stop().animate({'left':'0'+'vw'},800)
			$('#main ul li:nth-child(6)').stop().animate({'opacity':0},800)
			})
		
	/*main 화살표 클릭하면 새창 넘어가는*/$('#main ul li:nth-child(5) a').click(function(e){
		e.preventDefault()
		
		setTimeout(fn,1000)
		$('#logo').animate({'opacity':'0'},500)
		$('#svg').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(3)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(4)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(5)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(6)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(7)').animate({'opacity':'0'},500)
		
		$('#main ul li:nth-child(1)').animate({'left':'-50vw'},1000)
		$('#main ul li:nth-child(2)').animate({'right':'-50vw'},1000)
		});
	$('#main ul li:nth-child(6) a').click(function(e){
		e.preventDefault()

		setTimeout(fn,1000)
		$('#logo').animate({'opacity':'0'},500)
		$('#svg').animate({'opacity':'0'},500)
			$('#main ul li:nth-child(3)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(4)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(5)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(6)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(7)').animate({'opacity':'0'},500)
		
		
		$('#main ul li:nth-child(1)').animate({'left':'-50vw'},1000)
		$('#main ul li:nth-child(2)').animate({'right':'-50vw'},1000)
		});
		
		$('#main ul li:nth-child(5)').click(function(e){
			e.preventDefault()
		
		setTimeout(fn,1000)
		$('#logo').animate({'opacity':'0'},500)
		$('#svg').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(3)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(4)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(5)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(6)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(7)').animate({'opacity':'0'},500)
		
		
		$('#main ul li:nth-child(1)').animate({'left':'-50vw'},1000)
		$('#main ul li:nth-child(2)').animate({'right':'-50vw'},1000)
		
			
			})
		$('#main ul li:nth-child(6)').click(function(e){
			e.preventDefault()
		
		setTimeout(fn,1000)
		$('#logo').animate({'opacity':'0'},500)
		$('#svg').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(3)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(4)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(5)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(6)').animate({'opacity':'0'},500)
		$('#main ul li:nth-child(7)').animate({'opacity':'0'},500)
		
		
		$('#main ul li:nth-child(1)').animate({'left':'-50vw'},1000)
		$('#main ul li:nth-child(2)').animate({'right':'-50vw'},1000)
			
			})
		
		
		function fn(){
			window.location.href="main.php";
			}




});
</script>
</head>

<body>

<div id="wrap">
<header>

<? include "top_login.php";?>
</header>
<?
include "menu.php";
?>
<div id="main">
	<div id="logo">
    <a href="../index.php"><img src="../img/helloonlygul.png" alt="로고"></a>
    </div>
	<div id="svg">
		<? include "mainsvg.php"; ?>
    </div>
	<ul id="subm">
    	<li></li>
        <li></li>
        <li></li>
        <li>
        	
        </li>
        
        <li><a href="#"><img src="img/main_arrow.png"></a></li>
        <li><a href="#">Go to HelloKitchen</a></li>
        
    </ul>
</div>
<div id="footer">
ⓒCoding by LSG, Design by LMS, All Right Reserved

</div>
</div>


<div id="wrap2">
<div id="header2">
    <div id="logo2">
	<a href="index.php"><img src="img/mobile/mlogo.png" alt="로고"></a>
</div>
<div id="menu2">
	<span id="s1_2"></span>
    <span id="s2_2"></span>
    <span id="s3_2"></span>

</div>
    </div><!--header2 end-->
  <div id="login2">
  	<? include "top_loginM.php";?>
  </div>  
 <div id="menub2">


<ul>
	<li></li>
	<li id="M2_2"><a href="index.php"><img src="img/mobile/helloonlygul.png" alt="로고"></a></li>
	
    <li id="S1_2"><a href="#">HelloKitchen Story</a></li>
    <li id="S2_2"><a href="#">Trendy Life</a></li>
    <li id="S3_2"><a href="#">Hello Brand</a></li>
    <li id="S4_2"><a href="#">Food Tip</a></li>
    <li id="S5_2"><a href="#">Inquiry Board</a></li>
    <li id="M1_2"><img src="img/mobile/X.png" alt="닫기"></li>
    <li></li>
    
</ul>
</div>



<div id="gul">
	<p><img src="img/mobile/mobilebggul.png" alt="imyourkitchen"></p>
    <span id="line"></span>
    <span class="gulgul">
    	Anytime, anywhere, we always cook Hello Kitchen<br>
        studies for your beautiful meal We will satisfy<br>

       your table with more than 20 years of know-how<br>
        We will be your Hello Kitchen<br>
    </span>
    <a href="mobile.php"> EXPLORE&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/mobile/click.png" alt="클릭"></a>
    
</div>
</div>
</body>
</html>
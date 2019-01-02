<?
session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>헬로키친의 전략</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
<script>
$(document).ready(function(e) {
    $('.atag').css({'border': '1.4px solid #9ccd62'})
	$('.atag').css({'color': '#9ccd62'})
	

	
});
</script>
<style>
*{margin:0; padding:0;}
html,body{width:100%; height:100%; overflow-x:hidden;}
a{display:inline-block; text-decoration:none; color:#333;}
li{list-style:none;}
img{width:100%; height:100%;border:0}

header {
    width: 100vw;
    height: auto;
    position: fixed;
    top: 3vh;
    right: 4vh;
    z-index: 99;
}

#logo{width:15vh; position:fixed; top:3.4vh; left:5.8vw; z-index: 99}
#logo>a{width:100%; height:100%; display:block;}

section>article{width:100vw; height:100vh; box-sizing:border-box;}
#a1{}
#subbg1{background-image:url(../img/sub2main.jpg);background-attachment:fixed; background-size:100% 100%;
margin:13vh auto;
width:100%;
height:80vh;
}
#subbg1>ul{width:100%; height:100%; position:relative;}
#subbg1>ul>li{position:absolute;}
#ul1li1{
	width:21.7vw; 
	height:5.42vw;
	top:50%;
	left:50%;
	margin-top:-2.71vw;
	margin-left:-10.85vw;
	overflow:hidden;}
	
#ul1li1>a{width:100%;height:100%;}
#a2{width:100%; height:auto;}
#a2>p {width:22.03125vw; margin: 0 auto;}
#a3{height:65vh; margin-top:15vh;}
#a3>ul{width:62.5vw; height:100%; position:relative; box-sizing:border-box; margin:0 auto;}
#a3>ul>li{height:100%;float:left;box-sizing:border-box;}
#ul3li1{width:48%;}
#ul3li2{width:4%;}
#ul3li3{width:48%;}

#ul3li3>p:nth-child(1){text-align: center; margin:3.5rem 0;}
#ul3li3>p:nth-child(2){ text-align: justify;}
#span1{ 
	border-bottom: 1px solid #000;
	
    
    font-size: 1.7rem;
    color: #222;
    line-height: 2.8rem;
	
    }
	
#span2 { width:100%; font-size: 1rem; line-height:2.3rem;}

#a4{height:35vh;}
#a4>ul{width:62.5vw; height:100%; position:relative; box-sizing:border-box; margin:0 auto;}
#a4>ul>li{
	position:absolute;
	width:1px; 
	height:100px; 
	left:50%; 
	top:50%; 
	margin-left:-0.5px; 
	margin-top:-50px; 
	background-color:#000;}

#a5{height:auto;}
#a5>ul{width:62.5vw; height:100%; position:relative; box-sizing:border-box; margin:0 auto;}
#a5>ul>li{width:100%;}
#a5>ul>li:nth-child(1){margin-bottom:1.8em;}
#a5>ul>li:nth-child(1)>p{ text-align:left; font-weight:400; font-size:1.4rem;line-height: 2.3em;}
#a5>ul>li:nth-child(1)>p>span{
	display: block;
    width: 60px;
    height: 1.2px;
    background: #222;
    margin-top: 10px;
	}
#a5>ul>li:nth-child(2)>p	{ font-size: 0.9rem; line-height:2rem; text-align: justify;}
#a5>ul>li:nth-child(2){margin-bottom:3.5rem;}
#a5>ul>li:nth-child(3){width:48%; float:left;}
#a5>ul>li:nth-child(4){width:48%; float:right;}
footer {
	width:100%; 
	height:5vh;
	text-align:center;
	color:#333;
	font-size:10px; 
	float:left; 
	line-height:5vh;
	 margin-top:15vh;}
</style>
</head>

<body>
<header><? include "top_login.php";?></header>
	<? include "menu.php";?>
    <? include "top_button.php";?>
    <div id="logo">
    <a href="../index.php"><img src="../img/helloonlygul.png" alt="로고"></a>
    </div>
<section>
    	<article id="a1">
       		 <div id="subbg1">
             	<ul>
                	<li id="ul1li1">
                    <a href="#">
                        <img src="img/sub2gul.png" alt="Hello Kitchen story">
                    </a>
                    </li>
                </ul>
             </div>
        </article>
        <article id="a2">
        	<p><img src="img/sub2_1.png" alt="헬로키친의 전략"></p>
        </article>
         <article id="a3">
        	<ul>
                	<li id="ul3li1">
                    	<img src="img/sub2_2.png" alt="당신의 스타일 존중">
                    </li>
                    <li id="ul3li2"></li>
                    <li id="ul3li3">
                    <p>
                    	<span id="span1">여러분의 다양한 스타일을<br>
													존중하겠습니다.
							</span>
                    </p>
                            
                        <p> 
                        <span id="span2">
한 단어로 정의내릴 수 없을 만큼 우리는 다양한 삶을 살아갑니다. 그 모든 분
들을 만족시키는 건 욕심이겠지만, 최대한 많은 분들과 함께하고 싶은 소망을
담아 다양한 메뉴를 개발하고 있습니다. 누구나 부담없이 편하게 먹되 균형잡
힌 영양소를 섭취할 수 있도록. 건강하고 맛있는 한 끼를 위해 언제나 노력하겠습니다.
                         </span>
                         </p>
                    </li>
                </ul>
        </article>
        <article id="a4">
        	<ul>
            	<li>
                	
                </li>
            </ul>
        </article>
        <article id="a5">
        	<ul>
            	<li>
                    <p>부담없는 한 끼를 위해 노력합니다.
                    <span></span></p>	
                </li>
                <li>
                <p>헬로키친은 누구에게나 건강한 한 끼를 위해 최선을 다합니다. 가족과, 친구와, 연인과, 혼자 와도 편안하게 앉으실 수 있도록 4인 이상의 테이블부터 가림막이 되어
있는 1인용 테이블까지 항상 준비하고 있으며, 메뉴 또한 기념일에 어울리는 고급 재료를 이용한 코스 요리부터, 일상적인 재료를 이용한 합리적인 가격의 단품요리
까지 다양하게 제공해드립니다</p>
                	
                </li>
                <li>
                	<img src="img/sub2_3.png" alt="한끼1">
                </li>
                <li>
                	<img src="img/sub2_4.png"alt="한끼2">
                </li>
            </ul>
        </article>
</section>
<footer>
    ⓒCoding by LSG, Design by LMS, All Right Reserved
</footer>
</body>
</html>
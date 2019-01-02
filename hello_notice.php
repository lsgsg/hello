<?
session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>헬로키친 브랜드 안내</title>
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
#subbg1{background:url(img/sub3mainbg.jpg) no-repeat;background-attachment:fixed; background-size:100% 100%;
margin:13vh auto;
width:100vw;
height:40vw;
}
#subbg1>ul{width:100%; height:100%; position:relative;}
#subbg1>ul>li{position:absolute;}
#ul1li1{
	width:26.1vw; 
	height:4.43vw;
	top:50%;
	left:50%;
	margin-top:-2.215vw;
	margin-left:-13.05vw;
	overflow:hidden;}
	
#ul1li1>a{width:100%;height:100%;}

#a2{height:52vh;}
#a2>ul{width:62.5vw; height:100%; position:relative; margin:0 auto;}
#a2>ul>li{width:16.25vw; margin:0 auto; overflow:hidden;}
#a3{height:65vh;}
#a3>ul{width:62.5vw; height:100%; position:relative; box-sizing:border-box; margin:0 auto;}
#a3>ul>li{height:100%;float:left;box-sizing:border-box;}
#ul3li1{width:48%;}
#ul3li2{width:4%;}
#ul3li3{width:48%;}

#ul3li3>p:nth-child(1){text-align: center; margin:3.5rem 0;}
#ul3li3>p:nth-child(2){ text-align: justify;}
#span1{ 
	border-bottom: 1px solid #000;
	
    
    font-size: 1.8rem;
    color: #222;
    line-height: 3rem;
	
    }
	
#span2 { width:100%; font-size: 1rem; line-height:2.6rem;}

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
#a5>ul>li:nth-child(1)>p{ text-align:left; font-weight:400; font-size:1.8rem;line-height: 2.5em;}
#a5>ul>li:nth-child(1)>p>span{
	display: block;
    width: 60px;
    height: 1px;
    background: #222;
    margin-top: 10px;
	}
#a5>ul>li:nth-child(2)>p	{ font-size: 1rem; line-height:2.6rem; text-align: justify;}
#a5>ul>li:nth-child(2){margin-bottom:3.5rem;}
#a5>ul>li:nth-child(3){width:100%;}


	
#a7{height:auto;}
#a7>ul{width:62.5vw; height:100%; position:relative; box-sizing:border-box; margin:0 auto;}
#a7>ul>li{width:100%;}
#a7>ul>li:nth-child(1){    margin-bottom: 1.8em;}
#a7>ul>li:nth-child(1)>p{ text-align:left; font-weight:400; font-size:1.8rem;line-height: 2.5em;}
#a7>ul>li:nth-child(1)>p>span{
	display: block;
    width: 60px;
    height: 1.5px;
    background: #222;
    margin-top: 10px;
	}
#a7>ul>li:nth-child(2)>p	{ font-size: 1rem; line-height:2.3rem; text-align: justify;}
#a7>ul>li:nth-child(2){margin-bottom:3.5rem;}
#a7>ul>li:nth-child(3){width:100%;}



#a8{height:auto; position:relative;}
#a8>ul{width:62.5vw; height:100%; position:relative; box-sizing:border-box; margin:0 auto;}
#a8>ul>li{width:100%;}
#a8>ul>li:nth-child(1){    margin-bottom: 1.8em;}
#a8>ul>li:nth-child(1)>p{ text-align:left; font-weight:400; font-size:1.8rem;line-height: 2.5em;}
#a8>ul>li:nth-child(1)>p>span{
	display: block;
    width: 60px;
    height: 1.5px;
    background: #222;
    margin-top: 10px;
	}
#a8>ul>li:nth-child(2)>p	{ font-size: 1rem; line-height:2rem; text-align: justify;}
#a8>ul>li:nth-child(2){margin-bottom:3.5rem;}
#a8>ul>li:nth-child(3){width:100%;}
#a8>ul>li:nth-child(3)>#map_view{}

.Box{position:relative; width:62.5vw; height:23.4375vw; margin-bottom:10vh;}
.imgg{position:absolute; top:0; left:0}
.inBox{width:100%; height:100%;position:absolute; top:0; left:0;}
.inBox>img{position:absolute; top:45%; left:50%;}
.inBox>a{position:absolute;top:60%; left:50%;  width:135px; height:35px; display:block; border:1px solid #fff; color:#fff; line-height:35px; text-align:center; margin-left:-67.5px; margin-top:-17.5px; z-index:15;}
#img1{width:341px; height:29px; margin-left:-170.5px; margin-top:-14.5px;}
#img2{width:148px; height:31px;margin-left:-74px; margin-top:-15.5px;}
#img3{width:171px; height:29px;margin-left:-85.5px; margin-top:-14.5px;}
.hoverr{width:100%; height:100%; background-color:rgba(0,0,0,0.45);}
.inBox>a:hover~.hoverr{background-color:rgba(0,0,0,0);}
section{width:100%; height:100%; float:left;}
#footer { color:#333; font-size:10px; width:100vw; height:1.5vh; text-align:center; position:absolute; bottom:3vh;}
	 .clear{width:100%; height:15vh;}
</style>
</head>

<body>
<header><? include "top_login.php";?></header>
	<? include "menu.php";?>
    <? include "top_button.php";?>
    <div id="logo">
    <a href="index.php"><img src="img/helloonlygul.png" alt="로고"></a>
    </div>
	<section>
    	<article id="a1">
       		 <div id="subbg1">
             	<ul>
                	<li id="ul1li1">
                    <a href="#">
                        <img src="img/sub3gul.png" alt="Hello brand">
                    </a>
                    </li>
                </ul>
             </div>
        </article>
        <article id="a2">
        		<ul>
                	<li id="ul2li1">
                    	<img src="img/sub3notice.png" alt="여러분의 곁의 헬로키친 브랜드 안내">
                    </li>
                </ul>
        </article>
        <article id="a3">
        	<ul>
                	<li id="ul3li1">
                    	<img src="img/sub3p1.jpg" alt="헬로키친 브랜드를 소개합니다.">
                    </li>
                    <li id="ul3li2"></li>
                    <li id="ul3li3">
                    <p>
                    	<span id="span1">헬로키친 브랜드를<br>
							소개합니다.</span>
                    </p>
                            
                        <p> 
                        <span id="span2">
                         헬로키친은 2006년 기타 프랜차이즈 통합 이후 꾸준히 한우물만을 고집하여
세계 어디에서도 뒤지지 않는 독자적인 시스템을 만들어냈습니다. 재료부터 
시작해 여러분들의 테이블에 올라가기까지. 모든 과정을 이제 헬로키친이 함
께합니다. 이를 도와주는 헬로키친 브랜드를 확인해보세요.  
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
                    <p>Hello Kitchen(Restaurant)
                    <span></span></p>	
                </li>
                <li>
                <p>헬로키친 레스토랑은 헬로키친이 2006년 론칭한 퓨전 레스토랑입니다. 맛 뿐만 아니라 눈까지 사로잡는 섬세한 플레이팅과 고객님들의 니즈를 충족시킬 수 있는 다양한 메뉴들을 구경해보세요. </p>
                	
                </li>
                <li class="Box">
                	<img src="img/sub3pl1.jpg" alt="헬로키친 레스토랑" class="imgg">
                    	<div class="inBox">
                            <img src="img/sub3pl1g.png" alt="Hello Kitchen(Restaurant)" id="img1">
                            <a href="#">MORE</a>
                            <p class="hoverr"></p>
                        </div>
                </li>
              
            </ul>
        </article>
   		 <article id="a7">
        	<ul>
            	<li>
                    <p>Hello Farm
                    <span></span></p>	
                </li>
                <li>
                <p>헬로팜은 어떻게 저렴한 가격에 질 좋은 재료를 이용한 음식을 대접해드릴 수 있을까에 대한 고민에서 만들어졌습니다. 헬로키친이 공들여 선별한 품질 좋은 농장과 직접 협약을 맺어 중간과정에서 발생하는 비용을 절감함으로써 보다 합리적인 가격으로 책정할 수 있게 되었습니다.</p>
                	
                </li>
                <li class="Box">
                	<img src="img/sub3pl2.jpg" alt="헬로키친 농장" class="imgg">
                        <div class="inBox">
                        <img src="img/sub3pl2g.png" alt="Hello Farm" id="img2">
                        <a href="#">MORE</a>
                        <p class="hoverr"></p>
                        </div>
                </li>
                
            </ul>
        </article>
        <article id="a8">
        	<ul>
            	<li>
                    <p>Kitchen Mall
                    <span></span></p>	
                </li>
                <li>
                <p>키친몰은 헬로키친의 다양한 요리를 집에서도 편안하게 드실 수 있도록 도와드립니다. 헬로키친의 기술을 이용해 레스토랑에서 먹던 그 맛을 그대로 재현하여 혼자사는 분들도 부담 없도록, 1인분으로 소포장하여 판매하고 있습니다. 이제 헬로키친의 다양한 요리와 신선한 재료를 집에서 편하게 배송 받아보세요. </p>
                	
                </li>
                <li class="Box">
                	<img src="img/sub3pl3.jpg" alt="헬로키친 농장" class="imgg">
                    	<div class="inBox">
                            <img src="img/sub3pl3g.png" alt="Kitchen Mall" id="img3">
                            <a href="#">MORE</a>
                            <p class="hoverr"></p>
                        </div>
                </li>
                
            </ul>
            <div class="clear"></div>
             <div id="footer">
    ⓒCoding by LSG, Design by LMS, All Right Reserved
	</div>
        </article>
        </section>

</body>
</html>
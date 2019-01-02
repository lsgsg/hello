<?
session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>헬로키친을 소개합니다.</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular-inview/2.0.0/angular-inview.min.js'></script>
<!--angular-inview: DOM요소가 브라우저 뷰 포트에 있는지 확인하라는 angulajes지시-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular-animate.js'></script>
<script>
angular.module('app', ['ngAnimate', 'angular-inview'])
  .controller('Timelc', function($window) {

    this.schedule = [{
      
      date: '1995년',
      title: '안녕식당 OPEN',
	  title1:'누적 방문 고객 1000명 돌파',
	  title2:''
    }, {
      
      date: '2000년',
      title: '안녕식당 창립 10주년',
	  title1:'20호점 OPEN',
	  title2:'21호점 OPEN'
    }, {
      
      date: '2005년',
      title: '50호점 OPEN',
	  title1:' 희망 나눔 바자회 개최',
	  title2:'(바자회 수익금 전액 기부금 전달)'
    }, {
    
      date: '2010년',
      title: '제주도 100호점 OPEN',
	  title1:'101호점 OPEN',
	  title2:'102호점 OPEN'
    }, {
    
      date: '2011년',
      title: '헬로키친으로 상호명 변경',
	  title1:'HelloKitchen 브랜드 탄생',
	  title2:''
    }, {
      
      date: '2012년',
      title: '일본 도쿄점 OPEN',
	  title1:'브랜드평가 1위달성',
	  title2:'신뢰도평가 1위달성'
    }, {
     
      date: '2017년',
      title: '중국 상하이점 OPEN',
	  title1:'브랜드평가 5년연속 1위',
	  title2:'신뢰도평가 5년연속 1위'
    }];
  
    

    this.itemInview = function(index, inview, inviewInfo, item) {
  this.schedule[index].inview = inview;
    };
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

#logo{width:15vh; position:fixed; top:3.4vh; left:5.8vw;z-index: 99}
#logo>a{width:100%; height:100%; display:block;}

section>article{width:100vw; height:100vh; box-sizing:border-box;}
#a1{}
#subbg1{background-image:url(img/sub1mainbg.png);background-attachment:fixed; background-size:100% 100%;
margin:13vh auto;
width:100%;
height:80vh;
}
#subbg1>ul{width:100%; height:100%; position:relative;}
#subbg1>ul>li{position:absolute;}
#ul1li1{
	width:40.625vw; 
	height:5.42vw;
	top:50%;
	left:50%;
	margin-top:-2.71vw;
	margin-left:-20.3125vw;
	overflow:hidden;}
	
#ul1li1>a{width:100%;height:100%;}

#a2{height:52vh;}
#a2>ul{width:62.5vw; height:100%; position:relative; margin:0 auto;}
#a2>ul>li{width:9vw; margin:0 auto; overflow:hidden;}
#a3{height:65vh;}
#a3>ul{width:62.5vw; height:100%; position:relative; box-sizing:border-box; margin:0 auto;}
#a3>ul>li{height:100%;float:left;box-sizing:border-box;}
#ul3li1{width:48%;}
#ul3li2{width:4%;}
#ul3li3{width:48%;}

#ul3li3>p:nth-child(1){text-align: center; margin:2rem 0 3rem;}
#ul3li3>p:nth-child(2){ text-align: justify;}
#span1{ 
	border-bottom: 1px solid #000;
	
    
    font-size: 1.7rem;
    color: #222;
    line-height: 3rem;
	
    }
	
#span2 { width:100%; font-size: 0.9rem; line-height:2.4rem;}

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
#a5>ul>li:nth-child(1)>p{ text-align:left; font-weight:400; font-size:1.4rem;line-height: 2.5em;}
#a5>ul>li:nth-child(1)>p>span{
	display: block;
    width: 60px;
    height: 1px;
    background: #222;
    margin-top: 10px;
	}
#a5>ul>li:nth-child(2)>p	{ font-size: 0.9rem; line-height:2.6rem; text-align: justify;}
#a5>ul>li:nth-child(2){margin-bottom:3.5rem;}
#a5>ul>li:nth-child(3){width:100%;}

#a6{height:35vh;}
#a6>ul{width:62.5vw; height:100%; position:relative; box-sizing:border-box; margin:0 auto;}
#a6>ul>li{
	position:absolute;
	width:1px; 
	height:100px; 
	left:50%; 
	top:50%; 
	margin-left:-0.5px; 
	margin-top:-50px; 
	background-color:#000;}
	
#a7{height:auto;}
#a7>ul{width:62.5vw; height:100%; position:relative; box-sizing:border-box; margin:0 auto;}
#a7>ul>li{width:100%;}
#a7>ul>li:nth-child(1){    margin-bottom: 1.8em;}
#a7>ul>li:nth-child(1)>p{ text-align:left; font-weight:400; font-size:1.4rem;line-height: 2.3em;}
#a7>ul>li:nth-child(1)>p>span{
	display: block;
    width: 60px;
    height: 1.5px;
    background: #222;
    margin-top: 10px;
	}
#a7>ul>li:nth-child(2)>p	{ font-size: 0.9rem; line-height:2.4rem; text-align: justify;}
#a7>ul>li:nth-child(2){margin-bottom:3.5rem;}
#a7>ul>li:nth-child(3){width:100%;}
#a7>ul>li:nth-child(3)>#map_view{}

#a8{height:auto;}
.story{
	
	 margin-top:5em;
	position:relative;}

.helloKit {
 padding: 2rem 1.25rem;
  overflow: hidden;
  text-align: center;
  width:20rem;
  font-weight:400;
  margin:0 auto;
  z-index: 10;
  font-size:2.5rem;
}

.helloKit1{

  position: relative;
}


.container {
  margin: 0 auto;
  max-width: 45rem;
  padding: 1.5rem;
}

.timeline {
  position: relative;
  text-align: center;
}

.timeline:before {
  background-color:#D2691E;
  content: '';
  display: block;
  height: 100%;
  left: 50%;
  margin-left: -2px;
  position: absolute;
  width: 4px;
  z-index: 9;
}  


.timeline_item {
  clear: both;
  margin-bottom: 4rem;
  position: relative;
  z-index:9;
}

.timeline_item:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}

.titlez{font-weight:bold;}
.titlei{font-size:1.5vh;}
.itemAnimate .item_date {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.itemAnimate .item_info {
  opacity: 1;
  right: 0;
}
.itemAnimate .item_infoL {
  left: 0;
}

.item_date {
  display: inline-block;
  width: 4rem;
  height: 4rem;
  background-color: #9ccd63;
  color: #fff;
  text-align: center;
  font-weight: 400;
  line-height: 4;
  position: absolute;
  left: 50%;
  margin-left: -2.25rem;
  border: 0.25rem solid #fff;
  border-radius: 50%;
  box-shadow: inset 0px 3px 2px 1px rgba(0, 0, 0, 0.2), 0px 5px 20px rgba(137, 164, 105, 0.5);
  /*안쪽 바깥쪽*/
  transform: scale(0.5);
  transition: all 0.7s ease-out;
  z-index: 11;
 } 

.item_info {
  background:rgba(255,255,255,1);
  border-radius: 0.75rem;
  box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.5);
  display: inline-block;
  float: right;
  max- width: 12rem;/*max-width*/
  padding: 1.25rem;
  position: relative;
  opacity: 0;
  right: -50%;
  -webkit-transition: all 0.7s ease-out;
  transition: all 0.7s ease-out;
}

.item_infoL {
  background:rgba(255,255,255,1);
  left: -50%;
  float: left;
  right: auto;
}

.item_info:after {
  content: '';
  display: block;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 0.75rem 2rem 0.75rem 0rem;
/* ↑상 하 좌 우 삼각형 만들기*/

  border-color: transparent rgba(255,255,255,1) transparent transparent;
  position: absolute;
  left: -1rem;
  margin-top: -0.75rem;
  top: 50%;
  
}

.item_infoL:after {
	/*border-width 선 두께 설정 */
  border-width: 0.75rem 0 0.75rem 2rem;
  border-color: transparent transparent transparent rgba(255,255,255,1);
  left: auto;
  right: -1rem;
}





#footer { color:#333; font-size:10px; width:100vw; height:1.5vh; text-align:center; position:absolute; bottom:3vh;}

</style>

<script>
$(document).ready(function(e) {
    $('.atag').css({'border': '1.4px solid #9ccd62'})
	$('.atag').css({'color': '#9ccd62'})
	

	
});
</script>
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
                        <img src="img/subgul.png" alt="Hello Kitchen story">
                    </a>
                    </li>
                </ul>
             </div>
        </article>
        <article id="a2">
        		<ul>
                	<li id="ul2li1">
                    	<img src="img/hellointroduce.png" alt="헬로키친을 소개합니다.">
                    </li>
                </ul>
        </article>
        <article id="a3">
        	<ul>
                	<li id="ul3li1">
                    	<img src="img/sub1p1.png" alt="건강한 외식문화의 시작을 열다">
                    </li>
                    <li id="ul3li2"></li>
                    <li id="ul3li3">
                    <p>
                    	<span id="span1">건강한 외식문화의<br>
							시작을 열다.</span>
                    </p>
                            
                        <p> 
                        <span id="span2">
                         1995년 헬로키친은 해외에 로열티를 내지 않는 독자적인 패밀리 레스토랑
사업을 시작으로 출발하여 성공적으로 전문외식업체로서의 기반을 다졌습니다. 이후 2006년 건강하고 맛있는 한 끼를 선사해드리고픈 마음가짐으로
새로운 퓨전 레스토랑을 개발해 론칭에 성공했고, 일관된 이념에 기반한 다양한 서비스를 제공해드리고자 기타 프랜차이즈 사업을 통합, 독보적이고도 
특색 있는 웰빙 레스토랑으로 거듭나게 됩니다. 
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
                    <p>차별화된 식문화로 세계인의 입맛을 사로잡다
                    <span></span></p>	
                </li>
                <li>
                <p>헬로키친은 국내뿐 아니라 해외에도 활발하게 진출하여 한식 특유의 매력을 살린 퓨전 음식으로 한국적인 가치가 담긴 외식 사업을 이끌어 가고 있습니다. 맛 뿐만
아니라 눈까지 사로잡는 플레이팅과 보기 좋은 떡이 먹기도좋다는 속담을 실현한 맛, 그리고 칼로리는 맛의 단위라는 말을 거스르는 건강함으로 미국과 중국, 영국,
베트남,인도네시아, 필리핀에 진출해 현지인들의 입맛을 사로잡음으로써 국내뿐만 아니라 해외에서까지 인정 받는 글로벌 식문화 기업으로 커가는 중입니다. </p>
                	
                </li>
                <li>
                	<img src="img/sub1p2.png" alt="차별화된 식문화로 세계인의 입맛을 사로잡다.">
                </li>
            </ul>
        </article>
  		<article id="a6">
        	<ul>
            	<li>
                	
                </li>
            </ul>
        </article>
   		 <article id="a7">
        	<ul>
            	<li>
                    <p>고객님들의 평범한 일상을 함께하고 싶습니다.
                    <span></span></p>	
                </li>
                <li>
                <p>헬로키친의 핵심가치인 건강하고 맛있는 한 끼를 일상 속에서 손쉽고 간편하게 만나세요. 원산지에 대한 믿음, 진심을 담은 맛, 서비스에 대한 약속, 일관된 품질유지 
등 음식을 대하는 기본적인 태도를 항상 잃지 않고 정성껏 모시겠습니다.<br><br>

언제나, 어디서나. 헬로키친을 찾아보세요.  </p>
                	
                </li>
                <li>
                	<? include "map.php";?>
                </li>
            </ul>
        </article>
     
  <article id="a8">
  <div ng-app="app" ng-controller="Timelc as ctrl" class="story">
  <div class="helloKit">
    <p class="helloKit1">
    	<img src="img/hellohistory.png" alt='헬로키친의 연혁입니다.'>
    </p>
  </div> 
  <div class="container">
    <div class="timeline">

      <div class="timeline_item" ng-repeat="item in ctrl.schedule" in-view="ctrl.itemInview($index, $inview, $inviewInfo, item)" ng-class="{ 'itemAnimate': item.inview }">

        <div class="item_date">
          <span ng-bind="item.date"></span>
        </div>

        <div class="item_info" ng-class-even="'item_infoL'">
          <span class="info_description">
				<span ng-bind="item.title" class="titlez"></span><br>
                <span ng-bind="item.title1" class="titlei"></span><br>
                <span ng-bind="item.title2" class="titlei"> </span><br>
 		 </span>
		</div>
         
        </div><!--timeline_item-->
    </div><!--timeline-->
  </div><!--container-->
  <div id="footer">
    ⓒCoding by LSG, Design by LMS, All Right Reserved
	</div>
</div><!--ng-app-->
    </article>    
</section>

</body>
</html>
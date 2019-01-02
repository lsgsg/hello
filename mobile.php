<?
	session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>헬로키친 모바일</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.css'>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Raleway');
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
*{margin:0; padding:0;}
li{list-style:none;}
a{text-decoration: none; color:#333;}
img{width:100%; height:100%;border:0}

  html, body {
	  font-family: "Nanum Gothic";
      position: relative;
      height: 100%;
  }
  
  header {
    width: 100vw;
    height: auto;
    position: fixed;
    top: 3vh;
    right: 4vh;
    z-index: 99;
	float:left;
}
#login2{position:fixed; right:3vh; top:2.5vh; z-index:99;}
#logo{position:fixed; left:17%; top:2.5vh; width:20vw;}
#menu{width:4.5vh; position:fixed; z-index:999;cursor:pointer; top:2.5vh; left:2vh;}
#menu>span{height:0.6vh; margin-top:0.6vh; background-color:#9ccd62; display:block; color:#54a1c6}
#menu>#s1{width:100%;}
#menu>#s2{width:100%;}
#menu>#s3{width:100%;}

  .swiper-container {
      width: 100%;
      height: 100%;
	  background:url(img/mobile/bgfixed.png) center bottom no-repeat; background-size:100% 30%;
	 position:relative;
	 z-index:2
  }
  .swiper-wrapper
  {width: 100%;
      height: 100%;
	background-size:100% 70%;
	  }
  .swiper-slide {
	  width:100vw;
	  height:100vh;
      position:relative;
	  z-index:1;
       -webkit-box-sizing: border-box;
      box-sizing: border-box;
     
  }
.swiper-slide>div{position:absolute;}
.s1{display:none;}
.s2{background:url(img/mobile/m2bg.png) center bottom no-repeat; background-size:100% 100%;}
.s3{background:url(img/mobile/m3bg.png) center bottom no-repeat; background-size:100% 100%;}
.s4{background:url(img/mobile/m4bg.png) center bottom no-repeat; background-size:100% 100%;}


.sbg{width:100vw;
	height:100vh;}
	
.sbgM{   
	 position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;}	

.sbgM span {
    display: none;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 70%;
    background-position: center 0;
    background-repeat: no-repeat;
    background-size: cover;}
	
.sbgM span.on {
    display: block;
}


.s1bg{}


  .swiper-slide .title {

  }
  .swiper-slide .subtitle {
	width:85vw;
	height:32vh;
	top:75%;
	left:50%;
	margin-left:-42.5vw;
	margin-top:-15vh;
	background-color:#fff;
	box-shadow:0 5px 30px rgba(0,0,0,0.5)
	
  }
  .subtitle>a{width:100%; height:100%; display:block; position:relative;}
  .one{font-size:3.3rem; text-align: center; margin-top:7%; line-height:5rem; font-weight: bold;}
  .one>span{font-size:2.4rem; color:#bbb; font-weight:600;}
  .two{width:5rem; height:5rem; position:absolute; top:65%; left:50%; margin-top:-2.5rem; margin-left:-2.5rem}
  .st1{border-bottom:.75rem solid #827e7a}
  .st2{border-bottom:.75rem solid #d0b986}
  .st3{border-bottom:.75rem solid #ff7a5d}
  .st4{border-bottom:.75rem solid #e3d469}
  .st5{border-bottom:.75rem solid #d4e2df}
  
  
  .swiper-slide .text {
	width:100vw;
	height:100vh;
	position:relative;
  }
  
  .text>p{position:absolute;}
  
  .num{font-size:18rem; font-weight:bold; color:rgba(255,255,255,0.5); top:25vh; left:8vw;}
  .uhzzu{font-size:2rem; text-align:left;left:10vw; line-height:3.5rem; top:70%}
  .uhzzu2{color:#fff;}
  .uhzzu3{color:#fff;}
  .gul{left:10vw; top:55%}
  .gul1{width:55.7vw;}
  .gul2{width:36.5vw;}
  .gul3{width:35.2vw;}
  .button{position:absolute; padding:1.7rem 4.5rem; background-color:#9ccd63; display:block; bottom:10%; left:10vw; font-size:2rem; color:#fff;}
  
  #menub{width:70vw; height:100vh; position:fixed; top:0vw; left:-100vw;color:#fff; background-color:#fff;z-index:1000; display:block; }
  #M1{ cursor:pointer;}
#M1>img{width:4vh; height:4vh; left:50%; margin-left:-2vh; bottom:0;position:absolute}
#menub>ul{width:100%; height:100vh; position:absolute; bottom:0;}

#menub>ul>li{width:100%; height:10vh; text-align:center; line-height:10vh; font-size:5vw; font-weight:600;position:relative;}
#menub>ul>li:first-child{height:15vh;}
#menub>ul>li:last-child{height:15vh;}

#M2>a{width:26.6vw !important;  height:10vw!important; margin:0 auto;}
#menub>ul>li>a{color:#777; display:block; width:100%;height:100%;}
  </style>
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js'></script> 


  
</head>



  <body>
    <!-- Swiper -->
    <header>
    <div id="logo">
	<a href="index.php"><img src="img/mobile/mlogo.png" alt="로고"></a>
</div>
<div id="menu">
	<span id="s1"></span>
    <span id="s2"></span>
    <span id="s3"></span>

</div>
    </header>
     <div id="login2">
  	<? include "top_loginM.php";?>
  </div> 
    <div id="menub">


<ul>
	<li></li>
	<li id="M2"><a href="index.php"><img src="img/mobile/helloonlygul.png" alt="로고"></a></li>
	
    <li id="S1"><a href="../angularintroduce.php">HelloKitchen Story</a></li>
    <li id="S2"><a href="../Hello_tactic.php">Trendy Life</a></li>
    <li id="S3"><a href="../hello_notice.php">Hello Brand</a></li>
    <li id="S4"><a href="../concert/list_img.php">Food Tip</a></li>
    <li id="S5"><a href="../qna_list.php">Inquiry Board</a></li>
    <li id="M1"><img src="img/mobile/X.png" alt="닫기"></li>
    <li></li>
    
</ul>
</div>
    <div class="swiper-container">
    	<div class="sbgM">
        
        </div>
     	<div class="swiper-wrapper">
      <!--  
            <div class="swiper-slide s1">
         		<div class="s1bg sbg" ></div>
                <div class="title" data-swiper-parallax="-1000">
                
                </div>
                
                <div class="text" data-swiper-parallax="-300">
                
                </div>
       </div>-->
       <div class="swiper-slide s2">
       			<div class="s2bg sbg"></div>
                <div class="title" data-swiper-parallax="-1500"></div>
               
                <div class="text" data-swiper-parallax="-300">
                <P class="num num1">1</P>
                   <p class="gul gul1"><img src="img/mobile/m2gul.png" alt='your kitchen'></p>
                  <p class="uhzzu uhzzu1">
                  		아침, 점심, 저녁<br>
						여러분들의 하루식탁을<br>
						책임지는 헬로키친 입니다.
                  </p>
                  <a href="#" class="button"> 헬로키친 스토리 보기</a>
                </div>
       </div>
            <div class="swiper-slide s3">
            	<div class="s3bg sbg"></div>
                <div class="title" data-swiper-parallax="-2000"></div>
                
                <div class="text" data-swiper-parallax="-300">
                <P class="num num2">2</P>
                   <p class="gul gul2"><img src="img/mobile/m3gul.png" alt='your kitchen'></p>
                  <p class="uhzzu uhzzu2">
                  		다양한 행복으로 가득한<br>
						헬로키친 이벤트<br>
						지금 바로 참여해보세요.
                  </p>
                  <a href="#" class="button"> 헬로키친 이벤트 보기</a>
                </div>
            </div>
            <div class="swiper-slide s4">
            	<div class="s4bg sbg"></div>
                <div class="title" data-swiper-parallax="-3000"></div>
                
                <div class="text" data-swiper-parallax="-300">
                <P class="num num3">3</P>
                    <p class="gul gul3"><img src="img/mobile/m4gul.png" alt='your kitchen'></p>
                  <p class="uhzzu uhzzu3">
                  		고객님들의 SNS에 올라온<br>
						헬로키친의 다양한 메뉴들을<br>
						한눈에 구경하세요.
                  </p>
                  <a href="#" class="button"> 헬로키친 갤러리 보기</a>
                </div>
            </div>
             <div class="swiper-slide s5 fix">
             	<div class="s5bg sbg"></div>
                <div class="title" data-swiper-parallax="-1500"></div>
                <div class="subtitle st1" data-swiper-parallax="-200">
                	<a href="../angularintroduce.php">
                    <p class="one">
                    	<span>HelloKitchen Story</span><br>
                        헬로키친을 소개합니다.
                    </p>
                    <p class="two">
                    	<img src="img/mobile/plus.png" alt="플러스,들어가기">
                    </p>
                    </a>
                </div>
              
            </div>
            
            
            
            <div class="swiper-slide s6 fix">
            	<div class="s6bg sbg"></div>
                <div class="title" data-swiper-parallax="-1500"></div>
                <div class="subtitle st2" data-swiper-parallax="-200">
                	<a href="../Hello_tactic.php">
                    <p class="one">
                    	<span>Trendy Life</span><br>
                        대세 라이프스타일에 맞춘<br>
                        헬로키친의 전략
                    </p>
                    <p class="two">
                    	<img src="img/mobile/plus.png" alt="플러스,들어가기">
                    </p>
                    </a>
                </div>
             
            </div>
            
            
            
            
            <div class="swiper-slide s7 fix">
            	<div class="s7bg sbg"></div>
                <div class="title" data-swiper-parallax="-1500"></div>
                <div class="subtitle st3" data-swiper-parallax="-200">
                    <a href="../hello_notice.php">
                        <p class="one">
                            <span>Hello Brand</span><br>
                            여러분 곁의<br>
                            헬로키친 브랜드 안내
                        </p>
                        <p class="two">
                            <img src="img/mobile/plus.png" alt="플러스,들어가기">
                        </p>
                        </a>
                </div>
               
            </div>
            
            
            
            
            <div class="swiper-slide s8 fix">
            	<div class="s8bg sbg"></div>
                <div class="title" data-swiper-parallax="-1500"></div>
                <div class="subtitle st4" data-swiper-parallax="-200">
                	<a href="../concert/list_img.php">
                    <p class="one">
                    	<span>Food Tip</span><br>
                        활력넘치는 식탁을 위한<br>
                        꿀 조합!
                    </p>
                    <p class="two">
                    	<img src="img/mobile/plus.png" alt="플러스,들어가기">
                    </p>
                    </a>
                </div>
             
            </div>
            <div class="swiper-slide s9 fix">
            	<div class="s9bg sbg"></div>
                <div class="title" data-swiper-parallax="-1500"></div>
                <div class="subtitle st5" data-swiper-parallax="-200">
                	<a href="../qna_list.php">
                    <p class="one">
                    	<span>Inquiry Board</span><br>
                        문의사항이 있다면?<br>
                        여기에요, 여기!
                    </p>
                    <p class="two">
                    	<img src="img/mobile/plus.png" alt="플러스,들어가기">
                    </p>
                    </a>
                </div>
        
            </div>
            
        </div><!--"swiper-wrapper"-->
   </div><!--swiper-container end-->
        

</body>



	<script>
	

     var swiper = new Swiper('.swiper-container', {
		 direction: 'horizontal',
     /* loop: true, 를 하면 n+1 에러*/
 	/*effect:fade를 하면 자동 absolute;*/
    /*autoplay: 3000,*/
     parallax: true,//시차
     speed: 600,
	 mousewheelControl: true,
      keyboardControl: true,
 });
 
 swiper.on('slideChangeStart', function(i){
	$('.fix').each(function(i){
		if($(this).is(".swiper-slide-active")){
		
			$('.sbgM').find('span').eq(i).fadeIn().addClass("on").siblings().fadeOut().removeClass("on");
			
			//siblings(): 그의 형제 객체를 찾아라!
			//.sbgM의 span중 eq(i)번째 녀석은 fadeIn()!, on 클라스를 붙여라!
			//나머지 .sbgM의 선택된 그녀석의 형제들은 fadeOut()! on클라스를 제거하라!
			//ㅇㅇ 그리하여라
		}
	});
	});
	
	$(document).ready(function(e) {
	var atag =$('#menub>ul>li')
	$('#menu').click(function(){
		$('#menub').animate({'left':0},700)
		})
	$('#M1').click(function(){
		$('#menub').animate({'left':'-'+'100'+'vw'},700)
	})
	
	$('.atag2').css({'padding':'0.5rem 1rem'})
	$('.atag2').css({'font-size':'1.8rem'})
	
	
		$(".fix").each(function(i){
		$(".sbgM").append('<span class="sbgMbg'+(i+1)+'"></span>');
		$(".sbgM").find("span").eq(i).css("background-image", "url(img/mobile/m"+(i+1)+".png)");
		/*$(".sbgM").find("span").eq(0).addClass("on");*/
	});
});
    </script><!--밑에 있어야 작동됨-->


</body>

</html>
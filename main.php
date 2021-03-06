<?
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>당신의 헬로키친</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'>
</script>

<script src="js/mainjs.js"></script>
<link href="css/maincss.css" rel="stylesheet" type="text/css">



</head>

<body>
<div id="wrap">
<header>
<? include "top_login.php";?>
</header>
<?
include "menu.php";
?>
<button id="button"><span>헬로키친 더보기</span></button>
<section>
	<div id="col1">
    	<div class="logos">
        	<ul>
        		<li><a href="index.php"><img src="img/helloonlygul.png" alt="로고"></a></li>
            </ul>
        </div>
    	<div class="scrollFixL scrollFixL1">
        	<ul>
            	<li>
                	<img src="img/A1gul.png" alt="i'm your kitchen">
				</li>
                <li>
                	<p>
                    아침, 점심, 저녁<br>
					여러분들의 하루식탁을<br>
					책임지는 헬로키친 입니다.<br>
                    </p>
                </li>
                
            	<li id="one"  class="number">1</li>
            
                <!--<li>
                	<a href="#">
                	<p>헬로키친 스토리 보기</p>
                    <img src="img/mainb1arrow.png" alt="화살표">
                    </a>	
                </li>-->
            </ul>
        </div>
        <div class="scrollFixL scrollFixL2">
        	<ul>
            	<li>
                	<img src="img/A2gul.png" alt="hello kitchen">
				</li>
                <li>
                	<p>
                    다양한 행복으로 가득한<br>
				    헬로키친 이벤트<br>
					지금 바로 참여해보세요<br>
                    </p>
                </li>
            	<li id="two" class="number">2</li>
            </ul>
        </div>
        <div class="scrollFixL scrollFixL3">
        	<ul>
            	<li>
                	<img src="img/A3gul.png" alt="hello kitchen">
				</li>
                <li>
                	<p>
                    고객님들의 SNS에 올라온<br>
					헬로키친의 다양한 메뉴들을<br>
					한눈에 구경하세요.<br>
                    </p>
                </li>
            	<li id="three"  class="number">3</li>
            </ul>
        </div>
    </div>
    <div id="col2">
    	<div id="atag">
        	<ul class="activity">
                <li><a href="#a1" id="aa1">1</a></li>
                <li><a href="#a2ulli1" id="aa2">2</a></li>
                <li><a href="#a4" class="last"  id="aa3">3</a></li>
            </ul>
        </div>
    	<article class="scrollFixR scrollFixR1" id="a1">
        	<ul class="clip">
            	<li class="contact-fp-wrap"><img src="img/mb1introduce.png" alt="헬로키친 소개">
                	<div class="box box1">
                    	<a href="../angularintroduce.php"></a>
							<svg><rect class="booton" id="line1"/></svg>
                            <p>
                                    <span>HelloKicthen Story</span><br>
                                    헬로키친을 소개합니다
                            </p>
                            <div class="booton-text">
                                    <img src="img/mb1plus1.png" alt="더보기">
                            </div>
                        
                    </div>
                </li><!-- clip class  li end 1-->
                
                <li class="contact-fp-wrap"><img src="img/mb1jun.png" alt="헬로키친 전략">
                	<div class="box box2">
                    	<a href="../Hello_tactic.php"></a>
                		<svg><rect class="booton" id="line2"/></svg>
                        
                       <p>
                        	<span>Trendy Life</span><br>
                            대세 라이프스타일에 맞춘<br>
							헬로키친의 전략
						</p>
                        <div class="booton-text">
                                <img src="img/mb1plus1.png" alt="더보기">
                        </div>
                    </div>
                </li><!-- clip class  li end 2-->
                
                <li class="contact-fp-wrap"><img src="img/mb1notice.png" alt="헬로키친 브랜드안내">
                	<div class="box box3">
                    	<a href="../hello_notice.php"></a>
                		<svg><rect class="booton" id="line3"/></svg>
                        <p>
                        	<span>Hello Brand</span><br>
                            여러분 곁의<br>
							헬로키친 브랜드 안내
					   </p>
                        <div class="booton-text">
                                <img src="img/mb1plus1.png" alt="더보기">
                        </div>
                    </div>
                </li><!-- clip class  li end 3-->
                
                <li class="contact-fp-wrap"><img src="img/mb1GGul.png" alt="헬로키친 꿀조합">
                	<div class="box box4">
                    	<a href="../concert/list_img.php"></a>
                		<svg><rect class="booton" id="line4"/></svg>
                        <p>
                        	<span>Food Tip</span><br>
                            활력 넘치는 식탁을 위한<br>
							꿀 조합!
					   </p>
                        <div class="booton-text">
                                <img src="img/mb1plus1.png" alt="더보기">
                        </div>
                    </div>
                </li><!-- clip class  li end 4-->
                
                <li class="contact-fp-wrap"><img src="img/mb1here.png" alt="헬로키친 문의사항">
                	<div class="box box5">
                    	<a href="../qna_list.php"></a>
                		<svg><rect class="booton" id="line5"/></svg>
                        <p>
                        	<span>Inquiry Board</span><br>
                            문의사항이 있다면?<br>
							여기에요, 여기!
					   </p>
                        <div class="booton-text">
                                <img src="img/mb1plus1.png" alt="더보기">
                        </div>
                    </div>
                </li><!-- clip class  li end 5-->
            </ul>
        </article>
        
        <article class="scrollFixR scrollFixR2" id="a2">
        	<ul class="a2ul">
            	<li id="a2ulli1"></li>
                <li id="a2ulli2"> <img src="img/mb2event.png" alt="이벤트">	</li>
                
                
              
            </ul>
        </article>
        <article class="scrollFixR scrollFixR3" id="a3">
        	<ul>
            	  <li id="a3ulli1">
                	<a href="#"><img src="img/mb2event1.png" alt="이벤트1"></a>
                    <p><br>
                    	<span>모바일 전용 할인쿠폰을 아낌없이 뿌립니다!</span><br>
                    	지금 바로 SNS 계정에 공유하고 1만원 상당의 쿠폰을 받아보세요.<br><br><br>
						* 기간 : 2017. 12. 30     ~     2018. 01. 30
                    </p>
                </li>
                <li id="a3ulli2">
                	<a href="#"><img src="img/mb2event2.png" alt="이벤트1"></a>
                    <p><br>
                    	<span>(회원전용)홈페이지 리뉴얼 기념 이벤트</span><br>
                    	이벤트 페이지의 퀴즈 답을 맞춘 후 
                        정답 화면을 캡쳐하시고,직원에게
					    보여주시면 묻지도 따지지도 않고 
                        바로 10%를 할인해드립니다.<br><br><br>
* 기간 : 2017. 12. 30     ~     2018. 01. 30


                    </p>
                </li>
                <li id="a3ulli3">
                	<a href="#"><img src="img/mb2event3.png" alt="이벤트1"></a>
                    <p><br>
                    	<span>나만의 음식 꿀조합은?</span><br>
                    	맛도 좋고 건강에도 좋은 꿀 같은 음식조합을 공유해주세요!<br> 
                        투표와 추첨을 통해 다양한 경품을 집으로 보내드립니다.<br><br><br>
						* 기간 : 2017. 12. 01     ~     2018. 01. 15
                    </p>
                </li>
                <li id="a3ulli4">
                	<a href="#"><img src="img/mb2event4.png" alt="이벤트1"></a>
                    <p><br>
                    	<span>매월 1일은 헬로키친 데이!</span><br>
                    	이번 달의 혜택은? 매월 바뀌는 헬로키친데이의 혜택을 확인하고 부담
없이 즐겨보세요!<br><br><br>
						* 기간 : 2017. 12. 01     ~     2018. 12. 31
                    </p>
                </li>
            </ul>
        </article>
        <article class="scrollFixR scrollFixR4" id="a4">
        	<ul>
            	<li id="a4li1"><a href="#"><img src="img/mb3.png" alt="gallery"></a></li>
            </ul>
        </article>
    </div>
</section>
<footer>
<img src="img/footer.png" alt="풋터">
</footer>
</div>
</body>
</html>
<!--
https://www.youtube.com/watch?v=37ve2th0K_U-->
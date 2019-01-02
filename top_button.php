<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>헬로키친 탑버튼</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
<style>

#top_button{position:fixed; bottom:.2vw; right:1.7vw;z-index:80; opacity:1;}
#top_button>a{display:block; width:8vh; }
img{width:100%; height:100%;border:0}
</style>
<script>
$(document).ready(function(e) {
	
    $('#top_button>a').click(function(e){
		e.preventDefault();
	$('html,body').stop().animate({'scrollTop':0},700);	
	});	
		
		
		
	/*var scrollTop=0;	
	$(window).scroll(function(){
		scrollTop = $('html,body').scrollTop();
		
		if(scrollTop>=100){
			$('#top_button').stop().animate({'opacity':1},700)
			}else{
				$('#top_button').stop().animate({'opacity':0},700)
				}
		});*/
});
</script>
</head>

<body>
<div id="top_button">
    	<a href="#a1">
        	<img src='../img/topbutton.png' alt="위로 올라가기">
        </a>
    </div>
</body>
</html>
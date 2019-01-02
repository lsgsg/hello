<?
session_start();
$table="concert";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>꿀조합 게시판</title>
<link href="../css/list_img_style.css" rel="stylesheet" type="text/css">
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>

<script>
$(document).ready(function(e) {
	var list_item = $('.list_item').width();
    $('.atag').css({'border': '1.4px solid #9ccd62'});
	$('.atag').css({'color': '#9ccd62'});
	$('.list_item').css({'height': list_item});
	//$('#list_item2>a').css({'line-height':list_item/2})
	//$('#foodtipbg').css({'background-attachment':'fixed'});
	/*$(window).on('mousewheel', function(e){ 
if(e.originalEvent.wheelDelta < 0) { 
//scroll down 
$('html, body').stop().animate({ scrollTop : '+=250px' },500); 
}else { 
//scroll up 
$('html, body').stop().animate({ scrollTop : '-=250px' },500); }
 //prevent page fom scrolling return false; 
 }); */

	 
});



</script>

</head>
<?
include "../dbconn.php";



//검색창 21~34번줄 까지
if($_GET[mode]=="search"){
	if(!$_POST[search]){
		echo("
		<script>
			window.alert('검색할 단어를 입력해 주세요');
			history.go(-1);
		</script>
		");
		exit;
		}
		$sql="select * from $table where $_POST[find] like '%$_POST[search]%' order by num desc";
	}else{
		$sql="select * from $table order by num desc";
		}//if($_GET[mode]=="search") end
		
	
	$result=mysql_query($sql, $connect);
	
	$total_record=mysql_num_rows($result);
	
	


	$scale=9;
	//전체 페이지수 ($total_page)계산;
	if($total_record % $scale==0){
		$total_page=floor($total_record/$scale);
		}else{
			$total_page=floor($total_record/$scale)+1;
			}
			
					//현재 화면에 표시되는 페이지의 수
					if(!$_GET[page]){$_GET[page]=1;}
					
	
	
	$start=($_GET[page]-1)*$scale;
	$number=$total_record - $start;
	$now_page=$_GET[page];//a태그로 받을 $i의 숫자
	
	$page_block=3;
	
	//전체 블럭수 (전체 페이지 수 / 현재 페이지);
	$total_block=ceil($total_page/$page_block);//이전 다음 버튼 사이에 있는 것들 3개가 한페이지;
	
	//현재 블럭
	$now_block=ceil($now_page/$page_block);
	
	
?>
<body>
<div id="wrap">
	<header><? include "../top_login.php";?></header>
	<? include "../menu.php";?>
    <? include "../top_button.php";?>
    <div id="logo">
    <a href="../index.php"><img src="../img/helloonlygul.png" alt="로고"></a>
    </div>
    <section>
    <article id="a1">
       		 <div id="subbg1">
             	<ul>
                	<li id="ul1li1">
                    <a href="#">
                        <img src="../img/foodtip.png" alt="Hello Kitchen story">
                    </a>
                    </li>
                </ul>
             </div>
        </article>
    
    <article id="a2">
    	<div id="colOut">
        
        	<form name="board_form" method="post" action="../concert/list_img.php?table=$table&mode=search">
            	<div id="list_search" class="float search-wrapper active">
                
                     
                          <div class="input-holder fIn">
                            
                            <button class="search-icon" type="submit"><span></span></button>
                            <input type="text" class="search-input" placeholder="Search" name="search">
                          </div>
                          
                             <div id="list_S" class="fIn">
                                <div id="list_search0">
                                <select name="find" id="search2">
                                    <option value='subject'>Title</option>
                                    <option value='content'>Contents</option>
                                    <option value="nick">Nickname</option>
                                    <option value='name'>Name</option>
                                </select>
                                </div>
                             </div>
                
               
                    
                </div>
            </form>
              
            <div id="list_content"  class="float">
            <?
            for($i=$start; $i<$start+$scale && $i<$total_record; $i++)//페이지수를 클릭하면 해당 페이지의 레코드를 보여줌 
			{
			//가져올 레코드로 위치(포인터) 이동
					mysql_data_seek($result, $i);//$result=mysql_query($sql, $connect); num기준으로 desc
					//mysql_data_seek : 대상 레코드 중에서 해당 순번에 해당하는 레코드를 가리킨다.
					
					//하나의 레코드 가져오기
					$row=mysql_fetch_array($result);
					$item_num=$row[num];
					$item_id=$row[id];
					$item_name=$row[name];
					$item_nick=$row[nick];
					$item_hit=$row[hit];
					$item_date=$row[regist_day];
					$item_date=substr($item_date, 0, 10);
					$item_subject=str_replace(" ","&nbsp;", $row[subject]);
					
					
					$image_name[0]=$row[file_name_0];
					$image_name[1]=$row[file_name_1];
					$image_name[2]=$row[file_name_2];

					$image_copied[0]=$row[file_copied_0];
					$image_copied[1]=$row[file_copied_1];
					$image_copied[2]=$row[file_copied_2];

		if($image_copied[0]){
		$imageinfo=GetImageSize("./data/".$image_copied[$i]);
		
		$image_width[0]=$imageinfo[0];
		$image_height[0]=$imageinfo[1];
		$image_type[0]=$imageinfo[2];
		
		if($image_width[0]>785){$image_width[$i]=785;}
		}else{
			$image_width[0]="";
			$image_height[0]="";
			$image_type[0]="";
			}
			
			?>
           
                <div class="list_item">
                	<?
                
					if($image_copied[0])
					{
						$img_name=$image_copied[0];
						$img_name="./data/".$img_name;
						$img_width=$image_width[0];
						
						echo "<img src='$img_name' width='$img_width'>";
						}
					
				?>
                	<!--<div id="list_item1"><? //$number ?></div>-->
                    <div id="list_item2">
                	<a href="../concert/view_img.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$_GET[page]?>">
                    	<p><?=$item_subject ?></p>
                    </a>
                	</div>
                    <div id="list_item3"><?= $item_nick  ?></div>
                    <!--<div id="list_item4"><?= $item_date ?></div>-->
                    <div id="list_item5">
                        <img src="../img/view.png" alt="조회수">
                        <p><?= $item_hit ?></p>
                    </div>
                    <div id="hoverme"></div>
                    </div><!--list_item end-->
                 <?
			$number--;
				}// for($i=$start; $i<$start+$scale && $i<$total_record; $i++) end
			?>
                
            </div><!--list_content end-->
       	<div id="page_button"  class="float">
            	<div id="page_num">
                	<div id="page_num_in">
                	<?
					if(1<$now_block)
					{
						$pre_page=($now_block-1) * $page_block;
						}
						echo '<a href="../concert/list_img.php?page='.$pre_page.'">◀ </a>';
						$start_page=($now_block -1) * $page_block +1;
						$end_page=$now_block * $page_block;
						//총 페이지와 마지막 페이지를 같게 하기, 즉 글이 있는 페이지까지만 설정
						if($end_page > $total_page)
						{
							$end_page = $total_page;
							}
						
						//게시판 목록 하단에 페이지 번호 출력(페이지 링크)=$page
						for($i=$start_page; $i <= $end_page; $i++){
							
							
							//현재 페이지라면
			if($_GET[page]==$i){
				echo "<a class='pagea'>$i</a>";		
			//현재 페이지가 아니라면
			}else{
				echo "<a  class='page_num page_num2' href='../concert/list_img.php?page=$i'>$i</a>";	
			}
							}
							
						if($now_block <$total_block)
						{
							$post_page=$now_block * $page_block +1;
							}
						echo '<a href="../concert/list_img.php?page='.$post_page.'"> ▶ </a>';
					?>
               		</div>
                    <div id="list">
                         
                           
                       	<a href="../concert/list_img.php?table=<?=$table?>&page=<?=$page?>">List</a>
                        <a href="../concert/write_form_img.php?table=<?=$table?>">Write</a>
                        
                    </div> 
                	
                </div><!--page_num end-->
                <div id="list_search1">
                    ▶ 총 <?= $total_record ?>개의 게시물이 있습니다.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div><!--page_button end--> 
        </div>
         
        </article>
    </section>
     
	<footer>
    <p>ⓒCoding by LSG, Design by LMS, All Right Reserved</p>
    </footer>
</div>	
                    



    



</body>
</html>
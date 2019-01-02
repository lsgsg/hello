<?
session_start();
$table="qna";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>헬로키친 문의게시판</title>
<link href="css/list_img_style.css" rel="stylesheet" type="text/css">
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>

<script>
$(document).ready(function(e) {
	var list_item = $('.list_item').width();
    $('.atag').css({'border': '1.4px solid #9ccd62'});
	$('.atag').css({'color': '#9ccd62'});
	


	 
});
</script>
</head>
<?
include "dbconn.php";
$scale=10;

if($_GET[mode]=="search")
{
	if(!$_POST[search]){
	echo("
	<script>
	window.alert('검색할 단어를 입력해 주세요!);
	history.go(-1);
	</script>
	");	
	exit;
	}
	$sql="select * from $table where $_POST[find] like '%$_POST[search]%' order by num desc";
}else{
	$sql="select * from $table order by group_num desc, ord asc";
}

$result=mysql_query($sql, $connect);
$total_record=mysql_num_rows($result);

if($total_record % $scale==0){
$total_page=floor($total_record/$scale);	
}else{
$total_page=floor($total_record/$scale)+1;		
}

if(!$_GET[page]){$_GET[page]=1;}
$start=($_GET[page]-1)*$scale;
$number=$total_record - $start;
$now_page=$_GET[page];
$page_block=3;
$total_block=ceil($total_page/$page_block);
$now_block=ceil($now_page/$page_block);
?>
<body>
<div id="wrap">
	<header><? include "top_login.php";?></header>
	<? include "menu.php";?>
    <? include "top_button.php";?>
    <div id="logo">
    <a href="index.php"><img src="../img/helloonlygul.png" alt="로고"></a>
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
        
        	<form name="board_form" method="post" action="qna_list.php?table=$table&mode=search">
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
            <div class="list_itemm">
             
                	<div class="list_itemm1">번호</div>
                    <div class="list_itemm22">제목</div>
                    <div class="list_itemm3">글쓴이</div>
                    <div class="list_itemm4">등록일</div>
                    <div class="list_itemm5">조회</div>
                    
                </div><!--list_item end-->
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
					$item_depth=$row[depth];
					
					$space="";
					for($j=0; $j<$item_depth; $j++){$space="&nbsp;&nbsp;".$space;}
			
			?>
           		 
                <div class="list_itemm">
             
                	<div class="list_itemm1"><?=$number ?></div>
                    <div class="list_itemm2">
                    <?= $space ?>
                	<a href="qna_view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$_GET[page]?>">
                    	<?=$item_subject ?>
                    </a>
                	</div>
                    <div class="list_itemm3"><?= $item_nick ?></div>
                    <div class="list_itemm4"><?= $item_date ?></div>
                    <div class="list_itemm5"><?= $item_hit ?></div>
                    
                    </div><!--list_item end-->
                 <?
			$number--;
				}
			?>
                
            </div><!--list_content end-->
            <div class="clear float"></div>
       	<div id="page_button"  class="float">
            	<div id="page_num">
                	<div id="page_num_in">
                	<?
					if(1<$now_block)
					{
						$pre_page=($now_block-1) * $page_block;
						}
						echo '<a href="../qna_list.php?page='.$pre_page.'">◀ </a>';
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
				echo "<a  class='page_num page_num2' href='../qna_list.php?page=$i'>$i</a>";	
			}
							}
							
						if($now_block <$total_block)
						{
							$post_page=$now_block * $page_block +1;
							}
						echo '<a href="../qna_list.php?page='.$post_page.'"> ▶ </a>';
					?>
               		</div>
                    <div id="list">
                         
                           
                       	<a href="../qna_list.php?table=<?=$table?>&page=<?=$page?>">List</a>
                        <a href="../qna_write_form.php?table=<?=$table?>">Write</a>
                        
                    </div> 
                	
                </div><!--page_num end-->
                <div id="list_search1">
                    ▶ 총 <?= $total_record ?>개의 게시물이 있습니다.
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
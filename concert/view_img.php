<?
session_start();
include "../dbconn.php";

$sql="select * from $_GET[table] where num=$_GET[num]";
$result=mysql_query($sql,$connect);
$row=mysql_fetch_array($result);

$item_num=$row[num];
$item_id=$row[id];
$item_name=$row[name];
$item_nick=$row[nick];
$item_hit=$row[hit];

$image_name[0]=$row[file_name_0];
$image_name[1]=$row[file_name_1];
$image_name[2]=$row[file_name_2];

$image_copied[0]=$row[file_copied_0];
$image_copied[1]=$row[file_copied_1];
$image_copied[2]=$row[file_copied_2];

$item_date=$row[regist_day];
$item_subject=str_replace(" ","&nbsp;", $row[subject]);
$item_content=$row[content];
$is_html=$row[is_html];

if($is_html !="y")
{
	$item_content=str_replace(" ","&nbsp;",$item_content);
	$item_content=str_replace("\n","<br>",$item_content);
	
	
	}
for($i=0; $i<3; $i++){
	if($image_copied[$i]){
		$imageinfo=GetImageSize("./data/".$image_copied[$i]);
		
		$image_width[$i]=$imageinfo[0];
		$image_height[$i]=$imageinfo[1];
		$image_type[$i]=$imageinfo[2];
		
		if($image_width[$i]>785){$image_width[$i]=785;}
		}else{
			$image_width[$i]="";
			$image_height[$i]="";
			$image_type[$i]="";
			}
	}
	
	//글 조회수 증가
	
	$new_hit=$item_hit +1;
	$sql="update $_GET[table] set hit=$new_hit where num=$_GET[num]";
	mysql_query($sql, $connect);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>꿀조합 게시판</title>
<link href="../css/view_imgcss.css" rel="stylesheet" type="text/css">
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>

<script>
$(document).ready(function(e) {

    $('.atag').css({'border': '1.4px solid #9ccd62'});
	$('.atag').css({'color': '#9ccd62'});
	
	});

function del(href){
	if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다. \n\n 정말 삭제하시겠습니까?")){
		document.location.href=href;
		}
	}
</script>
</head>

<body>
<div id="wrap">
<header><? include "../top_login.php";?></header>
<? include "../menu.php";?>
<div id="logo">
    <a href="../index.php"><img src="../img/helloonlygul.png" alt="로고"></a>
</div>
<section>
 <div id="col2">
       

        <div id="view_title">
        	<div id="view_title1">
            	<?=$item_subject?>
            </div>
            <div id="view_title2">
               <ul>
            		<li id="itemli1"><?=$item_nick?></li>
                	<li id="itemli2">
						<img src="../img/view.png" alt="조회수">
                    	<P><?=$item_hit?> </P>
                    </li>
                	
               </ul>
            </div>
       </div><!--view_title end-->
            <div id="view_content">
            	<div class="view_cclear"></div>
                    <div id="view_content1">
                    <?
                    for($i=1; $i<3; $i++)
                    {
                        if($image_copied[$i])
                        {
                            $img_name=$image_copied[$i];
                            $img_name="./data/".$img_name;
                            $img_width=$image_width[$i];
                            
                            echo "<img src='$img_name' width='$img_width'>";
                            }
                        }
                    ?>
                    </div>
                <div class="view_cclear"></div>
                <?=$item_content ?>
            </div><!--view_content end-->
            <div id="item_date"><?=$item_date ?></div>
            <div id="view_button">
            	<a href="../concert/list_img.php?table=<?=$_GET[table]?>&page=<?=$page?>">목록</a>&nbsp;
                
               <?
                if($_SESSION[userid]==$item_id || $_SESSION[userid]=="admin"){
					
					
				?>
                <a href="../concert/write_form_img2.php?table=<?=$_GET[table]?>&mode=modify&num=<?=$_GET[num]?>&page=<?=$_GET[page]?>">수정 </a>
                                                    <a href="javascript:del('../concert/delete_img.php?table=<?=$_GET[table]?>&num=<?=$_GET[num]?>')">삭제</a>

                <?
                }
				?>
                <?
                if($_SESSION[userid]){
					?>
                    <a href="../concert/write_form_img.php?table=<?=$_GET[table]?>">다른 글쓰기</a>

                    <?
					}
					?>
				
            </div>
        <div class="clear"></div>
        </div><!--col2 end-->
</section>
<footer>
    <p>ⓒCoding by LSG, Design by LMS, All Right Reserved</p>
    </footer>


</div>

</body>
</html>
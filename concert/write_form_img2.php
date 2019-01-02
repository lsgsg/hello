<?
session_start();
?>
<meta charset="utf-8">
<?
include "../dbconn.php";

if(!$_SESSION[userid]) {
		echo("
		<script>
	     window.alert('로그인 후 이용해 주세요.')
	     history.go(-1)
	   </script>
		");
		exit;
	}



$userid=$_SESSION[userid];
$username	=$_SESSION[username];
$usernick=$_SESSION[usernick];
$subject=$_POST[subject];
$content=$_POST[content];
$regist_day=$_POST[regist_dat];
$is_html=$_POST[is_html];
$upfile[]=$_POST['upfile[]'];
$del_file[]=$_POST['del_file[]'];



$sql="SELECT * FROM $_GET[table] WHERE num=$_GET[num]";
	$result=mysql_query($sql, $connect);
	$row=mysql_fetch_array($result);
	
	$item_subject=$row[subject];
	$item_content=$row[content];
	
	$item_file_0=$row[file_name_0];
	$item_file_1=$row[file_name_1];
	$item_file_2=$row[file_name_2];
	
	$copied_file_0=$row[file_copied_0];
	$copied_file_1=$row[file_copied_1];
	$copied_file_2=$row[file_copied_2];

?>
<!doctype html>
<html>
<head>

<title>꿀조합 게시판</title>
<link href="../css/write_form_imgcss.css" rel="stylesheet" type="text/css">
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
<script>
	function check_input(){
		if(!document.board_form.subject.value){
			alert("제목을 입력하세요!");
			document.board_form.subject.focus();
			return;
			}
		if(!document.board_form.content.value){
			alert("내용을 입력하세요");
			document.board_form.content.focus();
			return;
			}
		document.board_form.submit();
		}
$(document).ready(function(e) {
    $('.atag').css({'border': '1.4px solid #9ccd62'})
	$('.atag').css({'color': '#9ccd62'})
	

	
});
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
	<div id="bonmun">
    
        <form name="board_form" method="post" action="../concert/insert_img2.php?mode=modify&num=<?=$_GET[num]?>&page=<?=$_GET[page]?>&table=<?=$_GET[table]?>" enctype="multipart/form-data">


        <div class="col1">
        	<input type="text" name="subject" value="<?= $item_subject ?>" placeholder="Title">
        </div>
        <div class="col2">
        	  <label>HTML 쓰기  	<input type="checkbox" name="html_ok" value="y"></label>
			<p><?= $_SESSION[usernick] ?></p>
        </div>
        
        <div class="col3">
        <textarea rows="30" cols="102" name="content" placeholder=" Content "><?=$item_content?></textarea>
                    
        </div>
  			<div class="col4">
            	<label>썸네일 변경&nbsp;&nbsp;&nbsp;</label><input type="file" name="upfile[]">
                <span>(가로 세로 픽셀 동일)</span>
            </div>
          
            <div class="col5">
            	<label>이미지 변경1&nbsp;&nbsp;</label><input type="file" name="upfile[]">
            </div>
      
            <div class="col5">
            	<label>이미지 변경2&nbsp;&nbsp;</label><input type="file" name="upfile[]">
            </div>
              

            
			<div class="clear"></div>
            <div class="delete_ok">
				<?=$item_file_0?>
            	썸네일이 등록되어 있습니다.
                <input type="checkbox" name="del_file[]" value="0">
                삭제
            </div>
            

           
			
            <div class="delete_ok">
				<?=$item_file_1?>
            	파일이 등록되어 있습니다.
                <input type="checkbox" name="del_file[]" value="1">
                삭제
            </div>

            

            <div class="delete_ok">
				<?=$item_file_2?>
            	파일이 등록되어 있습니다.
                <input type="checkbox" name="del_file[]" value="2">
                삭제
            </div>
            
			<div class="clear"></div>
            <div id="write_button">
            	<a href="#">	<input type="button" onClick="check_input()" value="저장"></a>
                <a href="../concert/list_img.php?table=<?=$_GET[table]?>&page=<?=$_GET[page]?>">
            	목록
            	</a>
            </div>
            <div class="clear"></div>
            </form>
    </div><!--bonmun end-->
</section>
<footer>
    ⓒCoding by LSG, Design by LMS, All Right Reserved
</footer>
</div>
</body>
</html>
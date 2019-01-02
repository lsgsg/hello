<?
   session_start();

   include "dbconn.php";

   $sql = "delete from $_GET[table] where num = $_GET[num]";
   mysql_query($sql, $connect);

   mysql_close();

   echo "
	   <script>
	    location.href = 'qna_list.php?table=$_GET[table]';
	   </script>
	";
?>
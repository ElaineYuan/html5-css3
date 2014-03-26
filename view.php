<?php   
  $link=mysql_connect("localhost","pianpian","ypp");   
  if(!$link) echo "没有连接成功!";   
  else echo "连接成功!";   
?>
<?php  
  mysql_select_db("pianpianDB", $link);          //选择数据库  
  $q ="SELECT * FROM `wp_pp_posts` WHERE `post_status`=\"publish\" and `post_title`=\"游记-HK\"";    //SQL查询语句  
  mysql_query("SET NAMES utf8");           
  $rs = mysql_query($q, $link);                     //获取数据集  
  if(!$rs){die("Valid result!");}  
  echo "<table>";  
  echo "<tr><td>post_content</td><td>post_title</td></tr>";  
  while($row = mysql_fetch_row($rs)) echo "<tr><td>$row[4]</td><td>$row[5]</td></tr>";   //显示数据  
  echo "</table>";  
  mysql_free_result($rs);                    //关闭数据集  
?>  	

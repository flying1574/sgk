<html>
<head>
<title>CNSEU�繤���ѯ</title>
</head>
<body onLoad="document.form1.a1.select();" background="logo�ĵ�ַ" ondragstart="return false" oncontextmenu="return false" onselectstart="return false" onselect=document.selection.empty()>
<div align="center"><b>CNSEU�繤���ѯ</b></div>
<br>
<br>
<br>
<br>
<div align="center"><form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
������Ŀ�꣺<input type="text" name="search">
<input type="submit" name="submit" value="��ѯ">
<input type="reset" name="submit2" value="��������">
</form></div>

<?php
$link = mysql_connect("localhost", "root", "root");
mysql_select_db("somd5");
//mydatabase bbs
$search=$_POST['search'];
if(!empty($_POST['search'])){
//$sql="SELECT * FROM bbs WHERE name = '$search'";
$sql="SELECT * FROM bbs WHERE name = '$search' or email = '$search'";
}else{
  echo "��������Ϊ��";
  exit();
}
//echo $sql;
$query=mysql_query($sql);
?>

<div align="center"><table>
    <tr height="20">
    <td width="10%">�ʺ�</td>
    <td width="32%">����</td>
    <td width="6%">salt</td>
    <td width="20%">����</td>
    <td width="8%">site</td>
    <td width="25%">ip</td>
    </tr></div>
<?php
while($row=mysql_fetch_assoc($query))
{
    ?>
    
    <tr>
    <td width="10%"><?=$row['name']?></td>
    <td width="32%"><?=$row['pass']?></td>
    <td width="6%"><?=$row['salt']?></td>
    <td width="20%"><?=$row['email']?></td>
    <td width="8%"><?=$row['site']?></td>
    <td width="25%"><?=$row['ip']?></td>
    </tr>
    
    <?php
}
mysql_close($link);//���������Ҫ����Ҫ�ر� 
?>
</table>
    
</body>
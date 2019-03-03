<html>
<head>
<title>QQ信息查询</title>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<style type="text/css">
*{font-family:Tahoma, Arial, Helvetica, Sans-serif,"宋体";}
table{

	margin:0px auto;
	font:Georgia 11px;
	font-size:12px;
	color:#333333;
	text-align:center;
	border-collapse:collapse;/*细线表格代码*/
}
table td{
	border:1px solid #999;/*细线表格线条颜色*/
	height:22px;
}
caption{text-align:center;font-size:12px;font-weight:bold;margin:0 auto;}
tr.t1 td {background-color:#fff;}
tr.t2 td {background-color:#eee;}
tr.t3 td {background-color:#ccc;}
th,tfoot tr td{font-weight:bold;text-align:center;background:#c5c5c5;}
th{line-height:30px;height:30px;}
tfoot tr td{background:#fff;line-height:26px;height:26px;}
thead{border:1px solid #999;}
thead tr td{text-align:center;}
#page{text-align:center;float:right;}
#page a,#page a:visited{width:60px;height:22px;line-height:22px;border:1px black solid;display:block;float:left;margin:0 3px;background:#c9c9c9;
text-decoration:none;}
#page a:hover{background:#c1c1c1;text-decoration:none;}
.grayr {padding:2px;font-size:11px;background:#fff;float:right;}
.grayr a {padding:2px 5px;margin:2px;color:#000;text-decoration:none;;border:1px #c0c0c0 solid;}
.grayr a:hover {color:#000;border:1px orange solid;}
.grayr a:active {color:#000;background: #99ffff}
.grayr span.current {padding:2px 5px;font-weight:bold; margin:2px; color: #303030;background:#fff;border:1px orange solid;}
.grayr span.disabled {padding:2px 5px;margin:2px;color:#797979;background: #c1c1c1;border:1px #c1c1c1 solid;}
body,td,th {
	color: #000;
}
body {
	color: #000;
}
</style>
</head>
<style type="text/css">
<!--body {background:black;}-->/*背景颜色*/
</style><font size="3">
<body>
<a href="/index.php">群信息搜索</a>&nbsp;|&nbsp;
<a href="/sgk.php">社工库</a></div>

<font color=#0096ff face=黑体>
<body>
<table align="center">
  <caption><div style="font-size: 24px; color: #FFFFFF; margin-bottom:10px;">QQ信息查询</div>
  </caption>

  <thead>
  <tr>
  <td colspan="10" align="center" valign="middle">
    
    <form name="form1" method="post" action="">
    <select name="choose">
      <option value="xxx">查询QQ群</option>
      <option value="qq" selected="selected" >查询QQ号</option>
    </select>
  <input name="key" type="text">
 <input type="submit"  name="submit" value="Search">
  </form>
    
  </td>
    </tr>
  
    <tr>
      <th>QQ</th>
      <th>姓名</th>
      <th>年龄</th>
      <th>性别</th>
      <th>群号</th>
    </tr>
  </thead>
  <tbody id="tab">
<?php
include "conn.php";
if(isset($_POST['submit'])){
		$post=$_POST['key'];
		$choose=$_POST['choose'];
		$db =array("qundata_1","qundata_2","qundata_3","qundata_4","qundata_5","qundata_6","qundata_7","qundata_8","qundata_9","qundata_10","qundata_11","qundata_12","qundata_13","qundata_14","qundata_15","qundata_16","qundata_17","qundata_18","qundata_19","qundata_20");

	if($choose =="qq"){
		$db_num=count($db);
				for($i=0;$i<$db_num;$i++){
			$sql ="select (case Gender when 0 then'男' else '女' end)Gender,QQNum,Nick,QunNum,(Age+3)Age from $db[$i] where QQNum = '$post'"; 	
			$rs = mysql_query($sql);
	
			while ($row = mysql_fetch_array($rs)){
			echo "<tr>
			<td>".$row['QQNum']."</a></td>
			<td>".$row['Nick']."</td>
			<td>".$row['Age']."</td>
			<td>". $row['Gender']."</td>
			<td>".$row['QunNum']."</td>
			</tr>";
			}
	}
	
	}else{
		$db_num=count($db);
				for($i=0;$i<$db_num;$i++){
			$sql ="select (case Gender when 0 then'男' else '女' end)Gender,QQNum,Nick,QunNum,(Age+3)Age from $db[$i] where QunNum = '$post'"; 	
			$rs = mysql_query($sql);
	
			while ($row = mysql_fetch_array($rs)){
			echo "<tr>
			<td>".$row['QQNum']."</td>
			<td>".$row['Nick']."</td>
			<td>".$row['Age']."</td>
			<td>". $row['Gender']."</td>
			<td>".$row['QunNum']."</td>
			</tr>";
				}
		}
	 
	} 
		

}


?>
  </tbody>
  <tfoot>
  </tfoot>
</table>

<script type="text/javascript">
<!--
var Ptr=document.getElementById("tab").getElementsByTagName("tr");
function $() {
    for (i=1;i<Ptr.length+1;i++) { 
    Ptr[i-1].style.backgroundColor = (i%2>0)?"#fff":"#eee"; 
    }
}
window.onload=$;
for(var i=0;i<Ptr.length;i++) {
    Ptr[i].onmouseover=function(){
    this.tmpClass=this.className;
    this.style.backgroundColor = "#ccc";
    
    };
    Ptr[i].onmouseout=function(){
    for (i=1;i<Ptr.length+1;i++) { 
    Ptr[i-1].style.backgroundColor = (i%2>0)?"#eee":"#fff"; 
    }
	}
}
//-->
</script>
</body>
</html>

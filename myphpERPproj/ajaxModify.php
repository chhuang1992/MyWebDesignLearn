<?php

include_once("conn.php");

$dataset = $_GET['dataset'];
$imageID = $_GET['imageID'];
$myinput = $_GET['input'];

if($dataset==1)
{
	$sql_update = "update July6CharRuleConfidence ";
}
if($dataset==2)
{
	$sql_update = "update TestCharRuleConfidence ";
}

$sql_update.="set RecResultBetter = '$myinput', ROrWBetter=1, Evaluate=1 ";
$sql_update.="where PicNumber=$imageID"; 

$conn->Execute($sql_update);

echo "已执行修改，结果如下：";

if($dataset==1)
{
	$image_file = "Dataset1/".$imageID.".jpg";
}
if($dataset==2)
{
	$image_file = "Dataset2/test".$imageID.".jpg";
}

echo "<table border=\"1\">
	<tr>
	<th>图号&nbsp;&nbsp;</th>
	<th>最终结果</th>
	<th>原图像</th>
	</tr>";
	
echo "<td style='font-size:36px;'>$imageID</td>
	<td style='font-size:48px;'><center>&nbsp;$myinput &nbsp;</center></td>
	<td><img src=$image_file /></td>
	</tr></table>";

?>
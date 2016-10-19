<?php

include_once("conn.php");

$dataset = $_GET['dataset'];
$imageID = $_GET['imageID'];

   if($dataset==1)
   {
	  $sql="select * from July6CharRuleConfidence where PicNumber= $imageID";
   }
   if($dataset==2)
   {
	  $sql="select * from TestCharRuleConfidence where PicNumber= $imageID";
   }
   
    $rs = $conn->Execute($sql);
	$recognition_resultb=$rs->Fields['RecognitionResultb']->Value;

if($dataset==1)
{
	$sql_update = "update July6CharRuleConfidence ";
}
if($dataset==2)
{
	$sql_update = "update TestCharRuleConfidence ";
}

$sql_update.="set RecResultBetter = '$recognition_resultb', ROrWBetter=1, Evaluate=1 ";
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
	<td style='font-size:48px;'><center>&nbsp;{$recognition_resultb}&nbsp;</center></td>
	<td><img src=$image_file /></td>
	</tr></table>";
?>
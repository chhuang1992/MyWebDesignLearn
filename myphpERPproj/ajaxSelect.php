<?php

include_once("conn.php");

$dataset = $_GET['dataset'];
$imageID = $_GET['imageID'];

$sql="select * from July6CharRuleConfidence ";
if($dataset==2)
{
	$sql="select * from TestCharRuleConfidence ";
}

if($imageID=="")
{
	$sql.="where Evaluate= 2 order by PicNumber";
}
else
{
	$sql.="where PicNumber = $imageID";
}

$rs = $conn->Execute($sql);

	echo "<table border=\"1\">
	<tr>
	<th>图号</th>
	<th>分类器1</th>
	<th>分类器2</th>
	<th>更好结果</th>
	<th>原图像</th>
	</tr>";

	$number = 0;
	$number_rec_right = 0;
	$number_rec_wrong = 0;

	while(!$rs->EOF)
	{
	
		$pic_number=$rs->Fields['PicNumber']->Value;
		$char_right=$rs->Fields['CharRight']->Value;    
		$recognition_result=$rs->Fields['RecognitionResult']->Value;
		$right_or_wrong=$rs->Fields['RightOrWrong']->Value;
		$encode_rule=$rs->Fields['EncodeRule']->Value;
		$char_confidence=$rs->Fields['CharConfidence']->Value;
		$recognition_resultb=$rs->Fields['RecognitionResultB']->Value;
		$right_or_wrongb=$rs->Fields['RightOrWrongB']->Value;
		$encode_ruleb=$rs->Fields['EncodeRuleB']->Value;
		$char_confidenceb=$rs->Fields['CharConfidenceB']->Value;
		$rec_result_better=$rs->Fields['RecResultBetter']->Value;
		$r_or_w_better=$rs->Fields['ROrWBetter']->Value;
		$is_same=$rs->Fields['IsSame']->Value;
		$evaluate=$rs->Fields['Evaluate']->Value;
	
		if($dataset==1)
		{
			$image_file = "Dataset1/".$pic_number.".jpg";
		}
		if($dataset==2)
		{
			$image_file = "Dataset2/test".$pic_number.".jpg";
		}

		echo "<tr>";
	
		if($is_same==0)
		{		
			echo "<td style='font-size:36px;'>$pic_number</td>
				<td style='font-size:48px;'><center>&nbsp;$recognition_result&nbsp;</center></td>
				<td style='font-size:48px;'><center>&nbsp;$recognition_resultb&nbsp;</center></td>
				<td style='font-size:48px;'><center>&nbsp;$rec_result_better&nbsp;</center></td>
				<td><img src=$image_file /></td>
				</tr>";
		}
		if($is_same==1)
		{
			echo "<td style='font-size:36px;'>$pic_number</td>
				<td style='font-size:48px;'><center>&nbsp;&nbsp;</center></td>
				<td style='font-size:48px;'><center>&nbsp;&nbsp;</center></td>
				<td style='font-size:48px;'><center>&nbsp;$rec_result_better&nbsp;</center></td>
				<td><img src=$image_file /></td>
				</tr>";
		     
		}

		$rs->MoveNext();

	}

	echo "</table>";
?>
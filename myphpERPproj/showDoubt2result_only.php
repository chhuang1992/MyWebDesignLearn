<html>
<body>

<?php

include_once("conn.php");

$sql="select * from TestCharRuleConfidence where Evaluate= 2";
$rs = $conn->Execute($sql);

echo "<table border=\"1\"><h1>
<tr>
<th>图号&nbsp;&nbsp;</th>
<th>分类器1</th>
<th>分类器2</th>
<th>更好结果</th>
<th>&nbsp;评价&nbsp;</th>
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
	
	$image_file = "Dataset2/test".$pic_number.".jpg";

	if($r_or_w_better==1)
	{
		echo "<tr>";
		$number_rec_right++;		
	}	    
	if($r_or_w_better==0)
	{
		echo "<tr bgcolor=\"yellow\">";
		$number_rec_wrong++;
	}
	    	
	
	if($is_same==0)
	{		
		echo "<td>$pic_number</td>
		     <td><center>&nbsp;&nbsp;$recognition_result&nbsp;&nbsp;</center></td>
		     <td><center>&nbsp;&nbsp;$recognition_resultb&nbsp;&nbsp;</center></td>
		     <td><center>&nbsp;&nbsp;$rec_result_better&nbsp;&nbsp;</center></td>
		     <td><center>$evaluate</center></td>
			 <td><img src=$image_file /></td>
		     </tr>";
	}
	if($is_same==1)
	{
		echo "<td>$pic_number</td>
		     <td><center>&nbsp;&nbsp;</center></td>
		     <td><center>&nbsp;&nbsp;</center></td>
		     <td><center>&nbsp;&nbsp;$rec_result_better&nbsp;&nbsp;</center></td>
		     <td><center>$evaluate</center></td>
			 <td><img src=$image_file /></td>
		     </tr>";
		     
	}
		  
    $number++;
    $rs->MoveNext();

}

    echo "评价为疑似的结果共 $number 例，
	      其中正确识别 $number_rec_right 例，
	      错误识别 $number_rec_wrong 例，
		  表中标记为黄色背景";
	echo "</h1></table>";
	

?>
</body>
</html>
<?php

      $rs->Close();
      $conn->Close();
      $rs = null;
      $conn = null;
?>
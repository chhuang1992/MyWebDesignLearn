<?php
   
   include_once("conn.php");
   
   // Retrieve data from Query String
   $confidence = $_GET['confidence'];
   $evaluation = $_GET['evaluation'];
   $isSame = $_GET['isSame'];
   
   //build query
   $query = "SELECT * FROM July6CharRuleConfidence WHERE IsSame = $isSame";
   
   if(is_numeric($isSame))
   $query .= " AND CharConfidence >= $confidence";
   
   if(is_numeric($evaluation))
   $query .= " AND Evaluate = $evaluation";
   
   //Execute query
   $rs = $conn->Execute($query);
   
   echo "<table border=\"1\">
<tr>
<th>图号&nbsp;&nbsp;</th>
<th>正确结果</th>
<th>分类器1</th>
<th>&nbsp;正误&nbsp;</th>
<th>&nbsp;编码规则&nbsp;</th>
<th>置信度</th>
<th>分类器2</th>
<th>&nbsp;正误&nbsp;</th>
<th>&nbsp;编码规则&nbsp;</th>
<th>置信度</th>
<th>更好结果</th>
<th>&nbsp;正误&nbsp;</th>
<th>&nbsp;一致性&nbsp;</th>
<th>&nbsp;评价&nbsp;</th>
</tr>";
   
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
	    	
	echo "<td>$pic_number</td>
          <td><center>&nbsp;&nbsp;$char_right&nbsp;&nbsp;</center></td>
		  <td><center>&nbsp;&nbsp;$recognition_result&nbsp;&nbsp;</center></td>
		  <td><center>$right_or_wrong</center></td>
		  <td><center>$encode_rule</center></td>
		  <td><center>&nbsp;&nbsp;$char_confidence&nbsp;&nbsp;</center></td>
		  <td><center>&nbsp;&nbsp;$recognition_resultb&nbsp;&nbsp;</center></td>
		  <td><center>$right_or_wrongb</center></td>
		  <td><center>$encode_ruleb</center></td>
		  <td><center>&nbsp;&nbsp;$char_confidenceb&nbsp;&nbsp;</center></td>
		  <td><center>&nbsp;&nbsp;$rec_result_better&nbsp;&nbsp;</center></td>
		  <td><center>$r_or_w_better</center></td>
		  <td><center>$is_same</center></td>
		  <td><center>$evaluate</center></td>
		  </tr>";

    $rs->MoveNext();

}

echo "</table>";
?>
<html>
<body>
<?php

include_once("conn.php");

echo "<table border=\"1\">
<tr>
<th>ͼ��&nbsp;&nbsp;</th>
<th>��ȷ���</th>
<th>������1</th>
<th>&nbsp;����&nbsp;</th>
<th>&nbsp;�������&nbsp;</th>
<th>���Ŷ�</th>
<th>������2</th>
<th>&nbsp;����&nbsp;</th>
<th>&nbsp;�������&nbsp;</th>
<th>���Ŷ�</th>
<th>���ý��</th>
<th>&nbsp;����&nbsp;</th>
<th>&nbsp;һ����&nbsp;</th>
<th>&nbsp;����&nbsp;</th>
</tr>";

for ($id=1;$id<=3936;$id++)
{
	$sql="select * from TestCharRuleConfidence where picNumber= $id";
    $rs = $conn->Execute($sql);
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

	if($evaluate==1)
	    echo "<tr>";
	if($evaluate==0)
	    echo "<tr bgcolor=\"yellow\">";
	if($evaluate==2)
	    echo "<tr bgcolor=\"green\">";
	
	
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
		  
}

echo "</table>";

?>
</body>
</html>
<?php

      $rs->Close();
      $conn->Close();
      $rs = null;
      $conn = null;
?>
<html>
<body>
<?php

include_once("conn.php");

$sql="select * from July6CharRuleConfidence where Evaluate= 2";
$rs = $conn->Execute($sql);

echo "<table border=\"1\">
<tr>
<th>ͼ��</th>
<th>��ȷ���</th>
<th>������1</th>
<th>����</th>
<th>�������</th>
<th>���Ŷ�</th>
<th>������2</th>
<th>����</th>
<th>�������</th>
<th>���Ŷ�</th>
<th>���ý��</th>
<th>����</th>
<th>һ����</th>
<th>����</th>
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
		  
    $number++;
    $rs->MoveNext();

}
	
    echo "����Ϊ���ƵĽ���� $number ����
	      ������ȷʶ�� $number_rec_right ����
	      ����ʶ�� $number_rec_wrong ����
		  ���б��Ϊ��ɫ����";
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
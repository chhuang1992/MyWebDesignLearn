<?php
   
   include_once("conn.php");
   
   // Retrieve data from Query String
   $dataset = $_GET['dataset'];
   $imageID = $_GET['imageID'];
   $right = $_GET['right'];
   $isSame = $_GET['isSame'];
   $evaluate = $_GET['evaluate'];
   $picture = $_GET['picture'];
   
   //build query
   
   $query="select * from July6CharRuleConfidence ";
   if($dataset==2)
   {
		$query="select * from TestCharRuleConfidence ";
   }
         
   if($imageID==0)
   {
	   if($right!=-1 || $isSame!=-1 || $evaluate!=-1)
		  $query .=" where ";
	   if($right!=-1)
	      $query .=" ROrWBetter = $right ";
	   if($right!=-1 && $isSame!=-1)
		  $query .="AND";
	   if($isSame!=-1)
	      $query .=" IsSame = $isSame ";
	   if(($right!=-1 || $isSame!=-1) && $evaluate!=-1)
		  $query .="AND";
	   if($evaluate!=-1)
	      $query .=" Evaluate = $evaluate ";
	   $query .="order by PicNumber";
   }
   else
   {
	   $query .="where PicNumber = $imageID ";
   }
   
   
   //Execute query
   $rs = $conn->Execute($query);

if($picture==0)
{
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

	$number=0;
   
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
		$number++;
		$rs->MoveNext();

	}

	echo "<p style='font-size:24px;'>结果共 $number 例";
	echo "</table>";
}
if($picture==1)
{
	echo "<table border=\"1\">
	<tr>
	<th>图号&nbsp;&nbsp;</th>
	<th>分类器1</th>
	<th>分类器2</th>
	<th>更好结果</th>
	<th>&nbsp;评价&nbsp;</th>
	<th>原图像</th>
	</tr>";

	$number = 0;

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

		echo "<p style='font-size:24px;'>结果共 $number 例";
		echo "</table>";
}

   
?>
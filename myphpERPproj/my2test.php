<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 

<?php
// define variables and set to empty values
$dataset = "";
$imageID = "";
$image_file = "Dataset1/1.jpg";
$sql="select * from July6CharRuleConfidence where picNumber= 1";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $dataset = test_input($_POST['dataset']);
   $imageID = test_input($_POST['imageID']);
   if($dataset=="1")
   {
	  $image_file = "Dataset".$dataset."/".$imageID.".jpg";
	  $sql="select * from July6CharRuleConfidence where picNumber= $imageID";
   }
   if($dataset=="2")
   {
	  $image_file = "Dataset".$dataset."/test".$imageID.".jpg";
	  $sql="select * from TestCharRuleConfidence where picNumber= $imageID";
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
   
}

include_once("conn.php");

	$rs = $conn -> Execute($sql);
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
?>

<h2>图片编号：</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Dataset: 
   <input type="radio" name="dataset" value="1">Dataset1
   <input type="radio" name="dataset" value="2">Dataset2
   <br><br>
   ImageID: <input type="text" name="imageID">
   <br><br>
   <input type="submit" name="submit" value="submit"> 
</form>

<?php
    echo "<h2>Image:</h2>";
    echo "<br>";
    echo "<img src=$image_file />";
    echo "<br><br>";
	
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
		  </tr>
		  </table>";

	echo "<br>";
	if($is_same==0)
	{
		echo "<h1>";
		echo "<table border=\"1\">
              <tr>
              <th>图号&nbsp;&nbsp;</th>
              <th>分类器1</th>
              <th>分类器2</th>
              <th>更好结果</th>
              <th>&nbsp;评价&nbsp;</th>
              </tr>";
		echo "<td>$pic_number</td>
		     <td><center>&nbsp;&nbsp;$recognition_result&nbsp;&nbsp;</center></td>
		     <td><center>&nbsp;&nbsp;$recognition_resultb&nbsp;&nbsp;</center></td>
		     <td><center>&nbsp;&nbsp;$rec_result_better&nbsp;&nbsp;</center></td>
		     <td><center>$evaluate</center></td>
		     </tr>
		     </table>";
		
		echo "</h1>";
	}
	if($is_same==1)
	{
		echo "<h1>";
		echo "<table border=\"1\">
              <tr>
              <th>图号&nbsp;&nbsp;</th>
              <th>分类器1</th>
              <th>分类器2</th>
              <th>更好结果</th>
              <th>&nbsp;评价&nbsp;</th>
              </tr>";
		echo "<td>$pic_number</td>
		     <td><center>&nbsp;&nbsp;</center></td>
		     <td><center>&nbsp;&nbsp;</center></td>
		     <td><center>&nbsp;&nbsp;$rec_result_better&nbsp;&nbsp;</center></td>
		     <td><center>$evaluate</center></td>
		     </tr>
		     </table>";
		
		echo "</h1>";
	}

?>

</body>
</html>
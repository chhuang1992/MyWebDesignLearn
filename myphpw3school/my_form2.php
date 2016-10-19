
<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   $website = test_input($_POST["website"]);
   $comment = test_input($_POST["comment"]);
   $gender = test_input($_POST["gender"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>PHP ��֤ʵ��</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   ������<input type="text" name="name">
   <br><br>
   ���ʣ�<input type="text" name="email">
   <br><br>
   ��ַ��<input type="text" name="website">
   <br><br>
   ���ۣ�<textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   �Ա�
   <input type="radio" name="gender" value="female">Ů��
   <input type="radio" name="gender" value="male">����
   <br><br>
   <input type="submit" name="submit" height=20 width=40 value="�ύ"> 
</form>

<?php
echo "<h2>�������룺</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
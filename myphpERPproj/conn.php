<html>
<body>
<?php
$conn = @new COM("ADODB.Connection") or die ("ADOÁ¬½ÓÊ§°Ü!");
$connstr = "DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=" . realpath("CharSampleRight.mdb ");

$conn->Open($connstr);


?>
</body>
</html>

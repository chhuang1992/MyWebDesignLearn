<html>
<body>
<?php
$conn = @new COM("ADODB.Connection") or die ("ADO����ʧ��!");
$connstr = "DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=" . realpath("CharSampleRight.mdb ");

$conn->Open($connstr);


?>
</body>
</html>

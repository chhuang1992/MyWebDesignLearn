<html>
 <body>
  <h1>
   <?php
   $str="Hello World";
  
echo <<< mark
		<head>
			<title>$str</title>
		</head>
		<body>
		<table>
		<form method="post" action="">
		<tr>
			<td><select>
			<option value=1>ShopNC���û�</option>
			<option value=2>ShopNC���û�</option>
			<option value=3>ShopNC��ҵ����</option>
			</select></td>
		</tr>
		<tr align="center">
			<td colspan="2">
				<input type="button" value="����shopNC" size="8">
			</td>
		</tr>
		</form>
		</table>
		</body>
mark;

$name = 'kitty'; 
echo <<< Eof
	<table height="20"> 
	<tr><td> 
	{$name}<br/> 
	<script> 
	var p='hello world'; 
	document.writeln(p); 
	</script> 
	</td></tr> 
	</table> 
Eof;
 
   ?>
  </h1>
 </body>
</html>
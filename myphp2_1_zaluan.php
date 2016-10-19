<html>
 <head>
    <title>my first php program</title>
 </head>
 <body>

   <?php
   //从左往右，首个字符的index为0，从右到左，末尾字符index为-1;
   //length为正x，则从左往右取x个字符，length为负x，则从从末尾减去x个字符;
   $string = 'hello ShopNC';
   echo substr($string,0)."<br/>";
   echo substr($string,-8,5)."<br/>";
   echo substr($string,-8,-5)."<br/>";   
   echo substr($string,1,5)."<br/>";  
   echo substr($string,2,-4)."<br/>";

   $string = 'hello';
   $string .= 'ShopNC';
   echo $string;
   echo "<br/>";
   
   $string = "%b,%c,%d,%u,%o,%x,%X,%f,%s";
   printf($string,33,33,-33,33,-33,33,-33,33,-33);
   echo "<br/>\n";
   echo sprintf($string,33,33,-33,33,-33,33,-33,33,-33);
   echo "<br/>\n";
   
   $string = "welcom to ShopNC\nthis is a example of nl2br()\ni love php";
   echo nl2br($string);
   echo "<br/>\n";
   
   echo wordwrap($string,8,"\n<br/>",true);
   echo "<br/>\n";
   
   $string = "welcome to ShopNC";
   echo strtolower($string)."<br/>\n";
   echo strtoupper($string)."<br/>\n";
   echo ucwords($string)."<br/>\n";
   echo $string."的长度是：".strlen($string)."<br/>\n";
   
   $string = "welcome to ShopNC,ShopNC is a company of NetCity ";
   $count = substr_count($string ,"ShopNC");
   echo "ShopNC在".$string."中出现了".$count."次。<br/>\n";
   

   $count = str_word_count($string);
   echo $count."个单词。<br/>\n";
   print_r(str_word_count($string,1));echo "<br/>\n";echo "<br/>\n";
   print_r(str_word_count($string,2));echo "<br/>\n";echo "<br/>\n";
   print_r(str_word_count($string,2,","));echo "<br/>\n";echo "<br/>\n";

   
   echo strstr($string ,"ShopNC");echo "<br/>\n";echo "<br/>\n";
   echo strpos($string ,"ShopNC");echo "<br/>\n";echo "<br/>\n";
   
   $string = "welcome to ShopNC<br/>\n";
   $str = str_repeat($string,5);
   echo $str;
   echo substr_replace($string,"网城创想",11);
   echo "<br/>\n";echo "<br/>\n";   
   
   $email = "abc@esdd.orgh";
   $exp = preg_match("/^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$/",$email);
   if($exp)
   {
		echo "您的email：".$email."初步通过检查";echo "<br/>\n";echo "<br/>\n";
   }
   else
   {
	   echo "您的email：".$email."未通过检查";echo "<br/>\n";echo "<br/>\n";
   } 

   $email = "chhuang1992@163.com";
   $exp = preg_match("/^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$/",$email);
   if($exp)
   {
		echo "您的email：".$email."初步通过检查";echo "<br/>\n";echo "<br/>\n";
   }
   else
   {
	   echo "您的email：".$email."未通过检查";echo "<br/>\n";echo "<br/>\n";
   }   
   ?>

  <p>
   <?php
   $array = preg_split('/\.|@/',$email);
   while(list($key,$value) = each($array))
   {
	   echo '<Br>'.$value;
   }
   echo "<br/>".$array[1];
   
   $email_array = explode("@",$email);
   echo "<br/>".$email_array[1]."<br/>";
   while(list($key,$value) = each($email_array))
   {
	   echo '<Br>'.$value;
   }
   
   $phpchina = array('new','bbs','blog','zend');
   $number = range(1,10);
   while(list($key,$value) = each($number))
   {
	   echo ' '.$value;
   }
   $odds = range(1,10,2);
   while(list($key,$value) = each($odds))
   {
	   echo ' '.$value;
   }
   echo "<br/>";
   
   for($i=0;$i<4;$i++)
   {
	   echo " ".$phpchina[$i];
   }
   
   foreach($phpchina as $current)
   {
	   echo " ".$current;
   }
   echo "<br/>";
   print_r($phpchina);
   echo "<br/>";
   $array = array(1=>"bike",2=>NULL,3=>"car",6=>"plane");
   print_r($array);
   echo "<br/>";
   $array = array("Jim"=>"bike","Lily"=>"car","Tom"=>"plane");
   print_r($array);
   echo "<br/>".$array["Jim"]."<br/>";
   
   $array = array("bike","car",6=>"plane");
   $array [] = "train";
   print_r($array);
   echo "<br/>";
   
   array_unshift($array,"subway","boat");
   print_r($array);
   var_dump($array);
   
   $array = array("Jim"=>"bike","Lily"=>"car","Tom"=>"plane");
   foreach($array as $k=>$v)
   {
	   echo "键：".$k."=>值：".$v."<br/>\n";
   }
   
   $array = array("bike","car","plane","train");
   echo "初始化后的\$array数组<br/>\n";
   print_r($array);echo "<br/>\n<br/>\n";
   echo "经过implode处理后的\$array<br/>\n";
   $array = implode("&nbsp;&nbsp;",$array);
   print_r($array);echo "<br/>\n<br/>\n";
   echo "经过explode处理后的\$array<br/>\n";
   $array = explode("&nbsp;&nbsp;",$array);
   print_r($array);echo "<br/>\n<br/>\n";
   
   echo "<pre>";
   $array = array("color"=>array("yellow","pink","white"),
                  "car"  =>array("toyota","honda","benz"),
				  "stationery"=>array("ruler","pen","pencil"));
   var_dump($array);
   echo "</pre>";
   
   $array = array(1=>31,3=>55,6=>12,8=>77,9=>21,11=>123);
   print_r($array);echo "<br/>\n<br/>\n";
   rsort($array);
   print_r($array);echo "<br/>\n<br/>\n";
   
   $array = array(1=>31,8=>55,6=>12,3=>77,9=>21,11=>123);
   print_r($array);echo "<br/>\n<br/>\n";
   arsort($array);
   print_r($array);echo "<br/>\n<br/>\n";
   krsort($array);
   print_r($array);echo "<br/>\n<br/>\n";
   
   print "This spans
   multiple lines. The newlines will be
   output as well";

$variable  = "\$variable";   
print<<<END
   This uses the "here document" syntax to output
   multiple lines with $variable interpolation. Note
   that the here document terminator must appear on a
   line with just a semicolon no extra whitespace!
   
END;

echo "<br/>\n<br/>\n";
if (TRUE)
   print("This will always print<br>");
else
   print("This will never print<br>");

   $many = 2.2888800;
   $many_2 = 2.2111200;
   $few = $many + $many_2;
   
   print("$many + $many_2 = $few <br>");

   $true_array[49] = "An array element";
   print_r($true_array);
   echo "<br/>\n<br/>\n";

   $variable = "name";
   $literally = 'My $variable will not print!';
   
   print($literally);
   print "<br>";
   
   $literally = "My $variable will print!";
   print($literally);   
   echo "<br/>\n<br/>\n";
   
   if (3 == 2 + 1)
       print("Good - I haven't totally lost my mind.<br>");
   
   if (3 == 2 + 1) {
       print("Good - I haven't totally");
       print("lost my mind.<br>");
   }
   
      $channel =<<<_XML_
   
   <channel>
      <title>What's For Dinner</title>
      <link>http://menu.example.com/ </link>
      <description>Choose what to eat tonight.</description>
   </channel>
_XML_;
   
   echo <<<END
   This uses the "here document" syntax to output multiple lines with variable 
   interpolation. Note that the here document terminator must appear on a line with 
   just a semicolon. no extra whitespace!
   

END;
   
   print $channel;
   echo "<br/>\n<br/>\n";
   
   $x = 4;
   
   function assignx () { 
      $x = 0;
      print "\$x inside function is $x. <br />";
   }
   
   assignx();
   print "\$x outside of function is $x. <br />";
   
   function multiply ($value) {
      $value = $value * 10;
      return $value;
   }
   
   $retval = multiply (10);
   Print "Return value is $retval\n";
   print "<br/>";
   
   $somevar = 15;   
   function addit() {
      GLOBAL $somevar;
      $somevar++;
      print "Somevar is $somevar";	  
   }   
   addit();
   print "<br/>";
   print "Somevar is $somevar";
   print "<br/>";
   
   function keep_track() {
      STATIC $count = 0;
      $count++;
      print $count;
      print "<br />";
   }   
   keep_track();
   keep_track();
   keep_track();
   
   define("MINSIZE", 50);   
   echo MINSIZE;
   echo constant("MINSIZE"); 
   
   define("__THREE__", "third value");
   echo __THREE__;
   echo "<br/>";
   
   $d = date("D");
   echo $d."&nbsp;&nbsp;";   
   if ($d == "Fri")
       echo "Have a nice weekend!";
   elseif ($d == "Sun")
       echo "Have a nice Sunday!";   
   else
       echo "Have a nice day!";
   echo "<br/>";
   
   switch ($d)
   {
       case "Mon":
           echo "Today is Monday";
           break;
            
       case "Tue":
           echo "Today is Tuesday";
           break;
            
       case "Wed":
           echo "Today is Wednesday";
           break;
            
       case "Thu":
           echo "Today is Thursday";
           break;
            
       case "Fri":
           echo "Today is Friday";
           break;
            
       case "Sat":
           echo "Today is Saturday";
           break;
            
       case "Sun":
           echo "Today is Sunday";
           break;
            
       default:
           echo "Wonder which day is this ?";
   }
   echo "<br/>";
   $a = 0;
   $b = 0;
   for( $i = 0; $i<10; $i++ ) 
   {
       $a += $i;
       $b += 5;
   }
   echo ("At the end of the loop i = $i a = $a and b = $b<br/>" );
   
   $i = 0;
   $num = 0;
   while( $i < 10) 
   {      
       $i++;
	   $num += $i;
   }
   echo ("Loop stopped at i = $i and num = $num<br/>" );
   
   $i = 0;
   $num = 0;
   do {
       $i++;
	   $num+=$i;
   }while( $i < 10 );
   echo ("Loop stopped at i = $i and num = $num<br/>" );
   
   $array = array( 1, 2, 3, 4, 5);
   foreach( $array as $value ) 
   {
       echo "Value is $value <br />";
   }
   
   $i = 0;
   while( $i < 10) {
       $i++;
	   echo "Value is $i <br />";
       if( $i == 3 )break;
	   //echo "Value is $i <br />";
   }
   echo ("Loop stopped at i = $i<br />" );
   
   $array = array( 1, 2, 3, 4, 5);
   foreach( $array as $value ) 
   {
       if( $value == 3 )continue;
       echo "Value is $value <br />";
   }
   
   $numbers = array( 1, 2, 3, 4, 5);
   foreach( $numbers as $value ) {
       echo "Value is $value <br />";
   }
   $numbers[0] = "one";
   $numbers[1] = "two";
   $numbers[2] = "three";
   $numbers[3] = "four";
   $numbers[4] = "five";      
   foreach( $numbers as $value ) {
       echo "Value is $value <br />";
   }
   
   $salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);
   echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
   echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
   echo "Salary of zara is ".  $salaries['zara']. "<br />";
         
   $salaries['mohammad'] = "high";
   $salaries['qadir'] = "medium";
   $salaries['zara'] = "low";
   echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
   echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
   echo "Salary of zara is ".  $salaries['zara']. "<br />";
   
   ?>
  </p>
 </body>
</html>

<html>
   <body>
   <h1>   
      <?php
         $marks = array( 
            "mohammad" => array (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "qadir" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "zara" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for mohammad in physics : " ;
         echo $marks['mohammad']['physics'] . "<br />"; 
         
         echo "Marks for qadir in maths : ";
         echo $marks['qadir']['maths'] . "<br />"; 
         
         echo "Marks for zara in chemistry : " ;
         echo $marks['zara']['chemistry'] . "<br />"; 
      ?>
<?php
   $variable = "name";
   $literally = 'My $variable will not print!\\n';
   
   print($literally);
   print "<br />";
   
   $literally = "My $variable will print!\n";
   
   print($literally);
   
   echo 'You deleted C:\\*.*?';
   echo "<br />";
print 'You can also have embedded newlines in 
strings this way as it is
okay to do';

echo "<br/>";

$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

/* 含有变量的更复杂示例 */
class foo
{
    var $foo;
    var $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;

$juices = array("apple", "orange", "koolaid1" => "purple");

echo "He drank some $juices[0] juice.".PHP_EOL;
echo "He drank some $juices[1] juice.".PHP_EOL;
echo "He drank some juice made of $juices[0]s.".PHP_EOL; // Won't work
echo "He drank some {$juices['koolaid1']} juice.".PHP_EOL;

class people {
    public $john = "John Smith";
    public $jane = "Jane Smith";
    public $robert = "Robert Paulsen";
    
    public $smith = "Smith";
}

$people = new people();

echo "$people->john drank some $juices[0] juice.".PHP_EOL;
echo "$people->john then said hello to $people->jane.".PHP_EOL;
echo "$people->john's wife greeted $people->robert.".PHP_EOL;
echo "$people->robert greeted the two {$people->smith}s."; // Won't work

$MyName ="Huang";
echo "This is the value of the var named $name: {${$name}}";

echo "<br/>";
class foo1 {
    var $bar = 'I am bar.';
}

$foo1 = new foo1();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo1->$bar}\n";
echo "{$foo1->$baz[1]}\n";

?>
   </h1>
   </body>
</html>
<html>
   
   <head>
      <title>Writing PHP Function</title>
   </head>
   
   <body>
      
      <?php
         /* Defining a PHP Function */
         function writeMessage() {
            echo "You are really a nice person, Have a nice time!";
         }
         
         /* Calling a PHP Function */
         writeMessage();
		 echo "<br/>";
      ?>
      
   </body>
</html>

<html>
   
   <head>
      <title>Writing PHP Function with Parameters</title>
   </head>
   
   <body>
   
      <?php
         function addFunction($num1, $num2) {
            $sum = $num1 + $num2;
            echo "Sum of the two numbers is : $sum";
         }
         
         addFunction(10, 20);
		 echo "<br/>";
      ?>
      
   </body>
</html>

<html>
   
   <head>
      <title>Passing Argument by Reference</title>
   </head>
   
   <body>
      
      <?php
         function addFive($num) {
            $num += 5;
         }
         
         function addSix(&$num) {
            $num += 6;
         }
         
         $orignum = 10;
         addFive( $orignum );
         
         echo "Original Value is $orignum<br />";
         
         addSix( $orignum );
         echo "Original Value is $orignum<br />";
      ?>
      
   </body>
</html>

<html>
   
   <head>
      <title>Writing PHP Function which returns value</title>
   </head>
   
   <body>
   
      <?php
         function addFunction2($num1, $num2) {
            $sum = $num1 + $num2;
            return $sum;
         }
         $return_value = addFunction2(10, 20);
         
         echo "Returned value from the function : $return_value";
		 echo "<br/>";
      ?>
      
   </body>
</html>

<html>
   
   <head>
      <title>Writing PHP Function which returns value</title>
   </head>
   
   <body>
      
      <?php
         function printMe($param = NULL) {
            print $param;
         }
         
         printMe("This is test");
		 echo "<br/>";echo "<br/>";
         printMe();
		 echo "<br/>";echo "<br/>";
      ?>
      
   </body>
</html>

<html>
   
   <head>
      <title>Dynamic Function Calls</title>
   </head>
   
   <body>
      
      <?php
         function sayHello() {
            echo "Hello<br />";
         }
         
         $function_holder = "sayHello";
         $function_holder();
		 
		 echo "<br/>";echo "<br/>";
      ?>
      
   </body>
</html>
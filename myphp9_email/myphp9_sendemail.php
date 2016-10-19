<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "1508451007@qq.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:chhuang1992@163.com \r\n";
         $header .= "Cc:chhuang1992@icloud.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>
﻿<html>
   <body>
      
      <script language = "javascript" type = "text/javascript">
         <!--
            //Browser Support Code
			   
			
            function ajaxFunction(){
				
				var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
					
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('ajaxDiv');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
					
               var confidence = document.getElementById('confidence').value;
               var evaluation = document.getElementById('evaluation').value;
               var isSame = document.getElementById('isSame').value;
			   var queryString;

               queryString = "?confidence=" + confidence ;
            
               queryString +=  "&evaluation=" + evaluation + "&isSame=" + isSame;
               ajaxRequest.open("GET", "ajax-example.php" + queryString, true);
               ajaxRequest.send(null); 
            }
         //-->
      </script>
		
      <form name = 'myForm'>
         Confidence: <input type = 'text' id = 'confidence' /> <br />
         Evaluation: <input type = 'text' id = 'evaluation' />
         <br />
         
         IsSame: <select id = 'isSame'>
            <option value = "0">0</option>
            <option value = "1">1</option>
         </select>
			
         <input type = 'button' onclick = 'ajaxFunction()' value = 'Query'/>
			
      </form>
      
      <div id = 'ajaxDiv'>Your result will display here</div>
   </body>
</html>
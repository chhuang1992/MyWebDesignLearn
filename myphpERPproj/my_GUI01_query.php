<html>
   <head>
      <title>Query Dataset GUI</title>
   </head>

   <body>
      
      <script language = "javascript" type = "text/javascript">
         <!--
            //Browser Support Code
               
            // Now get the value from user and pass it to
            // server script.			
			function ajaxQuery(){
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

			   var dataset = document.getElementById('dataset').value;
               var imageID = document.getElementById('imageID').value;
               var right = document.getElementById('right').value;
			   var isSame = document.getElementById('isSame').value;
			   var evaluate = document.getElementById('evaluate').value;
			   var picture = document.getElementById('picture').value;
               var queryString;
				
               queryString = "?dataset=" + dataset ;            
               queryString +=  " &imageID=" + imageID + " &right=" + right ;
			   queryString +=  " &isSame=" + isSame + " &evaluate=" + evaluate ;
			   queryString +=  " &picture=" + picture;
			   
               ajaxRequest.open("GET", "my_query.php" + queryString, true);
               ajaxRequest.send(null); 
            }
			
			function ajaxAll(){
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

			   var dataset = document.getElementById('dataset').value;
            
               var queryString;
				
               queryString = "?dataset=" + dataset ;            
       
			   
               ajaxRequest.open("GET", "showAll_.php" + queryString, true);
               ajaxRequest.send(null); 
            }
			
			function ajaxDoubt(){
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

			   var dataset = document.getElementById('dataset').value;
			   var picture = document.getElementById('picture').value;
            
               var queryString;
				
               queryString = "?dataset=" + dataset ;            
               queryString += " &picture=" + picture; 
			   
               ajaxRequest.open("GET", "showDoubt_.php" + queryString, true);
               ajaxRequest.send(null); 
            }
			
			function ajaxWrong(){
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

			   var dataset = document.getElementById('dataset').value;
			   var picture = document.getElementById('picture').value;
            
               var queryString;
				
               queryString = "?dataset=" + dataset ;            
               queryString += " &picture=" + picture; 
			   
               ajaxRequest.open("GET", "showWrong_.php" + queryString, true);
               ajaxRequest.send(null); 
            }
			
         //-->
      </script>
		
      <form name = 'myForm' style='margin: 5px; font-size:24px;'>
         数据集: <select id = 'dataset' style='font-size:24px;'>
            <option value = "1">1</option>
            <option value = "2">2</option>
         </select>&nbsp;&nbsp;&nbsp;
         图片编号: <input type = 'text' id = 'imageID' style='font-size:24px;'/>
		 <br/><br/>
		 正确性: <select id = 'right' style='font-size:24px;'>
            <option value = "-1">-</option>
			<option value = "0">0</option>
            <option value = "1">1</option>
         </select>&nbsp;&nbsp;
         一致性: <select id = 'isSame' style='font-size:36px;'>
            <option value = "-1">-</option>
			<option value = "0">0</option>
            <option value = "1">1</option>
         </select>&nbsp;&nbsp;
		 评价结果: <select id = 'evaluate' style='font-size:36px;'>
            <option value = "-1">-</option>
			<option value = "0">0</option>
            <option value = "1">1</option>
			<option value = "2">2</option>
         </select>&nbsp;&nbsp;
		 显示图片: <select id = 'picture' style='font-size:36px;'>
            <option value = "0">0</option>
            <option value = "1">1</option>			
         </select>
		 <p style='font-size:10px;'><br/></p>
		 
         <input type = 'button' id='Query' onclick = 'ajaxQuery()' value = '查询' style='font-size:40px;'/>&nbsp;&nbsp;&nbsp;
		 <input type = 'button' id='All' onclick = 'ajaxAll()' value = '所有' style='font-size:40px;'/>&nbsp;&nbsp;&nbsp;
		 <input type = 'button' id='Doubt' onclick = 'ajaxDoubt()' value = '疑似' style='font-size:40px;'/>&nbsp;&nbsp;&nbsp;
		 <input type = 'button' id='Wrong' onclick = 'ajaxWrong()' value = '错误' style='font-size:40px;'/><br/><br/> 
		 
			
      </form>
      
      <div id = 'ajaxDiv'>Your result will display here</div>
   </body>
</html>
<html>
   <body>
      
      <script language = "javascript" type = "text/javascript">
         <!--
            //Browser Support Code
               
            // Now get the value from user and pass it to
            // server script.
         function ajaxShow(str) {
            if (str == "") { 
               document.getElementById("output").innerHTML = "";
               return;
            }
         
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
			   
			   var queryString = "?dataset="+str ;
			   
			   ajaxRequest.open("GET", "ajaxShow.php" + queryString, true);
               ajaxRequest.send(null); 
	     }
		 
		    function ajaxShow2(){
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
			   var myinput = document.getElementById('input').value;
               var queryString;
				
               queryString = "?dataset=" + dataset ;
			   
               ajaxRequest.open("GET", "ajaxShow.php" + queryString, true);
               ajaxRequest.send(null); 
            }

            			
			function ajaxSelect(){
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
			   var myinput = document.getElementById('input').value;
               var queryString;
				
               queryString = "?dataset=" + dataset ;
			   queryString += " &imageID=" + imageID ;
			   
               ajaxRequest.open("GET", "ajaxSelect.php" + queryString, true);
               ajaxRequest.send(null); 
            }
			
			function ajaxResult1(){
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
			   var myinput = document.getElementById('input').value;
               var queryString;
				
               queryString = "?dataset=" + dataset ;
			   queryString += " &imageID=" + imageID;
			   
               ajaxRequest.open("GET", "ajaxResult1.php" + queryString, true);
               ajaxRequest.send(null); 
            }
			
			function ajaxResult2(){
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
			   var myinput = document.getElementById('input').value;
               var queryString;
				
               queryString = "?dataset=" + dataset ;
			   queryString += " &imageID=" + imageID;
			   
               ajaxRequest.open("GET", "ajaxResult2.php" + queryString, true);
               ajaxRequest.send(null); 
            }
			
			function ajaxRight(){
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
			   var myinput = document.getElementById('input').value;
               var queryString;
				
               queryString = "?dataset=" + dataset ;
			   queryString += " &imageID=" + imageID;
			   
               ajaxRequest.open("GET", "ajaxRight.php" + queryString, true);
               ajaxRequest.send(null);
            }
			
			function ajaxModify(){
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
			   var myinput = document.getElementById('input').value;
               var queryString;
				
               queryString = "?dataset=" + dataset ;
			   queryString += " &imageID=" + imageID;
			   queryString += " &input=" + myinput;
			   
			   
               ajaxRequest.open("GET", "ajaxModify.php" + queryString, true);
               ajaxRequest.send(null); 
            }
			
         //-->
      </script>
	  <h1>Web后处理界面</h1><hr>	
      <form name = 'myForm' style='margin: 5px; font-size:24px;'>
         数据集: <select id = 'dataset' style='font-size:24px;' onchange = 'ajaxShow(this.value)'>
            <option value = "">Dataset:</option>
            <option value = "1">1</option>
            <option value = "2">2</option>
         </select>&nbsp;
		 <input type = 'button' id='Show' onclick = 'ajaxShow2()' value = '显示结果' size='4' style='font-size:24px;'/>&nbsp;
		 
         图片编号: <input type = 'text' id = 'imageID' size='3' style='font-size:24px;'/>&nbsp;		 
         <input type = 'button' id='Select' onclick = 'ajaxSelect()' value = '选取图片' size='4' style='font-size:24px;'/>
		 <br/><br/>
		 
		 请确认结果是否正确：<input type = 'button' id='Result1' onclick = 'ajaxResult1()' value = '分类器1' size='4' style='font-size:24px;'/>&nbsp;
		 <input type = 'button' id='Result2' onclick = 'ajaxResult2()' value = '分类器2' size='4' style='font-size:24px;'/>&nbsp;
		 <input type = 'button' id='Right' onclick = 'ajaxRight()' value = '更好结果' size='4' style='font-size:24px;'/>
		 <br/><br/>
		 请输入正确结果: <input type = 'text' id = 'input' size='6' style='font-size:24px;'/>
		 <input type = 'button' id='Modify' onclick = 'ajaxModify()' value = ' 修改 ' size='4' style='font-size:24px;'/><br/><br/>
			
      </form>
      
      <div id = 'ajaxDiv'>Your result will display here</div>
   </body>
</html>
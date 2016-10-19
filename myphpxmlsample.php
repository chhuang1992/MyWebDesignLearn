<!DOCTYPE html>
<html>
   <body>
      <h1>TutorialsPoint DOM example </h1>
      <div>
         <b>Name:</b> <span id="name"></span><br>
         <b>Company:</b> <span id="company"></span><br>
         <b>Phone:</b> <span id="phone"></span>
      </div>
      <script>
         if (window.XMLHttpRequest)
         {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
         }
         else
         {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
         }
         xmlhttp.open("GET","address.xml",false);
         xmlhttp.send();
         xmlDoc=xmlhttp.responseXML;

         document.getElementById("name").innerHTML=
         xmlDoc.getElementsByTagName("name")[0].childNodes[0].nodeValue;
         document.getElementById("company").innerHTML=
         xmlDoc.getElementsByTagName("company")[0].childNodes[0].nodeValue;
         document.getElementById("phone").innerHTML=
         xmlDoc.getElementsByTagName("phone")[0].childNodes[0].nodeValue;
      </script>
   </body>
</html>
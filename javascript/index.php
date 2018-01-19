<!DOCTYPE HTML>
<html>
	<head>
    
    <title>javascript</title>
    
    </head>
	
    
    <script>
    function Visameddelande(){
        
        alert("Mitt meddelande")
    }
   function storBild(x) {
    x.style.height = "64px";
    x.style.width = "64px";
}

   function normalBild(x) {
    x.style.height = "32px";
    x.style.width = "32px";
}
    
    </script>
    <body>
        
        <button onclick="VisaMeddelande()" >Bahja</button>
		      <hr></hr>
		<div>
        <img onmouseover="storBild(this)" onmouseout="normalBild(this)" border="0" src="po.png" alt="po.png" width="32" height="32">
        </div>
                   <hr></hr>
        
    </body>
    
</html>

 
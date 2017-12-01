<!doctype html>
<html>  
<head>
       <title>register</title>	
	   
 </head>
 <body>
   <form method= "post" action= "submit.php">
             <h2> Formulär </h2>
         
       <table>
	        <tr> 
	             <td>
		          username :
		         </td>
				 <td>
				     <input type="text" placeholder="username" name= "username">
				 </td>
             </tr>	
			 <tr>
			      <td>
				   name:
				  </td>
				  <td>
				      <input type="text" placeholder="name" name= "name">
				  </td>
			 </tr>
			 <tr>
			      <td>
				    Mail :
			      </td>
				  <td>
				      <input type="mail" placeholder="mail" name= "mail">
				  </td>  
			 </tr>
			 <tr>
			     <td>
				date:
				 </td>
				   <td>
				     <select>År
					      <?php
							for($i = 1960 ; $i <= 2001 ; $i++){
							echo "<option>$i</option>";
							}

?>						  
				    </select>År
					<select>Månad
				           <option>januari</option>
						   <option>februari </option>
						   <option>mars </option>
						   <option> april</option>
						   <option>maj</option>
						   <option>juni</option>
						   <option>juli</option>
						   <option>augusti</option>
						   <option>september</option>
						   <option>november</option>
						   <option>december</option>
						   
				    </select>Månåd
					 <select>Dag
				              <?php
							for($i = 1 ; $i <= 31 ; $i++){
							echo "<option>$i</option>";
							}

?>						  	   
				    </select>Dag		   
				 </td>
			 </tr>
             <tr>
			      <td>
				   Lösenord :
				   </td>
				   <td>
				         <input type="password" placeholder="Lösenord"name="password">
				   </td>
             </tr>	
             <tr>
			 <td>
			 <input type="submit" ="submit" />
			 </td>
             </tr>			 
      
     </table>	   
</form>	    


             <h2> Formulär </h2>

<form action="submit2.php" method="post"> 
        <h3>Username:<h3/>
		<input type="text" placeholder="Username"name="Username">
        <h3>Password:<h3/>
		<input type="Password"placeholder="Password" name="Password">
            <br>
        <input type="submit" placeholder="submit" name="submit">
        
        
        
    </form>


</body>   	
</html>





























  
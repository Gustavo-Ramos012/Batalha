<html>
   <body bgcolor = "Black">
   <style>
        body {background-image:url(fundo.jpg);
	    background-repeat: no-repeat;
	    background-size: 99%;}
	</style>
</html>
<?php
   if(isset($_POST["Time1"])) $time1 = $_POST["Time1"];
   else $time1 = "Indefinido";
   
   if(isset($_POST["time2"])) $time2 = $_POST["time2"];
   else $time2 = "Indefinido";

   
   if($time1 == "alipio"){
      echo "<font color = White><center>Alipio</center></font>;
	        <center><img src=alipio.jpg height=200 width=280></center>";
	  $p1 = 5000;
     }
     else if($time1 == "coqueiro"){
        echo "<font color = White><center>Coqueiro</center>
	          <center><img src=coqueiro.jpg height=200 width=280></center></font>";
	    $p1 = 4500;
			
     }
     else if($time1 == "japa"){
        echo "<font color = White><center>Japa</center>
	          <center><img src=japa.jpg height=200 width=280></center></font>";
	    $p1 = 4000;	
     }
	 else if($time1 == "oreia"){
        echo "<font color = White><center>Oreia</center>
	          <center><img src=oreia.jpg height=200 width=280></center></font>";
	    $p1 = 4000;	
	 }
   
   echo "<br><center><font size=13 color = Red> VS </font></center><br>";
   
   if($time2 == "jonathas"){
      echo "<font color = White><center>Jonathas</center></font>
	        <center> <img src=jonathas.jpg height=200 width=280></center>";
	  $p2 = 4000;
    }
   else if($time2 == "cebola"){
      echo "<font color = White><center>Cebola</center></font>
	        <center><img src=cebola.jpg height=200 width=280></center>";
	  $p2=5000;
    }
   else if($time2 == "bidu"){
      echo "<font color = White><center>Bidu</center></font>
	        <center><img src=bidu.jpg height=200 width=280></center>";
      $p2=4500;
    }
   else if($time2 == "indiano"){
	echo "<font color = White><center>Indiano</center></font>
		  <center><img src=indiano.jpg height=200 width=280></center>";
	$p2=4500;
    }
   echo"<br><br><br>";
       
   if($p1 > $p2){
      if($time1 == "alipio"){
         echo "<font size=25 color = Gold><center>Vencedor:</center></font>
		       <font color = White><center><b>Alipio</b></center></font>;
	           <center><img src=alipio.jpg height=200 width=280></center>";
      }
	  else if($time1 == "coqueiro"){
         echo "<font size=25 color = Gold><center>Vencedor:</center></font>
		       <font color = White><center><b>Coqueiro</b></center></font>
	           <center><img src=cebola.jpg height=200 width=280></center>";
      }
	  else if($time1 == "japa"){
        echo "<font size=25 color = Gold><center>Vencedor:</center></font>
		      <font color = White><center><b>Japa</b></center></font>
	          <center><img src=japa.jpg height=200 width=280></center>";
      }
	  else if($time1 == "oreia"){
        echo "<font size=25 color = Gold><center>Vencedor:</center></font>
		      <font color = White><center><b>Oreia</b></center></font>
	          <center><img src=oreia.jpg height=200 width=280></center>";
	  }
   }
   else if($p2 > $p1){
      if($time2 == "jonathas"){
         echo "<font size=25 color = Gold><center>Vencedor:</center></font>
		      <font color = White><center><b>Jonathas</b></center></font>
	          <center> <img src=jonathas.jpg height=200 width=280></center>";
      }
      else if($time2 == "cebola"){
          echo "<font size=25 color = Gold><center>Vencedor:</center></font>
	            <font color = White><center><b>Cebola</b></center></font>
	            <center><img src=cebola.jpg height=200 width=280></center>";
      }
      else if($time2 == "bidu"){
          echo "<font size=25 color = Gold><center>Vencedor:</center></font>
	            <font color = White><center><b>Bidu</b></center></font>
	            <center><img src=bidu.jpg height=200 width=280></center>";
      }
	  else if($time2 == "indiano"){
		echo "<font size=25 color = Gold><center>Vencedor:</center></font>
			  <font color = White><center><b>Indiano</b></center></font>
			  <center><img src=indiano.jpg height=200 width=280></center>";
	  }
   }
   else if($p1 == $p2){
      
	 
	  if($time1 == "alipio"){
	     echo "<table align = center>
		           <tr>
					     <center><font size = 13 color = Gold><b>Empate:</b></font></center>
				   </tr>
				   <tr>
				      <td>
					    <font color = White><center><b>Alipio</b></center></font>
	                    <center><img src=alipio.jpg height=200 width=280></center>
					  </td>
					  <td>
					     <font size = 25 align=center><b>=</b></font>
					  </td>
					  <td>
					     <font color = White><center><b>jonathas</b></center></font>
	                     <center><img src=jonathas.jpg height=200 width=280></center>
					  </td>
				   </tr>
		       </table>";
	  }
	  else if($time1 == "cebola"){
	     echo "<table align = center>
		           <tr>
					     <center><font size = 13 color = Gold><b>Empate:</b></font></center>
				   </tr>
				   <tr>
				      <td>
					   <font color = White><center><b>cebola</b></center></font>
	                   <center><img src=cebola.jpg height=200 width=280></center>
					  </td>
					  <td>
					     <font size = 25 align=center><b>=</b></font>
					  </td>
					  <td>
					     <font color = White><center><b>coqueiro</b></center></font>
	                     <center><img src=coqueiro.jpg height=200 width=280></center>
					  </td>
				   </tr>
		       </table>";
	  }
	  if($time1 == "japa"){
	     echo "<table align = center>
		           <tr>
					     <center><font size = 13 color = Gold><b>Empate:</b></font></center>
				   </tr>
				   <tr>
				      <td>
					    <font color = White><center><b>japa</b></center></font>
	                    <center><img src=japa.jpg height=200 width=280></center>
					  </td>
					  <td>
					     <font size = 25 align=center><b>=</b></font>
					  </td>
					  <td>
					     <font color = White><center><b>bidu</b></center></font>
	                     <center> <img src=bidu.jpg height=200 width=280></center>
					  </td>
				   </tr>
		       </table>";
	  }
	  if($time2 == "oreia"){
		echo "<table align = center>
				  <tr>
						<center><font size = 13 color = Gold><b>Empate:</b></font></center>
				  </tr>
				  <tr>
					 <td>
					   <font color = White><center><b>oreia</b></center></font>
					   <center><img src=oreia.jpg height=200 width=280></center>
					 </td>
					 <td>
						<font size = 25 align=center><b>=</b></font>
					 </td>
					 <td>
						<font color = White><center><b>indiano</b></center></font>
						<center><img src=indiano.jpg height=200 width=280></center>
					 </td>
				  </tr>
			  </table>";
	  }
   }
      
?>

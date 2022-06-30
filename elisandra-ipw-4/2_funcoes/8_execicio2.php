<?php
   function receba ($nome1, $nome2){
	   
	   
	   
   if (strlen ($nome1) > strlen ($nome2)) {
	   return 'O maior nome é: ' . $nome1;
	}else{
	   return 'O maior nome é: ' . $nome2;
	}
}
     
 
  echo receba ('botacamila','Tiãum');
  echo '<br>';
  echo receba('jessé','Thais');
  echo '<br>';
  echo receba('jurema','claudenice');
  echo '<br>';

?>
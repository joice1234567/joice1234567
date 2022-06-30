<?php  
function tipovalor($valor) {
   if(is_int($valor)){
	   echo "o valor $valor é um nteiro";
   }else {
	echo "o valor $valor não é um inteiro";
	}
}
tipovalor(15);
echo '<br>';

tipovalor ('teste123lala');
   
 echo '<br>';
 
 tipovalor('88');
	   
?>
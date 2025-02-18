<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="style.css">
<?php
    $salario = $_GET['salario'];
	$inss = $salario - ($salario * 0.12);
	
	if($inss<=3000){
		$desc = $salario * 0.15;
		$total = $inss - $desc;
		
	}else{
		$desc = $salario * 0.27;
		$total = $inss - $desc;
	}
		   echo '<h3 id="menor">Total: ' .number_format($total, 2, ",",".").'</h3><h3 id="maior"><br> Descontos : '  .number_format($desc, 2, ",","."). '</h3>';
 

?>
</html>
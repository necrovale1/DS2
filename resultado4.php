<!DOCTYPE html>
<html lang="pt-BR">
<link rel="stylesheet" href="style.css">
<?php
    $quantia = $_GET['quantia'];

	if($quantia<12){
		$total = $quantia * 1.30;
		echo '<h3 id="menor">Total: '.$total.'</h3>';
	}
	else{
		$total = $quantia * 1.00;
		echo '<h3 id="maior">Total: '.$total.'</h3>';
	}
	

?>
</html>

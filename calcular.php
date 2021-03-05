<?php
		$nome = $_POST['nome'];
		$idade = $_POST['idade'];
		if ((! empty($_REQUEST['peso'])) || (! empty($_REQUEST['altura']))){ 
		$peso = $_POST['peso'];
		$altura = $_POST['altura'];
		$altura2 = $altura * $altura;
		$massa = $peso / $altura2;


		if($massa <= 17){
			$mensagem = "Peso muito abaixo do normal";
		}elseif (($massa >17) && ($massa <= 18.49)) {
			$mensagem = "Abaixo do peso!";
		}elseif (($massa > 18.49)&&($massa <= 24.99)) {
			$mensagem = "Peso normal";			
		}elseif(($massa > 24.99) && ($massa <=29.99)) {
			$mensagem = "Acima do Peso";
		}elseif(($massa > 29.99) and ($massa <=34.99)) {
		$mensagem = "Obesidade I";
		}elseif(($massa > 34.99) and ($massa <=39.99)) {
		$mensagem = "Obesidade II (severa)";
		}else{
		$mensagem = "Obesidade III (mórbida)";
		}	
		echo "Olá <b>$nome</b>, sua massa corporal é: <b> $massa </b><br>";
		echo "Você está <b> $mensagem </b>";
	}
?>
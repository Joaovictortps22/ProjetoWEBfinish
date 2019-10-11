<?php

	include("Pessoa.php");
	include("Filho.php");

	$pessoa1 = new Pessoa("Joao", 25, "Masculino");
	//var_dump($pessoa1);

	$pessoa2 = new Pessoa("GaybrielHedric", 20, "Femea");
	//var_dump($pessoa2);

	//echo "Valor antigo: " .$pessoa2->getIdade(); 
	$pessoa2->setIdade(15);
	//echo " <br> Valor novo: " .$pessoa2->getIdade();

	//echo "<br>" .$pessoa2;

	$json = json_encode($pessoa2);
	//echo $pessoa2;
	//echo "<br/>";
	//echo $json;

	$filho1 = new Filho("Victor", 25, "Feminino");
	//echo $filho1->novoMetodo();

	$json = json_encode($pessoa1);
	echo $json;
	
?>
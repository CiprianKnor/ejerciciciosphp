<?php 
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "+") {
			echo ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
		} elseif ($_POST["operador"] == "-") {
			echo ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
		} elseif ($_POST["operador"] == "*") {
			echo ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
		} elseif ($_POST["operador"] == "/") {
			echo ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
		}
	} else {
		echo "Ingresa algun valor";
	}
?>
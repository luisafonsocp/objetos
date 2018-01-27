<?php 
# carrega as classes 
include_once 'pessoa.php'; 
include_once 'conta_bancaria.php'; 

# criação do objeto $carlos 
$carlos = new Pessoa(10,'Carlos da Silva',1.85, 25,'10/04/1976','Ensino Médio',650); 
		echo "Manipulando o objeto {$carlos->nome}: \n"; 
		echo "{$carlos->nome} é formado em: {$carlos->escolaridade} \n"; 
		$carlos->formar('Técnico em Eletricidade'); 
		echo "{$carlos->nome} é formado em: {$carlos->escolaridade} \n"; 
		echo "{$carlos->nome} possui {Scarlos->idade} anos \n"; 
		$carlos->envelhecer(1); 
		echo "{$carlos->nome} possui {$carlos->idade} anos \n"; 
 
# Criação do objeto $conta_carlos 
$conta_carlos = new ContaBancaria(6677, 'CC.1234.56', '10/07/02', $carlos, 9876, 567.89); 
		echo "\n"; 
		echo "Manipulando a conta de: {$conta_carlos->titular->nome}: \n"; 
		echo "0 saldo atual é R\$ {$conta_carlos->obterSaldo()} \n"; 
		$conta_carlos->depositar(20); 
		echo "0 saldo atual é R\$ {$conta_carlos->obterSaldo()} \n"; 
		$conta_carlos->retirar(10); 
		echo "0 saldo atual é R\$ {$conta_carlos->obterSaldo()} \n"; 
?> 
<?php 
# carrega as classes
include_once 'pessoa.php' ; 
include_once 'conta_bancaria.php' ; 
 
# criação do objeto $carlos 
 
$carlos = new Pessoa; 
$carlos->codigo = 10; 
$carlos->nome = 'Carlos da Silva'; 
$carlos->altura = 1.85; 
$carlos->idade = 25; 
$carlos->nascimento = '10/04/1976'; 

$carlos->escolaridade = 'Ensino Médio'; 
 
echo "Manipulando o objeto $carlos->nome :\n"; 
echo "{$carlos->nome} é formado em: {$carlos->escolaridade} \n"; 
$carlos->formar('Técnico em Eletricidade'); 
echo "{$carlos->nome} é formado em: {$carlos->escolaridade} \n"; 
echo "{$carlos->nome} possui {$carlos->idade} anos \n"; 
$carlos->Envelhecer(1); 
echo "{$carlos->nome} possui {$carlos->idade} anos \n"; 
 
# criação do objeto $conta_carlos 
$conta_carlos = new ContaBancaria; 
$conta_carlos->agencia = 6677; 
$conta_carlos->codigo = 'CC.1234.56'; 
$conta_carlos->dataDeCriacao = '10/07/02'; 
$conta_carlos->titular = $carlos; 
$conta_carlos->senha = 9876; 
$conta_carlos->saldo = 567.89; 
 
echo "\n"; 
echo "Manipulando a conta de: {$conta_carlos->titular->nome} \n"; 
echo "0 saldo atual é R\$ {$conta_carlos->obterSaldo()} \n"; 
$conta_carlos->depositar(20); 
echo "0 saldo atual é R\$ {$conta_carlos->obterSaldo()} \n"; 
$conta_carlos->retirar(10); 
echo "0 saldo atual é R\$ {$conta_carlos->obterSaldo()} \n"; ?> 
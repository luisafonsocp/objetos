<?php 
 
# carrega as classes 
include_once 'pessoa.php'; 
include_once 'conta_bancaria.php'; 
include_once 'conta_poupanca.php'; 
include_once 'conta_corrente.php'; 
 
# Criação do objeto $carlos 
$carlos = new Pessoa(10, 'Carlos da Silva', 1.85, 25, '10/04/1976', 'Ensino Médio', 650.00); 
echo "Manipulando o objeto {$carlos->nome}: \n"; 
 
# Criação do objeto $conta_carlos 
$contas[1] = new ContaCorrente(6677, 'CC.1234.56','10/07/02',
$carlos,9876,500.00,200.00); 
 
$contas[2] = new ContaPoupanca(6678, 'PP.1234.57', '10/07/02',
$carlos,9876,500.00,'10/07'); 
 
// percorremos as contas foreach ($contas as $key => $conta) 
{ 
echo "Manipulando a conta $key de: {$conta->titular->nome}: \n"; 
echo "0 saldo atual da conta $key é R\$ {$conta->obterSaldo()} \n"; 
$conta->depositar(200); 
echo "0 saldo atual da conta $key é R\$ {$conta->obterSaldo()} \n"; 
$conta->retirar(100); 
echo "0 saldo atual da conta $key é R\$ {$conta->obterSaldo()} \n"; 
} 
 
?>
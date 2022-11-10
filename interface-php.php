<?php
$usuario = isset($_GET["usuario"])?$_GET["usuario"]:"parametro USUARIO recebido";
$nome = isset($_GET["nome"])?$_GET["nome"]:"parametro NOME recebido";
$tipo = isset($_GET["tipo"])?$_GET["tipo"]:"parametro TIPO recebido";
$doc = isset($_GET["doc"])?$_GET["doc"]:"parametro DOCUMENTOS recebido";
$email =isset($_GET["email"])?$_GET["email"]:"parametro  EMAIL recebido";
 $cep = isset($_GET["cep"])?$_GET["cep"]:"parametro CEP  recebido";
$end = isset($_GET["end"])?$_GET["end"]:"parametro  ENDEREÇO recebido";
$bairro =isset($_GET["bairro"])?$_GET["bairro"]:"parametro BAIRRO recebido";
$tel =isset($_GET["tel"])?$_GET["tel"]:"parametro TELEFONE recebido";

// criando senha
$senha = isset($_GET["senha"])?$_GET["senha"]:"parametro senha recebida";
//MENSAGEM DO PREENCHIMENO DO CADASTRO

// analise de validação
    echo "\t \n RESULTADO DA ANALISE\n";

// VALIDAÇÃO DO CEP
    if (!preg_match('/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/', $cep))
    {
         echo "\n ATENÇÃO: CEP INVALIDO PARA:{$cep}\n ";
     }
 
else{
    
  echo "\nCep valido para  {$cep}\n";
    echo "CADASTRO CONCLUIDO COM SUCESSO \n BEM-VINDO USUARIO {$usuario}";
    
     }
        ?>

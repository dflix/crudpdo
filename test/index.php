<?php

require __DIR__ . "/../lib_ext/autoload.php";
require __DIR__ . "/../_app/config.php";

$conn = new \Source\Conn();

$conn->getConn();

//Cadastrar no banco de dados
$create = new Source\Create();
$create->ExeCreate($Tabela, $Dados);

//Ler mo banco de dados
$read = new Source\Read();
$read->ExeRead($Tabela, $Termos, $ParseString);

//Update no banco de dados
$update = new Source\Update();
$update->ExeUpdate($Tabela, $Dados, $Termos, $ParseString);

//Deletar banco dre dados
$delete = new Source\Delete();
$delete->ExeDelete($Tabela, $Termos, $ParseString);
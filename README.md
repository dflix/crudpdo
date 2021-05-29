# crudpdo
CRUD em PDO

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

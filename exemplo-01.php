<?php

$name = "diretorio";

/*
* Função  : is_dir()
* objetivo: verifica se já existe um diretorio criado
* TRUE    : caso o diretorio exista
* FALSE   : caso o diretorio não exista
* Obs     : No exemplo da linha 20, estamos negando a condição antes
**************************************************************************
**************************************************************************
* Função  : rmdir()
* objetivo: Remove um diretorio que exista
* TRUE    : retorna esse valor caso a operação tenha êxito
* FALSE   : retorna esse valor caso a operação falhe em apagar o dir
*/


if(!is_dir($name)){

	mkdir($name);

	echo "Diretorio <strong>$name</strong> criado com sucesso!";

} else{

	rmdir($name);
	echo "Já existe um diretorio com o nome <strong>$name</strong>, o diretorio foi apagado!";

}

?>
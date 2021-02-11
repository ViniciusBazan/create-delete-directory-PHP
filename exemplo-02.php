<?php

$images = scandir("images");

/*
* Função   : in_array(needle, haystack)
* Objetivo : Procurar algo especifico dentro de um array
* needle   : onde está o que você está procurando
* haystack : o que devo procurar nesse local
* Obs      : Negamos a expressão logica para pegar apenas o inverso
***********************************************************************
***********************************************************************
* Função   : pathinfo($path)
* Objetivo : Exibi com mais detalhes o arquivo em um array
* dirname  : retorna o nome do diretorio
* basename : retorna o nome + extensão
* extension: retorna apenas a extensão do arquivo
* filename : retorna apenas o nome do arquivo sem extensão
***********************************************************************
***********************************************************************
* Função   : filesize($filename)
* Objetivo : Obter o tamanho do arquivo
* Valor    : o tamanho do arquivo retorna em bytes
***********************************************************************
***********************************************************************
* Função   : filemtime($filename)
* Objetivo : recupera a data da última vez que o arquivo se modificou
* Formatar : É possível formatar como aparece com a função date()
***********************************************************************
***********************************************************************
* Função   : array_push(array, var)
* Objetivo : acrescenta mais um valor na última posição do array
* array    : especifica o array onde vai inserir um valor
* var      : especifica o valor de uma variavel (ou array) que vai ser inserido
*/

$data = array();

foreach ($images as $img) {
	if (!in_array($img, array(".", ".."))){

		$filename         = "images".DIRECTORY_SEPARATOR.$img;

		$info             = pathinfo($filename);

		$info['size']     = filesize($filename);
		$info['modified'] = date("d/m/Y H:i:s", filemtime($filename));
		$info['url']      = "http://localhost/CursoPHP7/DIR/".str_replace("\\", "/", $filename);

		array_push($data, $info);

	}
}

echo json_encode($data);
?>
<?php

class TipoDeConteudo
{
	const TEXTO = 0;
	const VIDEO = 1;
	const IMAGEM = 2;
}

$consulta = <<<SQL
SELECT
	*
FROM
	posts
WHERE
	tipo = {TipoDeConteudo::VIDEO}
SQL;
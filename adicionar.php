<?php

require_once 'conectar.php';

$meta = R::dispense('metas');

$meta->descricao = $_POST['descricao'];
$meta->concluida = 0;

R::store($meta);

header('Location: metas.php');

?>
<?php
require_once 'conectar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['descricao'])) {
    $meta = R::dispense('metas');
    $meta->descricao = $_POST['descricao'];
    $meta->concluida = 0;

    R::store($meta);

    header('Location: metas.php');
    exit;
}
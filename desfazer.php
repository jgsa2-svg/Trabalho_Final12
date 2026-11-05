<?php
require_once 'conectar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['concluida'])) {
    $id = (int) $_POST['id'];
    $concluida = (int) $_POST['concluida'];

    $meta = R::load('metas', $id);

    if ($meta->id) {
        $meta->concluida = $concluida;
        R::store($meta);
    }
}

header('Location: metas.php');
exit;
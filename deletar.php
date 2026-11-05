<?php
require_once 'conectar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $meta = R::load('metas', $_POST['id']);

    if ($meta->id) {
        R::trash($meta);
    }
}

header('Location: metas.php');
exit;
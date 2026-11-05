<?php

require_once 'classes/rb-mysql.php';

R::setup(
    'mysql:host=localhost;dbname=trabalho_final',
    'root',
    'aluno'
);

if (!R::testConnection()) {
    die('Erro ao conectar com o banco de dados!');
}

?>
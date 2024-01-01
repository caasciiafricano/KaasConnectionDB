<?php

include_once "config/config.php";
include_once "lib/kaasConnectionDB.php";

$bd = new KaasConnectionDB();

$dados = [
    "nome" => "Carlos Avelino",
];

$bd->insert("INSERT INTO clientes;");
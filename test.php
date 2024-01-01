<?php

include_once "config/config.php";
include_once "lib/kaasConnectionDB.php";

$bd = new KaasConnectionDB();

$dados = [
    "nome" => "Carlos Avelino",
];

#$bd->insert("INSERT INTO clientes VALUES(0,'Carlos Avelino',DEFAULT,DEFAULT,DEFAULT,DEFAULT);");

$bd->delete("DELETE FROM clientes");
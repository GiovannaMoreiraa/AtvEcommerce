<?php

require "../model/Cliente.class.php";

$cliente = new Cliente();
$cliente->remove();

header('Location: ../index.php?value=1');
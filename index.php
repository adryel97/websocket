<?php
require __DIR__ . '/vendor/autoload.php';

app()->setNamespace('\App\Controller');

app()->get('/', 'Page@viewClientes');
app()->get('/cadastro/cliente', 'Page@viewCadastro');
app()->post('/create/cliente', 'Page@createCliente');

app()->run();
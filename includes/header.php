<?php
require_once __DIR__.'/bootstrap.php';$empresa=configEmpresa($pdo);$flash=getFlash();
?><!doctype html><html lang="pt-BR"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title><?= e($empresa['nome_empresa']??'Prodatas') ?> · Orçamentos</title><link rel="stylesheet" href="assets/css/app.css"></head><body>
<header class="topbar"><div class="brand"><?php if(!empty($empresa['logo_path'])&&is_file(__DIR__.'/../'.$empresa['logo_path'])):?><img src="<?= e($empresa['logo_path']) ?>" alt="Logo"><?php else:?><div class="brand-mark">P</div><?php endif;?><div><strong><?= e($empresa['nome_empresa']??'Prodatas') ?></strong><small>Sistema de Orçamentos</small></div></div>
<nav><a href="index.php">Início</a><a href="orcamentos.php">Orçamentos</a><a href="clientes.php">Clientes</a><a href="produtos.php">Produtos</a><a href="servicos.php">Serviços</a><a href="configuracoes.php">Configurações</a></nav></header><main class="container">
<?php if($flash):?><div class="alert <?= e($flash['type']) ?>"><?= e($flash['message']) ?></div><?php endif;?>

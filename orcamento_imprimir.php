<?php
require 'includes/orcamento_render.php';$id=(int)($_GET['id']??0);$o=orcamentoData($pdo,$id);echo renderOrcamento($o,false);

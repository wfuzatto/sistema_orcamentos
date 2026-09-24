<?php
require 'includes/orcamento_render.php';$id=(int)($_GET['id']??0);$o=orcamentoData($pdo,$id);$autoload=__DIR__.'/vendor/autoload.php';
if(!file_exists($autoload))exit('Pacote Dompdf ausente ou incompleto nesta cópia da aplicação. Atualize o projeto pelo GitHub.');
require $autoload;$options=new Dompdf\Options();$options->set('isRemoteEnabled',true);$options->set('defaultFont','DejaVu Sans');$pdf=new Dompdf\Dompdf($options);$pdf->loadHtml(renderOrcamento($o,true),'UTF-8');$pdf->setPaper('A4','portrait');$pdf->render();$pdf->stream('orcamento-'.str_pad((string)$o['numero'],5,'0',STR_PAD_LEFT).'.pdf',['Attachment'=>false]);

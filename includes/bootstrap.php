<?php
declare(strict_types=1);session_start();require_once __DIR__.'/../config/database.php';
function e(?string $v):string{return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8');}
function money(float $v):string{return 'R$ '.number_format($v,2,',','.');}
function redirect(string $u):never{header('Location: '.$u);exit;}
function flash(string $t,string $m):void{$_SESSION['flash']=['type'=>$t,'message'=>$m];}
function getFlash():?array{$f=$_SESSION['flash']??null;unset($_SESSION['flash']);return $f;}
function configEmpresa(PDO $pdo):array{$r=$pdo->query("SELECT * FROM configuracoes WHERE id=1")->fetch();return $r?:[];}
function proximoNumero(PDO $pdo):int{return (int)$pdo->query("SELECT COALESCE(MAX(numero),0)+1 FROM orcamentos")->fetchColumn();}

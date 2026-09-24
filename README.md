# Sistema de Orçamentos — Prodatas

Sistema web em PHP + MariaDB/MySQL para cadastro de clientes, produtos, serviços e emissão de orçamentos profissionais em PDF.

## Requisitos
- XAMPP com PHP 8.1+
- MySQL/MariaDB
- Composer

## Instalação rápida
1. Clone em `C:\xampp\htdocs\sistema_orcamentos`.
2. Crie o banco executando `database/install.sql` no phpMyAdmin.
3. Ajuste `config/database.php` se seu MySQL usar senha.
4. Na pasta do projeto, execute `composer install`.
5. Acesse `http://localhost/sistema_orcamentos/`.
6. Em **Configurações**, informe os dados da Prodatas, texto institucional, logo e dados do papel timbrado.

O PDF é gerado com Dompdf. O orçamento também possui visualização HTML imprimível como fallback.

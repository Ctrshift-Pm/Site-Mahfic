# Mahfic Revamp

Projeto web desenvolvido em 2023 com foco institucional e administrativo.

## Stack

- HTML
- CSS
- JavaScript
- PHP

## Estrutura

- `index.php`: entrada principal
- `style.css`: estilos
- `script.js`: interacoes do frontend
- `login/`: autenticacao e acesso ao painel
- `Página Cadastro/`: formulario e fluxo de cadastro
- `Página Adm/`: area administrativa
- `Colaboradores/`: curriculos e conteudo institucional
- `curriculos adm/`: materiais adicionais preservados da versao original

## Objetivo

Servir como base para uma experiencia web com areas publicas e administrativas, representando uma entrega autoral anterior aos projetos full stack mais recentes.

## Publicacao

Este repositorio foi reorganizado para manter uma estrutura canônica sem a pasta duplicada `Mahfic Revamp/`.
Os assets válidos da raiz foram preservados e os arquivos de código mais recentes foram promovidos para a estrutura principal.

## Configuracao local

1. Copie `.env.example` para `.env` ou configure as variaveis de ambiente manualmente.
2. Preencha as variaveis `SMTP_*` para habilitar envio de e-mail.
3. Preencha `DB_*` para conectar o login ao banco local.
4. Defina `MAHFIC_SEED_PASSWORD` antes de executar `login/adduser.php`.

# Cadastro-de-Produtos
🛒 Cadastro de Produtos com Validação em PHP

Este projeto é uma aplicação web simples para cadastro de produtos em um banco de dados MySQL, com validação de dados no lado do servidor utilizando PHP e feedback visual temporário utilizando JavaScript.

📌 Funcionalidades

Formulário de Cadastro: Interface em HTML para entrada do nome e preço do produto.

Validação PHP:

Verifica se o nome do produto não está vazio.

Valida se o preço informado é numérico e maior que zero.

Integração com MySQL: Insere os dados validados na tabela produtos do banco de dados exercicio.

Feedback Dinâmico: Exibe mensagens de sucesso ou erro na tela que somem automaticamente após 5 segundos via JavaScript.

🛠️ Tecnologias Utilizadas

HTML5: Estruturação da página e do formulário.

PHP: Processamento do formulário, validação dos dados e conexão com o banco de dados via extensão mysqli.

MySQL: Armazenamento e gerenciamento das informações dos produtos.

JavaScript: Temporizador para ocultar as mensagens de notificação na interface.

🗄️ Configuração do Banco de Dados

Antes de executar a aplicação, certifique-se de criar o banco de dados e a tabela necessária no MySQL (pelo phpMyAdmin ou via linha de comando):

CREATE DATABASE IF NOT EXISTS exercicio;
USE exercicio;

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL
);


📂 Como Executar o Projeto

Certifique-se de ter um ambiente de desenvolvimento local rodando (como XAMPP, WAMP ou Laragon).

Clone ou copie os arquivos do projeto para a pasta do seu servidor web (ex: C:\xampp\htdocs\cadastro-produtos\).

Inicie os módulos Apache e MySQL no painel de controle do seu servidor local.

Abra o navegador web e acesse a URL:

http://localhost/cadastro-produtos/


⚙️ Configurações da Conexão

As credenciais do banco de dados padrão no script são:

Host: localhost

Usuário: root

Senha: Senai@118 (ajuste para a senha do seu ambiente local, se necessário)

Banco de Dados: exercicio

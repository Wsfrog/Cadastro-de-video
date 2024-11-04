# Cadastro de Vídeos

## Descrição
O **Cadastro de Vídeos** é uma aplicação web que permite aos usuários cadastrar e visualizar vídeos do YouTube. Desenvolvida em PHP e MySQL, a aplicação oferece um formulário para entrada de dados, um script para processar e armazenar as informações em um banco de dados, e uma interface para exibir todos os vídeos cadastrados.

## Funcionalidades
- **Cadastro de Vídeos**: Insira o nome e o link do vídeo do YouTube. O sistema valida o link antes de armazená-lo.
- **Exibição de Vídeos**: Visualize todos os vídeos cadastrados em um layout responsivo com Bootstrap.
- **Banco de Dados**: Os vídeos são armazenados em um banco de dados MySQL, garantindo segurança e integridade dos dados.

## Tecnologias Utilizadas
- **Frontend**: HTML, CSS (Bootstrap), JavaScript
- **Backend**: PHP
- **Banco de Dados**: MySQL

## Requisitos
- Servidor com PHP (versão 7.0 ou superior)
- Servidor MySQL para gerenciamento de banco de dados
- Acesso à internet para bibliotecas externas (Bootstrap, jQuery)

## Instalação

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/seu_usuario/propro.git
   cd propro
   
Crie o banco de dados: Execute o seguinte script SQL no seu servidor MySQL:
CREATE DATABASE propro; -- Substitua por um nome de sua escolha
USE propro;
CREATE TABLE videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    link VARCHAR(255) NOT NULL
);

Configuração do Banco de Dados:

Abra os arquivos PHP onde a conexão com o banco de dados é feita e ajuste as configurações (nome do banco, usuário e senha) conforme necessário.

Execute o servidor:

Você pode usar um servidor local como XAMPP, MAMP ou o servidor embutido do PHP para executar a aplicação. No terminal, execute:

Acesse a aplicação pelo navegador em http://localhost:(seu repositorio)


Uso
Acessar a Página Inicial:

Abra index.html no navegador.
Navegar até o Cadastro:

Clique no link para Cadastrar Vídeo.
Preencher o Formulário:

Insira o Nome do Vídeo e o Link do Vídeo do YouTube.
Clique em Cadastrar Vídeo.
Visualizar os Vídeos Cadastrados:

Após o cadastro, você será redirecionado para a página de exibição de vídeos (videos.php), onde todos os vídeos cadastrados estarão disponíveis.
Contribuição
Contribuições são bem-vindas! Se você tiver sugestões de melhorias ou novas funcionalidades, sinta-se à vontade para:

Abrir um issue para discutir melhorias.
Enviar um pull request com suas contribuições.


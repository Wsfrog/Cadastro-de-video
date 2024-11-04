Cadastro de Vídeos
Descrição
O projeto Cadastro de Vídeos é uma aplicação web desenvolvida em PHP e MySQL que permite aos usuários cadastrar e visualizar vídeos do YouTube. O sistema é composto por um formulário para a entrada de dados, um script PHP que processa e armazena essas informações em um banco de dados, e uma página que exibe todos os vídeos cadastrados.

Funcionalidades
Cadastro de Vídeos: Permite que os usuários insiram o nome do vídeo e o link do YouTube. O sistema valida o link antes de armazená-lo.
Exibição de Vídeos: Exibe todos os vídeos cadastrados em um layout responsivo, utilizando o Bootstrap para estilização.
Banco de Dados: Armazena os vídeos em um banco de dados MySQL, garantindo segurança e integridade dos dados.
Tecnologias Utilizadas
Frontend:
HTML
CSS (Bootstrap)
JavaScript
Backend:
PHP
Banco de Dados:
MySQL
Requisitos
Servidor com PHP (versão 7.0 ou superior).
Servidor MySQL para gerenciamento de banco de dados.
Acesso à internet para o uso de bibliotecas externas (Bootstrap, jQuery).

Clone o repositório:
git clone https://github.com/seu_usuario/propro.git
cd propro


Crie o banco de dados: Execute o seguinte script SQL no seu servidor MySQL:
CREATE DATABASE seu_nome_do_banco; -- Substitua por um nome de sua escolha
USE seu_nome_do_banco;
CREATE TABLE videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    link VARCHAR(255) NOT NULL
);

Configuração do Banco de Dados:

Altere as configurações de conexão com o banco de dados nos arquivos PHP (se necessário) para corresponder às suas credenciais.

Execute o servidor:

Você pode usar um servidor local como XAMPP, MAMP ou o servidor embutido do PHP para executar a aplicação:

Acesse a aplicação pelo navegador em http://localhost:(nome do repositorio)

Uso
Acesse a página inicial (index.html).
Navegue até a página de cadastro (formulario.html).
Preencha o formulário com o nome do vídeo e o link do YouTube.
Após o cadastro, você será redirecionado para a página de exibição de vídeos, onde todos os vídeos cadastrados estarão disponíveis.
Contribuição
Contribuições são bem-vindas! Se você tiver sugestões de melhorias ou novas funcionalidades, sinta-se à vontade para abrir um issue ou enviar um pull request.

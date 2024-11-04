Cadastro de Vídeos
Descrição
O Cadastro de Vídeos é uma aplicação web que permite aos usuários cadastrar e visualizar vídeos do YouTube. Desenvolvida em PHP e MySQL, a aplicação oferece um formulário para entrada de dados, um script para processar e armazenar as informações em um banco de dados, e uma interface para exibir todos os vídeos cadastrados.

Funcionalidades
Cadastro de Vídeos: Insira o nome e o link do vídeo do YouTube. O sistema valida o link antes de armazená-lo.
Exibição de Vídeos: Visualize todos os vídeos cadastrados em um layout responsivo com Bootstrap.
Banco de Dados: Os vídeos são armazenados em um banco de dados MySQL, garantindo segurança e integridade dos dados.
Tecnologias Utilizadas
Frontend: HTML, CSS (Bootstrap), JavaScript
Backend: PHP
Banco de Dados: MySQL
Requisitos
Servidor com PHP (versão 7.0 ou superior)
Servidor MySQL para gerenciamento de banco de dados
Acesso à internet para bibliotecas externas (Bootstrap, jQuery)
Instalação
Clone o repositório:

bash
Copiar código
git clone https://github.com/seu_usuario/propro.git
cd propro
Crie o banco de dados: Execute o seguinte script SQL no seu servidor MySQL:

sql
Copiar código
CREATE DATABASE seu_nome_do_banco; -- Substitua por um nome de sua escolha
USE seu_nome_do_banco;
CREATE TABLE videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    link VARCHAR(255) NOT NULL
);
Configuração do Banco de Dados: Altere as configurações de conexão com o banco de dados nos arquivos PHP, se necessário.

Execute o servidor: Você pode usar um servidor local como XAMPP, MAMP ou o servidor embutido do PHP para executar a aplicação:

bash
Copiar código
php -S localhost:8000
Acesse a aplicação pelo navegador em http://localhost:8000.

Uso
Acesse a página inicial (index.html).
Navegue até a página de cadastro (formulario.html).
Preencha o formulário com o nome do vídeo e o link do YouTube.
Após o cadastro, você será redirecionado para a página de exibição de vídeos, onde todos os vídeos cadastrados estarão disponíveis.
Contribuição
Contribuições são bem-vindas! Se você tiver sugestões de melhorias ou novas funcionalidades, sinta-se à vontade para abrir um issue ou enviar um pull request.

# DompixelShop

O projeto DompixelShop é um catálogo de produtos que tem como objetivo permitir o gerenciamento do catálogo de produtos de uma loja virtual chamada "DompixelShop". 

Através dessa plataforma, é possível cadastrar novos produtos, editar os dados de produtos existentes, listar todos os produtos cadastrados e excluí-los do banco de dados.


## Instruções de Execução

Siga estas instruções para obter uma cópia do projeto em funcionamento na sua máquina local para fins de desenvolvimento e teste.

### Pré-requisitos

Certifique-se de que sua máquina atenda aos seguintes requisitos:

- PHP >= 8.1
- Composer - [Instalação do Composer](https://getcomposer.org/download/)
- Node.js e NPM - [Instalação do Node.js](https://nodejs.org/)

### Instalação

Siga os passos abaixo para configurar o projeto:

1. Clone o repositório:

```bash
git clone https://github.com/MarlomMedeiros/dompixel-shop.git
cd dompixel-shop
```

2. Instale as dependências do PHP executando:

```bash
composer install
```

3. Instale as dependências do front-end executando:

```bash
npm install
```

4. Faça uma cópia do arquivo `.env.example` para `.env`:

```bash
cp .env.example .env
```

5. Gere uma chave de aplicativo:

```bash
php artisan key:generate
```

6. Configure o banco de dados no arquivo `.env`. Exemplo:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

7. Execute as migrações para criar as tabelas no banco de dados:

```bash
php artisan migrate
```

8. Inicie o servidor de desenvolvimento:

```bash
php artisan serve
```

9. Acesse o projeto em seu navegador através da URL:

```
http://localhost:8000
```

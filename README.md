# 🏠 Projeto Interdisciplinar - Sistema Web para Escritório de Design de Interiores

Este é um projeto interdisciplinar desenvolvido no 2º semestre do curso de **Análise e Desenvolvimento de Sistemas**. O sistema tem como objetivo atender às necessidades de gerenciamento de um **escritório de design de interiores**, facilitando o cadastro de clientes, controle de projetos, agendamento de visitas e organização de orçamentos.

## 🚀 Tecnologias Utilizadas

- **PHP**: Linguagem de programação server-side.
- **Laravel**: Framework PHP moderno para desenvolvimento ágil e seguro.
- **SQLlite**: Sistema de gerenciamento de banco de dados relacional.
- **HTML/CSS**: Para estrutura e estilização das páginas.

## 🎯 Objetivos do Sistema

- Cadastrar e gerenciar clientes e projetos de design.
- Armazenar informações sobre cada projeto.
- Interface simples, responsiva e de fácil uso.

## 📁 Estrutura do Projeto

/projeto-design-interiores
│

├── app/           # Código principal da aplicação (models, controllers, etc.)

├── bootstrap/     # Arquivo de inicialização e cache

├── config/        # Arquivos de configuração

├── database/      # Migrations, seeders, factories e banco SQLite

├── public/        # Arquivos públicos acessados via navegador

├── resources/     # Views Blade, arquivos front-end e traduções

├── routes/        # Definições de rotas (web, api, etc.)

├── storage/       # Logs, cache, uploads e arquivos temporários

├── tests/         # Testes unitários e funcionais

├── vendor/        # Dependências geradas pelo Composer

└── README.md # Este arquivo


## 🔧 Como Executar o Projeto

### Pré-requisitos:
- PHP >= 8.1
- Composer
- MySQL
- Laravel CLI

### Passos:

```bash
# Clone o repositório
git clone https://github.com/seu-usuario/projeto-design-interiores.git

# Acesse a pasta do projeto
cd projeto-design-interiores

# Instale as dependências do Laravel
composer install

# Copie o arquivo de configuração de ambiente
cp .env.example .env

# Configure o banco de dados no arquivo .env

# Gere a chave da aplicação
php artisan key:generate

# Execute as migrações do banco de dados
php artisan migrate

# Inicie o servidor local
php artisan serve
```

## 📚 Disciplinas Envolvidas

Este projeto integra conhecimentos adquiridos nas seguintes disciplinas:

- **Sistemas de Informação**
- **Engenharia de Software I**
- **Linguagem de Programação**

## 👨‍💻 Equipe

- Adriana Leite
- Luidy Souza
- Matheus Rezende
- Rafael Magalhães Ramos
- Ricardo Horikawa
- Victor Gabriel Feitosa

## 📄 Licença

Este projeto é de uso **acadêmico**, desenvolvido para fins educacionais e sem fins comerciais.

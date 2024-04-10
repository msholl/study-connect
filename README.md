![Study Connect](http://www.studyconnect.online/study_connect.svg)


### **Integrantes:**
**Matheus Sholl Schneider**

**Breno Malaquias dos Santos**


&nbsp;
### Sobre o projeto:
> A aplicação será um site de perguntas e respostas voltado para alunos de graduação. O objetivo é criar um espaço relativamente simples onde os usuários possam aprimorar seu aprendizado de forma conjunta, ao mesmo tempo que tem suas dúvidas respondidas, são encorajados a responder as dúvidas diferentes dos outros usuários,criando uma troca de conhecimento. A princípio o planejamento do projeto não visa um escopo muito grande, não se trata de uma mega aplicação como um “stack overflow”, a ideia é criar um espaço onde os alunos possam conversar e interagir, criando uma comunidade através do fórum e das perguntas e respostas.

## Como rodar o projeto localmente

### Requisitos de ambiente
- Php v8.3
- Composer
- Node.js v20.x
- NPM
- MySQL
- ---

### Baixar o projeto
Clonar o projeto:
``` 
# Clone o repositório
git clone https://github.com/msholl/study-connect.git

# Entre na pasta do projeto
cd study-connect
```
---
### Configurar backend
```
# Instalar dependências
composer install

# Configurar .env
cp .env.example .env

# Criar banco de dados
create database study_connect;

# Rodar migrations e seeders
php artisan migrate:fresh --seed
```
---
### Configurar frontend
```
# Instalar dependências
npm install

# Rodar em ambiente de desenvolvimento
npm run dev

# Rodar em ambiente de produção
npm run build
```
---

### Rodar o projeto localmente

```
# Rodar servidor
php artisan serve
```
---

### Estrutura do projeto
`app/Http/Controllers` Controllers da aplicação

`app/Models` Models da aplicação

`resources/views` Views da aplicação

`database/migrations` Migrations da aplicação

`database/seeders` Seeders da aplicação

`routes/web` Rotas da aplicação

### Comandos úteis Laravel

```php
php artisan migrate:fresh --seed //Roda as migrations e seeders

php artisan serve //Roda o servidor local

php artisan make:model NomeModelo -m //Cria um model e migration

php artisan make:controller NomeController -r //Cria um controller com recursos
```












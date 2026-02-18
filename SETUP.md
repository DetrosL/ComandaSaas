# Setup do Projeto – ComandaSaas
Este guia explica como preparar o ambiente para rodar o projeto ComandaSaas localmente.

## Tecnologias Utilizadas
### Backend
- PHP 8.4
- Laravel 12
- Laravel Sanctum
- PostgreSQL

### Frontend Web
- Node.js 22+
- React
- Vite
- TypeScript
- Tailwind CSS
- shadcn/ui

## Instalar PHP 8.4
Verifique se já possui instalado:
```bash
php -v
```
Se não tiver:
> Windows

Recomendado:
- Instalar via XAMPP/HERD
- Ou usar Scoop
- Ou instalar PHP manualmente

> Mac

```bash
brew install php
```

## Instalar Composer

Verifique:
```bash
composer -V
```
Se não tiver: [Composer](https://getcomposer.org/)

## Instalar Node.js

Verifique:
```bash
node -v
npm -v
```
Recomendado:
- Node 22+
- Usar nvm (opcional)

[Download AQUI](https://nodejs.org/)

## Instalar PostgreSQL
Download: [Postgre](https://www.postgresql.org/download/) ou via Docker:
```bash
docker run --name comanda-postgres \
-e POSTGRES_PASSWORD=postgres \
-e POSTGRES_DB=comanda_dev \
-p 5432:5432 \
-d postgres:16
```

## Configuração do Backend
Entre na pasta:
```bash
cd backend
```
Instale dependências:
```bash
composer install 
```
Crie o arquivo .env:
```bash
cp .env.example .env
```
Gere a chave:
```bash
php artisan key:generate
```
Configure o banco no .env:
```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=comanda_dev
DB_USERNAME=postgres
DB_PASSWORD=postgres
```
Rode as migrations:
```bash
php artisan migrate
```
Inicie o servidor:
```bash
php artisan serve
```
Backend estará disponível em:
```
http://localhost:8000
```
Teste:
```
http://localhost:8000/api/health
```

## Configuração do Frontend Web
Entre na pasta:
```bash
cd web
```
Instale dependências:
```bash
npm install
```
Crie arquivo .env:
```env
VITE_API_URL=http://localhost:8000/api
```
Inicie o servidor:
```bash
npm run dev
```
Frontend disponível em:
```
http://localhost:5173
```

## Verificando se está tudo certo
Se tudo estiver correto:
- PostgreSQL rodando
- Laravel rodando em :8000
- React rodando em :5173
- Endpoint /api/health respondendo
- Front consumindo API

## Problemas Comuns
Erro CORS
> Verifique config/cors.php.

Erro conexão banco
> Verifique credenciais no .env.

Erro alias shadcn
> Verifique tsconfig.json e vite.config.ts.

## Ambiente pronto
Se todos os serviços estiverem rodando, o sistema está pronto para desenvolvimento.
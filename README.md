# Comanda Saas
Sistema SaaS para gerenciamento de comandas digitais, focado em restaurantes, bares e eventos.

## Objetivo
O ComandaSaas tem como objetivo oferecer uma plataforma moderna e escalável para:
- Controle de mesas
- Abertura e fechamento de comandas
- Registro de pedidos
- Aplicação automática de taxas (serviço, couvert, etc.)
- Gestão de produtos
- Relatórios financeiros
<!-- - Estrutura preparada para multi-tenant (vários estabelecimentos) -->

## Arquitetura

O projeto segue o modelo API-first com monorepo:

```
ComandaSaas/
├── backend/   → API Laravel
├── web/       → Frontend React (Painel)
├── mobile/    → Aplicativo mobile (futuro)
├── docs/
└── README.md
```

## Tecnologias Utilizadas
### Backend (API)
- PHP 8.4
- Laravel 12
- Laravel Sanctum (autenticação via token)
- PostgreSQL
- Estrutura RESTful
- API-first architecture

### Frontend Web
- React
- Vite
- TypeScript
- React Router
- Tailwind CSS
- shadcn/ui
- Axios

### Database
- PostgreSQL

## Como rodar o projeto

### Backend (Laravel API)
```
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```
API rodará em:
``` 
http://localhost:8000 
```

### Frontend Web (React)
```
cd web
npm install
npm run dev
```
Frontend rodará em:
```
http://localhost:5173
```

## Roadmap
- Cadastro de estabelecimentos
- Estrutura multi-tenant
- Cadastro de mesas
- Abertura de comanda
- Registro de pedidos
- Cálculo automático de taxas
-  Fechamento de comanda
- Controle de permissões (roles)
- Relatórios financeiros
- Aplicativo mobile
- Integração com impressão térmica
- Integração com gateways de pagamento

## Planejamento de Arquitetura
### Backend
- Controllers
- Services
- Requests (validação)
- Resources (transformação JSON)
- Middleware de tenant
- Versionamento futuro se necessário

### Frontend
- Layout base
- Rotas protegidas
- Sistema de tema (dark/light)
- Componentização com shadcn

## Licença
> O uso, cópia, modificação ou distribuição deste software sem autorização prévia é estritamente proibido.
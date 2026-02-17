# Comanda Saas

Sistema SaaS para gerenciamento de comandas digitais, focado em restaurantes, bares e eventos.

## Objetivo

O ComandaSaas tem como objetivo oferecer uma plataforma moderna para:

- Controle de mesas
- Abertura e fechamento de comandas
- Registro de pedidos
- Aplicação de taxas (serviço, couvert, etc.)
- Gestão de produtos
- Relatórios financeiros
- Estrutura preparada para multi-tenant (vários estabelecimentos)

O sistema será composto por:

- API backend robusta
- Aplicativo mobile para operação
- Arquitetura escalável para crescimento futuro

## Tecnologias Utilizadas

### Backend
- .NET 8 (Web API)
- C#
- Entity Framework Core
- Arquitetura baseada em Clean Architecture

### Mobile
- Flutter
- Dart

### Futuro (Planejado)
- Autenticação JWT
- Multi-tenant
- Integração com impressão térmica
- Integração com gateways de pagamento

## Arquitetura

O backend segue uma estrutura modular:

```
backend/
├── Api
├── Application
├── Domain
└── Infrastructure
```

Separando:
- Regras de negócio
- Casos de uso
- Infraestrutura
- Interface HTTP

##  Estrutura do Repositório

```
ComandaSaas/
├── backend/
├── mobile/
├── docs/
└── ComandaSaas.sln
```

## Como rodar o projeto

### Backend

```bash
dotnet build
dotnet run --project backend/src/Api
```
### Mobile
```bash
cd mobile
flutter pub get
flutter run
```

## Roadmap
- Cadastro de estabelecimentos
- Cadastro de mesas
- Abertura de comanda
- Registro de pedidos
- Cálculo automático de taxas
- Fechamento de comanda
- Autenticação de usuários
- Multi-tenant

## Licença
> O uso, cópia, modificação ou distribuição deste software sem autorização prévia é estritamente proibido.
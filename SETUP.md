# Setup do Projeto – Comanda SaaS
## Tecnologias
- .NET 8 (Web API)
- Flutter
- PostgreSQL

# Preparando o ambiente
## Instalar o .NET SDK
### Windows / Mac / Linux

> Acesse: [Baixe o .NET 8 SDK (LTS)](https://dotnet.microsoft.com/download)

Após instalar, valide: 
```bash
    dotnet --version
```
Se aparecer a versão, está OK.

## Instalar Flutter (via VS Code)
### Instalação recomendada (VS Code)

> Instale: [Visual Studio Code](https://code.visualstudio.com/)

No VS Code, instale as extensões:

- Flutter
- Dart

Ao instalar a extensão Flutter, siga o assistente para:

- Baixar o Flutter SDK
- Configurar Android SDK automaticamente

Após finalizar, rode no terminal:
```bash
    flutter doctor
```
Resolva qualquer pendência indicada.

## Banco de Dados (PostgreSQL)
Instale: [PostgreSQL](https://www.postgresql.org/download/)

Ou rode via Docker:
```bash
    docker run --name comanda-postgres \
    -e POSTGRES_PASSWORD=postgres \
    -e POSTGRES_DB=comanda_dev \
    -p 5432:5432 \
    -d postgres:16
```

# Rodando
## Rodando o Backend (.NET)
Entre na pasta da API:
```bash
    cd Api
    dotnet restore
    dotnet run
```
A API ficará disponível em(ou outra porta especificada):
```arduino
    http://localhost:5269
```
Teste:
```arduino
    http://localhost:5269/health
```

## Rodando o App Flutter
Entre na pasta do app:
```bash
    cd mobile
    flutter pub get
    flutter run
```
Se estiver usando emulador Android:
- Certifique-se que ele está aberto

Se estiver usando dispositivo físico:
- Ative modo desenvolvedor
- Conecte via USB

## Configuração env

## Pronto
Se tudo estiver correto:
- API rodando
- Flutter rodando
- Endpoint /health respondendo

## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/Gabriel-Delazeri/Spotify-Integration-with-Laravel
```

Entre no diretório do projeto

```bash
  cd Spotify-Integration-with-Laravel
```

Suba o container do docker

```bash
  docker compose up -d 
```

Entre no bash do container

```bash
docker compose exec spotify_api_integration bash     
``` 

Instale as dependências

```bash
  composer install
```

Crie o arquivo .env e coloque suas variaveis de ambiente 

```bash
  touch .env
```

 * DB_HOST=db_spotify_api_integration

 Gere a chave da aplicação Laravel

```bash
  php artisan key:generate
```
 

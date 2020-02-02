## Lliege Challenge

### Como rodar este projeto

#### Usando Docker

1. Entre no diretório raíz do projeto e execute o seguinte comando:
    
    `docker-compose up -d --build`

2. Crie o esquema do Banco de Dados:

    `docker-compose exec php-fpm bin/console doctrine:schema:create`

3. Faça o Insert das primeiras informações para isto envie uma requisição POST para:

    `POST: localhost:8080/procedure/first/insert`
    
**OBS: você pode usar o CURL para isto da seguinte forma:**

    `curl -X POST -H 'Content-Type: application/json' localhost:8080/procedure/first/insert`

4. Execute a Procedure, enviando uma requisição GET:

    `GET: localhost:8080/procedure/first/insert`

**OBS: você pode usar o CURL para isto da seguinte forma:**

    `curl -X GET -H 'Content-Type: application/json' localhost:8080/procedure/first/insert`

5. Execute o comando para acessar a aplicação

    `localhost:8080`

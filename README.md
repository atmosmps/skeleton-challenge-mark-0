## Skeleton Challenge Mark 0

### Sobre este projeto

Este é um projeto que pode servir como base para desafios. O desafio deste repositório está no [documento do teste](test-doc.pdf).

### Especificações de Tecnologias

- PHP 7.3
- Symfony 4.4
- Docker version 19.03.3
- Postgres 11.1
- Nginx

### Como rodar este projeto

#### Usando Docker

1. Entre no diretório raíz do projeto e execute o seguinte comando:
    
    `docker-compose up -d --build`

2. Crie o esquema do Banco de Dados:

    `docker-compose exec php-fpm bin/console doctrine:schema:create`
    
    Se precisar deletar um esquema já criado, use:
    
    `docker-compose exec php-fpm bin/console doctrine:schema:drop --force`
    
3. Faça o insert das primeiras informações, para isto envie uma requisição POST para:

    `POST: localhost:8000/procedure/first/insert`
    
    **Use o CURL para isto da seguinte forma:**
    
    `curl -X POST -H 'Content-Type: application/json' localhost:8000/procedure/first/insert`

OBS: O script para o insert das primeiras informações foram informados no [documento do teste](test-doc.pdf). Pensando em tornar mais fácil a configuração, foi criado com controller que realiza a criação e execução de uma procedure que faz o insert das primeiras informações na base de dados.

5. Execute o comando para acessar a aplicação:

    `localhost:8000`

**OBS: Caso não esteja usando o Docker, Será necessário alterar as configurações de Banco de Dados no Symfony no arquivo do doctrine que fica em: `config/packages/doctrine.yaml`. Será necessário também, criar o banco de dados separadamente.**

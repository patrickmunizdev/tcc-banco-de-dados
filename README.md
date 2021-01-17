
Repositório destinado a armazenar script php que usei no meu TCC de banco de dados pela instituição UNICESUMAR para criar uma base fake com registros de banco eletrônico para conduzir experimentos com índices no banco de dados POSTGRES. 

## Instalação

Para utilizar esses scripts é necessario ter php 7+ bem como instalar a biblioteca `faker` utilizando o composer

```bash
php composer install
```

## Como Usar
Primeiramente configure o arquivo `Conexao.php` com as configurações do seu banco de dados.

Posteriormente execute no bash/powershell os scripts responsavel por popular a base dados com as informações aleatórias:

* Gerar lista de colaboradores/funcionários:

```bash
 php -dmemory_limit=-1 GeraColaboradores.php
```

* Gerar registros de ponto eletrônico:

```bash
 php -dmemory_limit=-1 GeraRegistrodeFrequencia.php
```
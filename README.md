
_PT-BR_

## Como Usar

1- `git clone https://github.com/gabriel-roque/crud-laravel`

2- Duplique o arquivo env.example para  .env

3- Configure os campos de acordo com o seu SGBD, nome da base de dados e seu usuario de acesso:

DB_CONNECTION=**mysql**<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=**DATABASENAME**<br>
DB_USERNAME=**USER**<br>
DB_PASSWORD=**PASS**<br>

4- `php artisan key:generete` --- ira gerar a chave da app laravel no arquivo .env

5- `php artisan migrate --seed` --- carregar as tabelas na base de dados e alguns registros

6- `php artisan serve` ---iniciar o service do laravel

7- Acesse no navegador localhost:8000



*EUA*

## How to use

1- `git clone https://github.com/gabriel-roque/crud-laravel`

2- Duplicate the env.example file to .env

3- Configure the fields according to your DBMS, database name and your access user:

DB_CONNECTION=**mysql**<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=**DATABASENAME**<br>
DB_USERNAME=**USER**<br>
DB_PASSWORD=**PASS**<br>

4- `php artisan key: generete` --- will generate the laravel app key in the .env file

5- `php artisan migrate --seed` --- load the tables in the database and some records

6- `php artisan serve` --- start laravel service

7- Access in the browser localhost: 8000

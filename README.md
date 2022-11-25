**Setup**
---------------
ubah file.venv

DB_PORT=3306

DB_DATABASE=db_project_transindo

DB_USERNAME=root

DB_PASSWORD=

**Instalasi web**
---------------

php artisan key:generate

php artisan migrate --seed

**Login/register admin**
---------------

http://127.0.0.1:8000/admin/login

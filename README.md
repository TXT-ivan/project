# Pastabin проект для Goodline(базовая).
## Требования к системе:
- php ~ 7.1
- MySql

 ## Развёртывание
 Переименовать .env.example в .env и выполнить следующие команды:
 ```
  composer install
  ./artisan key:generate
  ./artisan migrate
  ./artisan db:seed
```
## Настройка БД
В .env заполнить конфикурацию:
```
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

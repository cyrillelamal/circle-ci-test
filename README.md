# Организация CI/CD с помощью CircleCI

## Задание 1

В данном репозитории находится типичный [Lumen](https://lumen.laravel.com/) проект.

CI управляется конфигурацией в файле [.circleci/config.yml](.circleci/config.yml).

Пример удачной сборки:
![Пример удачной сборки](/resources/images/success.PNG "Пример удачной сборки")

Пример неудачной сборки (невозможно установить sqlite):
![Невозможно установить sqlite](/resources/images/fail-sqlite.PNG "Невозможно установить sqlite")

Пример неудачной сборки (интерактивный режим миграций):
![Интерактивный режим миграций](/resources/images/fail-migrations.PNG "Интерактивный режим миграций")

## Задание 2

NodeJS проект собирается с помощью `Laravel Mix` - [webpack.mix.js](webpack.mix.js).

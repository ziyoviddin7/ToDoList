### Установка и запуск

```bash
# 1. Клонировать репозиторий
git clone https://github.com/ziyoviddin7/ToDoList.git
cd ToDO

# 2. Сборка и запуск контейнеров
docker compose up -d --build

# 3. Установка зависимостей
docker compose exec php-cli
composer install

# 4. Настройка прав (для Linux/macOS)
sudo chmod 777 -R ./

# 5. Выполнение миграций с тестовыми данными
docker compose exec php-cli
php artisan migrate
```

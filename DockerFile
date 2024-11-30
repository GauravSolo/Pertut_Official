FROM php:8.1-cli

WORKDIR /app

COPY . /app

RUN docker-php-ext-install pdo pdo_mysql

CMD ["php", "dashboard/chat_server.php"]

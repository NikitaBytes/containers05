# Используем образ Debian
FROM debian:latest

# Устанавливаем необходимые пакеты
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql mariadb-server supervisor && \
    apt-get clean

# Монтируем том для хранения базы данных
VOLUME /var/lib/mysql

# Монтируем том для логов
VOLUME /var/log

# Добавляем файлы WordPress в /var/www/html
ADD https://wordpress.org/latest.tar.gz /var/www/html/

# Копируем конфигурационные файлы Apache2
COPY files/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY files/apache2/apache2.conf /etc/apache2/apache2.conf

# Копируем конфигурационные файлы PHP
COPY files/php/php.ini /etc/php/8.2/apache2/php.ini

# Копируем конфигурационные файлы MariaDB
COPY files/mariadb/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

# Копируем конфигурационные файлы Supervisor
COPY files/supervisor/supervisord.conf /etc/supervisor/supervisord.conf

COPY files/wp-config.php /var/www/html/wp-config.php

# Создаём директорию для MariaDB и задаём права
RUN mkdir /var/run/mysqld && chown mysql:mysql /var/run/mysqld

# Открываем порт 80
EXPOSE 80

# Запускаем Supervisor
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/supervisord.conf"]

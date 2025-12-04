# Utiliser une image PHP avec Apache
FROM php:8.2-apache

FROM php:8.2-apache

# Installer les extensions et outils nécessaires
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libzip-dev \
    && docker-php-ext-install pdo_mysql zip

# Activer mod_rewrite
RUN a2enmod rewrite

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# Installer les dépendances Laravel
WORKDIR /var/www/html
RUN composer install --no-dev --optimize-autoloader


# Nettoyer les caches Laravel pour forcer la lecture du .env
RUN php artisan config:clear \
    && php artisan cache:clear \
    && php artisan view:clear \
    && php artisan route:clear

# Exposer le port
EXPOSE 80

# Lancer Apache
CMD ["apache2-foreground"]

# Utiliser une image PHP avec Apache
FROM php:8.2-apache

# Installer les extensions nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Activer mod_rewrite et mime
RUN a2enmod rewrite \
    && a2enmod mime

# Copier le projet Laravel
COPY . /var/www/html

# Définir le DocumentRoot sur /public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Donner les bons droits
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

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

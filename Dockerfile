# Image de base : PHP 8.2 avec Apache
FROM php:8.2-apache

# Définir le dossier de travail
WORKDIR /var/www/html

# Installer les extensions nécessaires à Laravel
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql zip gd mbstring exif pcntl bcmath opcache

# Activer le module Apache rewrite (routes Laravel)
RUN a2enmod rewrite

# Définir DocumentRoot vers public/
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Ajouter un ServerName pour éviter les warnings
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copier ton projet Laravel dans le conteneur
COPY . .

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Donner les bons droits aux dossiers nécessaires
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exposer le port 80
EXPOSE 80

# Lancer Apache
CMD ["apache2-foreground"]



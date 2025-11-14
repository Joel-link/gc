# Utiliser l'image officielle PHP 8.2 avec Apache
FROM php:8.2-apache

# Définir le dossier de travail
WORKDIR /var/www/html

# Installer les dépendances système et extensions PHP nécessaires à Laravel
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql zip gd mbstring exif pcntl bcmath opcache

# Activer le module Apache rewrite (nécessaire pour Laravel routes)
RUN a2enmod rewrite

# Copier le projet Laravel dans le conteneur
COPY . .

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Donner les bons droits aux dossiers de cache et storage
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exposer le port 80
EXPOSE 8000

# Lancer Apache
CMD ["apache2-foreground"]

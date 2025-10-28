
FROM php:8.3-cli


RUN apt-get update && apt-get install -y git unzip zip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


WORKDIR /var/www/html

# Par défaut, copie tout le code (optionnel, si tu montes un volume)
COPY . .

# Commande par défaut (ouvre une console PHP)
CMD ["php", "-a"]

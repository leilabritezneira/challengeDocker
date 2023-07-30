FROM php:7.4-apache-bullseye
# FROM php:8.1-apache-bullseye si on a besoin de php8

# On oublie pas que lors d'un build, on ne réexécute la "commande Dockerfile" qu'à partir d'une ligne détectée comme modifiée
# Ainsi, pour gagner du temps lors des "rebuilds", on commence par les tâches longues, qui changent peu
RUN apt-get update

# git zip et unzip, c'est pour composer
RUN apt-get -y install libxml2-dev libonig-dev postgresql git zip unzip vim

# On ajoute les extensions PHP communes
RUN docker-php-ext-install dom xml mbstring

# On ajoute les extensions PHP pour MySQL/MariaDB
RUN docker-php-ext-install pdo pdo_mysql

# On crée le dossier pour notre site
RUN mkdir /var/www/html/oplaystore

# On définit le "Working Directory" à l'intérieur du conteneur
# (sera utile pour les commandes "RUN" par la suite)
WORKDIR /var/www/html/oplaystore

# On copie la source du site oplaystore
COPY src /var/www/html/oplaystore

# On copie la conf apache dans le conteneur
COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# On active le mod_rewrite, qui permet la redirection d'URL avec Apache
RUN a2enmod rewrite

# On redémarre apache2
RUN service apache2 restart

CMD ["apache2-foreground"]
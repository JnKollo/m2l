#!/usr/bin/env bash

if [ -f '/var/vagrant_provision_postbootstrap' ]; then
    exit 0
fi

# Use single quotes instead of double quotes to make it work with special-character passwords
PASSWORD=''
db='m2l'

echo "Installing MySQL"
    echo "mysql-server mysql-server/root_password password $PASSWORD" | sudo debconf-set-selections
    echo "mysql-server mysql-server/root_password_again password $PASSWORD" | sudo debconf-set-selections
    sudo apt-get update
    sudo apt-get -y install mysql-client-core-5.5 mysql-server
    sudo apt-get -f install

echo "Creating the database '$db'"
    mysql -u root -e "create database $db"

echo "Populating Database '$db'"
    mysql -u root -D $db < /var/www/html/m2l/DB/$db.sql

echo "Install phpmyadmin"
    echo "phpmyadmin phpmyadmin/dbconfig-install boolean true"  | sudo debconf-set-selections
    echo "phpmyadmin phpmyadmin/app-password-confirm password $PASSWORD" | sudo debconf-set-selections
    echo "phpmyadmin phpmyadmin/mysql/admin-pass password $PASSWORD" | sudo debconf-set-selections
    echo "phpmyadmin phpmyadmin/mysql/app-pass password $PASSWORD" | sudo debconf-set-selections
    echo "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2" | sudo debconf-set-selections
    sudo apt-get -y install phpmyadmin

echo "Installing Composer"
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('SHA384', 'composer-setup.php') === '55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"
    sudo mv composer.phar /usr/local/bin/composer

echo "Installing Behat"
    cd /var/www/html/m2l
    composer require --dev behat/behat
    composer install

touch /var/vagrant_provision_postbootstrap


#!/usr/bin/env bash

if [ -f '/var/vagrant_provision_postbootstrap' ]; then
    exit 0
fi

# Use single quotes instead of double quotes to make it work with special-character passwords
PASSWORD=''
db='m2l'

echo "Updating repositories"
    sudo add-apt-repository ppa:ondrej/php
    sudo apt-get update

echo "Installing PHP7"
    apt-get install php7.0 libapache2-mod-php7.0 php7.0-mysql php7.0-mcrypt php7.0-curl php7.0-xml php7.0-mbstring -y

echo "Installing MySQL"
    echo "mysql-server mysql-server/root_password password $PASSWORD" | sudo debconf-set-selections
    echo "mysql-server mysql-server/root_password_again password $PASSWORD" | sudo debconf-set-selections
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
    php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"
    sudo mv composer.phar /usr/local/bin/composer

echo "Adding dependencies to composer_template"
    cd /var/www/html/m2l
    composer require --dev --no-update "phpunit/phpunit:*"
    composer require --dev --no-update "behat/behat:*"
    composer require --dev --no-update "behat/mink:*"
    composer require --dev --no-update "behat/mink-extension:*"
    composer require --dev --no-update "behat/mink-selenium2-driver:*"
    composer require --dev --no-update "behat/mink-goutte-driver:*"
    composer require --dev --no-update "twig/twig:~1.0"
    composer require --dev --no-update "squizlabs/php_codesniffer:*"

echo "Installing dependencies"
    composer install

touch /var/vagrant_provision_postbootstrap


#!/usr/bin/env bash

if [ -f '/var/vagrant_provision_postbootstrap' ]; then
    exit 0
fi

# Use single quotes instead of double quotes to make it work with special-character passwords
PASSWORD=''
db='m2l'

    echo "mysql-server mysql-server/root_password password $PASSWORD" | sudo debconf-set-selections
    echo "mysql-server mysql-server/root_password_again password $PASSWORD" | sudo debconf-set-selections
echo "Installing MySQL"
    sudo apt-get update
    sudo apt-get -y install mysql-client-core-5.5 mysql-server
    sudo apt-get -f install


echo "Creating the database '$db'"
    mysql -u root -e "create database $db"

echo "Populating Database '$db'"
    mysql -u root -D $db < /vagrant/DB/$db.sql

echo "Install phpmyadmin"
    echo "phpmyadmin phpmyadmin/dbconfig-install boolean true"  | sudo debconf-set-selections
    echo "phpmyadmin phpmyadmin/app-password-confirm password $PASSWORD" | sudo debconf-set-selections
    echo "phpmyadmin phpmyadmin/mysql/admin-pass password $PASSWORD" | sudo debconf-set-selections
    echo "phpmyadmin phpmyadmin/mysql/app-pass password $PASSWORD" | sudo debconf-set-selections
    echo "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2" | sudo debconf-set-selections
    sudo apt-get -y install phpmyadmin

touch /var/vagrant_provision_postbootstrap


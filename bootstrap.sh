#!/usr/bin/env bash

# Determine if this machine has already been provisioned
# Basically, run everything after this command once, and only once
if [ -f "/var/vagrant_provision" ]; then
    exit 0
fi

# Use single quotes instead of double quotes to make it work with special-character passwords
PASSWORD=''
db='m2l'

echo "Provisioning virtual machine for 'La Gestion de Formation de la M2l' ..."

echo "Looking for update and upgrade..."
    sudo apt-get update
    sudo apt-get -y upgrade
    sudo apt-get autoclean

echo "Installing Git"
    sudo apt-get install git -y
 echo "Installing Vim"
    sudo apt-get install vim -y

echo "Installing PHP"
   apt-get install php5 php5-common php5-dev php5-cli php5-fpm -y

echo "Install Apache"
    sudo apt-get install -y apache2 libapache2-mod-php5

echo "Installing PHP extensions"
    apt-get install curl php5-curl php5-gd php5-mcrypt php5-mysql -y

echo "Preparing MySQL"
    sudo apt-get install debconf-utils -y
    export DEBIAN_FRONTEND="noninteractive"
    echo "mysql-server mysql-server/root_password password $PASSWORD" | sudo debconf-set-selections
    echo "mysql-server mysql-server/root_password_again password $PASSWORD" | sudo debconf-set-selections
echo "Installing MySQL"
    sudo apt-get update
    sudo apt-get -y install mysql-client-core-5.5 mysql-server

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

echo "Configuring Apache"
    sudo cp /vagrant/Provision/apache_vhost /etc/apache2/sites-available/m2l.conf > /dev/null
    sudo a2ensite m2l.conf
    sudo /etc/init.d/apache2 reload

echo "Create project folder"
    sudo rm /var/www/html/*
    sudo ln -s /vagrant/* /var/www/html/

echo "Run postBootstrap script"
    sudo chmod +x /vagrant/postBootstrap.sh
    sh /vagrant/postBootstrap.sh

# Let this script know not to run again
touch /var/vagrant_provision
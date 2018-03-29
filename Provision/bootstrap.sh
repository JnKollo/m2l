#!/usr/bin/env bash

# Use single quotes instead of double quotes to make it work with special-character passwords
PASSWORD='m2l'
db='m2l'
bold=$(tput bold)
normal=$(tput sgr0)
yellow='\033[1;33m'
nc='\033[0m'

echo -e "${bold}${yellow}Verify if the provision has already been made ${normal}${nc}"
if [ -f '/var/vagrant_provision' ]; then
    echo -e "Provision already done once"
    exit 0
fi

echo -e "${bold}${yellow}Provisioning virtual machine for 'La Gestion de Formation de la M2l' ...  ${normal}${nc}"

echo -e "${bold}${yellow}Looking for update and upgrade... ${normal}${nc}"
    sudo add-apt-repository ppa:ondrej/php
    sudo apt-get update
    sudo apt-get -y upgrade
    sudo apt-get autoclean

echo -e "${bold}${yellow}Installing Git ${normal}${nc}"
    sudo apt-get install git -y

echo -e "${bold}${yellow}Installing MySQL ${normal}${nc}"
    echo "mysql-server mysql-server/root_password password $PASSWORD" | sudo debconf-set-selections
    echo "mysql-server mysql-server/root_password_again password $PASSWORD" | sudo debconf-set-selections
    sudo apt-get -y install mysql-client-core-5.5 mysql-server
    sudo apt-get -f install

echo -e "${bold}${yellow}Install Apache ${normal}${nc}"
    sudo apt-get install -y apache2 libapache2-mod-php5

echo -e "${bold}${yellow}Installing PHP7 ${normal}${nc}"
    apt-get install php7.0 libapache2-mod-php7.0 php7.0-mysql php7.0-mcrypt php7.0-curl php7.0-xml php7.0-mbstring -y

echo -e "${bold}${yellow}Preparing MySQL ${normal}${nc}"
    sudo apt-get install debconf-utils -y
    export DEBIAN_FRONTEND="noninteractive"
    echo "mysql-server mysql-server/root_password password $PASSWORD" | sudo debconf-set-selections
    echo "mysql-server mysql-server/root_password_again password $PASSWORD" | sudo debconf-set-selections

echo -e "${bold}${yellow}Installing MySQL ${normal}${nc}"
    sudo apt-get update
    sudo apt-get -y install mysql-client-core-5.5 mysql-server

echo -e "${bold}${yellow}Creating the database '$db' ${normal}${nc}"
    mysql -u root -p$PASSWORD -e "create database $db"

echo -e "${bold}${yellow}Populating Database '$db' ${normal}${nc}"
    mysql -u root -p$PASSWORD -D $db < /var/www/html/m2l/DB/$db.sql

echo -e "${bold}${yellow}Install phpmyadmin ${normal}${nc}"
    echo "phpmyadmin phpmyadmin/dbconfig-install boolean true"  | sudo debconf-set-selections
    echo "phpmyadmin phpmyadmin/app-password-confirm password $PASSWORD" | sudo debconf-set-selections
    echo "phpmyadmin phpmyadmin/mysql/admin-pass password $PASSWORD" | sudo debconf-set-selections
    echo "phpmyadmin phpmyadmin/mysql/app-pass password $PASSWORD" | sudo debconf-set-selections
    echo "phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2" | sudo debconf-set-selections
    sudo apt-get -y install phpmyadmin

echo -e "${bold}${yellow}Configuring Apache ${normal}${nc}"
    sudo cp /var/www/html/m2l/Provision/apache_vhost /etc/apache2/sites-available/m2l.conf
    sudo a2ensite m2l.conf
    sudo /etc/init.d/apache2 reload

echo -e "${bold}${yellow}Remove index of Apache ${normal}${nc}"
if [ -f '/var/www/html/index.html' ]; then
    sudo rm /var/www/html/index.html
fi

echo -e "${bold}${yellow}Enable swap ${normal}${nc}"
    sudo chmod +x /var/www/html/m2l/Provision/increase_swap.sh
    dos2unix /var/www/html/m2l/Provision/increase_swap.sh
    sudo sh /var/www/html/m2l/Provision/increase_swap.sh

touch /var/vagrant_provision_bootstrap
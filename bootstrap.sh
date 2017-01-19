#!/usr/bin/env bash

sudo apt-get update &&
sudo apt-get install apache2 php5 mysql-server libapache2-mod-php5 php5-mysql &&
sudo rm -rf /var/www/ &&

ln -s /vagrant /var/www
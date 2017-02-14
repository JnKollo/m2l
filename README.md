# ***Getting Started*** #

### 1. Installations ###

- Installer [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
- Installer [Vagrant](https://www.vagrantup.com/downloads.html)
- Installer [Composer](https://getcomposer.org/download/)

******
#### Windows ####
- Installer [GitBash](https://git-for-windows.github.io/) (pour Windows) ou un autre outil de versionning.
- Ouvrir GitBash (pour Windows)
*****
- Se rendre dans le dossier de son choix (où le projet sera installé)
- Cloner le projet dans le dossier choisi :

```

git clone https://jnkollo@bitbucket.org/jnkollo/m2l.git
```

### 2. Configuration de la Base ###
- Créer un dossier Config à la racine du projet
- Créer un fichier dev.ini dans ce dossier
- Copier-coller ces lignes :


```

[BD]
dsn = 'mysql:host=127.0.0.1;dbname=m2l;charset=utf8'
login = 'root'
mdp = ''
```


### 3. Connexion à la machine virtuelle
- Lancer la console (invité de commande sur Windows)
- Se rendre dans le dossier du projet
- Lancer la machine virtuelle (passer cette étape si cela a déjà été fait)

```

vagrant up
```
ou
```

vagrant reload --provision
```
- Attendre la fin du script puis se rendre sur [http://localhost:4582/](http://localhost:4582/) ( ou [http://127.0.0.1:4582/m2l](http://127.0.0.1:4582/m2l) )


# ***Mise en recette*** #

### Sur la branche courante ###



```
git fetch
git rebase origin/master
git status
git add -u
git commit -m 'message de commit'
git push origin branche à pusher
```
Puis

```
git checkout recette
```

### Sur la branche recette ###


```
git fetch
git reset --hard origin/master
git merge origin/(branche à merger)
git push origin recette

```

# ***Accéder aux logs d'erreurs du serveur*** #
- Se connecter a la VM
```
vagrant ssh
```

- Sur la machine virtuelle :

```

login as : vagrant
vagrant@127.0.0.1's password: vagrant

```

- Lancer la commande : 

```

sudo tail -f /var/log/apache2/error.m2l.log
```
- Rafraîchir [la page](http://127.0.0.1:4579/)


# ***Tester sur le site avec le compte manager et le compte employé*** #

### chef d'équipe
*  id : papa
* mdp : papa

### employé
* id : fiston
* mdp : fiston
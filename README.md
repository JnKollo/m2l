# ***Getting Started*** #

### 1. Installations ###

- Installer [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
- Installer [Vagrant](https://www.vagrantup.com/downloads.html)

******
#### Windows ####
- Installer [PuTTY et PuTTYGen](http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html)
- Installer [GitBash](https://git-for-windows.github.io/) (pour Windows) ou un autre outil de versionning.
- Ouvrir GitBash (pour Windows)
*****
- Se rendre dans le dossier de son choix (où le projet sera installé)
- Cloner le projet dans le dossier choisi :

```
#!bash

git clone https://jnkollo@bitbucket.org/jnkollo/m2l.git
```

### 2. Configuration de la Base ###
- Créer un dossier Config
- Créer un fichier dev.ini
- Copier-coller ces lignes :


```
#!bash

[BD]
dsn = 'mysql:host=127.0.0.1;dbname=m2l;charset=utf8'
login = 'root'
mdp = ''
```


### 3. Connexion à la machine virtuelle
- Lancer la console (invité de commande sur Windows)
- Se rendre dans le dossier du projet
- Lancer vagrant

```
#!bash

vagrant up
```
- Attendre la fin du script puis se rendre sur [http://127.0.0.1:4579/](http://127.0.0.1:4579/)


# ***Mise en recette*** #

### Sur la branche courante ###



```
#!shell
git fetch
git rebase origin/master
git status
git add -u
git commit -m 'message de commit'
git push origin branche à pusher
```
Puis

```
#!shell
git checkout recette
```

### Sur la branche recette ###


```
#!shell
git fetch
git reset --hard origin/master
git merge origin/(branche à merger)
git push origin recette

```

# ***Accéder aux logs d'erreurs du serveur*** #
- Ouvrir l'invité de commande
- Aller dans le dossier du projet
- Lancer cette commande :

```
#!bash

vagrant ssh-config
```
- Récupérer les valeurs de Host et Port

******
### Windows ###
- Ouvrir PuTTY
- Rajouter le Host et le Port
![9RY19pi - Imgur.jpg](https://bitbucket.org/repo/LAgbr5/images/2249794606-9RY19pi%20-%20Imgur.jpg)

- Appuyer sur open

*******
### Unix ###

```
#!bash

vagrant ssh
```

*******

- Sur la machine virtuelle :

```
#!bash

login as : vagrant
vagrant@127.0.0.1's password: vagrant

```

- Lancer la commande : 

```
#!bash

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
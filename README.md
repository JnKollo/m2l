# GESTION DE FORMATION DE LA MAISON DES LIGUES


## Getting Started ##

### Exporter la base de données m2l
- Dans PHPMyAdmin, créer une nouvelle base de donnée
- Exporter les données du fichier m2l.sql situé dans le dossier DB

### Modifier la configuration de connexion à la base de données.

- Créer un dossier Config à la racine du projet
- Créer un fichier dev.ini dans ce dossier
- Copier / Coller ces lignes :
```
#!php

[BD]
dsn = 'mysql:host=localhost;dbname=m2l;charset=utf8'
login = ''
mdp = ''
```

avec login => identifiant phpmyadmin 

et mdp => mot de passe phpmyadmin



## Mise en recette

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


## Tester sur le site avec le compte manager et le compte employé ##

### chef d'équipe
*  id : papa
* mdp : papa

### employé
* id : fiston
* mdp : fiston
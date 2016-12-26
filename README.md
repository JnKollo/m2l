# GESTION DE FORMATION DE LA MAISON DES LIGUES


## Getting Started

Modifier la configuration de connexion à la base de données.

- Créer un dossier CONFIG
- Créer un fichier dev.ini
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
git rebase origin/master
git status
git add -u (git add que les modifications à garder)
git commit -m ''
git push origin (branche à pusher) (ou juste git push)
```


### Sur la branche recette ###


```
#!shell
git checkout recette
git pull origin recette
git rebase origin/master
git merge origin/(branche à merger)
git push origin recette

```


## Tester sur le site ##

### chef d'équipe ### 
*  id : papa
* mdp : papa

### employé ###
* id : fiston
* mdp : fiston
# TP Broken Authentication

A travers ce TP, vous allez voir comment facilement usurper l'identité de quelqu'un grâce a ses informations personnelles ou bien grace à sa session.

Disclaimer: à ne pas reproduire dans un cadre non-professionnel ;)

------------------  
Cloner le repo git :
`git clone https://github.com/anthony-rlld/tp-broken-authentication.git`  

Lancer le serveur php en local
`cd tp-broken-authentication`  
`php -S localhost:8080`  

__Vous devrez utiliser ce serveur pour les deux exercices__   
------------------  
## Exercice 1 (14 points)

Vous allez devoir mettre en place un attaque par force brute (similaire au Password spraying) pour récupérer le compte de votre collègue.  
Comme c'est votre collègue, vous connaissez beaucoup d'informations personnelles susceptible d'etre dans son mot de passe.  

Vous pouvez trouver le profil de votre collegue dans le fichier __marcMartin.pdf__, a la racine du dépôt git.

### Prerequis: 

Vous avez besoin de python3 pour exécuter le logiciel:

Sous linux/wsl :  
`apt-get install python3`  

Sous window :  
https://www.python.org/ftp/python/3.9.5/python-3.9.5.exe

-----------------

Tout d'abord, exécuter les lignes suivantes pour accéder aux logiciels de génération de mot de passe :   
`git clone https://github.com/Mebus/cupp.git`    
`cd cupp`    
`python3 cupp.py -i`  

Ensuite, rentrez les informations personnelles de votre collègues dans le logiciel.   
__Attention : ne pas mettre de majuscules aux noms/prénoms.   
Si l'information n'est pas disponible cliquez sous ENTRER pour passer a la suite__      

Répondez à non (N) aux 5 questions après avec rentré toutes les informations personnelles pour éviter d'avoir une liste de mot de passe trop longue.    
Un fichier __nomDuCollègue.txt__ va être généré avec la liste de tous les potentiels mot de passe à la racine du logiciel.  

  
Une fois votre liste créée, vous devrez télécharger le logciel __Hydra__ permettant l'automatisation des tests pour l'ataaque par force brute.



--------------------------------
## Exercice 2 (6 points)

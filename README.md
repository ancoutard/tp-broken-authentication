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

Marc Martin est votre collègue, vous savez qu'il possède un compte sur le site que vous venez d'installer ci-dessus. Vous allez ainsi essayer de vous y connecter avec une attaque bruteforce (password spraying).
Vous connaissez déjà son email, c'est : marc.martin@gmail.com.

Pour ce faire, vous n'allez pas utiliser une simple liste de mots de passes connus, mais vous allez en générer des plus personnalisés, grace à l'outil cupp.

### Prerequis: 
Vous devez avoir python installé, si jamais ce n'est pas le cas :

Sous linux/wsl :  
`apt-get install python3`  

Sous window :  
https://www.python.org/ftp/python/3.9.5/python-3.9.5.exe

-----------------

Vous devez ensuite télécharger cupp:

`git clone https://github.com/Mebus/cupp.git`    
`cd cupp`    

Maintenant, vous allez génerer des mots de passes possibles pour votre collègue Marc Martin, pour cela, vous allez avoir besoin d'informations personnelles le concernant.
Dans la réalité on peut chercher sur internet, dans notre cas, marc est un personnage fictif.

Marc Martin travaille chez toyota, il est né le 04/06/1980 et à eu un enfant qui s'appelle Thomas avec sa femme laura.
Marc n'est pas complétement néophyte, il utilise des mots de passes assez long, avec bien souvent des majuscules, des chiffres ou encore des caractères spéciaux.

Question 1 (4 points)

Génerez une liste de mot de passes possibles à l'aide de cupp pour Marc Martin.

Pour lancer cupp :
`python3 cupp.py` ou `./cupp.py` (si python est dans votre path)   

Question 2 (10 points)

Vous allez maintenant utiliser le logiciel HYDRA afin de faire une attaque par dictionnaire sur le site.
Trouvez le mot de passe de Marc, et connectez vous à son compte.

Pour ce faire vous devez installer hydra :
`git clone https://github.com/vanhauser-thc/thc-hydra.git`
`cd thc-hydra`
`./configure` 
`make`

tapez maintenant `hydra` pour le lancer, regardez les arguments nécessaires pour lancer une attaque bruteforce par dictionnaire sur un formulaire HHTTP en POST.
regardez à quoi ressemble le site, sur quelle page il amène lors d'une erreur, quelle est la requête qu'il fait pour essayer de se connecter..

Vous pouvez cherchez des exemples sur internet si cela ne marche pas, on en trouve pas mal.
pensez à préciser le port de votre target (127.0.0.1), si vous n'avez pas lancé sur le port 80.

--------------------------------
## Exercice 2 (6 points)

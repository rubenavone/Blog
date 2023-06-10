
# TODO

---

## Gestion de projet

Réalisation d'un diagramme de classe pour le projet
Vérification du MCD / MLD
Vérification de DSE
Mettre en place un GANTT 
Mettre en place un PERTT

Vérification du cahier des charges, vérification des demande fonctionelle.

Mettre en place un début de dossier proffessionel
Mettre en place un début de dossier projet

---

## Front End

### Global
Réalisation du wireframe 
Réalisation du logo 

### Page
Page de contact 
Page ajouter une catégorie


### Template

Faire un footer

### JavaScript

/modal.js 76 77
//Cette ligne peut permettre de faire la distinction entre les page et ainsi adapter l'url de redirection de la modal
console.log(window.location.href.split("/").includes("articles"));

Fait, mises en place d'un routeur dans "main.js".
L'ensemble de la partie JavaScript est découper en divers module.
Ensuite je les intègre dynamiquement selon l'url ou ce situe l'utilisateur. 

### Visuel 

Revoir la page tout les article, notament le hover qui n'est pas dingue
Revoir la page un article, élargissement de l'image de présentation.


---

## Back end

### Global

Faire les modification sur le dist; changer dans la ligne de watcher la sortie par public, mettre les image dans public et les upload d'image aussi.

Faire en sorte que la Class PDO soit dans model et pas dans utils.

Utils_controller verifier si c'est bien placer ou pas.

### Refacto

Vérifier tout les type dans les méthode entrée args et sortie 


---

## Les deux coté

Mises en place d'un modal avec pour la gestion des cookies.

Mises en place dans le formulaire d'inscription une cases newsletter, avec si elle est cocher un changement sur status_util 0 non 1 oui.

Si l'utilisateur a un status a 0 proposer dans le footer l'inscription à la newletter.

Prévoir des espace pour une publicité . (article)



## Brain Storm Amélioration future

Ajouter un editeur complet pour les article.

Cette librairie permet de parcourir du markdown
https://michelf.ca/projets/php-markdown/
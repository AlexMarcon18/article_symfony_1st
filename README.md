# article_symfony_1st
premier projet symfony

projet en php 8.2 <br>
Tourne symfony 6.2.10 <br>
Symfony CLI version 5.5.2 (c) <br>

NodeJS v20.0.0 <br>
composer 2.2.6 <br>
yarn 1.22.19 <br>
<hr>
webpack-encore: V1.16 <br>
webpack: 5.81.0 <br>
webpack-cli: 4.10.0 <br>
webpack-dev-server 4.13.3 <br>

<hr>

<h1>Merci d'avoir cliqué</h1>

<br>

<h2>My First symfony article !</h2>

<br>

<p> Salut moi c'est Alex, j'ai commencé le dev il y a deux mois et voici mon premier projet symfony. Il s'agit ni plus ni moins qu'un manuel sur l'utilisation de symfony.
Il n'est peut-être pas encore tout a fait au point mais je suis déjà plutôt content d'avoir fait ce petit pas dans le millieu. <p>

<br>

<p>Si vous souhaitez lancer ce projet en local voici la marche à suivre :<p>

<ul>
  <li> - Dans un premier temps, il vous faut composer qui va gérer les dépendances de PHP: <br>
  <p> On utilisera alors la commande suivante: </p> <br>
  <span> $ composer install </span> </li>
  <li> - Ensuite avec Yarn, on va utiliser la même commande pour installer les différents paquets nécessaires au fonctionnement du projet: <br>
  <span> $ yarn install </span> </li>
  <li> - Une fois ces deux premières étapes éffectuées, on utilisera le Webpack-encore afin de compiler nos assets et les inclure au dossier public: <br>
  <span> $ composer require symfony/webpack-encore-bundle</span> <br>
  Une fois le webpack intégré à notre projet on pourra utiliser la commande: <br>
    <span> $ yarn build </span> <br>
    Cette commande compilera les assets pour les installer dans le public mais UNE fois seulement, si vous souhaitez modifier le projet en ayant accées à un rendu visuel en direct (en terme de CSS ou d'image), il faudra utiliser cette commande à la place: <br>
    <span> $ yarn watch </span> <br>
    Attention par contre, il ne faut pas fermer le terminal durant nos modifications de projet
  </li>
  <li> - Enfin, nous pourrons lancer la commande qui servira à lancer notre server local: <br>
  <span> $ symfony start:server </span> <br>
  On peut également utiliser une syntaxe plus courte:
  <span> $ symfony serve </span></li>
</ul>

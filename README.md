# Premier projet symfony


Toutes les lignes de commandes de ce Readme sont des lignes de commandes spécifiques à Linux, plus
précisement sur Ubuntu 22.04 <br>
projet en php 8.2 <br>
Tourne symfony 6.2.10 <br>
Symfony CLI version 5.5.2 (c)

<hr>

NodeJS v20.0.0 <br>
composer 2.2.6 <br>
yarn 1.22.19 <br>
ou NPM 9.6.4

<hr>

webpack-encore: V1.16 <br>
webpack: 5.81.0 <br>
webpack-cli: 4.10.0 <br>
webpack-dev-server 4.13.3 <br>

<hr>

# <h1>Merci d'avoir cliqué</h1>

<br>

<p> Salut moi c'est Alex, j'ai commencé le dev il y a deux mois et voici mon premier projet symfony. Il s'agit ni plus ni moins qu'un manuel sur l'utilisation de symfony.
Il n'est peut-être pas encore tout a fait au point mais je suis déjà plutôt content d'avoir fait ce petit pas dans le millieu. <p>

<br>
<p>Tout d'abord on va cloner mon dépot git:</p>

    git clone https://github.com/Benco109/benco_s_dev_blog_symfony.git

<p>Si vous souhaitez lancer ce projet en local voici la marche à suivre :<p>

Avant Toute chose, il vous faudra renommer le fichier .env.example du repertoire en .env pour le bon fonctionnement du projet.

<ul>
  <li>  Dans un premier temps, il vous faut composer qui va gérer les dépendances de PHP: <br>
    Si composer n'est pas installé sur votre PC, nous lancerons alors la commande suivante en premier <br>

    $ sudo php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer 

  <p> On utilisera alors la commande suivante: </p> 
    
     $ composer install

<hr>  

  <li>  Ensuite avec Yarn, on va utiliser la même commande pour installer les différents paquets nécessaires au fonctionnement du projet : (attention dans ce readme
je montre deux cas de figure qui sont l'installation via yarn et l'installation via npm, veuillez n'utiliser qu'une de ces deux options.)<br>

    $ yarn install

Si Yarn n'est pas installé sur votre PC, nous utiliserons d'abord la commande suivante :

    $ sudo apt install yarn

ou

Il est possible d'utiliser npm à la place de yarn:

    sudo apt install npm

Une fois installé sur votre machine, vous pouvez utiliser la commande suivante pour gérer les dépendances :

    npm run install

<hr>

  <li>  Une fois ces deux premières étapes effectuées, on utilisera le Webpack-encore afin de compiler nos assets et les inclure au dossier public: <br>

    $ composer require symfony/webpack-encore-bundle

  Une fois le webpack intégré à notre projet, on pourra utiliser la commande avec yarn ou avec npm (les lignes de commandes diffèrent un peu): <br>

    $ yarn build
ou

    $ npm run build


  </li>
  <li>  Enfin, nous pourrons lancer la commande qui servira à lancer notre server local: <br>

    $ symfony start:server
  On peut également utiliser une syntaxe plus courte:

     $ symfony serve
</ul>


<p> Et voila, il vous suffit maintenant de lancer votre serveur local depuis votre navigateur en entrant une des deux URL suivantes <br>
  https://localhost:8000/ <br>
  ou bien encore: https://127.0.0.1:8000/ </p>

# <h1>Associer une base de données:</h1>

<p>Maintenant, vous avez accées au projet sur serveur local.</p>
<p>Cela nous arrange, car vous aurez besoin de quelques pré-requis pour cette partie qui sont 
expliqués dans mes articles !</p>

<p>Tout d'abord, il faudra se configurer un serveur, pour cela je vous laisse vous reporter à ma rubrique environnement
vous avez un sous-article nommé SGBD ou vous trouverez notamment:</p>

<ul>
<li>l'installation d'un environment LAMP</li>
<li>l'installation et la configuration de mysql server</li>
<li>et enfin l'installation de l'interface de BDD: phpmyadmin</li>
</ul>

<p>Une fois cela fait, vous avez tout le nécessaire pour créer, modifier, acceder a vos bases de données.</p>

<p>La première étape pour creer du lien entre le projet et votre base de données et de revenir sur votre fichier .env
que vous avez déjà modifié précédemment.</p>

<p>Dans le fichier.env il faudra remplacer la ligne DATABASE_URL pour y insérer les informations de votre serveur local:
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name"</p>

<p>Inserer votre nom d'user, votre mot de passe et le nom de la base de données associés a votre projet</p>

<p>Maintenant deux choix s'offre à vous:</p>

<ul>
    <li>Vous pouvez créer votre propre base de données en suivant les étapes expliquée dans mon article Notre base de données.
    vous y trouverez toutes les explications sur les base de données ainsi que la méthode de conception de celle-ci grace au maker bundle de symfony.</li>
    <li>Sinon, comme je suis grand prince, j'en ai déjà créer une dont le fichier de version se trouve dans ce projet ! afin de l'utiliser, quelques étapes seront à suivre</li>
</ul>

<p>Je vois que vous choisissez la deuxième étape, pour se faire on va successivement:</p>

Installer le maker bundle ainsi que doctrine grâce aux commandes suivantes:

     composer require symfony/orm-pack 

    composer require --dev symfony/maker-bundle

<p>Les explications de ces lignes sont dans l'article notre base de données. ils correspondent à l'installation d'ORM
ainsi qu'à l'installation du maker-bundle pour symfony</p>

<p>Ce projet possède déjà dans son dossier migrations d'une base de données préfaite que le maker bundle va utiliser pour génerer le code
SQL qui va créer cette base de données.</p>

<p>Ce code sera:</p>

        php bin/console doctrine:migrations:migrate 

<p>Une fois cette étape passée, vous pouvez aller sur l'interface Phpmyadmin afin de vérifier que la base de données se soit bien créer.</p>

# <h2>Merci pour votre lecture !</h2>
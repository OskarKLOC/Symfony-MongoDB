# Step-by-Step example of Symfony-MongoDB Project (English version)

For learner support, practical and functional illustration of a Symfony project interacting with a MongoDB NoSQL database.
The final code example can be found in the "*main*" branch.

## Step 0: Project Initialization

The code for this step can be found in the "*Step-0-Project-Initialization*" branch.
We install the project skeleton and the necessary libraries, and create a first controller.
This provides us with a foundation for the project that we can gradually build upon.

Installation commands:
1. Project Initialization: `composer create-project symfony/skeleton .`
2. TWIG Templates Installation: `composer require twig`
3. Doctrine MongoDB Bundle Installation: `composer require doctrine/mongodb-odm-bundle`
4. Maker Bundle Installation: `composer require symfony/maker-bundle --dev`
5. Creation of a first controller named Home: `symfony console make:controller home`

**Important Note**: If you haven't done so already, it is mandatory to install a PHP extension for MongoDB. Instructions can be found here: https://www.php.net/manual/en/mongodb.installation.windows.php. Particularly on Windows, you may need to limit the maximum version of PHP to use due to the unavailability of sufficiently recent extensions.




# Exemple pas à pas de projet Symfony-MongoDB (version française)

Pour accompagnement d'apprenants, illustration pratique et fonctionnelle d'un projet symfony en interaction avec une base de données NoSQL MongoDB
Le code final de l'exemple se trouve dans la branche "*main*".

## Etape 0 : Initialisation du projet

Le code de cette étape se trouve dans la branche "*Step-0-Project-Initialization*"
On installe le squelette du projet et les premières librairies utiles, et on crée un premier contrôleur.
On dispose alors d'une base pour le projet que nous allons ainsi pouvoir compléter au fur et à mesure.

Commandes d'installations :
1. Initialisation du projet : `composer create-project symfony/skeleton .`
2. Installation templates TWIG : `composer require twig`
3. Installation Doctrine MongoDB Bundle : `composer require doctrine/mongodb-odm-bundle`
4. Installation du Maker Bundle : `composer require symfony/maker-bundle --dev`
5. Création d'un premier contrôleur Home : `symfony console make:controller home`

**Note importante** : Si ce n'est pas déjà fait, il est obligatoire d'installer une extension PHP pour MongoDB. Les instructions sont disponibles ici https://www.php.net/manual/en/mongodb.installation.windows.php. Sous windows particulièrement, il faudra probablement limiter la version maximale de PHP à utiliser, faute de disponibilité d'extensions suffisamment récentes.

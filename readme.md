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


## Step 1: First Document

The example discussed will cover only a few simple use cases. For more advanced usage, further exploration of the available documentation is required: https://www.doctrine-project.org/projects/doctrine-mongodb-bundle/en/4.4/first_steps.html#first-steps-using-the-odm

We start by updating the environment variables *MONGODB_URL* and *MONGODB_DB* in the *.env* file. They will contain the necessary information to connect to the database.

Next, we create a Document *Product.php* that will contain the definition of all the properties corresponding to the fields of the documents that will be inserted into the corresponding collection in our database. Several different types of properties are provided as examples, including an embedded document and an embedded collection within our document. Note that each of the corresponding classes is placed in a dedicated file.

In the controller file *ProductController.php*, we define a specific route to instantiate the necessary classes and randomly generate values. Using the methods of the Doctrine MongoDB DocumentManager class, we perform a record in the database and retrieve all the documents from the collection before displaying them.

The code for this step is located in the "*Step-1-First-Document*" branch. Don't forget to run the `composer update` command after retrieving it.



# Exemple pas à pas de projet Symfony-MongoDB (version française)

Pour accompagnement d'apprenants, illustration pratique et fonctionnelle d'un projet symfony en interaction avec une base de données NoSQL MongoDB
Le code final de l'exemple se trouve dans la branche "*main*". N'oubliez pas de faire lancer la commande `composer update`.


## Etape 0 : Initialisation du projet

On installe le squelette du projet et les premières librairies utiles, et on crée un premier contrôleur.
On dispose alors d'une base pour le projet que nous allons ainsi pouvoir compléter au fur et à mesure.

Commandes d'installations :
1. Initialisation du projet : `composer create-project symfony/skeleton .`
2. Installation templates TWIG : `composer require twig`
3. Installation Doctrine MongoDB Bundle : `composer require doctrine/mongodb-odm-bundle`
4. Installation du Maker Bundle : `composer require symfony/maker-bundle --dev`
5. Création d'un premier contrôleur Home : `symfony console make:controller home`

Le code de cette étape se trouve dans la branche "*Step-0-Project-Initialization*". N'oubliez pas de faire lancer la commande `composer update`.

**Note importante** : Si ce n'est pas déjà fait, il est obligatoire d'installer une extension PHP pour MongoDB. Les instructions sont disponibles ici https://www.php.net/manual/en/mongodb.installation.windows.php. Sous windows particulièrement, il faudra probablement limiter la version maximale de PHP à utiliser, faute de disponibilité d'extensions suffisamment récentes.


## Etape 1 : Premier Document

L'exemple abordé ne prendra en compte que quelques cas simples d'utilisation. Pour des utilisations plus avancées, il faudra explorer plus avant la documentation disponible en ligne : https://www.doctrine-project.org/projects/doctrine-mongodb-bundle/en/4.4/first_steps.html#first-steps-using-the-odm

On commence par mettre à jour les variables d'environnement *MONGODB_URL* et *MONGODB_DB* dans le fichier *.env*. Elles vont contenir les informations nécessaires pour pouvoir se connecter à la base de données.

Nous créons ensuite un Document *Product.php* qui va contenir la définition de l'ensemble des propriétés correspondant aux champs des documents qui seront insérés dans la collection correspondante dans notre base de données. Plusieurs types différents de propriétés sont fournis en exemple, dont notamment un document et une collection incorporés dans notre document. A noter que chacune des classes correspondantes est placée dans un fichier dédié.

Au niveau du contrôleur *ProductController.php*, nous définissons une route spécifique pour instancier les classes nécessaires et générer aléatoirement des valeurs. Grâce aux méthodes de la classe DocumentManager de Doctrine MongoDB, on réalise un enregistrement en base de données et une récupération de l'ensemble des documents de la collection avant de les afficher.

Le code de cette étape se trouve dans la branche "*Step-1-First-Document*". N'oubliez pas de faire lancer la commande `composer update` après l'avoir récupéré.

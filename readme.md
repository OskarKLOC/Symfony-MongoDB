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


## Step 2: First Repository

We keep the previously created documents unchanged, as well as the template, and create a dedicated repository *ProductRepository.php* for interacting with the database. At this stage, three methods are provided: one for saving a new document to the collection, one for finding a document by its ID, and one for retrieving all documents. Please refer to the documentation for creating other useful methods.

We define a new route in the controller to be able to specifically invoke it

The code for this step is located in the "*Step-2-First-Repository*" branch. Don't forget to run the `composer update` command after retrieving it.


## Step 3: First Form

We are using the documents and repositories created previously without modifying them. Now, let's see an example of how to set up a form system using Symfony's dedicated form library. We start by installing it with the command `composer require symfony/form`.

In a *Form* folder, we create a file named *ProductType.php* which will contain the classes that will serve as the basis for generating our form. These classes provide the expected parameters for each input field.
Note: We won't explore all the formatting options for this form, but rather focus on how to interact with our documents to store data in MongoDB.

Next, we define a new route in the *ProductController.php* controller to specifically handle the form. After preparing the form, we check if there is an incoming request to populate it, and if so, we save the data in the database. In all cases, we provide the form structure to our template along with other informations.

Finally, we set up a dedicated template that uses the form fields previously configured in the *ProductType.php* file. The list of all products in the database is displayed, and in case of successfully adding a new product, a specific message informs us before displaying the form.

The code for this step can be found in the "*Step-3-First-Form*" branch. Don't forget to run the `composer update` command after retrieving it.





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


## Etape 2 : Premier Repository

On conserve les documents créés précédemment sans les modifier, ainsi que le template, et on crée un repository *ProductRepository.php* dédié aux échanges avec la base de données. Trois méthodes sont proposées à ce stade, pour enregistrer un nouveau document dans la collection, pour en trouver un par id ou pour tous les récupérer. Il faudra se reporter à la documentation pour créer toutes les autres méthodes utiles.

Nous définissons une nouvelle route dans le contrôleur pour pouvoir y faire appel spécifiquement.

Le code de cette étape se trouve dans la branche "*Step-2-First-Repository*". N'oubliez pas de faire lancer la commande `composer update` après l'avoir récupéré.


## Etape 3 : Premier formulaire

On utilise les documents et repository créés précédemment sans les modifier. Nous allons maintenant voir en exemple comment mettre en place un système de formulaire en utilisant la librairie dédiée de Symfony. On commence par l'installer avec la commande `composer require symfony/form`.

Dans un dossier *Form*, nous créons un fichier *ProductType.php* qui va comporter les classes qui vont servir de base à la génération notre formulaire. Ces classes fournissent les paramètres attendus pour chaque champ de saisie.
Note : Il ne s'agit pas ici d'explorer toutes les options de formatage de ce formulaire, mais de voir comment le faire interagir avec nos documents pour un enregistrement des données dans MongoDB.

Nous définissons ensuite une nouvelle route dans le contrôleur *ProductController.php* pour pouvoir y faire appel spécifiquement. Après préparation du formulaire, on essaie de voir s'il y a une requête entrante pour le remplir, et le cas échéant on inscrit les données en bases de données. Dans tous les cas, on fournit la structure du formulaire à notre template en même temps que d'autres informations.

Enfin, nous mettons en place un template dédié qui exploite les champs de formulaire précédemment configuré dans le fichier *ProductType.php*. La liste de tous les produits en base de données est affichée. Et en cas de succès d'ajout d'un nouveau produit, un message spécifique nous en informe avant le formulaire.

Le code de cette étape se trouve dans la branche "*Step-3-First-Form*". N'oubliez pas de faire la commande `composer update` après l'avoir récupéré.

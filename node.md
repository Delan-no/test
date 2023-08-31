# note

 MySQLi (MySQL Improved) et PDO (PHP Data Objects) sont des e xtensions PHP qui permettent aux developpeurs d'interagir avec les bases de données relationnelles; telles que MySQL, SQLite, PostgreSQL...

` My SQLi` est spécifiquelement conçu pour MySQL.

`PDO` est plus générique et prend en charge plusieurs types de bases de données.

 # connexion avec PDO
 pour utiliser PDO, il faut plus ou moins 5 étapes:

 1. Creer une connexion à la BDD
 ```php
 /** DSN: Data Source Name est une chaîne de caractère utilisée pour identifier et spécifier la BDD */
 $dsn ="mysql:host=localhost;dbname=base_de_données";
 $username="root";
 $password="";

 $pdo = new PDO($dsn, $db_username, $password);
 ```

 2. Exécuter une requête
  ```php
  // requête avec paramètre (variables)
  // requête sans paramètre
  
 3. Récupérer les données 
 4. Fermer la connexion
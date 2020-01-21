Consignes :

- Dans le dossier sql, j'ai ajouté un fichier mysql workbench, 
ouvrez-le en utilisant mysql workbench
- En analysant le diagramme uml des tables, 
reproduire ces tables en utilisant phpmyadmin
- Créer un script php qui permet d'afficher les élèves 
et les informations de l'élève dans une seule et même requête sql
- Lister les compétences de l'élève et son niveau dans cette compétence 
ainsi que son niveau auto évalué.
- Vous afficherez le niveau d'une compétence sous la forme d'un diagramme polaire.
- Vous ajouterez un second diagramme polaire par-dessus le premier 
pour afficher le niveau auto-évalué dans une compétence



Théorie :

- Les jointures en mysql permettent de sélectionner des données sur plusieurs tables 
à la fois.

- Une jointure simple s'écrit de cette façon (pour un select) :

    Select from table1,table2 where table1.col = <valeur> and table2.col = <valeur>

- Il est également possible dans une requête sql de fournir un alias aux noms des tables :

    Select from table as t1,table as t2 where t1.col = <valeur> and t2.col = <valeur>

- Le principe d'une jointure est de ne retourner que les éléments qui sont présents 
sur les deux tables à la fois et qui répondent aux conditions de la clause where

- Les jointures complexes : left join, right join, inner join

  . Left join permet de sélectionner les éléments sur la première table 
  et les éléments sur la seconde table; si la seconde table ne contient pas 
  d'enregistrements, la première table est quand-même sélectionnée dans son intégralité.

  . Right join fait le contraire de left join (sélection des éléments de la seconde table 
  en intégralité et sélection des éléments de la premiere table qui répondent 
  à la clause combinée)

  . Inner join permet de sélectionner les éléments sur les deux tables 
  qui répondent à la clause where


Aller plus loin avec les jointures : 
https://www.codeproject.com/Articles/33052/Visual-Representation-of-SQL-Joins

ATTENTION : Lorsque vous réalisez des requêtes sql avec jointures, 
les clefs utilisées dans la clause where doivent ABSOLUMENT avoir un index; 
si vous ne le faites pas => Gros problème de performance


Il existe d'autres jointures, plus complexes et moins utilisées; 
la jointure la plus utilisée est left join car elle permet de sélectionner des données 
sur une table principale et des données optionnelles sur une ou plusieurs tables liées.

Si on n'utilise pas de jointure, il est impossible de récupérer tous les enregistrements 
d'une table principale lorsque la requête porte sur plusieurs tables.










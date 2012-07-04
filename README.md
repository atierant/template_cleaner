template_cleaner
================

template_cleaner


Problématique :
---------------

Ceci est un petit script en PHP qui liste tous les fichiers d'un dossier A et tous le fichiers d'un dossier B et qui supprime tous ceux de A qui apparaissent dans B.  
Il n'agit pas par comparaison de hash mais simplement par meme nom de fichier  

Objectif :
----------

Si un fichier est présent dans un dossier A et dans B, on le supprime dans A.  
Problématique supplémentaire : Extraire la liste des fichiers de A et qui n'existent pas dans B.
Nous le réalisons avec ezcBase grace aux ezcBaseFile:: findRecursive() et ezcBaseFile::removeRecursive().  

Mode opératoire :
-----------------

Dresser un tableau avec la liste des fichiers d'un dossier A, un tableau avec la liste des fichiers d'un dossier B.  
Faire une intersection de tableaux et unlink.  
Utiliser le dossier A puis le dossier B en racine pour dresser le tableau pour éviter dans la liste Dossier_A/qqchose et Dossier_B/qqchose (donc différents).
L'intersection des deux tableaux sera la liste des fichiers à supprimer dans le dossier A.  

Repository du projet :
----------------------

https://github.com/atierant/template_cleaner

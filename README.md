#SITE EN LIGNE SUR# : https://copycat.pacificproweb.nc/ 

##INSTALLATION WORDPRESS :

1 - Ouvrez le panneau de contrôle de XAMPP et démarrez les modules Apache et MySQL.

2 - Téléchargez WordPress depuis le site officiel : https://fr.wordpress.org/. Cliquez sur le bouton Télécharger WordPress, puis décompressez le fichier dans le dossier htdocs du répertoire d'installation de XAMPP. Vous pouvez renommer le dossier WordPress en n'importe quel nom que vous souhaitez.

3 - Ouvrez votre navigateur web et entrez l'adresse suivante : http://localhost/phpmyadmin/. Cela vous permettra d'accéder à l'interface de gestion de MySQL. Créez une nouvelle base de données en cliquant sur "Nouvelle" dans le menu de gauche, puis en saisissant le nom de votre base de données.

4 - Ouvrez votre navigateur et accédez à l'adresse suivante : http://localhost/wordpress/. Vous serez invité à configurer WordPress. Saisissez les informations demandées, notamment le nom de la base de données que vous venez de créer dans phpMyAdmin.

5 - Suivez les instructions pour terminer la configuration de WordPress

##INSTALLATION DU SITE ECFCP4 :

1 - Ouvrir le repo github https://github.com/Ououia/Ecf_CP_4

2 - Cliquez sur le ficher localhost-ecfcp4-20230331-003446-cgfkqz.wpress

3 - Cliquez sur le boutton download :

![Alt text](/assets/download.png?raw=true "Title")

4 - Rendez vous sur votre page http://localhost/{nom_de_votre_fichier_dans_le_htdocs}/wp-admin

5 - Allez dans extensions , cliquez sur ajouter, chercher All-in-One WP Migration et installé puis activer l'extension All-in-One WP Migration

6 - Une fois activer un menu apparait dans le menu a gauche de votre wordpress

![Alt text](/assets/allinone.png?raw=true "Title")

7 - Mettre votre souris sur le menu All-in-One WP Migration et cliquer sur importer

8 - Il faut augmenter la taille de fichier autorisé , cela parait compliquer mais avec ce tutoriel ca sera tres simple :

1 - Rendez vous dans le fichier de votre site wordpress

![Alt text](/assets/augmentation.png?raw=true "Title")

2 - ouvrez le fichier .htaccess avec bloc-note

le fichier ressemble a ca :

![Alt text](/assets/htacess.png?raw=true "Title")

Rajouter les lignes

php_value upload_max_filesize 128M
php_value post_max_size 128M
php_value memory_limit 256M
php_value max_execution_time 300
php_value max_input_time 300

comme ceci :

![Alt text](/assets/htacessmodified.png?raw=true "Title")

et enregistrer le fichier !

8 - Retournez sur votre wordpress et rafraichir la page ( raccourcis : F5 ), la taille autorisé devrais maintenant etre 128 Mo

9 - Glisser le ficher que vous avez telecharger avant ou importer le depuis fichier

10 - L'installation ce lance , cliquez sur continuer quand demandé puis cliquez sur finir et rafraichir la page ( raccourcis : F5 ) vous serez deconnecter c'est normal

11 - Vous avez maintenant installé le site ECFCP4 , pour le voir il suffit d'entrez http://localhost/{nom_de_votre_fichier_dans_le_htdocs}

12 - Vous pouvez vous connectez a l'admin de ce wordpress http://localhost/{nom_de_votre_fichier_dans_le_htdocs}/wp-admin avec un compte crée pour vous et que je vous donnerais sur teams

##FELICITATION !!!!

# Déployer une appli php "maison" dans le Cloud

## Créer une application simple

Créez une instance Debian 11 (ou autre) installez 
les paquets apache2, libapache2-php. 

Pour tester il existe des navigateurs Web en mode console
(lynx, links, w3m, ...). Installer w3m et visualiser la
page par défaut de notre installation d'Apache.

Vous pouvez aussi la voir (si le groupe de sécurité a bien
le port 80 ouvert pour nous) avec un navigateur sur votre
bureau.

On va modifier la page d'accueil du site par défaut (index.html)
on va l'effacer et le remplacer par un index.php simple qui 
affiche le nom du serveur, la date et l'heure.

Une fois vérifié "à la main que ça marche", récupérez votre
index.php dans votre dépots (répertoire TP2) et sur le modèle
du déploiement de Wordpress automatiser le déploiement de cette
"application" PHP par un script nommé deploy-myapp testez le
sur une nouvelle instance.

Documentez le sur le modèle de la fin du README.md du TP1.

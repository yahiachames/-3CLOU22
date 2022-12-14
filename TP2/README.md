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

# Comment utiliser ce déploiement ?

0. Cloner ce dépôt (à part de votre dépôt, dans un autre répertoire)
   ou bien le mettre à jour (`git pull`) si vous l'avez déjà cloné
1. Créer une instance dans la plate-forme de cloud IaaS
2. Ouvrir l'accès au port 80 en tcp à partir de votre IP locale
   sur cette instance (voir _Security Group_)

3. La suite (copie du script de déploiement et exécution sur
l'instance) se réalise en trois simples étapes :

~~~~Bash
(systeme local)$ ./pushscript ip_publique_instance deploy-myapp
(systeme local)$ ./go ip_publique_instance
(nom instance)# ./deploy-myapp
~~~~

Ouvrez un navigateur Web et allez sur l'url : http://ip_publique_instance/



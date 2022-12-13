# TP1 : Automatiser le déploiement de Wordpress dans le cloud

Commencez par créer une instance de type pro2-xxs. Si vous n'y
arrivez pas prévenez moi.

Rappel : vous pouvez vous connecter en ssh sur vos instance en
utilisant la clef privée que je vous ai fournie :

~~~~Bash
$ ssh -i ~/.ssh/id_rsa_jp root@x.y.z.y
~~~~

Réaliser une installation de Wordpress en suivant le tutorial
suivant (vous pouvez omettre la partie concernant ssl/let's encrypt)

https://computingforgeeks.com/install-wordpress-on-debian-with-apache-and-letsencrypt/

Note : Wordpress fonctionne normalement très bien avec PHP 7.4 (pas
nécessairement besoin d'installer PHP 8).

Vous remarquerez que la finalisation de l'installation suppose de
se connecter en http sur le serveur. Une instance, par défaut,
ne reçoit que le traffic SSH (tcp port 22). Examiner la configuration
de votre instance pour ouvrir l'accès HTTP (tcp port 80) provenant
de *votre* adresse IP externe (celle de votre poste local, on peut 
l'obtenir facilement ainsi : `curl ifconfig.me; echo`.

La finalisation de l'installation produit un fichier `wp-config.php`.

Écrire un script Shell (Bash) réalisant les opérations que vous
avez réalisé interactivement automatiquement, y compris la génération
du fichier `wp-config.php`. Testez ce script.

Supprimez et créez une nouvelle instance.
Vérifier enfin que vous pouvez exécuter ce script une fois copiée
sur votre instance (avec scp) et que Wordpress est fonctionnel
ensuite.

Ajoutez ce script à votre dépot GIT dans le répertoire TP1.

Nous verrons comment exécuter automatiquement ce script lors de
la création d'une instance plus tard (mécanisme _cloud-init_)


# Comment utiliser ce déploiement ?

1. Créer une instance dans la plate-forme de cloud IaaS
2. Ouvrir l'accès au port 80 en tcp à partir de votre IP locale
   sur cette instance (voir _Security Group_)
3. Se connecter en ssh sur l'instance
4. Copier le script de déploiement et l'exécuter :

~~~~Bash
(systeme local)$ ./pushscript ip_publique_instance deploy-wp
(systeme local)$ ./go ip_publique_instance
(nom instance)# ./deploy-wp
~~~~

Ouvrez un navigateur Web et allez sur l'url : http://ip_publique_instance/

Vous devriez voir un magnifique site Wordpress, que vous pouvez même
administrer : http://ip_publique_instance/wp-admin/ (login : wpadmin,
mot de passe : toto)


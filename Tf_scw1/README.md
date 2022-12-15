# Configurer le client Scaleway CLI _(Command Line Interface)_ et Terraform

## SCW

1. Télécharger et installer le binaire du client Scaleway CLI et le copier sous le nom (renommer ou créer un lien symbolique) pour votre plateforme dans un répertoire présent dans la variable d'environnement PATH (par exemple dans `/usr/local/bin` sous GNU/Linux ou un UNIX tel que macOS, ou bien un répertoire personnel comme `~/bin` dès lors qu'il est référencé dans votre PATH)
2. Exécuter la commande `scw init` et renseigner avec les informations disponible dans la console Web Scaleway (Profil|API Keys)
3. Tester en créant une instance (changez le nom !) :

~~~~Bash
$ scw instance server create type=PRO2-XXS zone=fr-par-1 image=debian_bullseye root-volume=b:10G additional-volumes.0=b:10G name=CHANGERLENOMICI ip=new project-id=b73790d7-afbb-40b5-bed0-2f3c446da796
~~~~

4. Vérifiez dans la console Web que l'instance est créée puis supprimez la

## Terraform

1. Télécharger et installer le logiciel _terraform_ et installez le de la même façon que le client _scw_
2. Allez dans le répertoire _Tf_ et exécutez les commandes ci-dessous
(choisissez un nom pour projet d'équipe ou individuel, enregistrez le dans `teamname.txt`, par exemple ici : _braindead-elon_ (trouvez autre chose))

~~~~Bash
$ echo braindead-elon > teamname.txt
$ make init
$ make plan 
$ make apply
~~~~

Si tous va bien un groupe de sécurité et une instance (pour l'instant) devrait être déployées.

Pour supprimer ce déploiement :

~~~~Bash
$ make destroy
~~~~ 


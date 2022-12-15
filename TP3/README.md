# Modifier le déploiement terraform pour ajouter une instance

- Créer dans votre dépot un répertoire TP3/Tf
- Copiez y le contenu du répertoire Tf_scw1/Tf de mon dépôt
- Ajoutez les fichiers présent dans git (git add ...)

Modifiez instances.tf pour :

- créer deux instances nommées www1 et www2
- obtenir leur ip en sortie
- modifier le script go pour accepter en argument le nom de l'instance
  à atteindre en ssh (www1 ou www2)
- vérifiez que vous pouvez vous connecter en ssh sur les deux instances
- on va tester la connectivité internet entre les deux instances
  (ping, http, etc)


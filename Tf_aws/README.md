# Exemple de Terraform pour AWS

## Prerequis

- Avoir un compte AWS (évidemment...)
- Récupérer un couple id/cle secrete via la console Web
- Créer dans le répertoire .aws à la base de votre répertoire personnel
  deux fichiers : credentials et config

~~~~
$ cat ~/.aws/config 
[default]
region=us-east-2c
output=json
$ cat ~/.aws/credentials 
[default]
aws_access_key_id=ZERTIUAXJW6J...3UN566
aws_secret_access_key=Zejklm....uwcbq
~~~~

- Télécharger le binaire de terraform, copier le programme dans un
  répertoire qui est dans la variable PATH (/usr/local/bin par exemple,
  ou autre si vous avez personnalisé cette variable)

- Aller dans le répertoire ssh-keys, exécuter `./generate_keys`
- Aller dans le répertoire Tf :

~~~~
$ terraform init
$ terraform plan
$ terraform apply
~~~~


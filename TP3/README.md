# Modifier le déploiement terraform pour ajouter une instance

- Créer dans votre dépot un répertoire TP3/Tf
- Copiez y le contenu du répertoire Tf_scw1/Tf de mon dépôt
- Ajoutez les fichiers présent dans git (git add ...)

Modifiez instances.tf pour :

- créer deux instances nommées web1 et web2
- obtenir leurs adresses IP en sortie
- modifier le script go pour accepter en argument l'id de l'ip
  à atteindre en ssh (www1 ou www2)
- vérifiez que vous pouvez vous connecter en ssh sur les deux instances
- on va tester la connectivité internet entre les deux instances
  (ping, http, etc)

# Résultat des courses :

~~~~Bash
$ make apply
$ ./go web1_ip
root@running-rabbit-web1:~# ip a
...
2: ens2: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc pfifo_fast state UP group default qlen 1000
    link/ether de:1c:a8:0c:c0:01 brd ff:ff:ff:ff:ff:ff
    altname enp0s2
    inet 10.71.14.1/31 brd 10.71.14.1 scope global dynamic ens2
...
~~~~

Chaque instance est dans un réseau IPv4 de masque 31. Ça ne permet
pas beaucoup d'hôtes (IPv4 a des adresses sur 32 bits !) :

~~~~Bash
$ ipcalc 10.71.14.1/31
Address:   10.71.14.1           00001010.01000111.00001110.0000000 1
Netmask:   255.255.255.254 = 31 11111111.11111111.11111111.1111111 0
Wildcard:  0.0.0.1              00000000.00000000.00000000.0000000 1
=>
Network:   10.71.14.0/31        00001010.01000111.00001110.0000000 0
HostMin:   10.71.14.0           00001010.01000111.00001110.0000000 0
HostMax:   10.71.14.1           00001010.01000111.00001110.0000000 1
Hosts/Net: 2                     Class A, Private Internet, PtP Link RFC 3021
~~~~

Un seul hôte possible (l'autre adresse en 0 est réservée au réseau lui-même).
Il n'y a aucune connectivité interne entre nos instances.

Conclusion : il faut définir un "VPC/Virtual Network" commun pour nos
instances.

Note : la solution valide en plus un point qui restait problématique dans
mes tests précédents : l'exécution automatique d'un script lors du premier
démarrage des instances (mécanisme _cloud-init_). Il semble que les
scripts doivent être dans le même répertoire (mais pourquoi ?).

On peut même reprendre le script deploy-wp pour déployer Wordpress en
reprenant tel quel le script mis au point précédemment.


# livrables-ECF-C4
Ce référentiel est un livrables de l' ECF C4 de la CCI.

Opérations demander pour **ECF-4**:
- Réaliser le cahier des charges à partir de la demande client.
- Réaliser la maquette fil de fer à partir de l’analyse des besoins.
- Installation du CMS et configuration de l’environnement local.
- Structurer les pages du site, les contenus et images.
- Sécuriser le site et le code afin de contrer les failles.
- Concevoir le Template du CMS.
- Déployer le site sur un serveur Web.


## 1/ Réalisations du cahier des charges et du maquettage 
### Cahier des charges
Le cachier des charges se trouve dans le dossier **Livrables/LeCahierDesCharges**

### Le maquettage
Le maquettage se trouve dans le dossier **Livrables/LaMaquetteDuSite**

## 2/ La Sécuriter appliquer sur mon wordpress  
### Mettre à jour votre WordPress, vos extensions et thèmes
De nouvelles failles sont découvertes quotidiennement dans les versions actuelles de WordPress, de vos extensions ou de vos thèmes. Ces vulnérabilités apparaissent à la suite de modifications réalisées par les développeurs lors de mises à jour de fonctionnalités ou sont d’anciennes failles jusqu’à présent non découvertes ou non corrigées

### Supprimer le compte admin
#### Utiliser des identifiants de connexion complexes
Avoir un identifiant par défaut (admin) et un mot de passe sans complexité (pas de chiffres, pas de majuscules, pas de caractères spéciaux) est le meilleur moyen pour se faire pirater. *Créer un nouvel utilisateur administrateur* étant donné que l’on ne peut pas modifier l’identifiant d’un utilisateur sur WordPress.

### Changer l’url de connexion à l’administration
Par défaut l’adresse pour vous connecter à votre panel d’administration sera *mondomaine.fr/wp-admin*. Le problème avec cette url est qu’elle est commune à tous les sites WordPress lors de leur création ce qui en fait qu’elle est connue de tous les hackers.
ICI le plus simple est d’utiliser une extension, telle que *WPS Hide login*, qui va vous permettre en quelques réglages seulement de modifier votre url de connexion.

### Limiter le nombre de tentatives de connexion
Étant donné que l’attaque de force brute consiste en la répétition de plusieurs essais de connexion, l’un des moyens les plus efficace et simple à mettre en place est la limitation du nombre de tentatives de connexion.
Nous utilissont donc l'extension *Limit Login Attempts Reloaded*.

### Utiliser le .htaccess pour restreindre l’accès à votre site
La navigation à travers votre site par les liens s’y trouvant serait catastrophique si vous n’avez pas de règles correctes dans un fichier nommé .htaccess. Ce même fichier qui permet à vos liens de fonctionner correctement peut aussi être utilisé pour améliorer la sécurité de votre WordPress.

J'ai donc modifier mon **.htaccess** : 
```htaccess
<files wp-config.php>
order allow,deny
deny from all
</files>

<Files .htaccess>
order allow,deny
deny from all
</Files>
```
### Modifier le préfixe par défaut de la base de données de WordPress
Par défaut, lorsque la base de données de WordPress se créée elle aura pour préfixe *« wp_ ».* Comme pour toutes les configurations par défaut de WordPress ceci est un avantage pour les pirates qui sauront quoi attaquer.
*Des préfixes adaptés seront donc implantés .*
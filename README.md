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

# Demo du théme
http://fabrice.ssh.cfa.nc/wordpress/ 

## IMPORTANT SI UTILISATION du théme / Outils et démarche à effectuer

Outils(plugin) utiliser : 
-   FakerPress : FakerPress est un moyen propre de générer de fausses données sur votre installation WordPress, idéal pour les développeurs qui ont besoin de tests.
-   The Post Grid : Moyen rapide et facile d'afficher un article WordPress en vue Grille, Liste et Isotope (filtre par catégorie, étiquette, auteur ..) sans une seule ligne de codage.

Nom des catégorie utilisé  : 
-   Sportives
-   Culturelles

Nom des pages utilisé  : 
-   Accueil
-   Culturelles
-   Sportives

l'affichage se fait donc grace à The Post Grid comme en peut le voir à la ligne 42 et 46 du fichier page.php du thème.
```
echo do_shortcode( '[the-post-grid id="85" title="Sport page"]' );
```
1   Il est important à nommer vos pages t'elle quelle **[Accueil Culturelles Sportives]** ou modifier le fichier en conséquence de votre nomage sur les pages.
*Exemple à la ligne  40 ou 44 du fichier page.php* 
```php
	if (is_page( 'culturelles' ) ):
		echo"Catégorie : <strong>culturelles</strong>";
		echo do_shortcode( '[the-post-grid id="84" title="Culturelle page"]' );
		endif;
	if (is_page( 'sportives' ) ):																
        echo"Catégorie : <strong>sportives</strong>";					
        echo do_shortcode( '[the-post-grid id="85" title="Sport page"]' );
        endif;	
```

2   Il est tout aussi important de nommer vos catégories  t'elle quelle **[Sportives Culturelles]** ou modifier le fichier en conséquence de votre nomage sur la catégorie.

## START 

#### 1/ Réalisations du cahier des charges et du maquettage
#### 2/ La Sécuriter appliquait sur le wordpress
#### 3/ INSTALATION DU PROJET 

## 1/ Réalisations du cahier des charges et du maquettage 
### Cahier des charges
Le cahier des charges se trouve dans le dossier **Livrables/LeCahierDesCharges**

### Le maquettage
Le maquettage se trouve dans le dossier **Livrables/LaMaquetteDuSite**

## 2/ La Sécuriter appliquait sur mon wordpress
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
Par défaut, lorsque la base de données de WordPress est créer elle aura pour préfixe *« wp_ ».* Comme pour toutes les configurations par défaut de WordPress ceci est un avantage pour les pirates qui sauront quoi attaquer.
*Des préfixes adaptés seront donc implantés .*

## 3/ INSTALATION DU PROJET 

-   **1 /** Copier le dossier theme-fabrice-ecf et coller le dans wordpress :
    -   wp-content
        -   themes

-   **2 /** En deuxiéme lieu créer les catatégorie :

    -   Sportives
    -   Culturelles

-   **3 /** Troisièmement Créer les pages :

    -   Accueil
    -   Culturelles
    -   Sportives

-   **4 /** Ensuite Installer le plugin The Post Grid :
Choisisez un layout et instaler le soie avec la function php à imbriqué dans le code soie par un shortcode que tu intégre dans les sidebar prévue pour les accueillir .

-   **5 /** Puis Créer des jeux de données avec le plugin FakerPress :
Une fois installer choisisez l'onglet article et rajouter le nombre de fake article que vous voulez . 

-   **6 /** Paramétrer correctement les différent post pour que l'affichage visé soie en concordance à la page ou la catégorie et bien sûre la ou le short code à était déposer . 
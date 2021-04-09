# Landii <span style="font-size: 12px;">by mustii</span>

Landii est un package pour créer des landings ultra optimiser ce vous permet de développer
avec un environment déjà prêt mais aussi avec un renforcement optimisé. 

## Installation

### Package
Dans le package.json vous devez : 
- Modifiez le champ "name" par le nom de votre projet en n'insérant pas de caractères spéciaux, ni d'espaces, ni de majuscules
- Modifiez le champ "description"

### Gulpfile

- Modifiez la variable "baseDirRepository" par le chemin de votre projet
- Commentez les styles et scripts des modules inutiles

### NPM
```
npm install
```

### Environment Settings

Dans les fichier suivant : 
- local.settings
- preproduction.settings
- production.settings

Vous devez renseigner tous les paramètres à prendre en compte tel que le chemin et les url de production et préproduction.

### Landing Settings

Dans le fichier settings vous trouverez toutes les informations nécessaire au variable de la landing.
Vous trouverez les emails d'envoi et les emails de reception etc..

### SCSS

Dans le dossier config css vous trouverez les fichiers de variables scss tel que la couleurs la font ou encore les textes.

## Development

### Gulp
Pour ce kit de landing nous utilisons GULP qui va se charger pour nous de nous créé un live server
avec la commande 

```
gulp default
```

Si vous vous trouvez sur php storm vous pouvez le lancer depuis le panel à gauche.
Gulp nous permet aussi de pouvoir gérer le déploiement en compressant les fichiers.
Il va rassembler tous les fichiers CSS, JS et autre type de fichier modifiable au seins d'un seul
fichier afin de facilité le déploiement.

Pour voir comment faire le déploiement avec GULP je vous invite à regarder la section
[Déploiement](#Deploiement).

### SCSS
Pour styliser nous utilisons un préprocesseur dit SASS qui apporte beaucoup plus de simplicité.
Si vous souhaitez savoir comment l'utiliser je vous laisse regarder la [documentation](https://sass-lang.com/documentation).

Pour l'organisation tout se trouve dans le dossier `app/styles/scss/` ou vous trouverez tout les fichiers SCSS
qu'il vous faut. 

- Le dossier `animation` regroupe toutes les animations (hover, standard)
- Le dossier `config` regroupe la totalité des fichiers de configuration css (variables, couleur, police).
- Le dossier `elements` regroupe tout éléments les plus récurent (buttons, formulaire, etc)
- Le dossier `general` regroupe les fichiers généraux des pages (accueil, contact, etc)

Le fichier `init.scss` permet de lier tout les fichiers scss des dossiers ci-dessus. Si vous créé un fichier `.scss` 
il faudra donc le lier dans le fichier `init.scss`

<span style="color:red">Ne jamais écrire dans le fichier `styles.css`</span>. C'est le fichier compilé de tout les scss.

### JS
Pour le javascript l'utilisation de la version ES6 est possible grace au compilateur babel qui permet de pouvoir
transcoder pour les navigateurs qui n'accepte pas la mises à jour ES6.

Pour l'organisation tout se trouve dans le dossier `app/scripts/src/` ou vous trouverez tout les fichiers JS
qu'il vous faut.

- Le dossier `general` regroupe les fichiers généraux des pages (accueil, contact, etc)
- Le dossier `elements` regroupe les fichiers généraux des pages (formulaire, menu, etc)

<span style="color:red">Ne jamais écrire dans le fichier `app.js`</span>. C'est le fichier compilé de tout les fichiers JS.

### Lazy

------------

A revoir

------------


Afin d'optimiser les chargements des images nous utilisons le jquery afin d'utiliser la dépendance `lazy`. Elle permet 
à chaque chargement d'une page de ne pas charger toutes les images mais seulement les images visibles. Lors 
du scroll l'image est chargée que lorsque celle-ci est visibles. 

Pour utiliser jquery-lazy il vous suffit de remplacer `src` par `data-src` et d'attribué la classe `lazy`

```html
<img data-src="images/image.jpg" alt="text alternatif" class="lazy">
```

### AOS
Afin de faire des animations rapide et simple nous utilisons la librairie AOS qui est très puissante pour faire
de petite animation rapide.

Pour utiliser AOS vous devez ajouter des `attribues` dans la balise html tel que `data-aos` pour le nom de l'animation
souhaitez ou encore `data-aos-delay` pour créer un délai sur l'affichage des images. Il existe plein d'autre
attribue pour régler les animations, je vous laisse regarder la [documentation](https://michalsnik.github.io/aos/).

### Formulaire
Si vous utiliser un formulaire de demande de contact vous allez devoir faire plusieurs étapes. 

#### Vérification

Pour vérifier si l'utilisateur a bien remplie tous les champs vous pouvez faire la verification vous-même avant
d'envoyer les données. Vous devez vous rendre dans le fichier `form.js` vous devez faire toutes vos vérifications en javascript avant d'envoyer
le formulaire. Vous y trouverez un exemple.

À venir : 

- Un module de vérification d'email
- Un module d'affichage d'erreur 

#### Envoi des données

Pour envoyer le formulaire vous devez utiliser le fichier `contact.php` qui va s'occuper de faire soit les mises
en base de donnée soit l'envoie de mail poste formulaire.

Pour cela vous devez dans un premier temps configurer votre formulaire comme ceci : 

```html
<form method="post" action="ajax/contact.php">...</form>
```

Dans le fichier `contact.php` vous devez ensuite configurer si vous souhaitez 
faire une mise en [base de donnée](#Mise-en-base-de-donnée) ou un envoi [d'email](#Email).

### Email

Si vous souhaitez faire un envoi d'email vous devez déjà créé un modèle d'email.
Une fois ce modèle créé vous devez donc le remplir des informations du client.

Pour cela vous devez donc remplacer chaque text dans votre modèle comme ceci 

```html
<td>{NAME}</td>
```

Vous avez donc une variable `name` qui serra remplacer par le controller et la fonction `loadTemplate` qui s'occupera
de recréé le mail avec les informations donnée.

### Mise en base de donnée

À venir : 

- Possibilité de mettre ne base de donnée
- Intégration vers une api externe

### Favicons

Les favicons sont indispensable pour la création d'un site. Vous pouvez donc les créé sur ce [site](https://realfavicongenerator.net/)
à partir d'un logo. Vous avez ensuite juste a les positionnées dans le dossier `app/`.

### htaccess

Vous trouverez pleins de `.htaccess` dans tous les dossiers. Vous devez aucunement les supprimées car ils sont la veuillez bon
fonctionnement du site.

### Robot.txt

Ce fichier est là pour aider le `robot de google` et des autres services a crawler votre site. Vous devez donc le
configurer comme il se doit pour votre site.

## Déploiement

Une fois votre site terminé vous allez devoir le mettre en préproduction puis en ligne. Pour cela vous devez donc 
suivre une liste d'étape importante qui vous permettrons d'avoir un site bien plus rapide mais aussi mieux référencer.

### Images 

La premiere chose a vérifié c'est si les images ne sont pas plus grande que la taille maximum afficher. Par exemple si
une photo est affiché sur votre site en 400px par 400px il est inutile de charger une image supérieure a cette qualité.

Pour cela vous pouvez utiliser des outils comme `photoshop` pour redimensionner vos images.

Une fois les images a la bonne taille il faut les compresser et pour cela nous allons utiliser un outil appeler 
[compressor](https://imagecompressor.com/fr/) que vous pouvez trouver sur internet. 
Il vous suffit d'y glisser les images pour qu'il les compresse. En général il peu réduire la taille de l'image de
80% ce qui vous feras gagner du temps de chargement.

### Build

Une fois tout vérifier il faudra déployer votre site. Mais avant tout il faut compresser les
fichiers mais aussi minifier le `CSS` et le `JAVASCRIPT`. 

Pour cela nous allons utiliser GULP comme pour le live server mais cette fois-ci la commande sera 

```
gulp build
```

Je vous rappel que si vous êtes sur php storm votre `panel gulp` a gauche vous permet de le faire.

### Listing de mise en ligne

À venir

- [ ] déployé

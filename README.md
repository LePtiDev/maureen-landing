**LES ÉTAPES À SUIVRE LORSQUE VOUS COMMENCEZ LE PROJET**

1. Modifiez le fichier package.json
- Modifiez le champ "name" par le nom de votre projet en n'insérant pas de caractères spéciaux, ni d'espaces, ni de majuscules
- Modifiez le champ "description"

2. Supprimez le fichier package-lock.json

3. Modifiez le fichier gulpfile.babel.js
- Modifiez la variable "baseDirRepository" par le chemin de votre projet
- Commentez les styles et scripts des modules inutiles

4. Installez les packages npm (npm install)

5. Dans le dossier "app > includes > settings", modifiez le fichier local.settings.php
- Modifiez le SITE_URL par le chemin de votre projet

6. Dans le dossier "app > includes > settings", modifiez le fichier settings.php
- Modifiez le texte "NOM_RESIDENCE" par le nom de la résidence
- Modifiez le texte "VILLE_RESIDENCE" par la ville où se situe la résidence
- Modifiez le texte "Ville-Residence.pdf" par la ville où se site la résidence, suivi du nom de celle-ci
- Modifiez le numéro de téléphone
- Modifiez la variable "$settings['email']['primaryColor']" par la couleur primaire du site

7. Modifiez les fichiers scss dans le dossier "app > styles > scss > config"
- Modifiez le fichier _colors.scss en remplacant les différentes couleurs par celles présentes sur la maquette
- Modifiez le fichier _fonts.scss en remplacant la police par celle présente sur la maquette
- Modifiez le fichier _variables.scss en remplacant les tailles des arrondis des bordures par celles présentes sur la maquette

8. Retirez les éléments inutiles
- Supprimez index.php qui se trouve à la racine du projet, remplacez le par la version du gabarit que vous allez utiliser
- Dans le fichier "app > scripts > src > main.js", supprimez les lignes de code des modules inutiles
- Dans le fichier "app > styles > scss > init.scss", commentez les imports des mobules inutiles
- Dans le fichier "app > styles > scss > theme > theme.scss", supprimez les feuilles de style des versions que vous n'utilisez pas
- Dans le dossier "app > images > visuels et svg", supprimez les dossiers et images que vous n'utilisez pas
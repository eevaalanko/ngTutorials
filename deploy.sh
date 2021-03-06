#!/bin/bash

# Missä kansiossa komento suoritetaan
DIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )

source $DIR/config/environment.sh

echo "Siirretään tiedostot users-palvelimelle..."

# Tämä komento siirtää tiedostot palvelimelta
rsync -rPz  $DIR/app $DIR/assets $DIR/config $DIR/lib $DIR/sql $DIR/vendor $DIR/index.php $DIR/composer.json $USERNAME@users.cs.helsinki.fi:htdocs/$PROJECT_FOLDER 

echo "Valmis!"

echo "Suoritetaan komento php composer.phar dump-autoload..."

# Suoritetaan php composer.phar dump-autoload
ssh -v $USERNAME@users.cs.helsinki.fi "
cd htdocs/$PROJECT_FOLDER
php composer.phar dump-autoload
exit"

echo "Valmis! Sovelluksesi on nyt valmiina osoitteessa $USERNAME.users.cs.helsinki.fi/$PROJECT_FOLDER"

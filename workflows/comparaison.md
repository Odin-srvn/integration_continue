En commun :
même déclencheur (push/pull_request sur main)

même OS (ubuntu-latest)

mêmes premières étapes (actions/checkout@v2, shivammathur/setup-php@v2, puis composer install)

tous utilisent Composer pour installer les dépendances avant d’analyser le code



Différences :

chaque workflow a un but différent :

unit.yml -> exécuter les tests unitaires avec PHPUnit

psr12.yml -> vérifier le style PSR-12 avec PHP CS Fixer

stan.yml -> faire l’analyse statique avec PHPStan

noms de jobs différents (build, fix, phpstan)

noms de workflow différents (PHP CI, PHP CS Fixer, PHPStan Analysis)

stan.yml installe aussi une extension PHP (mbstring) alors que les autres non

la commande finale run: change dans chaque workflow (phpunit / cs-check / stan-check)
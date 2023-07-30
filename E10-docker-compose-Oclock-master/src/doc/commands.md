## Composer : 


```sh
teacher@lemaire-marion-oclock-teacher:~/CDA-Griffon/S1A-o-playstore-Marion-Oclock$ composer init

                                            
  Welcome to the Composer config generator  
                                            


This command will guide you through creating your composer.json config.

Package name (<vendor>/<name>) [teacher/s1a-o-playstore-marion-oclock]: 
Description []: concurrent direct de Micromania
Author [Marion-Oclock <marion@oclock.io>, n to skip]: 
Minimum Stability []: 
Package Type (e.g. library, project, metapackage, composer-plugin) []: project
License []: 

Define your dependencies.

Would you like to define your dependencies (require) interactively [yes]? no
Would you like to define your dev dependencies (require-dev) interactively [yes]? no
Add PSR-4 autoload mapping? Maps namespace "Teacher\S1aOPlaystoreMarionOclock" to the entered relative path. [src/, n to skip]: n

{
    "name": "teacher/s1a-o-playstore-marion-oclock",
    "description": "concurrent direct de Micromania",
    "type": "project",
    "authors": [
        {
            "name": "Marion-Oclock",
            "email": "marion@oclock.io"
        }
    ],
    "require": {}
}

Do you confirm generation [yes]? 
Would you like the vendor directory added to your .gitignore [yes]? 
teacher@lemaire-marion-oclock-teacher:~/CDA-Griffon/S1A-o-playstore-Marion-Oclock$ composer install
Composer is operating significantly slower than normal because you do not have the PHP curl extension enabled.
No composer.lock file present. Updating dependencies to latest instead of installing from lock file. See https://getcomposer.org/install for more information.
Loading composer repositories with package information
Updating dependencies
Nothing to modify in lock file
Writing lock file
Installing dependencies from lock file (including require-dev)
Nothing to install, update or remove
Generating autoload files
teacher@lemaire-marion-oclock-teacher:~/CDA-Griffon/S1A-o-playstore-Marion-Oclock$ composer dump-autoload
Generating autoload files
Generated autoload files
teacher@lemaire-marion-oclock-teacher:~/CDA-Griffon/S1A-o-playstore-Marion-Oclock$ git add .
teacher@lemaire-marion-oclock-teacher:~/CDA-Griffon/S1A-o-playstore-Marion-Oclock$ git commit -m "ajout du gestionnaire de dependance Composer à notre projet"[j2-cockpit f9e7ecf] ajout du gestionnaire de dependance Composer à notre projet
 4 files changed, 40 insertions(+), 3 deletions(-)
 create mode 100644 composer.json
 create mode 100644 composer.lock
teacher@lemaire-marion-oclock-teacher:~/CDA-Griffon/S1A-o-playstore-Marion-Oclock$ git commit -am "explications sur les namespace/composer/psr4"
[j2-cockpit 8390088] explications sur les namespace/composer/psr4
 1 file changed, 19 insertions(+), 3 deletions(-)
 rewrite doc/namespace.md (98%)
teacher@lemaire-marion-oclock-teacher:~/CDA-Griffon/S1A-o-playstore-Marion-Oclock$ git push origin j2-cockpit 
Énumération des objets: 28, fait.
Décompte des objets: 100% (28/28), fait.
Compression par delta en utilisant jusqu'à 8 fils d'exécution
Compression des objets: 100% (18/18), fait.
Écriture des objets: 100% (19/19), 63.26 Kio | 6.33 Mio/s, fait.
Total 19 (delta 9), réutilisés 0 (delta 0)
remote: Resolving deltas: 100% (9/9), completed with 5 local objects.
remote: 
remote: Create a pull request for 'j2-cockpit' on GitHub by visiting:
remote:      https://github.com/O-clock-Griffon/S1A-o-playstore-Marion-Oclock/pull/new/j2-cockpit
remote: 
To github.com:O-clock-Griffon/S1A-o-playstore-Marion-Oclock.git
 * [new branch]      j2-cockpit -> j2-cockpit
teacher@lemaire-marion-oclock-teacher:~/CDA-Griffon/S1A-o-playstore-Marion-Oclock$ composer require symfony/routing
Info from https://repo.packagist.org: #StandWithUkraine
Using version ^6.1 for symfony/routing
./composer.json has been updated
Running composer update symfony/routing
Loading composer repositories with package information
Updating dependencies
Lock file operations: 1 install, 0 updates, 0 removals
  - Locking symfony/routing (v6.1.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Installing symfony/routing (v6.1.1): Extracting archive
4 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating autoload files
1 package you are using is looking for funding.
Use the `composer fund` command to find out more!
```

installation de league/plates

```sh
composer require league/plates
Info from https://repo.packagist.org: #StandWithUkraine
Using version ^3.4 for league/plates
./composer.json has been updated
Running composer update league/plates
Loading composer repositories with package information
Updating dependencies
Lock file operations: 1 install, 0 updates, 0 removals
  - Locking league/plates (v3.4.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Installing league/plates (v3.4.0): Extracting archive
Generating autoload files
1 package you are using is looking for funding.
Use the `composer fund` command to find out more!
```
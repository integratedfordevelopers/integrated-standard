# Integrated skeleton #
Skeleton for a new Integrated based application, which includes the use of all core bundles

## Requirements ##
* See the require section in the composer.json

## Documentation ##
* [Integrated for developers website](http://www.integratedfordevelopers.com "Integrated for developers website")

## Installation ##
This bundle can be installed following these steps:

### Execute commands ###
Execute the following commands to set up the project:

    $ php bin/console braincrafted:bootstrap:install
    $ php bin/console assetic:dump web
    $ php bin/console doctrine:mongodb:schema:update
    $ php bin/console doctrine:schema:update --force
    $ php bin/console init:queue --force
    $ php bin/console init:locking --force
    $ php bin/console init:scope
    $ php bin/console cache:clear --env=prod
    $ php bin/console fos:js-routing:dump --env=prod

### Install using composer ###
For a local installation use:

    $ php composer.phar create-project integrated/integrated-standard path/ "~0.8"
    
Please review the documentation website for using the Vagrant development environment.

### Datafixtures ###
For some test data use these commands:

    $ php bin/console doctrine:fixtures:load
    $ php bin/console doctrine:mongodb:fixtures:load
    $ php bin/console solr:indexer:queue --full && php bin/console solr:indexer:run --full
    
### Enable the bundle ###
* Change the content of this README.md for your project
* Change the content of the composer.json for your project

## License ##
This bundle is under the MIT license. See the complete license in the bundle:

    LICENSE

## Contributing ##
Pull requests are welcome. Please see our [CONTRIBUTING guide](http://www.integratedfordevelopers.com/contributing "CONTRIBUTING guide").

## Changelog ##
You can find all releases and changes at [integratedfordevelopers.com](http://www.integratedfordevelopers.com "integratedfordevelopers.com").

## About ##
This bundle is part of the Integrated project. You can read more about this project on the
[Integrated for developers](http://www.integratedfordevelopers.com "Integrated for developers") website.

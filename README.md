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

    $ php app/console braincrafted:bootstrap:install
    $ php app/console assetic:dump web
    $ php app/console doctrine:mongodb:schema:update
    $ php app/console doctrine:schema:update --force
    $ php app/console init:queue --force
    $ php app/console init:locking --force
    $ php app/console init:scope
    $ php app/console cache:clear --env=prod
    $ php app/console fos:js-routing:dump --env=prod

### Install using composer ###
For a local installation use:

    $ php composer.phar create-project integrated/integrated path/ "~0.4"
    
Please review the documentation website for using the Vagrant development environment.

### Datafixtures ###
For some test data use these commands:

    $ php app/console doctrine:fixtures:load
    $ php app/console doctrine:mongodb:fixtures:load --fixtures=vendor/integrated/content-bundle/DataFixtures/MongoDB --fixtures=vendor/integrated/storage-bundle/DataFixtures/MongoDB --fixtures=vendor/integrated/website-bundle/DataFixtures/MongoDB
    $ php app/console solr:indexer:queue --full && php app/console solr:indexer:run --full
    
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

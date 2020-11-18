# Integrated skeleton #
Skeleton for a new Integrated based application, which includes the use of all core bundles

## Requirements ##
* See the require section in the composer.json
* See the services in docker-compose.yml

## Documentation ##
* [Integrated for developers website](http://www.integratedfordevelopers.com "Integrated for developers website")

## Installation in Docker containers ##

Clone the project using Composer:

    $ php composer.phar create-project integrated/integrated-standard path/ "~0.13" --no-scripts

Start docker-compose and run all manual installation actions with (supported on Linux only): 

    $ sh docker/initial-setup.sh

* `docker-compose build` rebuild the containers
* `docker-compose stop` stop the containers
* `docker-compose start` start the containers

### Application & tools URLs ###

* https://localhost.integratedfordevelopers.com/
* https://mail.localhost.integratedfordevelopers.com/
* https://mongo.localhost.integratedfordevelopers.com/
* https://mysql.localhost.integratedfordevelopers.com/
* https://solr.localhost.integratedfordevelopers.com/

## Manual installation ##
This application can be installed following these steps:

Set up the required services (as in docker-compose.yml)

Clone the project using Composer:

    $ php composer.phar create-project integrated/integrated-standard path/ "~0.12"

Execute the following commands to set up the project:

    $ php bin/console integrated:install

After installation you need to create a user:

    $ php bin/console user:create admin yourpassword Integrated ROLE_ADMIN

## Datafixtures ##
For some test data use these commands:

    $ php bin/console doctrine:fixtures:load
    $ php bin/console doctrine:mongodb:fixtures:load
    $ php bin/console solr:indexer:queue --full && php bin/console solr:indexer:run --full

You can login with: admin / admin    

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

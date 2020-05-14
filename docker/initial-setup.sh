#!/bin/sh
# run from product root directory: sh docker/initial-setup.sh

if [ ! -f "app/config/parameters.yml.dist" ]; then
  echo "Please run this script from the project root directory"
  exit
fi

echo "This scripts does a Docker setup from scratch."
echo "Please use this script when your project have not been set up yet only."
echo ""
echo "Press Y <enter> to continue or any other key to cancel"

read continue

if [ $continue != "Y" ] && [ $continue != "y" ]; then
    echo "Script terminated."
    exit
fi

echo "Running docker-compose..."

docker-compose up -d

# allow containers to start all services
sleep 5

if [ ! -f "app/config/parameters.yml" ]; then
  cp "app/config/parameters.yml.dist" "app/config/parameters.yml"
fi

docker-compose exec php composer install

docker-compose exec php php bin/console integrated:install

docker-compose exec php php bin/console init:queue --force
docker-compose exec php php bin/console init:locking --force
docker-compose exec php php bin/console doctrine:schema:update --force
docker-compose exec php php bin/console doctrine:mongodb:schema:create
docker-compose exec php php bin/console init:scope

docker-compose exec php php bin/console cache:clear
docker-compose exec php php bin/console cache:clear -e prod

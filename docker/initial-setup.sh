#!/bin/sh
# run from product root directory: sh docker/initial-setup.sh

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

docker-compose exec php composer install

docker-compose exec php php bin/console integrated:install

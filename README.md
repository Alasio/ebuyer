### eBuyer Warehouse
A simple tool to show, list and pick products from a warehouse, based on the technical test

To use, please either deploy to a system with PHP 7.3+, MySQL 8.0 & composer, or a system running Docker & docker-compose

If running docker & docker-compose, please then bring up all containers using docker-compose up -d --build, or alternatively, use the included scripts ./eBuyer (ensure it has execute priviledges first)

Else, you only need the 'app' folder. 

Also, please ensure you set both .env files (one inside the root folder for the docker .env variables, one inside the app folder for the Symfony .env variables) where appropriate.  Example .env.example files have been provided
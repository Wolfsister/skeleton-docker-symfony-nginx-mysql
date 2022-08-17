
## PROJECT STARTUP ##

up:
	CURRENT_UID=$(id -u):$(id -g) docker-compose up -d --build

## DAILY COMMANDS ##

sh:
	docker-compose exec php sh

## SYMFONY COMMANDS ##

entity:
	docker-compose exec php bin/console make:entity

## DATABASE ##

db/connect:
	docker-compose exec mysql mysql -u db_user -pdb_password db # change credentials depending on your .env
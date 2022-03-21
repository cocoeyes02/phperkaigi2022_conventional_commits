PHP = docker-compose run --rm app

.PHONY: initial up down artisan composer commitmessage

initial:
	cp .env.example .env
	docker-compose exec app php artisan key:generate

up:
	docker-compose up -d --force-recreate --build

down:
	docker-compose down

artisan:
	$(PHP) php artisan $(CMD)

composer:
	$(PHP) composer $(CMD)

test:
	$(PHP) vendor/phpunit/phpunit/phpunit tests/

commitmessage:
	./vendor/bin/conventional-commits prepare

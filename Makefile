up: build
down: stop
restart: down build

build:
	docker-compose up -d

rebuild:
	docker-compose up -d --build

stop:
	docker-compose down -v
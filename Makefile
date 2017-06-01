##### Docker ######

docker/build: Dockerfile docker-compose.yml
	docker-compose build

docker/start:
	docker-compose up -d

docker/stop:
	docker-compose down

docker/logs:
	docker-compose logs

docker/clean:
	docker-compose rm

docker/ssh:
	docker exec -it celler /bin/bash
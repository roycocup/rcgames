docker build --rm -f "Dockerfile" -t rcgames:latest .

docker run --rm -it -p 80:80/tcp -p 8080:8080/tcp rcgames:latest
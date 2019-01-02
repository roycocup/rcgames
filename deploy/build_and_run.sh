docker build --rm -f "Dockerfile" -t rcgames:latest .

docker run --rm -it -p 80:80/tcp -p 9000:9000/tcp rcgames:latest
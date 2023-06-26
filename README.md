# Simple PHP Microservice

This is a basic microservice written in PHP using the Slim framework. It implements a key-value store, where you can set and get values from a simple in-memory array.

## Project Structure

The project follows the structure suggested by the Slim framework:

```shell
/phpmicroservice
  /src
    /Handlers
      KeyHandler.php
    /Services
      KeyService.php
    /Repositories
      KeyRepository.php
    dependencies.php
    routes.php
  public
    index.php
  composer.json
  Dockerfile
```


## Getting Started

First, clone the repository to your local machine:

```bash
git clone https://github.com/indranandjha1993/phpmicroservice.git
```

## Navigate to the project directory:

```shell
cd phpmicroservice
```

## Install the required PHP packages:

```shell
composer install
```

## Run the application:

```shell
php -S localhost:8080 -t public
```

The server will start on localhost:8080.

## API Endpoints
The service exposes the following endpoints:

- GET /get/{key}: Retrieve the value for a given key.
- POST /set/{key}/{value}: Set a value for a given key.

## Running with Docker
You can also build and run the service using Docker. Build the image with:

```shell
docker build -t phpmicroservice .
```

### Then run the container:

```shell
docker run -p 8080:80 phpmicroservice
```

## Note
This is a simple example and is not suitable for production use. For a real application, consider implementing proper error handling, validation, security measures, and using a real database for the repository layer.
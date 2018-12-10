# Project Title
##### FTD Test

# Prerequisites
##### - PHP 7
##### - Laravel 5.7
##### - MariaDB 

# Running the tests
##### cd project_dir
##### ./vendor/bin/phpunit /tests/Feature/Api

# Deployment
##### cd project_dir
##### composer install

# Built With
##### PHP 
##### Laravel - The web framework used
##### Composer - Dependency Management

# Versioning
##### I use GitFlow for versioning. For the versions available, see the tags on this repository.

# Authors
##### Marcelo Braga

# License
##### This project is licensed under the MIT License.

# How to use

## Get all books

##### GET https://ftdtest.herokuapp.com/api/book

## Get a book

##### GET https://ftdtest.herokuapp.com/api/book/{id}

## Create a new book

##### POST https://ftdtest.herokuapp.com/api/book
##### Body - {"isbn" : "ISBN", "title" : "Título do livro", "cover" : "URL da imagem do livro", "level" : "Nível", "price" : "Preço", "authors" : "[IDs]", "disciplines" : "[IDs]"}

## Update a book

##### PUT https://ftdtest.herokuapp.com/api/book/{id}
##### Body - {"isbn" : "ISBN", "title" : "Título do livro", "cover" : "URL da imagem do livro", "level" : "Nível", "price" : "Preço", "authors" : "[IDs]", "disciplines" : "[IDs]"}

## Delete a book

##### DELETE https://ftdtest.herokuapp.com/api/book/{id}


## Get all authors

##### GET https://ftdtest.herokuapp.com/api/author

## Get an author

##### GET https://ftdtest.herokuapp.com/api/author/{id}

## Create a new author

##### POST https://ftdtest.herokuapp.com/api/author
##### Body - {"name" : "Nome do autor"}

## Update a author

##### PUT https://ftdtest.herokuapp.com/api/author/{id}
##### Body - {"name" : "Nome do autor"}

## Delete a author

##### DELETE https://ftdtest.herokuapp.com/api/author/{id}


## Get all disciplines

##### GET https://ftdtest.herokuapp.com/api/discipline

## Get a discipline

##### GET https://ftdtest.herokuapp.com/api/discipline/{id}

## Create a new discipline

##### POST https://ftdtest.herokuapp.com/api/discipline
##### Body - {"name" : "Nome da disciplina"}

## Update a discipline

##### PUT https://ftdtest.herokuapp.com/api/discipline/{id}
##### Body - {"name" : "Nome da disciplina"}

## Delete a discipline

##### DELETE https://ftdtest.herokuapp.com/api/discipline/{id}

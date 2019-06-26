# BOOKSHOP-API

## Connection serveur php
    php -S 127.0.0.1:8000 -t public

## Update BDD (with Doctrine)
    php bin/console doctrine:schema:update --force

## Liste user
  * Username: romain / password: mds2019 / roles: user
  * Username: admin / password: admin / roles: admin

## Infos user connected:
    http://localhost:8000/api2

### Create User:
    http://localhost:8000/register
    Body -> form_data
      \_username & \_password

### Get Token: (POST)
    http://localhost:8000/login_check
    Body:
    {
      "username": "romain",
      "password": "mds2019"
    }

## Use Token:
    Header:
    Key: Authorization & Value: Bearer [token]

### Create Customer: (POST)
    http://localhost:8000/api/customers
    Body:
    {
     "firstname": "Nathan",
     "lastname": "Fontaine"
    }

### Create Cart: (POST)
    http://localhost:8000/api/carts
    {
      "customer": "/api/customers/2"
    }

# Oneago PHP Template

Esta es la estructura básica de un proyecto PHP para desarrollos de [Oneago](https://www.oneago.com)

vease este proyecto en [packagist.org](https://packagist.org/packages/oneago/oneago-php-template)

## Primeros pasos

⚠️  Es importante que para el uso de este framework se debe usar la versión de PHP 7.0 o superior.

Se ha dispuesto un software que facilita la preparación de la estructura básica de un proyecto en PHP para ser usado en entornos con Linux y Mac la cual se basa en MVC (Modelo Vista Controlador) e instala:

```json
  "require" : {
    "twig/twig": "^3.1",
    "robmorgan/phinx": "^0.12.4",
    "vlucas/phpdotenv": "^5.2",
    "php": ">=7.4",
    "ext-mysqli": "*",
    "ext-curl": "*",
    "ext-zip": "*"
  },
  "require-dev": {
    "fakerphp/faker" : "^1.12.0",
    "filp/whoops": "^2.9",
    "phpunit/phpunit": "^9.4",
    "symfony/console": "^5.1"
  },
```

[Librerías requeridas](https://www.notion.so/6dd7b5eb0c2e4054aefb86b1a63a165f)

[Librerías requeridas modo desarrollo](https://www.notion.so/32c9b7aa106c4469bd66c43c4af426ad)

## Prerequisites
- php 7.4 or high
- php-mysqli
- php-zip
- sass (if you want compile sass)
- docker-compose (if you want run docker container in project)
- git (for version control)

## Instalación e iniciación de un proyecto PHP

[See instructions here](https://github.com/Oneago/installer/blob/main/README.md)

Project name is optional, if name is not provided project name will be folder name

[Estructura del proyecto creado](https://www.notion.so/f48490c8ca2848e8a2d83a6a436d61a6)

⚠️  Al finalizar el proceso de iniciación del proyecto git ya se ha iniciado y agregado los archivos (Solamente desde `oneago <nombre proyecto>`)

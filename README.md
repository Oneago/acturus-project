# Oneago PHP Template

Esta es la estructura básica de un proyecto PHP para desarrollos de [Oneago](https://www.oneago.com)

vease este proyecto en [packagist.org](https://packagist.org/packages/oneago/oneago-php-template)

## Primeros pasos

⚠️  Es importante que para el uso de este framework se debe usar la versión de PHP 7.0 o superior.

Se ha dispuesto un software que facilita la preparación de la estructura básica de un proyecto en PHP para ser usado en entornos con Linux y Mac la cual se basa en MVC (Modelo Vista Controlador) e instala:

```
"require": {
  "twig/twig": "^3.0",
  "robmorgan/phinx": "^0.12.4",
  "vlucas/phpdotenv": "^5.2",
  "filp/whoops": "^2.7",
  "nette/robot-loader": "^3.3",
  "php": ">=7.0",
  "ext-mysqli": "*",
  "ext-curl": "*"
},
"require-dev": {
  "symfony/console": "^5.1",
  "fzaninotto/faker": "^1.9",
  "phpunit/phpunit": "^9.3",
  "ext-zip": "*"
  "ext-curl": "*"
},
```

[Librerías requeridas](https://www.notion.so/6dd7b5eb0c2e4054aefb86b1a63a165f)

[Librerías requeridas modo desarrollo](https://www.notion.so/32c9b7aa106c4469bd66c43c4af426ad)

El script se realizó para el uso de sistemas basados en Debian principalmente pero se ejecuta sin problemas en otras distribuciones

## Prerequisitos
- php 7.0 o superior
- php-mysqli
- php-zip

## Instalación e iniciación de un proyecto PHP

[Vease las instrucciones aquí](https://github.com/Oneago/installer/blob/main/README.md)

nombre de proyecto es opcional, si no se pone el proyecto será creado en la carpeta actual

[Estructura del proyecto creado](https://www.notion.so/f48490c8ca2848e8a2d83a6a436d61a6)

⚠️  Al finalizar el proceso de iniciación del proyecto git ya se ha iniciado y agregado los archivos (Solamente desde `oneago <nombre proyecto>`)

## Mostrar errores en desarrollo de APIs

Es recomendado mostrar errores con la siguiente función

[https://gist.github.com/jruedaq/3a49bfd8d89d8b6d973e8719b6a45ac5?file=MyError.php](https://gist.github.com/jruedaq/3a49bfd8d89d8b6d973e8719b6a45ac5?file=MyError.php)

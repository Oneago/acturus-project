![GitHub repo size](https://img.shields.io/github/repo-size/Oneago/arcturus-project)
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/ONEAGO/arcturus-project)
![Packagist Downloads](https://img.shields.io/packagist/dt/Oneago/arcturus-project)
![Packagist License](https://img.shields.io/packagist/l/Oneago/arcturus-project)
![Packagist Version](https://img.shields.io/packagist/v/Oneago/arcturus-project)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/Oneago/arcturus-project)
![GitHub issues](https://img.shields.io/github/issues/Oneago/arcturus-project)
![GitHub commit activity](https://img.shields.io/github/commit-activity/m/Oneago/arcturus-project)

# Arcturus Project

PHP framework developed by [Oneago](https://www.oneago.com)

See this project in [packagist.org](https://packagist.org/packages/oneago/arcturus-project)

## System requirements

- **PHP 8.0 or latest**
- **Composer**
- **docker-compose** (Optional for docker server run)
- **npm** (Optional for Typescrippt compile)
- **sass** (Optional for sass compile)
- **git** (Optional for version control)

## Getting started

- [See installation gide here](https://github.com/Oneago/arcturus-installer/blob/main/README.md)

- After install Arcturus CLI installer run in command line `arcturus <project name>` inside installation project

## Ada CLI available commands

in project folder run `./ada` or `php ada` for script help

### docker

Manage project containers. require docker-compose and docker installed in your system

- ### docker:run
  Run docker-compose.yml file and up containers

        php ada docker:run

- ### docker:pull
  Pull docker-compose.yml containers from docker hub

        php ada docker:run  

- ### docker:kill
  Kill docker-compose.yml containers

        php ada docker:kill

### make

Create new project files

- ### make:view
  Create a new view passing a name

        php ada make:view [options] [--] <view name>

  ### Arguments
    - **view name**: Name for use in new view file and/or model file

  ### Options
    - `--dir` (`-d`): If need create view in a new or existing directory, use this option with directory name. Save view
      in a folder for pretty viewer
    - `--no-controller`: Only create a twig file in views directory and controller isn't create

- ### make:model
  Create a new model for this app

        php ada make:model <model name>  

  ### Arguments
    - **model name**: Name for use in new model

- ### make:middleware
  Create a new middleware passing a name

        php ada make:middleware <middleware name>

  ### Arguments
    - **middleware name**: Name for use in new middleware

### run

- ### run:release
  Make a zip with production project files

        php ada run:release [<name>]
  ### Arguments
    - **name**: Name for zip file [default: "release"]

- ### run:server
  Launch a php server

        php ada run:server <address> 

  ### Arguments
    - **address**: Address for run php host. Ex:`localhost:8090`

### sass

Manage sass files. require sass installed in your system

- ### sass:compile
  Compile a sass file in www/css

        php ada sass:compile <name> 

  ### Arguments
    - **name**: Name for sass file. If name no have extension, the .sass extension is added automatically

- ### sass:new
  Compile a sass file in www/css

        php ada sass:new [options] [--] <name>

  ### Arguments
    - **name**: Name for a new sass file. If name no have extension, the .sass extension is added automatically
  
  ### Options
    - `--component` (`-c`): If option is set, create a component y components directory otherwise create in css
      directory
    - `--parent` (`-p`): sass parent to add component import on css directory [default: "style.scss"] 

### tsc

Manage Typescript files. require npm installed in your system

- ### tsc:compile
  Compile all ts files in www/js directory

        php ada tsc:compile

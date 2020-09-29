#!/bin/bash

if ! [ -f phinx.php ]; then
  vendor/bin/phinx init .
fi;

if ! [ -d db/migrations ]; then
  mkdir -p db/migrations
fi;

if ! [ -d db/seeds ]; then
  mkdir db/seeds
fi;

if ! [ -d .git ]; then
  git init
fi;

git add .

composer upgrade
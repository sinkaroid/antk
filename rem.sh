#!/bin/bash
git add .
git commit -m "<(tags)\n(Attribute)=anito-shortlink id=(.*?)>"
git push -f origin master
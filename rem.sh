#!/bin/bash
git add .
git commit -m "'lexot'>(.*?)<\/div>/s"
git push -f origin master
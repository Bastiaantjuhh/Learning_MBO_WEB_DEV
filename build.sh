#!/bin/bash
find . -name '_DS_Store' -type f -delete
find . -name '.DS_Store' -type f -delete
find . -name ".idea" -exec rm -r {} \;
prettier --write '**/*.{scss,css,js,html,php,md}'
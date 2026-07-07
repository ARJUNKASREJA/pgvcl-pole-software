#!/bin/bash

DATE=$(date +"%Y%m%d_%H%M")

mysqldump \

-u root \

-p database_name \

> backup_$DATE.sql

tar -czf storage_$DATE.tar.gz storage
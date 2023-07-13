#!/bin/bash

# Project: Powder (https://github.com/azazelm3dj3d/powder)
# Author: azazelm3dj3d (https://github.com/azazelm3dj3d)
# License: BSD 2-Clause

function sql_migration {
    if [ -f ".env" ]
    then
        # Install SQL migrations
        docker exec -it powder-app-1 php migrations.php
        echo "SQL migration complete"
    else
        echo "Missing '.env' file for database configuration. Please create a .env file and re-run."
    fi
}

sql_migration

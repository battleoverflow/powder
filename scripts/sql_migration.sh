#!/bin/bash

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

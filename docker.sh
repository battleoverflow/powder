#!/bin/bash

function powder {

    echo "Beginning Docker build..."
    echo ""

    # Run Docker container, detached
    docker compose up -d
}

function complete {
    echo ""
    echo "Docker build should now be complete. You can visit the following URL to interact with the project: http://localhost:8080"
    echo "If you encountered an error, please create an issue here: https://github.com/battleoverflow/powder/issues"
    echo ""
}

powder
complete

# Dockerized Laraver App for Game Reviews
 
## Overview

Simple Web app for writing reviews of games.

## Requirements

* Docker v24.0.5

# Configuration
1. In the project main folder and /services/app/laravel folder you will find example.env file. Rename it to .env.
2. Run "docker compose build" command.
3. Run "docker compose up -d" command to start app in detached mode.
4. Run "docker exec review-app composer install" command to install all required packages.
5. Open browser and type in the search bar "localhost:8000".
  
* To stop the application run "docker compose stop" command.
* To start the application again run "docker compose start" command.
* To stop and remove application containers run "docker compose down" command.

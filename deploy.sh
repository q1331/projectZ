#!/bin/bash
# Install Docker 
sudo apt-get update && sudo apt-get install -y docker.io 
# Install Docker compose
curl -L https://github.com/docker/compose/releases/download/1.7.1/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose
# Go to project dirctory
cd projectZ
# Website up
docker-compose up


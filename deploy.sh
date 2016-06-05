#!/bin/bash
# Install Docker and git
sudo apt-get update && sudo apt-get install docker.io && sudo apt-get install git
# Pull the project repo
git clone https://github.com/q1331/projectZ.git
cd projectZ
# Website up
docker-compose up


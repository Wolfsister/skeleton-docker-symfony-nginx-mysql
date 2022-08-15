## Instructions

Launch with
`CURRENT_UID=$(id -u):$(id -g) docker-compose up`

Command used to create symfony project : 
composer create-project symfony/skeleton:"6.1.*" .

TODO: move docker-compose to use same .env file as symfony ?
TODO: install xdebug
TODO: create makefile
    -launch container with UID
    -make sh
    -launch some commands on container ? like make:entity

## Troubleshooting

### Issue running nginx container 

Check that the port 80 is not in use. Could be the case if apache is enable on startup for example.

#### To list what's listening on port 80:
sudo lsof -nP | grep LISTEN

#### To disable Apache on startup :
echo manual | sudo tee /etc/init/apache2.override
## Instructions

Launch project with\
`CURRENT_UID=$(id -u):$(id -g) docker-compose up`\
OR\
`make up`

Command used to create symfony project\
`composer create-project symfony/skeleton:"6.1.*" .`

TODO: install xdebug\
TODO: install at root, without backend directory ?\
TODO: check on windows and mac\
TODO: better Readme

## Troubleshooting

### Issue running nginx container 

Check that the port 80 is not in use. Could be the case if apache is enable on startup for example.

#### To list what's listening on port 80:
sudo lsof -nP | grep LISTEN

#### To disable Apache on startup :
echo manual | sudo tee /etc/init/apache2.override
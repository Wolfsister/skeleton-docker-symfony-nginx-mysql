## Instructions

Launch project with\
`CURRENT_UID=$(id -u):$(id -g) docker-compose up`\
OR\
`make up`

Command used to create symfony project\
`composer create-project symfony/skeleton:"6.1.*" .`

### Xdebug

xdebug is installed in Dockerfile for PHP.\
It will be enabled on creation.

#### PHPStorm

Go in your IDE menu, File->Settings, click on PHP. Configure your PHP cli with your docker compose. In "lifecycle" section, check "Connect to existing container".

In path mappings, check that it's set to `<Project root>/backend→/var/www`.

In File->Settings->Php->Xdebug, you should only check "Resolve breakpoints ... if not available".

Make sure the "phone" logo on top-right corner is listening to connections and you should be all set !

TODO: remove backend folder, to avoid confusion with container from other docker install in same PC
TODO: install csfix/phpstan
TODO: install at root, without backend directory ?\
TODO: better Readme

## Troubleshooting

### Issue running nginx container 

Check that the port 80 is not in use. Could be the case if apache is enable on startup for example.

#### To list what's listening on port 80:
sudo lsof -nP | grep LISTEN

#### To disable Apache on startup :
echo manual | sudo tee /etc/init/apache2.override

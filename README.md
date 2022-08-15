## Instructions

Launch with docker-compose up -d --build


## Troubleshooting

### Issue running nginx container 

Check that the port 80 is not in use. Could be the case if apache is enable on startup for example.

#### To list what's listening on port 80:
sudo lsof -nP | grep LISTEN

#### To disable Apache on startup :
echo manual | sudo tee /etc/init/apache2.override
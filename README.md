# Local Setup
## Prerequisites
1. Git must be installed on Operating System
2. Docker and Docker Composer must be installed on Operating System
3. It has been tested in Mac OS but should work in Linux and Windows environment.
4. Current Dev Setup require Ports 80 only, make sure it is not in use. Check ports are free : ```lsof -t -i :80 ```

## First Time Installation
1. Clone this repo
2. Start Docker Containers from repo root: ```docker-compose up```
4. Download the database and copy it to ```/docker-utils/sqldump``` folder, name it db.sql
3. Go to Virtual OS Shell: ```docker exec -it ybl_db_1 bash```
5. Run ```cd /app/sqldump```
6. Run ```mysql -uroot -proot ybl < db.sql```
7. Browse the ```http://localhost```, site should up.

## Notes
1. You don't need to run docker compose again and again, as ```web``` folder is added as volume on php and nginx server
2. Make code base changes like you do without docker, changes will reflect on site immediately.

## How import database next time
1. Perform 4-6 steps in ```First Time Installation``` section above.
2. Another way is to add backup and migrate module only for development

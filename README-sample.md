# Enter Project name

Enter project description - This is starter template for drupal 9 development.

## Dev environment with [docker4drupal](https://github.com/wodby/docker4drupal/releases)

When starting for the first time copy the override-sample file and update as needed

```
cp compose.override-sample.yml compose.override.yml
```

Also update the .env file with your project name. Then start up docker-compose

```
docker-compose up -d

# OR

make up
```

Once installed you can access the dev site on port 8000. e.g. localhost:8000

**Common commands**

```
# start up dev environment
docker compose up -d #OR make

# stop environment
docker compose stop #OR make stop

# delete everything and start in a clean environment
docker compose down -v #OR make down

# check logs
docker compose logs -f #OR make logs

# check logs for specific container
docker compose logs -f php #OR make logs php

# log into php container (this will allow use of drush and composer)
docker compose exec php sh #OR make shell

```

**Tests**

* See [ainsofs/drupal-project](https://github.com/ainsofs/drupal-project) for
gitlab ci  and composer tests

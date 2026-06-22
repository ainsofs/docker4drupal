# Enter Project name

Enter project description -

This is starter template for drupal 11 development. It includes:
* wodby.yml - wodby pipeline file
* .gitlab-ci.yml - gitlab cicd
* build_images - folder for custom containers

Recommended

* Add AGENTS.md file to work with Agentic Coding AI

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

You may like to copy the sample README instead of using this one in your new project

```
cp README-sample.md README.md
```

Then install the [drupal application](https://github.com/drupal/recommended-project)
into the drupal folder. Note this project is set up to work with the webroot in
the drupal/web folder. If you use another folder pls update the
NGINX_SERVER_ROOT section in the docker-compose.override.yml file. You can use
the settings.default.php as an option for your settings.php file. This file will
be committed and will define the base configs for all environments.

```
cp settings.default.php drupal/web/sites/default/settings.php
```

The settings.docker.php file will map into the docker environment as a
settings.local.php file for environment specific configs. This is a good place
to put sensitive configs (not for commiting to git) such as passwords. On
production you can create a settings.local.php and override the configs.

Once installed you can access the dev site on port 8000. e.g. localhost:8000

**Common commands**

`[VERSION]` is the _version of an application_ (without patch version) running in a container, e.g.
`wodby/nginx:1.31-x.x.x` where Nginx version is `1.31` and
`x.x.x` is a stability tag. For some images we include both major and minor version like PHP
`7.2`, for others we include only major like Valkey `7`.

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

* [docker4php](https://github.com/wodby/docker4php)
* [docker4laravel](https://github.com/wodby/docker4laravel)
* [docker4wordpress](https://github.com/wodby/docker4wordpress)
* [docker4ruby](https://github.com/wodby/docker4ruby)
* [docker4python](https://github.com/wodby/docker4python)

## License

This project is licensed under the MIT open source license.

[Apache]: https://wodby.com/docs/stacks/drupal/containers#apache

[Drupal CMS]: https://wodby.com/docs/stacks/drupal/containers#php

[Vanilla Drupal]: https://wodby.com/docs/stacks/drupal/containers#php

[MariaDB]: https://wodby.com/docs/stacks/drupal/containers#mariadb

[Memcached]: https://wodby.com/docs/stacks/drupal/containers#memcached

[Nginx]: https://wodby.com/docs/stacks/drupal/containers#nginx

[Node.js]: https://wodby.com/docs/stacks/drupal/containers#nodejs

[OpenSMTPD]: https://wodby.com/docs/stacks/drupal/containers#opensmtpd

[PHP]: https://wodby.com/docs/stacks/drupal/containers#php

[PostgreSQL]: https://wodby.com/docs/stacks/drupal/containers#postgresql

[Redis]: https://wodby.com/docs/stacks/drupal/containers#redis

[Valkey]: https://wodby.com/docs/stacks/drupal/containers#valkey

[Rsyslog]: https://wodby.com/docs/stacks/drupal/containers#rsyslog

[Solr]: https://wodby.com/docs/stacks/drupal/containers#solr

[Vynil]: https://wodby.com/docs/stacks/drupal/containers#varnish

[Webgrind]: https://wodby.com/docs/stacks/drupal/containers#webgrind

[XHProf viewer]: https://wodby.com/docs/stacks/php/containers#xhprof-viewer

[_/traefik]: https://hub.docker.com/_/traefik

[gotenberg/gotenberg]: https://hub.docker.com/r/gotenberg/gotenberg

[axllent/mailpit]: https://hub.docker.com/r/axllent/mailpit

[phpmyadmin/phpmyadmin]: https://hub.docker.com/r/phpmyadmin/phpmyadmin

[selenium/standalone-chrome]: https://hub.docker.com/r/selenium/standalone-chrome

[wodby/adminer]: https://hub.docker.com/r/wodby/adminer

[wodby/apache]: https://github.com/wodby/apache

[wodby/drupal-php]: https://github.com/wodby/drupal-php

[wodby/drupal]: https://github.com/wodby/drupal

[wodby/drupal-cms]: https://github.com/wodby/drupal-cms

[wodby/mariadb]: https://github.com/wodby/mariadb

[wodby/memcached]: https://github.com/wodby/memcached

[wodby/nginx]: https://github.com/wodby/nginx

[wodby/node]: https://github.com/wodby/node

[wodby/opensmtpd]: https://github.com/wodby/opensmtpd

[wodby/postgres]: https://github.com/wodby/postgres

[wodby/valkey]: https://github.com/wodby/valkey

[wodby/redis]: https://github.com/wodby/redis

[wodby/rsyslog]: https://hub.docker.com/r/wodby/rsyslog

[wodby/solr]: https://github.com/wodby/solr

[wodby/vinyl]: https://github.com/wodby/vinyl

[wodby/webgrind]: https://hub.docker.com/r/wodby/webgrind

[wodby/xhprof]: https://hub.docker.com/r/wodby/xhprof

[wodby/zookeeper]: https://hub.docker.com/r/wodby/zookeeper

[opensearchproject/opensearch]: https://hub.docker.com/r/opensearchproject/opensearch

[opensearchproject/opensearch-dashboards]: https://hub.docker.com/r/opensearchproject/opensearch-dashboards

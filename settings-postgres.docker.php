<?php

$databases = array(
  'default' =>
  array (
    'default' =>
    array (
      'database' => 'drupal',
      'username' => 'drupal',
      'password' => 'drupal',
      'host' => 'postgres',
      'port' => '5432',
      'driver' => 'pgsql',
      'prefix' => '',
    ),
  ),
);

#$conf['varnish_version'] = 4;
#$conf['varnish_control_terminal'] = 'varnish:6082';
#$conf['varnish_control_key'] = 'secret';

#$contrib_path = is_dir('sites/all/modules/contrib') ? 'sites/all/modules/contrib' : 'sites/all/modules';

#$conf['redis_client_base'] = 0;
#$conf['redis_client_interface'] = 'PhpRedis';
#$conf['lock_inc'] = $contrib_path . '/redis/redis.lock.inc';
#$conf['path_inc'] = $contrib_path . '/redis/redis.path.inc';
#$conf['cache_backends'][] = $contrib_path . '/redis/redis.autoload.inc';
#$conf['cache_default_class'] = 'Redis_Cache';
#$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
#$conf['redis_client_host'] = 'redis';
#$conf['redis_client_port'] = '6379';


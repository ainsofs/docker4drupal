<?php

$databases = array(
  'default' =>
  array (
    'default' =>
    array (
      'database' => 'drupal',
      'username' => 'drupal',
      'password' => 'drupal',
      'host' => 'mariadb',
      'port' => '3306',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);

## DRUPAL 7 only
# varnish settings
#$conf['varnish_version'] = 4;
#$conf['varnish_control_terminal'] = 'varnish:6082';
#$conf['varnish_control_key'] = 'secret';

#$contrib_path = is_dir('sites/all/modules/contrib') ? 'sites/all/modules/contrib' : 'sites/all/modules';

# redis settings
#$conf['redis_client_base'] = 0;
#$conf['redis_client_interface'] = 'PhpRedis';
#$conf['lock_inc'] = $contrib_path . '/redis/redis.lock.inc';
#$conf['path_inc'] = $contrib_path . '/redis/redis.path.inc';
#$conf['cache_backends'][] = $contrib_path . '/redis/redis.autoload.inc';
#$conf['cache_default_class'] = 'Redis_Cache';
#$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
#$conf['redis_client_host'] = 'redis';
#$conf['redis_client_port'] = '6379';

# memcache settings
#$conf['memcache_storage_key_prefix'] = 'pipap_docker';
#$conf['cache_backends'][] = $contrib_path . '/memcache/memcache.inc';
#$conf['lock_inc'] = $contrib_path . '/memcache/memcache-lock.inc';
#$conf['cache_default_class'] = 'MemCacheDrupal';
#$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
#$conf['page_cache_without_database'] = TRUE;
#$conf['page_cache_invoke_hooks'] = FALSE;
#$conf['memcache_extension'] = 'memcached';
#$conf['memcache_stampede_protection'] = TRUE;
#$conf['memcache_servers'] = array('memcached:11211' => 'default');

## DRUPAL 8

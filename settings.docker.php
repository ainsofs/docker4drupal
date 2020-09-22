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

## Postgresql
// $databases = array(
//   'default' =>
//   array (
//     'default' =>
//     array (
//       'database' => 'drupal',
//       'username' => 'drupal',
//       'password' => 'drupal',
//       'host' => 'postgres',
//       'port' => '5432',
//       'driver' => 'pgsql',
//       'prefix' => '',
//     ),
//   ),
// );

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
$settings['trusted_host_patterns'] = array(
  '\.localhost$', '\.local$', '\.loc$'
);

// For Redis
// $settings['redis.connection']['host'] = 'redis';
// $settings['redis.connection']['port'] = '6379';
// //$settings['redis.connection']['password'] = '';
// $settings['redis.connection']['base'] = 0;
// $settings['redis.connection']['interface'] = 'PhpRedis';
// $settings['cache']['default'] = 'cache.backend.redis';
// $settings['cache']['bins']['bootstrap'] = 'cache.backend.chainedfast';
// $settings['cache']['bins']['discovery'] = 'cache.backend.chainedfast';
// $settings['cache']['bins']['config'] = 'cache.backend.chainedfast';
// $settings['container_yamls'][] = "modules/contrib/redis/example.services.yml";

/**
 * Show all error messages, with backtrace information.
 *
 * In case the error level could not be fetched from the database, as for
 * example the database connection failed, we rely only on this value.
 */
$config['system.logging']['error_level'] = 'verbose';


/**
 * Private file path:
 *
 * A local file system path where private files will be stored. This directory
 * must be absolute, outside of the Drupal installation directory and not
 * accessible over the web.
 *
 * Note: Caches need to be cleared when this value is changed to make the
 * private:// stream wrapper available to the system.
 *
 * See https://www.drupal.org/documentation/modules/file for more information
 * about securing private files.
 */
$settings['file_private_path'] = '/var/www/private';


/**
 * Disable CSS and JS aggregation in development.
 */
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

/**
 * Skip file system permissions hardening.
 *
 * The system module will periodically check the permissions of your site's
 * site directory to ensure that it is not writable by the website user. For
 * sites that are managed with a version control system, this can cause problems
 * when files in that directory such as settings.php are updated, because the
 * user pulling in the changes won't have permissions to modify files in the
 * directory.
 */
$settings['skip_permissions_hardening'] = TRUE;

/**
 * Exclude modules from configuration synchronization.
 *
 * On config export sync, no config or dependent config of any excluded module
 * is exported. On config import sync, any config of any installed excluded
 * module is ignored. In the exported configuration, it will be as if the
 * excluded module had never been installed. When syncing configuration, if an
 * excluded module is already installed, it will not be uninstalled by the
 * configuration synchronization, and dependent configuration will remain
 * intact. This affects only configuration synchronization; single import and
 * export of configuration are not affected.
 *
 * Drupal does not validate or sanity check the list of excluded modules. For
 * instance, it is your own responsibility to never exclude required modules,
 * because it would mean that the exported configuration can not be imported
 * anymore.
 *
 * This is an advanced feature and using it means opting out of some of the
 * guarantees the configuration synchronization provides. It is not recommended
 * to use this feature with modules that affect Drupal in a major way such as
 * the language or field module.
 */
// $settings['config_exclude_modules'] = [
//   'devel',
//   'config_update_ui',
//   'dblog',
//   'libraries_ui',
//   'styleguide',
//   'tour_ui',
//   'tour_builder',
//   'vmi',
//   'stage_file_proxy'
// ];

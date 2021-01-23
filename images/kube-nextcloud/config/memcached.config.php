<?php
if (getenv('MEMCACHED_SVC')) {
  $CONFIG = array (
    'memcache.distributed' => '\OC\Memcache\Memcached',
    'memcached_servers' => [
      [ 'memcached-0.MEMCACHED_SVC' , 11211 ],
      [ 'memcached-1.MEMCACHED_SVC' , 11211 ],
      [ 'memcached-2.MEMCACHED_SVC' , 11211 ],
    ]
  );
}
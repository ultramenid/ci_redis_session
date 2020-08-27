### Install redis server

- Add repository redis
`add-apt-repository ppa:chris-lea/redis-server`

- Update repository
`apt update`

- Install redis-server
`apt-get install redis-server`



### Configurare redis server

- Edit configuration
`/etc/redis/redis.conf`

- Bind address
`bind ip-address`

- Auth password
`requirepass passwordmustbestrongaf`

- Restart service
`service redis-server restart`


## Configure codeigniter app

- Edit config:
`nano application/config/config.php`

- Connection:
```php
$config['sess_driver'] = 'redis';                             //defualt files
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = 'tcp://IP:PORT?auth=password';    //default null
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;
```
more parameters, [Here](https://github.com/phpredis/phpredis "Here")

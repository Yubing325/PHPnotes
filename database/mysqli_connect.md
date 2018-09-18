## Mysql connect to remote server

`db_port` is used for setting remote port.

```php
$db_host        = 'MY.IP.ADD.RESS';
$db_user        = 'user';
$db_pass        = 'password';
$db_database    = 'database'; 
$db_port        = '3306';

$link = mysqli_connect($db_host,$db_user,$db_pass,$db_database,$db_port);

```

### a more secure way to do this:

put all the parameters into array. and convert them to constant. In this way it's more secure to connect the database.

```php
$db['db_host'] = "MY.IP.ADD.RESS";
$db['db_user'] = 'user';
$db['db_pass'] = 'password';
$db['db_database']  = 'database';
$db['db_port'] = '3306';
//make them constants
foreach($db as $key => $value){
    define(strtoupper($key),$value);
}

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE,DB_PORT);

```
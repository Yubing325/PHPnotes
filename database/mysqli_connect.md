## Mysql connect to remote server

`db_port` is used for setting remote port.

```mysql
$db_host        = 'MY.IP.ADD.RESS';
$db_user        = 'user';
$db_pass        = 'password';
$db_database    = 'database'; 
$db_port        = '3306';

$link = mysqli_connect($db_host,$db_user,$db_pass,$db_database,$db_port);

```
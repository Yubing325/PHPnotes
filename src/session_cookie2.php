<?php
    //set expire time for cookie
    setcookie('a','aaa',time()+30); // expire after 30 sec

    setcookie('auth',true,strtotime('+7 days')); // expire after a week

    var_dump($_COOKIE);

?>
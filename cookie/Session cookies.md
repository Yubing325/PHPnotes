# Cookie
Because of the HTTP protocal has stateless and connectless feature. To preserve users' state such as order history, login state and so on, Cookies are being used in our web browser.

## Session Cookie Experiment
Session cookie also called browser cookie or local cookie. Because it's temporary stored in browser (in RAM). So when a browser shuts down, the cookie will be cleaned.

```php
<?php
    setcookie('username','leon');
    setcookie('psw','123456w');
?>

```

here is the cookie in the browser:

![Screen shot 1](/images/local_cookie_ss01.png) 

while as long as you don't close your browser, you can keep add the cookie:

```PHP
<?php
    setcookie('username2','bing');
    setcookie('psw2','qwerasdf');
?>

```

You can find the new cookies in our browser. and these will be dropped when you quit browser.

![Screen shot 2](/images/local_cookie_ss02.png) 

## set cookies' expire time 

```php
<?php
    //set expire time for cookie
    setcookie('a','aaa',time()+30); // expire after 30 sec

    setcookie('auth',true,strtotime('+7 days')); // expire after a week

    var_dump($_COOKIE);

?>

```
we set cookie `a` for 30 sec and `auth` for 7 days:

![Screen shot 3](/images/local_cookie_ss03.png) 

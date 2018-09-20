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


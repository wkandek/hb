Simple Heartbleed Demo site with rgeister and login functionality

Also a number of Web Application problems:

1. Session cookie not HTTPOnly and not Secure
- can be fixed in php.ini or in code see in login.php comment
  - grep -i httponly /etc/php5/apache2/php.ini 
  - grep -i secure /etc/php5/apache2/php.ini 

2. XSS vulnerability in register.php
  - username can be anything and is later listed in users.php
  - <script>alert(\"XSS\")</script> as username works
    then login with at name without the \ 
    or another user and list users


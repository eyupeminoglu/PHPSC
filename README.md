# PHPSC
Write code easily with PHP

### Features

- You write cleaner code

### USAGE    
    <?php
        $php = new PHPSC();
        $str = "TeSt"; //example string
        echo $php->reverse($str);
        echo $php->lowerCase($str);
        echo $php->upperCase($str);
        echo $php->firstLetterLowerCase($str);
        echo $php->capitalizeString($str);
        echo $php->length($str);

        /* Validating an Email address */
        $email = "example@example.com";
        echo $php->isEmail($email); //true or false

        /* Validating an IP address */
        $ip = "127.0.0.1";
        echo $php->isIp($ip); //true or false

        /* Validating a MAC address */
        $mac = "FA-F9-DD-B2-5E-0D";
        echo $php->isMac($mac); //true or false

        /* Validating an URL */
        $url = "https://github.com";
        echo $php->isUrl($url); //true or false

        /* filter all ascii and save juste 0-9 a-Z and @ . _ */
        $str2 = "string test 123 é!'^+%&/()=?_@";
        echo $php->alphanum($str2);

        /* shuffle string */
        echo $php->shuffleString($str);
    ?>


## Support or Feedback

Email: info@eyups.net for support or feedback

## License

[Apache 2.0](https://choosealicense.com/licenses/apache-2.0/)

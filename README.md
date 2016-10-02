GG Buzzer
============================

GG Buzzer is a game prenotation super-fantastic-in-the-sky web app used to facilitate the
conduction of a serata in a campo gg.


REQUIREMENTS
------------

To install your LAMP stack (Linux, Apache, MySql, Php) go to [MAMP](https://www.mamp.info)
and follow the instruction to install your server.

Once your MAMP installation is up, go to [WebStart](http://localhost:8888/MAMP/?language=Italian)
and open the PhpMyAdmin page.
Create a new database called GGBuzzer and create the following tables:

CREATE TABLE `prenotazioni` (
  `pren_id` int(11) NOT NULL,
  `id_squadra` int(11) NOT NULL,
  `tempo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)

CREATE TABLE `squadra` (
  `id` int(11) NOT NULL,
  `descrizione` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSTALLATION
------------


### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
git clone https://github.com/tizianoMaini/GGBuzzer
composer self-update
composer global require "fxp/composer-asset-plugin:~1.1.1"
cd ggbuzzer
composer update
~~~

Now you should be able to access the application through the following URL:

~~~
http://localhost/GGbuzzer/web/
~~~


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=ggbuzzer',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.

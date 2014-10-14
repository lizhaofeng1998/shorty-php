shorty-php [![Build Status](https://travis-ci.org/zhaofengli/shorty-php.png)](https://travis-ci.org/zhaofengli/shorty-php)
==========

A faster way to shorten your URLs.

About shorty-php
----------
Shorty-php is a library for PHP to help developers shorten URLs easier. Shorty-php supports various URL shortening services, including:
* v.gd(`shorty::vgd`)
* is.gd(`shorty::isgd`)
* rdd.me(`shorty::rddme`)
* metamark.net(`shorty::metamark`)
* to.ly(`shorty::toly`)
* safe.mn(`shorty::safemn`)

Note that rewd.co(`shorty::rewd`) and shortr.info(`shorty::shortr`) have been removed because they are dead. Now both methods 
will throw an exception.

Using shorty-php
----------
Using shorty-php is real simple. Here is a sample:
```php
<?php
	include('shorty.php');
	echo 'The shorter, the better: '.shorty::isgd('https://github.com/lizhaofeng1998/shorty-php');
```
Remember, it's always a good idea to wrap the code with the `try` block to catch potential exceptions, such as:
```php
<?php
	include('shorty.php');
	try{ //give it a try
		$shorturl = shorty::isgd('https://github.com/lizhaofeng1998/shorty-php');
	}catch(exception $e){ //something went wrong...
		die('Unable to shorten URL: '.$e->getMessage());
	}finally{ //well done!
		echo 'The shorter, the better: '.$shorturl);
	}
```

Licensing
----------
Shorty-php is licensed under GNU General Public License.

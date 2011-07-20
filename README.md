Multibyte String Function Overloading
=====================================

This is a simple test to prove that PHP's [mbstring function overloading](http://php.net/manual/en/mbstring.overload.php) is working as expected. Function overloading in this case replaces non-unicode string function implementations (e.g. `substr` and `strlen`) with unicode safe versions (e.g. `mb_substr` and `mb_strlen`).

Run the tests with the following:

```
php tests.php
```

I've included the implementations from PHP source for reference. String functions are located in `string.c` and mbstring functions are located in `mbstring.c`.

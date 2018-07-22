# PHP RFC: Consistent Function Names

Userland implementation of [PHP RFC: Consistent Function Names](https://wiki.php.net/rfc/consistent_function_names). It
creates aliases with more consistent names.

There are many functions that named before naming standard in [CODING_STANDARDS](https://github.com/php/php-src/blob/master/CODING_STANDARDS).
Therefore, PHP has function names like `phpversion()` and `htmlspecialchars()`.

We have many function names that comply [IEEE 1003.1](http://pubs.opengroup.org/onlinepubs/9699919799/idx/is.html)
standard names. IEEE 1003.1 is also well established names, but it has different naming. IEEE 1003.1 names can be use as
aliases.

Without cleanups, PHP may have inconsistent API names even if PHP has new APIs for the same purpose because we care
compatibility a lot. Unless we have standard confirming function names at some point, we may keep inconsistent function
names forever and never have consistent function names.

Please read the RCF for more information: https://wiki.php.net/rfc/consistent_function_names

## Installation

    composer require jasny/php-consistent-function-names

Peridot Jumpstart
=================
Peridot core and some commonly used packages to let you start doing BDD in PHP ASAP.

##Included plugins and libraries:

* [List reporter](https://github.com/peridot-php/peridot-list-reporter) - list test results
* [Dot reporter](https://github.com/peridot-php/peridot-dot-reporter) - show results as dot matrix
* [Code coverage reporters](https://github.com/peridot-php/peridot-code-coverage-reporters) - code coverage
* [Watcher plugin](https://github.com/peridot-php/peridot-watcher-plugin) - watch source and tests for changes and re-run
* [Concurrency plugin](https://github.com/peridot-php/peridot-watcher-plugin) - run specs concurrently!
* [Leo](https://github.com/peridot-php/leo) - expressive assertion and matcher library

##Installing

We recommend installing the jumpstart via composer:

```
$ composer require --dev peridot-php/peridot-jumpstart:~1.0
```

##Getting started
After installing the jumpstart, a good starting point would be to copy this package's `peridot.php` file into the
root of your project. This file will ensure all the included plugins are registered.

If you installed the jumpstart via composer, you can follow up by doing this:

```
$ cp vendor/peridot-php/peridot-jumpstart/peridot.php .
```

After registering everything, `vendor/bin/peridot -h` should yield the following:

![Peridot Jumpstart](https://raw.github.com/peridot-php/peridot-jumpstart/master/output.png "Peridot jumpstart help")

install: vendor/autoload.php

.PHONY: install

vendor/autoload.php: composer.lock
	COMPOSER_ROOT_VERSION=1.99.99 composer install

composer.lock: composer.json
	COMPOSER_ROOT_VERSION=1.99.99 composer update

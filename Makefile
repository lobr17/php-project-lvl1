install:
	composer install
	composer clearcache
	composer require "squizlabs/php_codesniffer" --dev

lint:
	composer run-script phpcs -- --standard=PSR12 src bin		

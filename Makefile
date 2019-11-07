install:
	composer install
	composer require "squizlabs/php_codesniffer=3.5.2" --dev
lint:
	composer run-script phpcs -- --standard=PSR12 src bin		

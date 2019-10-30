install:
	composer install

snif:
	composer require --dev squizlabs/php_codesniffer

lint:
	composer run-script phpcs -- --standard=PSR12 src bin		

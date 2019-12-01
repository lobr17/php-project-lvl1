install:
	composer install update

lint:
	composer run-script phpcs -- --standard=PSR12 src bin		

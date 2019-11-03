install:
	composer install

package:
	composer require yason/brain-games

lint:
	composer run-script phpcs -- --standard=PSR12 src bin		

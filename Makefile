install:
	curl -s https://getcomposer.org/installer | php
	php composer.phar install

server:
	php -S localhost:8081 -t public_html

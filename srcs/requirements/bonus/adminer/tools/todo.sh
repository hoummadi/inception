mkdir -p /var/www/html
mv adminer.php /var/www/html/index.php
chmod 755 /var/www/html/index.php

php -S 0.0.0.0:9500 -t /var/www/html

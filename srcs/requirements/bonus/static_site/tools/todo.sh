apt -y install nginx
mv default /etc/nginx/sites-available/
mv index.html /var/www/html/index.html
cp cat.jpeg /var/www/html/
nginx -g 'daemon off;'
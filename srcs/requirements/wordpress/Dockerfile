FROM debian:buster
RUN apt -y  update
RUN mkdir -p /var/www/html
RUN apt install -y php-fpm php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip
RUN apt install vim wget mariadb-client php-mysql -y
RUN wget https://wordpress.org/wordpress-5.9.2.tar.gz \
    && tar -xzvf wordpress-5.9.2.tar.gz \
    && rm wordpress-5.9.2.tar.gz
EXPOSE 9000
COPY conf/www.conf  /etc/php/7.3/fpm/pool.d/
COPY conf/php-fpm.conf /etc/php/7.3/fpm/
COPY conf/wp-config.php /wordpress
COPY tools/todo.sh /
CMD ["sh", "todo.sh"]

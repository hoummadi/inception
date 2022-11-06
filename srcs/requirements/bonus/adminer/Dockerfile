FROM debian:buster
ARG DB_NAME
ARG DB_USER
ARG DB_PASSWORD
ARG MYSQL_ROOT_PASS
ENV DB_NAME=${DB_NAME}
ENV DB_USER=${DB_USER}
ENV DB_PASSWORD=${DB_PASSWORD}
RUN apt update
EXPOSE 9500
RUN apt install -y php-fpm php-curl php-gd php-mbstring php-xml php-xmlrpc php-soap php-intl php-zip php-mysql
COPY conf/adminer.php /
COPY tools/todo.sh /
ENTRYPOINT ["sh", "todo.sh"]
FROM debian:buster
RUN apt update
ARG CERTS
ENV CERTS=${CERTS}
RUN apt -y install vim curl
COPY conf/default /
COPY tools/cert/ngx.crt ${CERTS} 
COPY tools/cert/ngx.key ${CERTS}
COPY tools/todo.sh /
CMD sh todo.sh
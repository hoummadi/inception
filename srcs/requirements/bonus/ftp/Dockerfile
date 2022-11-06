FROM debian:buster
RUN apt update
RUN apt -y install vim vsftpd
RUN mkdir -p  var/run/vsftpd/empty
RUN useradd 'hhoummad'
RUN echo "hhoummad:root" | chpasswd
EXPOSE 21
COPY conf/vsftpd.conf /etc/
COPY tools/todo.sh /
CMD sh todo.sh
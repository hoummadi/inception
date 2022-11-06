FROM debian:buster
RUN apt update
RUN apt -y install vim curl
COPY conf/default /
COPY tools/todo.sh /
COPY tools/cat.jpeg /
COPY tools/index.html /
CMD sh todo.sh
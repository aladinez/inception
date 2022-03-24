FROM debian:buster

RUN apt-get update && apt-get upgrade
RUN apt-get install nginx -y
RUN service nginx start

CMD ["nginx", "-g", "deamon off"]

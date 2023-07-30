FROM ubuntu:latest

LABEL version="2.0"

RUN apt update && DEBIAN_FRONTEND=noninteractive TZ=Etc/UTC apt-get -y install tzdata && apt install -y apache2 php

COPY src/index.php /var/www/html/src/index.php

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

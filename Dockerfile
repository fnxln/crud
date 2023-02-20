FROM debian


RUN apt-get update

RUN apt-get install apt-transport-https lsb-release ca-certificates wget -y

RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg

RUN echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list

RUN apt-get update

RUN apt-get install php8.1 php8.1-pdo php8.1-pgsql -y

WORKDIR /var/www/html

CMD ["php", "-S", "0.0.0.0:80"]
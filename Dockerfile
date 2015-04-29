FROM orchardup/php5
RUN apt-get update && apt-get install -y php5-gd php5-curl php5-json php5-xdebug
RUN echo "xdebug.remote_enable=1\nxdebug.remote_connect_back=1\nxdebug.remote_port=9000\n" >> /etc/php5/mods-available/xdebug.ini

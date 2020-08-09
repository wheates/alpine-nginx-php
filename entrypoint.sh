# !/bin/bash
#set -e
#supervisord --nodaemon --configuration /etc/supervisor/conf.d/supervisord.conf

#/usr/sbin/crond   -f  -L  /var/log/cron/cron.log

#exec redis-server --requirepass develop
mkdir -p /var/log/nginx/

#run nginx
/usr/sbin/nginx

#run php7
/usr/sbin/php-fpm7 --nodaemonize -R



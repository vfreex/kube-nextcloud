#!/bin/bash
php ./occ maintenance:update:htaccess
rm -f /opt/rh/httpd24/root/var/run/httpd/httpd.pid
umask 002
exec httpd -D FOREGROUND "$@"

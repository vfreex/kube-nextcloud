#!/bin/bash
php ./occ maintenance:update:htaccess
rm -f /opt/rh/httpd24/root/var/run/httpd/httpd.pid
exec httpd -D FOREGROUND "$@"
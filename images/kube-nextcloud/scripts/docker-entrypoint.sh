#!/bin/bash

source scl_source enable rh-php73
source scl_source enable httpd24

exec "$@"

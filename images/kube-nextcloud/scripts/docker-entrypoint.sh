#!/bin/bash

source scl_source enable rh-php72
source scl_source enable httpd24

exec "$@"
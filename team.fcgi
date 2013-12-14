#!/bin/sh

. ~/opt/vhost/chroot/sl5-v1/root/VENV/bin/activate
cd ~/opt/vhost/chroot/sl5-v1/root/lawrence_creates/

python ./wsgi.py 
#>> cgilog.txt 2>&1

#!/var/chroot/home/content/55/10855655/opt/vhost/chroot/sl5-v1/root/VENV/bin/python
# -*- coding: UTF-8 -*-
import sys
sys.path.append("/var/chroot/home/content/55/10855655/opt/vhost/chroot/sl5-v1/root/VENV/lib/python2.7/")

from cgi import escape
import  os
from flup.server.fcgi import WSGIServer

def app(environ, start_response):
    start_response('200 OK', [('Content-Type', 'text/html')])

    yield '<h1>FastCGI Environment</h1>'
    yield '<table>'
    for k, v in sorted(environ.items()):
         yield '<tr><th>%s</th><td>%s</td></tr>' % (escape(k), escape(v))
    yield '</table>'

WSGIServer(app).run()

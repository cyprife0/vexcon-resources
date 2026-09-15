#!/bin/bash
set -e

# Render sets $PORT at runtime and routes public traffic to it.
# Default to 10000 for local testing (e.g. `docker run -p 10000:10000 ...`).
: "${PORT:=10000}"

sed -i "s/Listen 80/Listen ${PORT}/g" /etc/apache2/ports.conf
sed -i "s/:80>/:${PORT}>/g" /etc/apache2/sites-available/000-default.conf

exec apache2-foreground

# Render doesn't run PHP natively — this tells it exactly how to.
# We start from the official PHP + Apache image, drop our site into it,
# and let Apache serve it on whatever port Render assigns at runtime.

FROM php:8.2-apache

# Copy the whole site into Apache's web root.
COPY . /var/www/html/

# Apache/PHP needs to be able to read the files and write to data/ (quote log).
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/data

# Render provides a PORT environment variable at runtime and expects the
# container to listen on it (defaulting to 10000 if not set). This script
# rewrites Apache's config to that port right before starting.
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

EXPOSE 10000

ENTRYPOINT ["docker-entrypoint.sh"]

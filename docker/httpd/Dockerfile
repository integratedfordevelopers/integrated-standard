FROM debian:stretch-slim

# these magic lines come from the php apache dockerfile

ENV APACHE_CONFDIR /etc/apache2
ENV APACHE_ENVVARS $APACHE_CONFDIR/envvars

RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends apache2; \
    rm -rf /var/lib/apt/lists/*; \
	sed -ri 's/^export ([^=]+)=(.*)$/: ${\1:=\2}\nexport \1/' "$APACHE_ENVVARS"; \
	\
	. "$APACHE_ENVVARS"; \
	for dir in \
		"$APACHE_LOCK_DIR" \
		"$APACHE_RUN_DIR" \
		"$APACHE_LOG_DIR" \
	; do \
		rm -rvf "$dir"; \
		mkdir -p "$dir"; \
		chown "$APACHE_RUN_USER:$APACHE_RUN_GROUP" "$dir"; \
		chmod 777 "$dir"; \
	done; \
	\
	rm -rvf /var/www/html/*; \
	ln -sfT /dev/stderr "$APACHE_LOG_DIR/error.log"; \
	ln -sfT /dev/stdout "$APACHE_LOG_DIR/access.log"; \
	ln -sfT /dev/stdout "$APACHE_LOG_DIR/other_vhosts_access.log"; \
	chown -R --no-dereference "$APACHE_RUN_USER:$APACHE_RUN_GROUP" "$APACHE_LOG_DIR"

RUN a2enmod proxy; \
    a2enmod proxy_http; \
    a2enmod proxy_fcgi; \
    a2enmod proxy_wstunnel; \
    a2enmod rewrite; \
    a2enmod ssl

RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends ssl-cert; \
    rm -rf /var/lib/apt/lists/*;

EXPOSE 80
EXPOSE 443

CMD ["apachectl", "-D", "FOREGROUND"]

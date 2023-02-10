sleep 3

wp --allow-root --path="${FILES_SITE_PATH}/" core install --url=${WP_DOMAIN} --title=${WP_TITLE} --admin_user=${WP_ADMIN} --admin_password=${ADMIN_PASSW} --admin_email=${ADMIN_MAIL} && \
wp --allow-root --path="${FILES_SITE_PATH}/" user create ${WP_USER} ${USER_MAIL} --user_pass=${USER_PASSW} --porcelain

php-fpm7.3 -R -F
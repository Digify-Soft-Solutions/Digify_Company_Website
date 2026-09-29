FROM php:8.2-apache

# Enable Apache mod_rewrite for .htaccess support
RUN a2enmod rewrite && \
    sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Copy website files to Apache web root
COPY . /var/www/html/

# Ensure data directory exists and is writable by Apache on Render
RUN mkdir -p /var/www/html/data && chmod -R 777 /var/www/html/data

# Expose port 80 for Render
EXPOSE 80


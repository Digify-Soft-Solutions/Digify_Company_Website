FROM php:8.2-apache

# Enable Apache mod_rewrite for .htaccess support
RUN a2enmod rewrite && \
    sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Copy website files to Apache web root
COPY . /var/www/html/

# Expose port 80 for Render
EXPOSE 80


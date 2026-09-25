FROM php:8.2-apache

# Enable Apache mod_rewrite for .htaccess support
RUN a2enmod rewrite

# Copy website files to Apache web root
COPY . /var/www/html/

# Expose port 80 for Render
EXPOSE 80


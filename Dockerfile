# Use the official WordPress image as the base image
FROM wordpress:latest

# Expose port 80 to allow incoming traffic
EXPOSE 80

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . .

# Start WordPress
CMD ["apache2-foreground"]
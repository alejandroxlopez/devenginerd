# Use the official WordPress image as the base image
FROM wordpress:latest

# Expose port 80 to allow incoming traffic
EXPOSE 80

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . .

# Install AWS CLI for pushing images to ECR (assuming you have AWS CLI installed on your local machine)
RUN apt-get update && apt-get install -y \
    python3 \
    python3-pip && \
    pip3 install --upgrade pip && \
    pip3 install awscli

# Define a health check for the WordPress container
HEALTHCHECK --interval=30s --timeout=3s --start-period=5s --retries=3 \
    CMD curl -f http://localhost:80/wp-admin/admin-ajax.php?action=heartbeat || exit 1

# Start WordPress
CMD ["apache2-foreground"]
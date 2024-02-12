# Use the official Node.js image
FROM node:latest

# Set working directory
WORKDIR /app

COPY ./package*.json ./

# Install npm
RUN apt-get update && apt-get install -y npm

# Expose port 3000 and start development server
EXPOSE 3000

# Command to run the application
CMD npm install && npm run build && npm run dev -- --open --host
# Use the official Node.js image
FROM node:latest

# Set working directory
WORKDIR /app

# Copy package.json and package-lock.json
COPY package*.json ./

# Install dependencies
RUN npm install

# Expose port 3000 and start development server
EXPOSE 3000
CMD ["npm", "run", "dev"]
FROM node:20-alpine
WORKDIR /app
COPY render_webhook/package*.json ./
RUN npm install --production
COPY render_webhook/ ./
EXPOSE 3000
CMD ["node", "server.js"]

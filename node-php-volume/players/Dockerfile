FROM node
WORKDIR app
RUN npm install -g nodemon
COPY package.json package.json
RUN npm install
# COPY . .
RUN mv /app/node_modules /node_modules
EXPOSE 80
CMD ["nodemon","server.js"]
# CMD ["bash"]
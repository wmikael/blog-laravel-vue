FROM nginx:alpine

# Copie os arquivos do seu front-end para o diretório padrão do Nginx
COPY ./portal-noticias-front /usr/share/nginx/html

# Instale as dependências e construa o front-end (assumindo que você usa npm)
RUN apk add --no-cache nodejs npm
WORKDIR /usr/share/nginx/html
RUN npm install
RUN npm run build

# Copie o arquivo de configuração do Nginx
COPY ./portal-noticias-front/docker/nginx/default.conf /etc/nginx/conf.d/default.conf

# Exponha a porta 80
EXPOSE 80

# Comando para iniciar o Nginx
CMD ["nginx", "-g", "daemon off;"]

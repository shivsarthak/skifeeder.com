FROM php
COPY . .
EXPOSE 3004
CMD [ "php", "-S","0.0.0.0:3004" ]
FROM postgres:latest

LABEL maintainer="BEI"

CMD ["postgres"]

EXPOSE 5432
EXPOSE 5535

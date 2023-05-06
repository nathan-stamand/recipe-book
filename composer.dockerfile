FROM composer:2

ARG UID
ARG GID

ENV UID=${UID}
ENV GID=${GID}

ENV COMPOSERUSER=laravel
ENV COMPOSERGROUP=laravel

RUN addgroup -g ${GID} --system ${COMPOSERGROUP}
RUN adduser -G ${COMPOSERGROUP} --system -D -s /bin/sh -u ${UID} ${COMPOSERUSER}

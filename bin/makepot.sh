#!/usr/bin/env bash

docker run \
  --user root \
  --rm \
  --volume  "$(pwd):/var/www/html/church-fse" \
  wordpress:cli bash -c 'php -d memory_limit=1024M "$(which wp)" i18n make-pot ./church-fse/ ./church-fse/languages/church-fse.pot --headers={\"Last-Translator\":\"friends@themeisle.com\"\,\"Project-Id-Version\":\"ChurchFSE\"\,\"Report-Msgid-Bugs-To\":\"https://github.com/Codeinwp/church-fse/issues\"\} --allow-root --exclude=dist,build,bundle,e2e-tests '
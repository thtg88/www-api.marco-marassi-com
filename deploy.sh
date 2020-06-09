#!/usr/bin/env bash

# Exit on error
set -e

echo 'Deploy started!'

echo 'Removing dev composer dependencies...'

composer install -q --no-progress --prefer-dist --optimize-autoloader --no-dev

echo 'Dev dependencies removed!'

echo 'Deploying...'

serverless deploy --stage production

echo 'Deployed to AWS!'

echo 'Re-installing dev dependencies...'

composer install -q --no-progress

echo 'Deployment completed! Happy coding!'

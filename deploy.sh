#!/usr/bin/env bash
echo 'Deploy started!'
echo 'Removing dev composer dependencies...'
composer install --prefer-dist --optimize-autoloader --no-dev \
    && echo 'Dev dependencies removed!' \
    && echo 'Deploying...' \
    && serverless deploy --stage production \
    && echo 'Deployed to AWS!'
    && echo 'Re-installing dev dependencies...'
    && composer install

echo 'Deployment completed! Happy coding!'

# ShareX Custom URL Shortener

A Database-less URL Shortener written in PHP.

## Prerequisites
- NGINX (or Apache, read below)
- PHP

## Install

I've included a [Docker Compose](https://docs.docker.com/compose/) file in the `docker` directory of this repository. Feel free to edit it and use it for quick and easy deployment on your VPS.

Once you have PHP server up and running, you can proceed further with the installation.

### Server
1. Upload `shorten.php`, `redirect.php`, `robots.txt`, `config.php` to the web server's root directory.
2. Create a folder where your URLs will be stored. (`mkdir -m 777 url`)
3. Edit `config.php`.
4. Adjust `docker/nginx.conf` for your specific NGINX setup and move to a correct folder.

### ShareX
1. Add `client/sharex.sxcu` into your ShareX Custom Uploaders.
2. Adjust `key` to match the one in your `config.php`.
3. Change `examp.le` to your web server.

## Apache

If you are instead runnning Apache + PHP on your server, I've also included a `.htaccess` file that you can use. Just move it into your WWW root directory.
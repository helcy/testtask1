# Test task for AnyRm based on Symfony Docker (https://github.com/dunglas/symfony-docker)

This is a test task and it has only some conceptual relation to a real product part. We do not use Symfony, this repository was created just to make your life easier.

## Task description

This repository contains just one controller and actually one action - registration in the event.
The action should display a simple registration form based on defined configuration file and after registration display an invoice in plain text form.

There are 4 registrations are available (type - price):
* student - 50€
* professor - 100€
* member - 150€
* not member - 250€

It is possible to apply a discount:
* X11 - 11%
* X33 - 33%
* Y1 - 50€
* Y2 - 75€

In the real world all these values will be in the storages, but for simplification you can hard-code them into php code.
Implementation of early bird registration is nice to have.
Assuming that performance is not an issue in our case.

## Expectations

* Nice OOP (you can explain why did you do like that)
* It should work
* Results should be provided as a patch

# Below is the original instructions about the set up 

A [Docker](https://www.docker.com/)-based installer and runtime for the [Symfony](https://symfony.com) web framework, with full [HTTP/2](https://symfony.com/doc/current/weblink.html), HTTP/3 and HTTPS support.

![CI](https://github.com/dunglas/symfony-docker/workflows/CI/badge.svg)

## Getting Started

1. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/)
2. Run `docker-compose build --pull --no-cache` to build fresh images
3. Run `docker-compose up` (the logs will be displayed in the current shell)
4. Open `https://localhost` in your favorite web browser and [accept the auto-generated TLS certificate](https://stackoverflow.com/a/15076602/1352334)
5. Run `docker-compose down --remove-orphans` to stop the Docker containers.

## Features

* Production, development and CI ready
* Automatic HTTPS (in dev and in prod!)
* HTTP/2, HTTP/3 and [Preload](https://symfony.com/doc/current/web_link.html) support
* Built-in [Mercure](https://symfony.com/doc/current/mercure.html) hub
* [Vulcain](https://vulcain.rocks) support
* Just 2 services (PHP FPM and Caddy server)
* Super-readable configuration

**Enjoy!**

## Docs

1. [Build options](docs/build.md)
2. [Using Symfony Docker with an existing project](docs/existing-project.md)
3. [Support for extra services](docs/extra-services.md)
4. [Deploying in production](docs/production.md)
5. [Installing Xdebug](docs/xdebug.md)
6. [Using a Makefile](docs/makefile.md)
7. [Troubleshooting](docs/troubleshooting.md)

## Credits

Created by [Kévin Dunglas](https://dunglas.fr), co-maintained by [Maxime Helias](https://twitter.com/maxhelias) and sponsored by [Les-Tilleuls.coop](https://les-tilleuls.coop).

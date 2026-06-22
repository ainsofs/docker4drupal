# AGENTS.md

Drupal 11 Docker4Drupal starter (Wodby). Stack: PHP 8.5, Nginx, MariaDB, Mailpit, Traefik.
Drupal root: `drupal/`, webroot: `drupal/web/`.

## Commands
- Start: `make up` (`make start` without image pull)
- Stop: `make stop`
- Reset: `make prune`
- Shell: `make shell [service]`
- Logs: `make logs [service]`
- Composer: `make composer "<command>"`
- Drush: `make drush "<command>"`

## Configuration

* `.env` → project settings, ports, image tags, DB credentials
* `compose.override.yml` → local-only changes (never commit)
* `settings.docker.php` → local Drupal settings

## Git

Branches: `feature/<ticket>-<desc>`, `bugfix/<ticket>-<desc>`, `hotfix/<ticket>-<desc>`
Commits: Conventional Commits (`feat:`, `fix:`, `docs:`, `refactor:`, `test:`, `chore:`)
Tags: `vMAJOR.MINOR.PATCH`

## Agent Rules

* Never commit to main or master branches directly
* Always run Composer/Drush through `make composer` / `make drush`
* Use `compose.override.yml` for local changes; do not modify `compose.yml`

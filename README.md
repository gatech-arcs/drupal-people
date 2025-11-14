# GT People Content Type

![Visibility: Intentionally Public](https://flat.badgen.net/badge/Visibility/Intentionally%20Public/f2a)
![Protected Data: None](https://flat.badgen.net/badge/Protected%20Data/None/f96854)

## GT People

`people` sets up a content type and common views for People of all types

Inherits core styling from GT theme
Adds custom template and default listing views

### Configuration

Incoming...

[![Coding Style: Drupal](https://flat.badgen.net/badge/code%20style/Drupal/f2a)](https://www.drupal.org/docs/develop/standards/php/php-coding-standards)
[![GitHub Super-Linter](https://github.com/gatech-arcs/drupal-people/workflows/Lint%20Code%20Base/badge.svg)](https://github.com/marketplace/actions/super-linter)
![Dependabot Status](https://flat.badgen.net/github/dependabot/ubuntu/yaru)

# Kickstart Spinup with ddev
# Configure DDEV for a Drupal 11 project with 'web' as the docroot
ddev config --project-type=drupal11 --docroot=web

# Start the DDEV environment
ddev start

# Create a new Drupal project using the gt_kickoff template
ddev composer create-project gtsciences/gt_kickoff --stability dev

# Add Drush (Drupal's command-line tool) to the project
ddev composer require drush/drush

# Install the Drupal site with an admin account
ddev drush site:install --account-name=admin --account-pass=admin -y

# Get a one-time login link and open it in the browser
ddev launch $(ddev drush uli)

# Require the gt_people module (specific dev branch)
ddev composer require gtsciences/gt_people:"dev-adding-degree-component"

# Run the gt_people recipe using Drush
ddev drush recipe ../recipes/gt_people

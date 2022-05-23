# WordPress

This is the Composer package with WordPress setup.

## Installation

1. Add the plugin as a global composer requirement:

```shell
$ composer global require piotrpress/wordpress-composer
```

2. Allow the plugin execution:

```shell
$ composer config -g allow-plugins.piotrpress/wordpress-composer true
```

## Example `composer.json` file

```json
{
  "type": "project",
  "require": {
    "piotrpress/wordpress": "^1.0"
  },
  "config": {
    "allow-plugins": {
      "piotrpress/wordpress-installer": true
    },
    "scripts": {
      "post-update-cmd": [
        "cp vendor/piotrpress/wordpress-htaccess/res/.htaccess ./.htaccess",
        "cp vendor/piotrpress/wordpress-config/res/wp-config.php ./wp-config.php",
        "cp -n vendor/piotrpress/wordpress-config/res/.config ./.config"
      ]
    }
  }
}
```

## Requirements

- PHP >= `7.4` version.
- Composer ^`2.0` version.
- Apache Server with `mod_rewrite` module enabled.

## License

[MIT](license.txt)
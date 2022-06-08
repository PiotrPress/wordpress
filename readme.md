# WordPress

This is the Composer project with WordPress setup.

## Installation

1. Add the plugin as a global composer requirement:

```shell
$ composer global require piotrpress/wordpress-composer
```

2. Allow the plugin execution:

```shell
$ composer config -g allow-plugins.piotrpress/wordpress-composer true
```

3. Create new project:

```shell
$ composer create-project piotrpress/wordpress --ask 
```

## Requirements

- PHP >= `7.4` version.
- Composer ^`2.0` version.
- Apache Server with `mod_rewrite` module enabled.

## License

[MIT](license.txt)
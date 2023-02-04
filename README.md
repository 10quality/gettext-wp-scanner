# WordPress scanner for Gettext

WordPress code scanner to use with [gettext/gettext](https://github.com/php-gettext/Gettext).

The scanner is a PHP based same as the **gettext** package.

**Coverage**

- [x] PHP translations.
- [ ] JavaScript translations.

## Installation

```bash
composer require 10quality/gettext-wp-scanner
```

## PHP usage example

```php
use Gettext\Translations;
use Gettext\Generator\PoGenerator;
use TenQuality\Gettext\Scanner\WPPhpScanner;

// Create a new scanner, adding the plugin / theme domain we want to get:
$phpScanner = new WPPhpScanner(
    Translations::create('my-domain')
);

// Scan PHP files
foreach (glob('*.php') as $file) {
    $phpScanner->scanFile($file);
}

//Save the translations in .po files
$generator = new PoGenerator();

foreach ($phpScanner->getTranslations() as $domain => $translations) {
    $generator->generateFile($translations, "locales/{$domain}.po");
}
```

## Requirements

* [gettext/gettext](https://github.com/php-gettext/Gettext)
* PHP >= 7.4.

## License

The MIT License (MIT). Please see `LICENSE` File for more information.
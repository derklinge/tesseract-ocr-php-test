# Example of using Tesseract OCR for PHP

This is just a very basic example of how to use the Tesseract OCR engine within
a PHP application. This code uses
[thiagoalessio/tesseract_ocr](https://github.com/thiagoalessio/tesseract_ocr)
as an API bridge to the locally installed Tesseract OCR engine.

Recently I required a quick & simple way to feed arbitrary images or other
visual files to the Tesseract OCR engine from a PHP runtime environment.
So I created this PHP sample project for myself and for anybody else who might
find this somehow useful.

**Happy Coding!**

## Prerequisites

- PHP 7.4+
- [Composer](https://getcomposer.org)
- [Tesseract OCR](https://github.com/tesseract-ocr/tesseract), with `eng` language support and `script-latn` (Latin) installed.

## Usage

1. Clone the repository
2. Run `composer install` in a terminal session within the root folder.
3. Execute the OCR engine by running `php src/main.php` also from the root folder.

Feel free to add or remove files as you may see fit.
## License

The MIT License (MIT). Please see the
[License File](https://github.com/derklinge/tesseract-ocr-php-test/blob/master/LICENSE)
for more information.

**NOTE**: This software depends on other packages that may be licensed under
different open source licenses.

Laravel Xss
===========

This package is the custom port of Codeigniter's Xss class.

### Installation

Require the package in `composer.json`:

```json
"owlgrin/xss": "0.1.*"
```

Then, include the following in the array on service providers in `config/app.php`:

```php
'Owlgrin\Xss\XssServiceProvider',
```

And, if you want to use it as facade, bind the facade in facade's array in `config/app.php`:

```php
'Xss'            => 'Owlgrin\Xss\XssFacade',
```

### Usage

You can clean your input HTML code from Xss attacks using the `clean()` method:

```php
<?php

$input = Input::get('html');

$cleanedHtml = Xss::clean($input);
```

If you want to conserve some custom tags that the stripper strips, you can pass them in array as second argument:

```php
<?php

$input = Input::get('html');

$cleanedHtml = Xss::clean($input, ['iframe']);
```
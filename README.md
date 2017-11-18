Laravel HTML & CSS Email Inliner
==========================

To make HTML email work, you need to put all CSS rules inline to make sure it works everywhere. It's a pain when developing your code and that's why you want a package to do it on the fly.

This is just a Laravel Wrapper for PHP CssToInlineStyles (https://github.com/tijsverkoyen/CssToInlineStyles)

## Installation

### Laravel 5.x

Begin by installing this package through [Composer](https://getcomposer.org).

	$ composer require peepitkm/laravel-html-css-email-inliner

Add Inliner as a service provider in app.php

	'providers' => [
		Emil\Inliner\InlinerServiceProvider::class,
	]

Add Inliner alias

	'aliases' => [
		Emil\Inliner\Facades\Laravel\Inliner::class
	]

### Laravel 4.x

Begin by installing this package through [Composer](https://getcomposer.org).

	$ composer require peepitkm/laravel-html-css-email-inliner "1.*"

Add Inliner as a service provider in app.php

	'providers' => [
		'Emil\Inliner\InlinerServiceProvider',
	]

Add Inliner alias

	'aliases' => [
		'Inliner' => 'Emil\Inliner\Facades\Laravel\Inliner'
	]

## Quick Example

#### Disable/enable the inliner
*The inliner is enabled by default*

```php
Inliner::disable();
Inliner::enable();
```

#### Check if the inliner is enabled/disabled
```php
Inliner::isDisabled();
Inliner::isEnabled();
```

## Known Issues

* no support for pseudo selectors
* no support for [css-escapes](https://mathiasbynens.be/notes/css-escapes)
* UTF-8 charset is not always detected correctly. Make sure you set the charset to UTF-8 using the following meta-tag in the head: `<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />`. _(Note: using `<meta charset="UTF-8">` does NOT work!)_

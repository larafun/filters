# Larafun Filters

[![Build Status](https://travis-ci.org/larafun/filters.svg?branch=master)](https://travis-ci.org/larafun/filters)
[![Docs Status](https://readthedocs.org/projects/larafun-filters/badge/?version=latest)](https://larafun-filters.readthedocs.io)
[![Latest Stable Version](https://poser.pugx.org/larafun/filters/v/stable)](https://packagist.org/packages/larafun/filters)
[![License](https://poser.pugx.org/larafun/filters/license)](https://packagist.org/packages/larafun/filters)
[![Total Downloads](https://poser.pugx.org/larafun/filters/downloads)](https://packagist.org/packages/larafun/filters)

Use Filters instead of Requests in your Laravel projects to be more versatile.

Check out the full documentation in here [larafun-filters.readthedocs.io](https://larafun-filters.readthedocs.io)

## Installation

Requires PHP > 7.0, Laravel > 5.5

```bash
composer require larafun/filters
```

## Basic Usage

Just make your Filters extend `Larafun\Filters\Filter`


## Why use this package?

Because its safer to not bind your Services to the Request.

You may want to use your Services on environments other than http.

```php
class BookController extends Controller
{
    // ...

    public function index(BookFilter $filter)
    {
        return $bookServices->search($filter);
    }

```

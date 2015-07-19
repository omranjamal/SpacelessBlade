# SpacelessBlade
Adds a @spaceless tag to Laravel's Blade templating engine.

In twig you could do:
```twig
{% spaceless %}
    <div>
        <strong>foo</strong>
    </div>
{% endspaceless %}
```

Do you miss [Twig](http://twig.sensiolabs.org/doc/tags/spaceless.html)'s 
`{% spaceless %}` tag while working with Laravel's Blade?

With this package you can do this in Laravel's Blade too (without using Twig, of course).
Example:
```blade
@spaceless
    <div>
        <strong>foo</strong>
    </div>
@endspaceless
```

## Installation
### Get the Package
You can get the package easily with Composer by running
```
composer require hedronium/spaceless-blade
```
in your working directory. Or, you could also add it to your composer.json manually like
```JSON
{
    "require": {
        "hedronium/spaceless-blade":"1.0.2"
    }
}
```
and run `composer update`

### Register the Service Provider
open up your `app.php` in your `config` folder, and add the following line to
your `providers` list like:

```
'providers' => array(
    ...
    'hedronium\SpacelessBlade\SpacelessBladeProvider'
)
```

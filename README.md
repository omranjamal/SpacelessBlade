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

But now, with this package you can do this in Laravel too (without using Twig, of course).

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
composer require solidew/spaceless-blade
```
in your working directory. Or, you could also add it to your composer.json manually like
```JSON
{
    "require": {
        "solidew/spaceless-blade":"~1.0"
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
    'solidew\SpacelessBlade\SpacelessBladeProvider'
)
```
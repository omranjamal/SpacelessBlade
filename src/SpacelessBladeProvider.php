<?php 
namespace solidew\SpacelessBlade;
use Blade;

class SpacelessBladeProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        //Register the Starting Tag
        Blade::extend(function($view, $compiler) {
            $pattern = $compiler->createPlainMatcher('spaceless');
            return preg_replace($pattern, '<?php ob_start() ?>', $view);
        });

        //Register the Ending Tag
        Blade::extend(function($view, $compiler) {
            $pattern = $compiler->createPlainMatcher('endspaceless');
            return preg_replace($pattern, "<?php echo preg_replace('/>\\s+</', '><', ob_get_clean()); ?>", $view);
        });
    }

    public function register(){}
}

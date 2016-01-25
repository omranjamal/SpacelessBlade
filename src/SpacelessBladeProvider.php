<?php 
namespace hedronium\SpacelessBlade;
use Blade;

class SpacelessBladeProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        //Register the Starting Tag
        Blade::directive('spaceless', function() {
            return '<?php ob_start() ?>';
        });

        //Register the Ending Tag
        Blade::directive('endspaceless', function() {
            return "<?php echo preg_replace('/>\\s+</', '><', ob_get_clean()); ?>";
        });
    }

    public function register(){}
}
<?php
namespace Xpressengine\Plugins\Simplestrap\Theme;

use Xpressengine\Theme\GenericTheme;

class Theme extends GenericTheme
{
    protected static $path = 'simplestrap/theme';

    public function render()
    {
        $config = $this->setting();

        $config2 = $this->getThemeSettings($config);

        $theme = $_theme = static::class;

        $view = $this->view($this->info('view', 'theme'));

        return static::$handler->getViewFactory()->make($view, compact('config', '_theme', 'config2'));
    }

    protected function getThemeSettings($config)
    {

        return [
            'a' => 'b'
        ];
    }
}

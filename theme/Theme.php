<?php
namespace Xpressengine\Plugins\Simplestrap\Theme;

use Xpressengine\Theme\GenericTheme;

class Theme extends GenericTheme
{
    protected static $path = 'simplestrap/theme';

    public function render()
    {
        $config = $this->setting();

        $themeSetting = $this->getThemeSettings($config);

        $theme = $_theme = static::class;

        $view = $this->view($this->info('view', 'theme'));

        return static::$handler->getViewFactory()->make($view, compact('config', '_theme', 'themeSetting'));
    }

    protected function getThemeSettings($config)
    {

        switch($config->get('colorset')) {
            case 'primary':$colorset_cc = "#428bca";break;
            case 'success':$colorset_cc = "#5cb85c";break;
            case 'warning':$colorset_cc = "#f0ad4e";break;
            case 'danger':$colorset_cc = "#d9534f";break;
            default:$colorset_cc = "#5bc0de";break;
        }

        return [
            'colorset_cc' => $colorset_cc
        ];
    }
}

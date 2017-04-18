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

        view()->share('themeSetting', $themeSetting);

        return parent::render();
    }

    protected function getThemeSettings($config)
    {
        $colorset = $config->get('colorset');
        $sb_colum = $config->get('sb_col');

        switch($colorset) {
            case 'primary': $colorset_cc = "#428bca"; break;
            case 'success': $colorset_cc = "#5cb85c"; break;
            case 'warning': $colorset_cc = "#f0ad4e"; break;
            case 'danger': $colorset_cc = "#d9534f"; break;
            default: $colorset_cc = "#5bc0de"; break;
        }

        $colorset = $colorset? $colorset : 'info';
        $sb_colum = $sb_colum? $sb_colum : 'c_2';
        $sb_col = explode('_', $sb_colum)[1];
        
        return [
            'colorset' => $colorset,
            'colorset_cc' => $colorset_cc,
            'sb_col' => $sb_col
        ];
    }
}

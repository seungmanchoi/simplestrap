@if(in_array('custom_sidebar_top', $config->get('custom', [])))
    @include($theme::view('custom.custom_sidebar_top'))
@endif

@if($config->get('sb_menu') == 'Y')
    @foreach(menu_list($config->get('main_menu')) as $menu)
        @if($menu['selected'] && count($menu['children']))
        <div class="panel panel-default">
            @if($menu['selected'])
            <div class="panel-heading"><h3 class="panel-title">{{  $menu['link'] }}</h3></div>
            @endif

            <ul class="list-group">
                @foreach($menu['children'] as $menu1)
                    @if($menu1['link'] != "----")
                        <li class="list-group-item @if($menu1['selected']) active @endif">
                            <a href="{{ $menu['url'] }}">{{ $menu['link'] }}</a>
                        </li>
                    @else
                        <li class="divider"></li>
                    @endif
                @endforeach
            </ul>
        </div>
        @endif
    @endforeach
@endif

@if($config->get('sb_post') != 'N')
    {{ uio('widgetbox', ['id'=>'simplestrap-side']) }}
@endif

@if(in_array('custom_sidebar_bottom', $config->get('custom', [])))
    @include($theme::view('custom.custom_sidebar_bottom'))
@endif
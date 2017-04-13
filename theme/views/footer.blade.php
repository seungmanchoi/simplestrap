<footer id="footer" class="footer">
    <div class="container">
        {{ $config->get('footer_copyright') }}

        @if($config->get('footer_bottom_menu') == 'Y')
        <ul class="footer-list list-inline">
            @foreach(menu_list($config->get('footer_menu')) as $menu)
                <li class="@if($menu['selected']) active @endif"><a href="{{ $menu['url'] }}">{{ $menu['link'] }}</a></li>
            @endforeach
        </ul>
        @endif

        <ul class="footer-list list-inline">
            @if($config->get('footer_lang') == 'Y')
            <li id="footer-lang"class="dropdown dropup" style="position:relative">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe" area-hidden="true"></i> Language</a>
                <ul class="dropdown-menu" style="min-width:100px">
                    <li class="active"><a href="#">{{ XeLang::getLocaleText(XeLang::getLocale()) }}</a></li>
                    @foreach ( XeLang::getLocales() as $locale )
                        <li><a href="{{ locale_url($locale) }}">{{ XeLang::getLocaleText($locale) }}</a></li>
                    @endforeach
                </ul>
            </li>
            @endif
        </ul>
    </div>

    @if($config->get('footer_bottom'))
    <div class="footer_bottom">{{ $config->get('footer_bottom') }}</div>
    @endif

    <div id="hidden-xs" class="hidden-xs"></div>
</footer>

@if(in_array('custom_bottom', $config->get('custom', [])))
    @include($theme::view('custom.custom_bottom'))
@endif
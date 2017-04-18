{{-- meta(viewport) --}}
{{ app('xe.frontend')->meta()->name('viewport')->content(
    'width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no'
)->load() }}

{{-- stylesheet --}}
{{ app('xe.frontend')->css([
    $theme::asset('css/bootstrap.min.css'),
    $theme::asset('css/font-awesome.min.css'),
    $theme::asset('css/simplestrap.min.css'),
])->load() }}

{{-- script --}}
{{ app('xe.frontend')->js([
    $theme::asset('js/bootstrap.min.js'),
    $theme::asset('js/jquery.cookie.min.js'),
])->load() }}

@include($theme::view('css'))
@include($theme::view('js'))

@if(in_array('custom_style', $config->get('custom', [])))
    @include($theme::view('custom.custom_style'))
@endif

@if(in_array('custom_js', $config->get('custom', [])))
    @include($theme::view('custom.custom_js'))
@endif

{{-- inline style --}}
{{ app('xe.frontend')->html('theme.style')->content("
<style>
    #fo_is *,ul.localNavigation *, .ul.subNavigation *{box-sizing:content-box !important;-webkit-box-sizing:content-box !important;-moz-box-sizing:content-box !important;}
</style>
")->load() }}

<a href="#content" class="sr-only ss-skip">본문 바로가기</a>
@include($theme::view('gnb'))

@if($config->get('slide_use') != 'N')
    @include($theme::view('carousel'))
@endif

@if(in_array('custom_top', $config->get('custom', [])))
    @include($theme::view('custom.custom_top'))
@endif

@include($theme::view('container'))
@include($theme::view('modal'))
@include($theme::view('footer'))

{{ app('xe.frontend')->bodyClass('desktop') }}
{{ app('xe.frontend')->bodyClass($config->get('colorset', '')) }}
@extends($theme::view('frame'))

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
    $theme::asset('js/theme.boram.js'),
])->load() }}

@include($theme::view('cond.css'))
@include($theme::view('cond.js'))

{{-- inline style --}}
{{ app('xe.frontend')->html('theme.style')->content("
<style>
    #fo_is *,ul.localNavigation *, .ul.subNavigation *{box-sizing:content-box !important;-webkit-box-sizing:content-box !important;-moz-box-sizing:content-box !important;}
</style>
")->load() }}

{{ app('xe.frontend')->bodyClass('desktop') }}
{{ app('xe.frontend')->bodyClass($config->get('colorset', '')) }}
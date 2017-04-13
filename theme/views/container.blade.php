<div class="container" id="main-container">
    <div class="row @if($config->get('site_frame') != 'sidebar_content_sidebar') row-offcanvas @if($config->get('site_frame') == 'sidebar_content') row-offcanvas-left @elseif($config->get('site_frame') == 'content_sidebar') row-offcanvas-left @endif @endif" id="main-row">
        <div id="content" class="col @if($config->get('site_frame') == 'sidebar_content_sidebar') col-sm-8 col-sm-push-2 @elseif($config->get('site_frame') != 'content') col-sm-{{ 12 - (int)$config->get('sb_col') }} @else col-sm-12 @endif @if($config->get('site_frame') == 'sidebar_content') col-sm-push-{{$config->get('sb_col')}} @endif">
            <article class="content panel panel-default" itemscope itemtype="http://schema.org/Article">

                @if($config->get('site_frame') != 'content' && $config->get('site_frame') != 'sidebar_content_sidebar' && $config->get('content_panel_heading') != 'N')
                <div class="panel-heading">
                    <button id="sidebar-toggle-button" @if($config->get('site_frame') == 'sidebar_content') class="hidden-xs pull-left close" @elseif($config->get('site_frame') == 'content_sidebar' || !$config->get('site_frame')) class="hidden-xs pull-right close" @endif data-toggle="tooltip" data-title="전체화면 전환"><i @if($config->get('site_frame') == 'sidebar_content') class="fa fa-angle-left" @elseif($config->get('site_frame') == 'content_sidebar' || !$config->get('site_frame')) class="fa fa-angle-right" @endif area-hidden="true"></i></button>

                    @if($config->get('site_frame') != 'content')
                    <button data-toggle="offcanvas" class="@if($config->get('site_frame') == 'sidebar_content') pull-left @elseif($config->get('site_frame') == 'content_sidebar') pull-left @endif close hidden-sm hidden-md hidden-lg"><i @if($config->get('site_frame') == 'sidebar_content')class="fa fa-angle-right" @elseif($config->get('site_frame') == 'content_sidebar')class="fa fa-angle-left" @endif area-hidden="true"></i></button>
                    @endif

                    @if(in_array('custom_content_heading', $config->get('custom', [])))
                        @include($theme::view('custom.custom_content_heading'))
                    @endif
                    <div class="clearfix"></div>
                </div>
                @endif

                <div class="panel-body">

                    @if(in_array('custom_content_top', $config->get('custom', [])))
                        @include($theme::view('custom.custom_content_top'))
                    @endif

                    @if($m = current_menu())
                        <ol class="breadcrumb">
                            <!-- li.on에 관련된 css없음 -->
                            @foreach($m->getBreadcrumbs() as $item)
                                <li class="@if($item['selected']) active @endif"><a href="{{ url($item['url']) }}">{{ $item['link'] }}</a></li>
                            @endforeach
                        </ol>
                    @endif

                    {!! $content !!}
                    <div class="clearfix"></div>

                    @if(in_array('custom_content_bottom', $config->get('custom', [])))
                        @include($theme::view('custom.custom_content_bottom'))
                    @endif
                </div>
            </article>
        </div>

        @if($config->get('site_frame') != 'content')
        <aside id="sidebar" class="sidebar col @if($config->get('site_frame') == 'sidebar_content_sidebar') col-sm-2 col-sm-pull-8 @else col-sm-{{ $config->get('sb_col') }} @if($config->get('site_frame') == 'sidebar_content') col-sm-pull-{{12 - (int)$config->get('sb_col')}} @endif @endif">
            @include($theme::view('sidebar'))
            <div class="clearfix"></div>
        </aside>
        @endif

        @if($config->get('site_frame') == 'sidebar_content_sidebar')
        <aside id="sub-sidebar" class="sidebar col col-sm-2">
            @include($theme::view('custom.custom_sub_sidebar.html'))
            <div class="clearfix"></div>
        </aside>
        @endif
    </div>
</div>
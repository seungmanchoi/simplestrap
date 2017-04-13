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
<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-file-o" area-hidden="true"></i> 새로운 글</h3></div>
    {{-- TODO --}}
    {{--<img class="zbxe_widget_output" widget="content" skin="simplestrap_sb" content_type="document" module_srls="{$li->sb_post_module}" list_type="normal" markup_type="list" page_count="1" option_view="title,nickname" show_browser_title="Y" show_comment_count="Y" show_trackback_count="Y" order_type="desc" subject_cut_size="27" list_count="{$li->sb_post_count}" />--}}
</div>
@endif

<div class="panel panel-default" cond="$li->sb_comm!='N'">
    <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-comments-o" area-hidden="true"></i>  새로운 댓글</h3></div>
    {{-- TODO --}}
    {{--<img class="zbxe_widget_output" widget="content" skin="simplestrap_sb" content_type="comment" module_srls="{$li->sb_comm_module}" list_type="normal" markup_type="list" page_count="1" option_view="title,nickname" show_browser_title="Y" show_comment_count="Y" show_trackback_count="Y" order_type="desc" subject_cut_size="27" list_count="{$li->sb_comm_count}" />--}}
</div>

@if(in_array('custom_sidebar_bottom', $config->get('custom', [])))
    @include($theme::view('custom.custom_sidebar_bottom'))
@endif
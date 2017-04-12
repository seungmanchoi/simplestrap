<nav id="navbar" class="navbar @if($config->get('navbar_color')=='inverse') navbar-inverse @else navbar-default @endif @if($config->get('navbar_fixed')!='N') navbar-fixed-top @else navbar-static-top @endif" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <span class="sr-only">메뉴 토글하기</span>
            <button type="button" class="navbar-toggle navbar-toggle-left" data-toggle="collapse" data-target="#main-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            @if(!Auth::check() && $config->get('navbar_login') != 'N') <button type="button" class="navbar-toggle" data-toggle="modal" data-target="#modal-login"><i class="fa fa-sign-in" area-hidden="true"></i> 로그인</button>@endif
            @if(Auth::check() && $config->get('navbar_login') != 'N') <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sub-navbar"><i class="fa fa-ellipsis-h" area-hidden="true"></i></button>@endif
            @if(!Auth::check() && $config->get('navbar_search') != 'N') <button type="button" class="navbar-toggle" data-toggle="modal" data-target="#modal-search"><i class="fa fa-search" area-hidden="true"></i> 검색</button> @endif
            <a class="navbar-brand @if($config->get('logo_img.path')) navbar-logo-img @endif" href="@if(!$config->get('index_url')) http://www.wincomi.com @else {{  $config->get('index_url' )}} @endif">
                @if($config->get('logo_img')) <img src="{{ $config->get('logo_img') }}" alt="{{ $config->get('logo_title') }}" />
                @else
                    @if($config->get('logo_title')) {{$config->get('logo_title')}} @else Simplestrap @endif
                @endif
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-left" id="main-navbar">
            <ul class="navbar-nav nav">
                @foreach(menu_list($config->get('main_menu')) as $menu)
                    @if($menu['link']!="||||")

                    <li class="@if(count($menu['children']))) dropdown @endif @if($menu['selected']) active @endif">
                        <a href="{{ $menu['url'] }}" @if(count($menu['children'])) class="dropdown-toggle" data-toggle="dropdown" @endif>
                            {{
                                $menu_link = explod('|fa-', $menu['link'])
                            }}
                            @if($menu_link[1])
                            <i class="fa fa-{{ $menu_link[1] }}"></i>
                            @endif

                            {{  $menu_link[0] }}

                            @if(count($menu['children']))
                                <span class="caret"></span>
                            @endif
                        </a>

                        @if(count($menu['children']))
                        <ul class="dropdown-menu">
                            @foreach($menu['children'] as $sub_menu)
                                @if(strpos($sub_menu['url'], 'dropdown-header') !== false)
                                    <li class="dropdown-header">{{ $sub_menu['link'] }}</li>
                                @elseif($sub_menu['link'] != "----")
                                    <li class="@if(count($menu['children']))) dropdown @endif @if($menu['selected']) active @endif">
                                @else
                                    <li class="divider"></li>
                                @endif
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @else
                    <li class="divider"></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="sub-navbar">
            @if($config->get('navbar_search') == 'Y2')
            <form class="navbar-form navbar-left" action="{{ url() }}" method="get">
                <input type="hidden" name="vid" value="" />
                <input type="hidden" name="mid" value="" />
                <input type="hidden" name="act" value="IS" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" name="is_keyword" value="" placeholder="엔터 키를 눌러 검색..." class="form-control" style="max-width:150px" />
                <button type="submit" class="sr-only btn btn-{{ $config->get('colorset') }} btn-block"><i class="fa fa-search" area-hidden="true"></i> 검색</button>
            </form>
            @endif
            <ul class="navbar-nav nav">
                @if($config->get('navbar_search') != 'N' && $config->get('navbar_search') != 'Y2')
                <li class="dropdown" id="dropdown-toggle-search">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" area-hidden="true"></i><span class="visible-xs-inline-block"> 검색</span></a>
                    <div class="dropdown-menu dropdown-form" role="search">
                        <form action="{getUrl()}" method="get">
                            <input type="hidden" name="vid" value="" />
                            <input type="hidden" name="mid" value="" />
                            <input type="hidden" name="act" value="IS" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" name="is_keyword" value="" placeholder="엔터 키를 눌러 검색..." class="form-control" />
                            <button type="submit" class="sr-only btn btn-{{ $config->get('colorset') }} btn-block"><i class="fa fa-search" area-hidden="true"></i> 검색</button>
                        </form>
                    </div>
                </li>
                @endif
                @if(!Auth::check() && $config->get('navbar_login') != 'N')
                <li class="dropdown" id="dropdown-toggle-login">
                    <a href="#" data-toggle="modal" data-target="#modal-login"><i class="fa fa-sign-in" area-hidden="true"></i> 로그인</a>
                </li>
                @endif
                @if(Auth::check() && $config->get('navbar_login') != 'N')
                <li cond="" class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">@if($logged_info->profile_image->src)--><img src="{$logged_info->profile_image->src}" alt="" class="img-circle" /><!--@else--><i class="fa fa-user" area-hidden="true"></i><!--@end--> {$logged_info->nick_name}</a>
                    <ul class="dropdown-menu">
                        <li id="profile-in-navbar" cond="$logged_info->profile_image->src">
                            <a href="{getURL('act','dispMemberInfo')}">
                                <img src="{$logged_info->profile_image->src}" class="img-circle" alt="Profile Image" cond="$logged_info->profile_image->src" /> <strong>{$logged_info->nick_name}</strong>
                            </a>
                        </li>

                        <li loop="$logged_info->menu_list=>$key, $val"><a href="{getUrl('act',$key,'member_srl','')}">{Context::getLang($val)}</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{getUrl('act','dispMemberLogout')}"><i class="fa fa-sign-out" area-hidden="true"></i> {$lang->cmd_logout}</a></li>
                        <li cond="$logged_info->is_admin=='Y'"><a href="{getUrl('','module','admin')}" target="_blank"><i class="fa fa-cog" area-hidden="true"></i> {$lang->cmd_management}</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
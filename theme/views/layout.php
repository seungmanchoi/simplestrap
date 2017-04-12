<a href="#content" class="sr-only ss-skip">본문 바로가기</a>
<nav id="navbar" class="navbar <!--@if($li->navbar_color=='inverse')-->navbar-inverse<!--@else-->navbar-default<!--@end--><!--@if($li->navbar_fixed!='N')--> navbar-fixed-top<!--@else--> navbar-static-top<!--@end-->" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <span class="sr-only">{$lang->ss_toggle_navigation}</span>
            <button type="button" class="navbar-toggle navbar-toggle-left" data-toggle="collapse" data-target="#main-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <button cond="!$is_logged && $li->navbar_login != 'N'" type="button" class="navbar-toggle" data-toggle="modal" data-target="#modal-login"><i class="fa fa-sign-in" area-hidden="true"></i> {$lang->cmd_login}</button>
            <button cond="$is_logged && $li->navbar_login != 'N'" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sub-navbar"><i class="fa fa-ellipsis-h" area-hidden="true"></i></button>
            <button cond="!$is_logged && $li->navbar_search != 'N'" type="button" class="navbar-toggle" data-toggle="modal" data-target="#modal-search"><i class="fa fa-search" area-hidden="true"></i> {$lang->cmd_search}</button>
            <a class="navbar-brand<!--@if($li->logo_img)--> navbar-logo-img<!--@end-->" href="<!--@if(!$li->index_url)-->http://www.wincomi.com<!--@else-->{$li->index_url}<!--@end-->">
                <!--@if($li->logo_img)--><img src="{$li->logo_img}" alt="{$li->logo_title}" />
                <!--@else-->
                <!--@if($li->logo_title)-->{$li->logo_title}<!--@else-->Simplestrap<!--@end-->
                <!--@end-->
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-left" id="main-navbar">
            <ul class="navbar-nav nav">
                <block loop="$main_menu->list=>$key1,$val1" cond="$val1['text']">
                    <!--@if($val1['link']!="||||")-->
                    <li class="<!--@if($val1['list'])-->dropdown <!--@end--><!--@if($val1['selected'])-->active<!--@end-->"|cond="$val1['list'] || $val1['selected']">
                        <a href="{$val1['href']}"<!--@if($val1['list'])--> class="dropdown-toggle" data-toggle="dropdown" <!--@end--> target="_blank"|cond="$val1['open_window']=='Y'">
                        {@
                        $_val1_link = explode('|fa-', $val1['link']);
                        }
                        <i class="fa fa-{$_val1_link[1]}" cond="$_val1_link[1]"></i> {$_val1_link[0]}
                        <!--@if($val1['list'])--> <span class="caret"></span><!--@end--></a>
                        <ul cond="$val1['list']" class="dropdown-menu">
                            <block loop="$val1['list']=>$key2,$val2" cond="$val2['link']">
                                <!--@if(strpos($val2['href'],'dropdown-header')!== false)-->
                                <li class="dropdown-header">{$val2['link']}</li>
                                <!--@elseif($val2['link']!="----")-->
                                <li class="<!--@if($val2['list'])-->dropdown-submenu <!--@end--><!--@if($val2['selected'])-->active<!--@end-->"|cond="$val2['list'] || $val2['selected']">
                                    <a tabindex="-1" href="{$val2['href']}" target="_blank"|cond="$val2['open_window']=='Y'">{$val2['link']}</a>
                                </li>
                                <!--@else-->
                                <li class="divider"></li>
                                <!--@end-->
                            </block>
                        </ul>
                    </li>
                    <!--@else-->
                    <li class="divider"></li>
                    <!--@end-->
                </block>
            </ul>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="sub-navbar">
            <form class="navbar-form navbar-left" action="{getUrl()}" method="get" cond="$li->navbar_search=='Y2'">
                <input type="hidden" name="vid" value="{$vid}" />
                <input type="hidden" name="mid" value="{$mid}" />
                <input type="hidden" name="act" value="IS" />
                <input type="text" name="is_keyword" value="{$is_keyword}" placeholder="{$lang->ss_enter_to_search}" class="form-control" style="max-width:150px" />
                <button type="submit" class="sr-only btn btn-{$colorset} btn-block"><i class="fa fa-search" area-hidden="true"></i> {$lang->cmd_search}</button>
            </form>
            <ul class="navbar-nav nav">
                <li cond="$li->navbar_search!='N' && $li->navbar_search!='Y2'" class="dropdown" id="dropdown-toggle-search">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" area-hidden="true"></i><span class="visible-xs-inline-block"> {$lang->cmd_search}</span></a>
                    <div class="dropdown-menu dropdown-form" role="search">
                        <form action="{getUrl()}" method="get">
                            <input type="hidden" name="vid" value="{$vid}" />
                            <input type="hidden" name="mid" value="{$mid}" />
                            <input type="hidden" name="act" value="IS" />
                            <input type="text" name="is_keyword" value="{$is_keyword}" placeholder="{$lang->ss_enter_to_search}" class="form-control" />
                            <button type="submit" class="sr-only btn btn-{$colorset} btn-block"><i class="fa fa-search" area-hidden="true"></i> {$lang->cmd_search}</button>
                        </form>
                    </div>
                </li>
                <li class="dropdown" id="dropdown-toggle-login" cond="!$is_logged && $li->navbar_login != 'N'">
                    <a href="#" data-toggle="modal" data-target="#modal-login"><i class="fa fa-sign-in" area-hidden="true"></i> {$lang->cmd_login}</a>
                </li>
                <li cond="$is_logged && $li->navbar_login != 'N'" class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!--@if($logged_info->profile_image->src)--><img src="{$logged_info->profile_image->src}" alt="" class="img-circle" /><!--@else--><i class="fa fa-user" area-hidden="true"></i><!--@end--> {$logged_info->nick_name}</a>
                    <ul class="dropdown-menu">
                        <li id="profile-in-navbar" cond="$logged_info->profile_image->src">
                            <a href="{getURL('act','dispMemberInfo')}">
                                <img src="{$logged_info->profile_image->src}" class="img-circle" alt="Profile Image" cond="$logged_info->profile_image->src" /> <strong>{$logged_info->nick_name}</strong>
                            </a>
                        </li>
                        <block cond="$li->navbar_member_point=='Y'">
                            {@
                            $member_srl = $logged_info->member_srl;
                            $oPointModel = getModel('point');
                            $member_point = $oPointModel->getPoint($member_srl);
                            }
                            <block cond="$li->navbar_member_point=='Y2'">
                                {@
                                $oCashModel = getModel('cash');
                                $member_cash = $oCashModel->getCash($member_srl);
                                }
                            </block>
                            <li class="dropdown-header text-center">{$member_point} {$lang->point}</li>
                            <li class="dropdown-header text-center" cond="$li->navbar_member_point=='Y2'">{$member_cash} 캐쉬</li>
                            <li role="separator" class="divider"></li>
                        </block>
                        <li loop="$logged_info->menu_list=>$key, $val"><a href="{getUrl('act',$key,'member_srl','')}">{Context::getLang($val)}</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{getUrl('act','dispMemberLogout')}"><i class="fa fa-sign-out" area-hidden="true"></i> {$lang->cmd_logout}</a></li>
                        <li cond="$logged_info->is_admin=='Y'"><a href="{getUrl('','module','admin')}" target="_blank"><i class="fa fa-cog" area-hidden="true"></i> {$lang->cmd_management}</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<include target="_carousel.html" cond="$li->slide_use != 'N'" />
<include target="_jumbotron.html" cond="$li->jumbotron!='N' && !in_array('custom_jumbotron',$li->custom)" />
<include target="./custom/custom_jumbotron.html" cond="$li->jumbotron!='N' && in_array('custom_jumbotron',$li->custom)" />
<include target="./custom/custom_top.html" cond="in_array('custom_top',$li->custom)" />
<div class="container" id="main-container">
    <div class="row <!--@if($li->site_frame!='sidebar_content_sidebar')-->row-offcanvas<!--@if($li->site_frame=='sidebar_content')--> row-offcanvas-left<!--@elseif($li->site_frame=='content_sidebar')--> row-offcanvas-left<!--@end--><!--@end-->" id="main-row">
        <div id="content" class="col<!--@if($li->site_frame=='sidebar_content_sidebar')--> col-sm-8 col-sm-push-2<!--@elseif($li->site_frame!='content')--> col-sm-{12-$li->sb_col}<!--@else--> col-sm-12<!--@end--><!--@if($li->site_frame=='sidebar_content')--> col-sm-push-{$li->sb_col}<!--@end-->">
            <article class="content panel panel-default" itemscope itemtype="http://schema.org/Article">
                <div class="panel-heading" cond="$li->site_frame != 'content' && $li->site_frame != 'sidebar_content_sidebar' && $li->content_panel_heading != 'N'">
                    <button id="sidebar-toggle-button" class="hidden-xs pull-left close"|cond="$li->site_frame=='sidebar_content'" class="hidden-xs pull-right close"|cond="$li->site_frame=='content_sidebar' || !$li->site_frame" data-toggle="tooltip" data-title="{$lang->ss_fullscreen_desc}"><i class="fa fa-angle-left"|cond="$li->site_frame=='sidebar_content'" class="fa fa-angle-right"|cond="$li->site_frame=='content_sidebar' || !$li->site_frame" area-hidden="true"></i></button>
                    <button data-toggle="offcanvas" cond="$li->site_frame!='content'" class="<!--@if($li->site_frame=='sidebar_content')--> pull-left<!--@elseif($li->site_frame=='content_sidebar')--> pull-left<!--@end--> close hidden-sm hidden-md hidden-lg"><i class="fa fa-angle-right"|cond="$li->site_frame=='sidebar_content'" class="fa fa-angle-left"|cond="$li->site_frame=='content_sidebar'" area-hidden="true"></i></button>
                    <include target="./custom/custom_content_heading.html" cond="in_array('custom_content_heading',$li->custom)" />
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                    <div cond="$XE_VALIDATOR_MESSAGE && $li->xe_validator_message != 'N'" class="alert<!--@if("{$XE_VALIDATOR_MESSAGE_TYPE}"=="info")--> alert-info<!--@elseif("{$XE_VALIDATOR_MESSAGE_TYPE}"=="error")--> alert-danger<!--@end-->">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <!--@if("{$XE_VALIDATOR_MESSAGE_TYPE}"=="info")--><i class="fa fa-info-circle" area-hidden="true"></i> <!--@elseif("{$XE_VALIDATOR_MESSAGE_TYPE}"=="error")--><i class="fa fa-exclamation-circle" area-hidden="true"></i> <!--@end-->{$XE_VALIDATOR_MESSAGE}
                </div>
                <include target="./custom/custom_content_top.html" cond="in_array('custom_content_top',$li->custom)" />
                <ol class="breadcrumb" cond="$li->use_breadcrumb == 'Y'" loop="$main_menu->list=>$key1,$val1" cond="$val1['selected']">
                    <li class="active"><a href="{$val1['href']}">{$val1['link']}</a></li>
                    <block loop="$val1['list']=>$key2,$val2" cond="$val2['selected']">
                        <li><a href="{$val2['href']}">{$val2['link']}</a></li>
                        <block loop="$val2['list']=>$key3,$val3" cond="$val3['selected']">
                            <li><a href="{$val3['href']}">{$val3['link']}</a></li>
                        </block>
                    </block>
                </ol>
                {$content}
                <div class="clearfix"></div>
                <include target="./custom/custom_content_bottom.html" cond="in_array('custom_content_bottom',$li->custom)" />
        </div>
        </article>
    </div>
    <aside id="sidebar" class="sidebar col<!--@if($li->site_frame=='sidebar_content_sidebar')--> col-sm-2 col-sm-pull-8<!--@else--> col-sm-{$li->sb_col}<!--@if($li->site_frame=='sidebar_content')--> col-sm-pull-{12-$li->sb_col}<!--@end--><!--@end-->" cond="$li->site_frame!='content'">
        <include target="_sidebar.html" />
        <div class="clearfix"></div>
    </aside>
    <aside id="sub-sidebar" class="sidebar col col-sm-2" cond="$li->site_frame=='sidebar_content_sidebar'">
        <include target="./custom/custom_sub_sidebar.html" />
        <div class="clearfix"></div>
    </aside>
</div>
</div>
<div id="modal-search" class="modal fade" cond="!$is_logged">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{$lang->cmd_search}</h4>
            </div>
            <div class="modal-body">
                <form action="{getUrl()}" method="get">
                    <input type="hidden" name="vid" value="{$vid}" />
                    <input type="hidden" name="mid" value="{$mid}" />
                    <input type="hidden" name="act" value="IS" />
                    <div class="form-group">
                        <input type="text" name="is_keyword" value="{$is_keyword}" placeholder="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-{$colorset} btn-block"><i class="fa fa-search" area-hidden="true"></i> {$lang->cmd_search}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="modal-login" class="modal fade" cond="!$is_logged && $li->navbar_login != 'N'">
    <include target="./custom/custom_login_modal.html" cond="in_array('custom_login_modal',$li->custom)" />
    <div class="modal-dialog modal-sm" cond="!in_array('custom_login_modal',$li->custom)">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{$lang->cmd_login}</h4>
            </div>
            <div class="modal-body">
                <div class="form-group socialxe-login" cond="$li->socialxe_login == 'Y'">
                    {@
                    $oSocialxeModel = &getModel('socialxe');
                    }
                    <block loop="$oSocialxeModel->config->sns_services=> $key, $val">
                        {@
                        $color = 'default';
                        if($val == 'twitter') $color = 'info';
                        if($val == 'facebook') $color = 'primary';
                        if($val == 'google') $color = 'danger';
                        if($val == 'naver') $color = 'success';
                        if($val == 'kakao') $color = 'warning';

                        $icon = $val;
                        if($icon == 'naver') $icon = 'graduation-cap';
                        if($icon == 'kakao') $icon = 'comment';
                        }
                        <a href="{$oSocialxeModel->snsAuthUrl($val, 'login')}" class="btn btn-{$color} btn-block">
                            <i class="fa fa-{$icon}" area-hidden="true"></i>
                            <span>{ucwords($val)}</span>
                        </a>
                    </block>
                </div>
                <form action="./" method="post" ruleset="@login" cond="($li->socialxe_login == 'Y' && $oSocialxeModel->config->default_login == 'Y') || $li->socialxe_login != 'Y'">
                    <p class="login-hr" cond="$li->socialxe_login == 'Y'"><span>{$lang->ss_or}</span></p>
                    {@$member_config=MemberModel::getMemberConfig();$identifierForm->name=$member_config->identifier;}
                    <input type="hidden" name="act" value="procMemberLogin" />
                    <input type="hidden" name="success_return_url" value="{getRequestUriByServerEnviroment()}" />
                    <div class="form-group"><input type="<!--@if($identifierForm->name=='email_address')-->email<!--@else-->text<!--@end-->" name="user_id" id="uid" value=""  placeholder="<!--@if($identifierForm->name=='email_address')-->{$lang->email}<!--@else-->{$lang->user_id}<!--@end-->" class="form-control" required /></div>
                    <div class="form-group"><input type="password" name="password" id="upw" value="" placeholder="{$lang->password}" class="form-control" required /></div>
                    <div class="checkbox">
                        <label for="keep_signed" onclick="jQuery('#modal-login input[name=\'keep_signed\']').click();"><input type="checkbox" name="keep_signed" value="Y" onclick="if(this.checked) return confirm('{$lang->about_keep_signed}');" /> {$lang->keep_signed}</label>
                    </div>

                    <button type="submit" class="btn btn-{$colorset} btn-block"><i class="fa fa-sign-in" area-hidden="true"></i> {$lang->cmd_login}</button>
                </form>
            </div>
            <div class="modal-footer" cond="($li->socialxe_login == 'Y' && $oSocialxeModel->config->default_signup == 'Y') || $li->socialxe_login != 'Y'">
                <div class="btn-group btn-group-justified">
                    <a cond="$li->signup_on_login_modal!='Y'" href="{getUrl('act','dispMemberSignUpForm')}" class="btn btn-default btn-sm"><i class="fa fa-user-plus" area-hidden="true"></i> {$lang->cmd_signup}</a>
                    <a href="{getUrl('act','dispMemberFindAccount')}" class="btn btn-default btn-sm"><i class="fa fa-question-circle" area-hidden="true"></i> {$lang->cmd_find_member_account}</a>
                    <!--// <a href="{getUrl('act','dispMemberResendAuthMail')}" class="btn btn-default">{$lang->cmd_resend_auth_mail}</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<footer id="footer" class="footer">
    <div class="container">
        {$li->footer_copyright}
        <ul class="footer-list list-inline" cond="$li->footer_bottom_menu=='Y'">
            <li loop="$footer_menu->list=>$key1,$val1" class="active"|cond="$val1['selected']"><a href="{$val1['href']}" target="_blank"|cond="$val1['open_window']=='Y'">{$val1['link']}</a></li>
        </ul>
        <ul class="footer-list list-inline">
            <li id="footer-lang"class="dropdown dropup" style="position:relative" cond="$li->footer_lang=='Y'">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe" area-hidden="true"></i> Language</a>
                <ul class="dropdown-menu" style="min-width:100px">
                    <li class="active"><a href="#" onclick="return false">{$lang_supported[$lang_type]}</a></li>
                    <!--@foreach($lang_supported as $key => $val)--><!--@if($key!= $lang_type)-->
                    <li><a href="#" onclick="doChangeLangType('{$key}');return false;">{$val}</a></li>
                    <!--@end--><!--@end-->
                </ul>
            </li>
            <li cond="$li->premium != 'Y'"><a href="http://www.wincomi.com" target="_blank"><i class="fa fa-check" area-hidden="true"></i> Layout by Wincomi</a></li>
        </ul>
    </div>
    <div class="footer_bottom" cond="$li->footer_bottom">{$li->footer_bottom}</div>
    <div id="hidden-xs" class="hidden-xs"></div>
</footer>
<include target="./custom/custom_bottom.html" cond="in_array('custom_bottom',$li->custom)" />
<block cond="$li->premium != 'Y'"><!-- Simplestrap v{$li->version} by Wincomi (www.wincomi.com) --></block>
@if(!Auth::check())
<div id="modal-search" class="modal fade">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">검색</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url() }}" method="get">
                    <input type="hidden" name="vid" value="" />
                    <input type="hidden" name="mid" value="" />
                    <input type="hidden" name="act" value="IS" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <input type="text" name="is_keyword" value="{$is_keyword}" placeholder="" class="form-control" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-{{ $themeSetting['colorset'] }} btn-block"><i class="fa fa-search" area-hidden="true"></i> 검색</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif

@if(!Auth::check() && $config->get('navbar_login') != 'N')
<div id="modal-login" class="modal fade">
    @if(in_array('custom_login_modal', $config->get('custom', [])))
        @include($theme::view('custom.custom_login_modal'))
    @else
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">{{xe_trans('xe::login')}}</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('login') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="redirectUrl" value="{{ $redirectUrl or '' }}">

                        <div class="form-group"><input type="text" name="email" id="name" value="{{ old('email') }}"  placeholder="{{xe_trans('xe::enterEmail')}}" class="form-control" required /></div>
                        <div class="form-group"><input type="password" name="password" id="pwd" value="" placeholder="{{xe_trans('xe::enterPassword')}}" class="form-control" required /></div>
                        <div class="checkbox">
                            <label for="keep_signed" onclick="jQuery('#modal-login input.__xe_keep_login').click();"><input type="checkbox" class="__xe_keep_login" id="chk" name="remember" /> {{xe_trans('xe::keepLogin')}}</label>
                        </div>

                        <button type="submit" class="btn btn-{{ $themeSetting['colorset'] }} btn-block"><i class="fa fa-sign-in" area-hidden="true"></i> {{xe_trans('xe::login')}}</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="btn-group btn-group-justified">
                        <a href="{{ route('auth.register') }}" class="btn btn-default btn-sm"><i class="fa fa-user-plus" area-hidden="true"></i> {{xe_trans('xe::signUp')}}</a>
                        <a href="{{ route('auth.reset') }}" class="btn btn-default btn-sm"><i class="fa fa-question-circle" area-hidden="true"></i> ID/PW 찾기</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

{!! app('xe.frontend')->html('user.keep_login')->content("<script>
$(function($) {
    $('.__xe_keep_login').change(function() {
        if(this.checked) {
            $('#__xe_infoRemember').slideDown();
        } else {
            $('#__xe_infoRemember').slideUp();
        }
    })
});

</script>")->load()  !!}
@endif
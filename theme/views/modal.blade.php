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
    @endif
</div>
@endif
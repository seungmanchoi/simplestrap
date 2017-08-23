<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-file-o" area-hidden="true"></i> 새로운 글</h3></div>
    <div class="xe-widget-wrapper " style=""><div style="*zoom:1;padding: 0px 0px 0px 0px !important;"><div class="list-group">
        @foreach ($list as $item)
            <a href="{{$urlHandler->getShow($item)}}" class="list-group-item" data-html="true" data-container="body" data-toggle="tooltip" data-trigger="hover" data-placement="right" title="" data-original-title="
                @if($boardConfig->get('category') == true && $item->boardCategory !== null)
                    {{xe_trans($item->boardCategory->categoryItem->word)}}<br />
                @endif
                <i class='fa fa-user' area-hidden='true'></i> {{$item->writer}} / <i class='fa fa-comment' area-hidden='true'></i> {{$item->commentCount}}
            ">
                {!! $item->title !!}
            </a>
        @endforeach
    </div>
</div>

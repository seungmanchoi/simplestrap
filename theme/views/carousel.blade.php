<div id="main-carousel" class="carousel slide hidden-print" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            @if($config->get('slide_c1_url'))<a href="{{ $config->get('slide_c1_url') }}"> @endif
            @if($config->get('slide_c1_img'))
                <img src="{{ $config->get('slide_c1_img.path') }}" alt="" />
            @else
                <img src="{{ $theme::asset('img/demo1.jpg') }}" alt="" />
            @endif
            @if($config->get('slide_c1_url'))</a> @endif
            <div class="carousel-caption">
                @if(!$config->get('slide_c1_img') && !$config->get('slide_c1_text'))<h1>First slide</h1> @endif
                @if($config->get('slide_c1_text'))<h1>{{ $config->get('slide_c1_text') }}</h1> @endif
                @if(!$config->get('slide_c1_img') && !$config->get('slide_c1_desc'))<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque volutpat elit in consectetur consequat. Nam luctus facilisis neque, eget ultricies lectus vestibulum id.</p> @endif
                @if($config->get('slide_c1_desc')) {{ $config->get('slide_c1_desc') }} @endif
            </div>
        </div>

        @if($config->get('slide_c2_img'))
            @if($config->get('slide_c2_url')) <a href="{{ $config->get('slide_c2_url') }}"> @endif
                <img src="{{ $config->get('slide_c2_img.path') }}" alt="" />
            @if($config->get('slide_c2_url')) </a> @endif
            <div class="carousel-caption">
                @if($config->get('slide_c2_text')) {{ $config->get('slide_c2_text') }} @endif
                @if($config->get('slide_c2_desc')) {{ $config->get('slide_c2_desc') }} @endif
            </div>
        @endif

        @if($config->get('slide_c3_img'))
            @if($config->get('slide_c3_url')) <a href="{{ $config->get('slide_c3_url') }}"> @endif
                <img src="{{ $config->get('slide_c3_img.path') }}" alt="" />
            @if($config->get('slide_c3_url')) </a> @endif
            <div class="carousel-caption">
                @if($config->get('slide_c3_text')) {{ $config->get('slide_c3_text') }} @endif
                @if($config->get('slide_c3_desc')) {{ $config->get('slide_c3_desc') }} @endif
            </div>
        @endif

        @if($config->get('slide_c4_img'))
            @if($config->get('slide_c4_url')) <a href="{{ $config->get('slide_c4_url') }}"> @endif
                <img src="{{ $config->get('slide_c4_img.path') }}" alt="" />
            @if($config->get('slide_c4_url')) </a> @endif
            <div class="carousel-caption">
                @if($config->get('slide_c4_text')) {{ $config->get('slide_c4_text') }} @endif
                @if($config->get('slide_c4_desc')) {{ $config->get('slide_c4_desc') }} @endif
            </div>
        @endif

        @if($config->get('slide_c5_img'))
            @if($config->get('slide_c5_url')) <a href="{{ $config->get('slide_c5_url') }}"> @endif
                <img src="{{ $config->get('slide_c5_img.path') }}" alt="" />
            @if($config->get('slide_c5_url')) </a> @endif
            <div class="carousel-caption">
                @if($config->get('slide_c5_text')) {{ $config->get('slide_c5_text') }} @endif
                @if($config->get('slide_c5_desc')) {{ $config->get('slide_c5_desc') }} @endif
            </div>
        @endif

    </div>
    @if(!($config->get('slide_c1_img')
    && !$config->get('slide_c2_img')
    && !$config->get('slide_c3_img')
    && !$config->get('slide_c4_img')
    && !$config->get('slide_c5_img')))
    <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
        <span class="fa fa-angle-left fa-2x" aria-hidden="true"></span>
        <span class="sr-only">이전</span>
    </a>
    <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
        <span class="fa fa-angle-right fa-2x" aria-hidden="true"></span>
        <span class="sr-only">다음</span>
    </a>
    @endif
</div>
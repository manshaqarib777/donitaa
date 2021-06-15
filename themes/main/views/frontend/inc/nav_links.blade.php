<li class="{{(count($item->child) > 0)?'dropdown':''}}">
    @if(count($item->child) > 0)
        <a class="dropdown-toggle" href="menu">
            {{$item->label}} <i class="fas fa-chevron-down"></i>
        </a>
        <ul class="dropdown-menu" role="menu">
            @foreach ($item->child as $child)
                @include('frontend.inc.nav_links',['item' => $child])
            @endforeach
        </ul>
    @else
        @if($item->label!="Login")
        <a class="transition" href="{{$item->link}}">{{$item->label}}</a>
        @endif
    @endif
</li>
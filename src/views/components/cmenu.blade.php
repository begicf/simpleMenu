<div>

    @foreach($items as $item)

        <li class="nav-item">

        @if($item['children']->isNotEmpty())

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ $item->title }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach($item['children'] as $child)
                        <a class="dropdown-item" href="{{$child->link}}">{{ $child->title }}</a>
                    @endforeach
                </div>
            </li>

        @else

            <a class="nav-link" href="{{$item->link}}">{{ $item->title }}</a>

        @endif

        </li>

    @endforeach
</div>

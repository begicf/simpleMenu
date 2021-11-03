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
                        <a class="dropdown-item {{ (request()->is($child->url)) ? 'active' : '' }}" href="/{{$child->url}}">{{ $child->title }}</a>
                    @endforeach
                </div>
            </li>

        @else

            <a class="nav-link {{ (request()->is($item->url)) ? 'active' : '' }}" href="{{url($item->url)}}">{{ $item->title }}</a>

        @endif

        </li>
@endforeach



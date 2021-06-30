@if($cate->categoryChildrent->count())
    <ul>
        @foreach($cate->categoryChildrent as $categoryChild)
            <li>
                <a class="dropdown-item nav-link nav_item" href="about.html">{{$categoryChild->name}}</a>
                @if($cate->categoryChildrent->count())
                    <div class="dropdown-menu">
                        @include('client.component.child_menu',['cate'=>$categoryChild])
                    </div>

                @endif
            </li>
        @endforeach
    </ul>
@endif

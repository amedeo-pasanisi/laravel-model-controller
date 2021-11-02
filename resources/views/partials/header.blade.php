<ul>
    <li><a class="{{Request::route()->getName() == 'homepage' ? 'active' : null}}" href="{{ route('homepage') }}">Home</a></li>
    <li><a class="{{Request::route()->getName() == 'collection-page' ? 'active' : null}}" href="{{ route('collection-page') }}">Movies Collection</a></li>
</ul>
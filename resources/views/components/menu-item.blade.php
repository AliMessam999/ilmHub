
    @foreach ($categories as $category)
    
        <li class="{{ request()->is(($category['title'] == 'Home'?'/':strtolower($category['title']))) ? 'selected':''}}"><a href="/{{ $category['title'] != 'Home' ? str_replace(' ','_',strtolower($category['title'])):'' }}">{!!  $category['icon'] !!}<span>{{ $category['title'] }}</span></a>
           
            @if (!empty($category['categories']))
            <ul>
                
                <x-category-item :category="$category['categories']" />
            </ul>
            @endif
        </li>
    @endforeach


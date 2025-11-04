@foreach ($category as $item)
<li class="{{!empty($item['sub_categories']) ? 'hasChildren':''}}"><a href="{{ $item['title'] == 'Contact' || $item['title'] == 'Clients' || $item['title'] == 'Partners'  ? strtolower($item['title']):'/solutions/'.strtolower($item['id']) }}"><i class="fa fa-send"></i>{{ $item['title'] }}</a>
    @if (!empty($item['sub_categories']))
    <ul class="bg-blue">
        @foreach($item['sub_categories'] as $subcategory)
            <li><a href="{{url('/project/details/'.$subcategory['title'])}}">{{ $subcategory['title'] }}</a></li>
        @endforeach
    </ul>
    @endif
</li>
@endforeach


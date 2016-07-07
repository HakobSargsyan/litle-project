<div class="col-md-offset-1">
    
<ul id="accordion">
    @if(isset($data))
    @foreach($data as $item )
        <li>
            <a class="heading" href="#recent" class="heading">{{$item->category_name}}</a>
            <ul id="recent">
            @foreach($item->subcategories as $sub)
                <li><span class="date">01.19.2009</span> <a href="{{url("/subcategory/".$sub->id)}}">{{$sub->sub_category_name}}</a></li>
            @endforeach    
            </ul>
        </li>
    @endforeach
    @endif
</ul>
</div>

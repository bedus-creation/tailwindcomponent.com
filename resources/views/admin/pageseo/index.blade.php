<a href="{{route('pageseo.create')}}">Create a Pageseo</a>

@foreach ($pages as $item)
<tr>
    <td>{{$item->page_url}}</td>
    <td>{{$item->page_title}}</td>
    <td><a href="{{route('pageseo.edit',$item->id)}}"> {{$item->page_title}}</a></td>
</tr>
@endforeach

@extends('theme.admin.app')

@section('content')
<table class="w-full">
    @foreach ($pages as $item)
    <tr>
        <td>{{$item->page_url}}</td>
        <td>{{$item->page_title}}</td>
        <td><a class="text-blue-400" href="{{route('pageseo.edit',$item->id)}}">Edit</a></td>
    </tr>
    @endforeach
</table>
@endsection

@extends('theme.admin.app')


@section('content')
<table>
    @foreach($editors as $item)
    <tr>
        <td>{{$item->title}}</td>
        <td>{{$item->description}}</td>
        <td><a href="{{route('editors.edit',$item->id)}}">Edit</a></td>
    </tr>
    @endforeach
</table>
@endsection

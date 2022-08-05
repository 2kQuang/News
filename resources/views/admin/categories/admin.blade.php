@extends('main')
@section('content')
<ul class="list-unstyled CTAs">
    <li>
        <form action="{{route('categories.create')}}" method="get">
            @csrf
            <button type="submit" class="btn btn-outline-success">Add Category</button>
        </form>
    </li>
</ul>
<table class="table table-bordered text-center" style="margin-top:20px;">
    <thead>
        <tr class="bg-dark text-light">
            <th scope="col">Name</th>
            <th scope="col">Setting</th>
        </tr>
    </thead>
    <tbody>
@forelse ($categories as $item)
<tr>
    <td>{{$item['Name']}}</td>
    <td>
        <a href="{{route('categories.edit',['id'=>$item['id']])}}" class="btn btn-success">Update</a>
                <a href="{{route('categories.delete',['id'=>$item['id']])}}" class="btn btn-danger">Delete</a>
    </td>
</tr>
@empty
    
@endforelse
       


        <tr>
            <td colspan="3">
                <ul class="list-unstyled CTAs">
                    <li>
                        <form action="{{route('categories.create')}}" method="get">
                            @csrf
                            <button type="submit" class="btn btn-outline-success">Add Category</button>
                        </form>
                    </li>
                </ul>
            </td>
        </tr>

    </tbody>
</table>
@endsection
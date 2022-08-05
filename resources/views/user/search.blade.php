@extends("../layouts.user")
@section('content')
<div class="container" >
    <div class="sn-content  m-5">
        @forelse ($products as $item)

            <h2>{{$item['Title']}}</h2>
            <img src="{{$item['image']}}" alt="">
            <br>
            <p>{{$item['content']}}</p>
        @empty
        <div class="p-3">
            <center><div class="text-success">Sorry ! <br> not find !</div></center>
        </div>
        @endforelse
                           

    </div>

</div>
@endsection
@extends("../layouts.user")
@section('content')
<div class="container" >
    <div class="sn-content  m-5">
        @forelse ($details as $item)

            <h2>{{$item['Title']}}</h2>
            <img src="{{$item['image']}}" alt="">
            <br>
            <p>{{$item['content']}}</p>
        @empty
       
        @endforelse
                           

    </div>

</div>
@endsection
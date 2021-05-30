@extends("index")
@section('title')
{{$name}}
@endsection
@section('accessories')
    <div class="accessories">
        <span class="title">{{$name}}</span>
        <div class="container">
            @foreach($accessories_types as $a_type)
                <a href="/store/{{$lnk}}/selected?page=1&type={{$a_type->type}}" style="text-decoration: none; color: #2d3748">
                    <div class="item">
                        <img src="/{{$a_type->img1}}">
                        <span>{{$a_type->type}}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection

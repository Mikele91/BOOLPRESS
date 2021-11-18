@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                <h1>Titolo: {{$post["title"]}}</h1>
                @if ($post["category"])
                    
                <h4> Categoria: {{$post["category"]["name"]}}</h4>
                @endif
                    @if (count($post["tags"]) > 0)
                        <h3>Tags</h3>
                        @foreach ($post["tags"] as $tag)
                        
                        <span class="badge badge-primary">{{$tag["name"]}}</span>
                        @endforeach
                    @endif

                <p>{{$post["content"]}}</p>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

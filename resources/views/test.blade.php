@extends('layouts.app')
@section('content')
        @auth
            {{$tests[0]->id}}
            <div class="list-group" style="width: 40%">
                @foreach($tests as $test)
                <a href="test/{{$test->id}}" class="list-group-item list-group-item-action list-group-item-primary">{{$test->id}}:{{$test->name_test}}</a>
                @endforeach
            </div>
        @endauth
@endsection




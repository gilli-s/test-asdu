@extends('layouts.app')
@section('content')
    @auth
{{var_dump($questions_answers)}}
        <form action="/result" method="post">
        @foreach($questions_head as $question)
        <div class="wrapper">
            <div class="quiz-frame">
                <main class="main">
                    <div class="quiz__head">
                        <div class="head__content" id="head">{{$question->name_question}}</div>
                    </div>
                    <div class="quiz__body">
                        @foreach($questions_answers as $answer)
                            @if($question->id == $answer->question_id)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="{{$answer->value}}" name="radiobuttongroup{{$question->id}}" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        {{$answer->answer_text}}
                                    </label>
                                </div>
                            @endif
                        @endforeach
                    </div>

                </main>
            </div>
        </div>
        @endforeach
        <input type="submit" class="btn btn-primary" value="Отправить тест">
        </form>


    @endauth

@endsection

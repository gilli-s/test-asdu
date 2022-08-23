@extends('layouts.app')
@section('content')
    @auth
        {{var_dump($questions_answers)}}

        @foreach($questions_head as $question)


        <div class="wrapper">
            <div class="quiz-frame">
                <main class="main">
                    <div class="quiz__head">
                        <div class="head__content" id="head">{{$question->name_question}}</div>
                    </div>
                    <div class="quiz__body">

                                    <form action="" id="{{$question->id}}">
                                        @foreach($questions_answers as $answer)
                                        <div class="form-check">
                                            @if($question->id == $answer->question_id)
                                            <input class="form-check-input" type="radio" value="{{$answer->value}}" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                {{$answer->answer_text}}
                                            </label>
                                            @endif
                                        </div>
                                        @endforeach
                                    </form>

                        <div class="quiz__footer">
                            <div class="footer__content" id="pages">0 / 0</div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
        @endforeach
        <button type="button" class="btn btn-primary">Отправить тест</button>
        {{var_dump($questions_head)}}
    @endauth
@endsection

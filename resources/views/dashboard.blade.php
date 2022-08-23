<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Тестирование') }}
        </h2>
    </x-slot>
    {{var_dump($questions)}}
    <div class="wrapper">
        <div class="quiz-frame">
            <main class="main">
                <div class="quiz__head">
                    <div class="head__content" id="head">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut ducimus odit accusamus, illum quas magni provident odio praesentium commodi sint, porro harum, minus cupiditate architecto culpa aut ex dolore officia.</div>
                </div>
                <div class="quiz__body">
                    <div class="buttons">
                        <div class="buttons__content" id="buttons">
                            <button class="button">Default button</button><br>
                            <button class="button button_wrong">Wrong answer</button><br>
                            <button class="button button_correct">Correct answer</button><br>
                            <button class="button button_passive">Unclicked button</button><br>
                        </div>
                    </div>

                    <div class="quiz__footer">
                        <div class="footer__content" id="pages">0 / 0</div>
                    </div>
                </div>

            </main>
        </div>
    </div>
</x-app-layout>


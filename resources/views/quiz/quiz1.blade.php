<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
           
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
            <form method="post" action="{{route('quiz.result')}}">
                @csrf
                <div class="quiz-question">
                    <p>{{ $question->question_text }}</p>
                    <ul>
                        <li>
                            <input type="radio" name="answer" value="true" id="answer_true">
                            <label for="answer_true">True</label>
                        </li>
                        <li>
                            <input type="radio" name="answer" value="false" id="answer_false">
                            <label for="answer_false">False</label>
                        </li>
                    </ul>
                </div>
                <button type="submit">Validate</button>
                <button class="" type="submit" hidden>Next</button>
             </form>
            </div>
        </div>
    </div>

    
</x-app-layout>
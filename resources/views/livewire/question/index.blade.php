@php
foreach ($questions as $question){
    $question->bodyPreview = \Illuminate\Support\Str::limit($question->body, 150);
//    $bodyPreview = \Illuminate\Support\Str::limit($question->body, 100);
}
//    str_split($question->body, 2);
@endphp
<div class="w-10/12 m-auto grid grid-cols-1 lg:grid-cols-2 gap-4">
    @foreach($questions as $question)
            <div class="w-md p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="/respostas?pergunta={{$question->id}}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$question->title}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$question->bodyPreview}}</p>
                <div class="flex justify-between content-center">
                    <div class="flex content-center">
                        <x-heroicon-o-hand-thumb-up class="h-6 w-6 text-gray-900 hover:text-green-700 content-center"/>
                        <span class="ms-1 text-sm font-medium text-gray-900 dark:text-gray-300 content-center h-6 w-6">{{$question->votes}}</span>
                    </div>
                    <a href="/responder?id={{$question->id}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Responder
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                </div>
            </div>

        @endforeach

</div>

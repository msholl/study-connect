<div class="w-10/12 lg:w-6/12 m-auto text-center">
    <div>
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$question->title}}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$question->body}}</p>
    </div>
    <div class="grid grid-cols-1">
        @foreach($answers as $answer)
            <div class="bg-white dark:bg-gray-900 p-4 rounded-lg shadow-lg mb-4">
                <p>
                {{$answer->body}}
                </p>
                <div class="flex flex-col text-gray-600 text-sm mt-2">
                    <span class="text-right">
                        - {{$answer->user->name}}
                    </span>
                    <span class="text-right">
                        {{date('d/m/Y', strtotime($answer->created_at->toDateTimeString()))}}
                    </span>
                </div>
            </div>
        @endforeach
    </div>
</div>

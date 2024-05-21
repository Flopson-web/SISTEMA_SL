<x-app-layout>
    <div class="container">
        <div class="grid grid-cols-3 gap-6">
            @foreach ($courses as $course)
                <article>
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <h1 class="text-4xl leading-8 font-bold">
                            <a href="">
                                {{ $course->nombre_curso}}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>
    </div>


</x-app-layout>

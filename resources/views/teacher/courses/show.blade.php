<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <a href="{{ route('teachers_courses.students.create', ['course' => $course->id]) }}" class="bg-blue-500 dark:bg-blue-700 hover:bg-blue-600 dark:hover:bg-blue-800 text-white font-bold py-2 px-4 rounded ml-2">Create Student</a> <br> <br>
                    @foreach($course->students as $student)
                        <div class="mb-4">
                            <p class="font-bold">Student Name: {{ $student->nombre }}</p>
                            <p class="text-gray-600">Last name: {{ $student->apellido }}</p>
                            <div class="flex space-x-2">
                                <a href="{{ route('teachers_courses.reports.index', ['course' => $course->id, 'student' => $student->id]) }}" class="bg-violet-500 dark:bg-violet-700 hover:bg-violet-600 dark:hover:bg-violet-800 text-white font-bold py-2 px-4 rounded">Show Reports</a>
                                <a href="{{ route('teachers_courses.students.edit', ['course' => $course->id, 'student' => $student->id]) }}" class="bg-yellow-500 dark:bg-yellow-700 hover:bg-yellow-600 dark:hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded">Edit Student</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
     
   
</x-app-layout>



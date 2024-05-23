
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

                                        @foreach($courses->students as $student)
                                            <div class="mb-4">
                                                <p class="font-bold">Student Name: {{ $student->nombre }}</p>
                                                <p class="text-gray-600">Last name: {{ $student->apellido }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-app-layout>

                    
                    
        



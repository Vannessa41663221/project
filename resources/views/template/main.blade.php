@extends('template.base')

@section('content')
    @php
        $student = auth()->guard('student')->user();
    @endphp
    <div class="bg-gray-400 flex items-center w-full">
        <div class="w-full flex flex-col px-12">
            <div class="h-8"></div>
            <div class="flex flex-row w-full justify-between">
                <div class="flex flex-row">
                    <a href="{{route('profile')}}">
                        <button class="flex items-center gap-4 rounded-md bg-white px-6 h-full">
                            <img class="w-10 h-10 rounded-full"
                                 src="{{ $student->profile_picture ? asset($student->profile_picture) : '/images/default-profile.jpeg' }}"
                                 alt="{{ $student->name }}">
                            <div class="font-medium flex flex-col items-start text-left">
                                <span>{{ $student->name }}</span>
                                <span class="text-sm">{{ $student->nim }}</span>
                            </div>
                        </button>
                    </a>

                    <div class="w-8"></div>

                    <div class="bg-white rounded-md p-4">
                        Current Language: {{\Illuminate\Support\Facades\Session::get('locale') == 'id' ? 'Bahasa' : 'English'}}
                    </div>
                </div>

                <div class="flex flex-row">
                    <a href="locale/en">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline h-full">
                            English
                        </button>
                    </a>

                    <div class="w-4"></div>

                    <a href="locale/id">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline h-full">
                            Bahasa
                        </button>
                    </a>
                </div>
            </div>

            <div class="h-8"></div>

            @yield('body')
        </div>
    </div>
@endsection

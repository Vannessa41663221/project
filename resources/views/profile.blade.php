@extends('template.base')

@section('content')
    <div class="flex items-center h-full bg-gray-400">
        <div class="container mx-auto p-4">
            <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-4">
                    <div class="flex items-center justify-center">
                        <img class="w-32 h-32 rounded-full"
                             src="{{ $student->profile_picture ? asset($student->profile_picture) : '/images/default-profile.jpeg' }}"
                             alt="{{ $student->name }}">
                    </div>
                    <div class="text-center mt-4">
                        <h2 class="text-xl font-semibold">{{ $student->name }}</h2>
                        <p class="text-gray-600">{{ $student->nim }}</p>
                    </div>
                </div>
                <div class="p-4 flex flex-col space-y-8">
                    <form action="{{ route('update-profile-picture') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="profile_picture">
                                Update Profile Picture
                            </label>
                            <input type="file" name="profile_picture" id="profile_picture" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Upload
                            </button>
                        </div>
                    </form>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 w-full">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

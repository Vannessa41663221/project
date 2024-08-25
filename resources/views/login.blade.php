@extends('template.base')

@section('content')
    <div class="bg-gray-500 flex justify-center items-center h-full">
        <div class="w-full max-w-sm p-6 bg-white rounded shadow-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>
            @if($errors->any())
                <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-4">
                    <label for="nim" class="block text-gray-700 text-sm font-bold mb-2">NIM</label>
                    <input id="nim" type="text" name="nim" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required autofocus>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input id="password" type="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                </div>

                <div class="mb-6">
                    Don't have an account?
                    <a href="{{route('register-view')}}" class="text-blue-500 hover:underline hover:cursor-pointer">
                        Register
                    </a>
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

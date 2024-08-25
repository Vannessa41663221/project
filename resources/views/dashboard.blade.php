@extends('template.main')

@section('body')

    <div class="flex flex-col space-y-8">
        @foreach($news as $n)
            <div class="flex flex-col bg-white rounded-md p-8">
                <div class="text-2xl font-medium">
                    @lang($n->title)
                </div>
                <div class="h-4"></div>
                <div>
                    @lang($n->content)
                </div>
                <div class="h-8"></div>
                <div class="text-2xl font-medium">
                    Comments
                </div>

                @foreach($n->newsComments as $c)
                    <div class="flex flex-row">
                        <div class="flex items-center gap-4 rounded-md bg-white h-full space-y-4">
                            <img class="w-10 h-10 rounded-full"
                                 src="{{ $c->student->profile_picture ? asset($c->student->profile_picture) : '/images/default-profile.jpeg' }}"
                                 alt="{{ $c->student->name }}">
                            <div class="font-medium flex flex-col items-start text-left">
                                <span>{{ $c->student->name }}</span>
                                <span class="text-sm font-normal">{{ $c->comment }}</span>
                            </div>
                        </div>

                        @if(Auth::guard('student')->id() === $c->student_id)
                            <form action="{{ route('comment.delete', $c->id) }}" method="POST" class="ml-auto">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-bold text-white bg-red-400 px-4 py-2 rounded-md hover:bg-red-500">
                                    Delete
                                </button>
                            </form>
                        @endif
                    </div>
                @endforeach

                <div class="mt-4">
                    <form action="{{ route('news.comment', $n->id) }}" method="POST">
                        @csrf
                        <div class="flex flex-col space-y-2">
                            <textarea name="comment" rows="3" class="w-full p-2 border rounded-md"
                                      placeholder="Add your comment..."></textarea>
                            <button type="submit"
                                    class="self-end px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                Submit Comment
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        @endforeach
        <div class="h-8"></div>
    </div>

@endsection

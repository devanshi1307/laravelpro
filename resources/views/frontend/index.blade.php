@extends('layouts.app')
@section('content')
<!-- <h4>test</h4> -->





<div>
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline margin-right:0px">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif 

</div>

<div class="py-1 bg-gray">
    <div class="container">
        <div class="border text-center p-3">
            <h3>Advertise Here</h3>
        </div>
    </div>
</div>














<div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>website</h4>
                <div class="underline">
                    <p>
                    A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. Though not required by the orthographic conventions of any language with a writing system, paragraphs are a conventional means of organizing extended segments of prose.
                    What if a writer or novelist decided to write a 300-page book with no breaks in the text for new ideas, new chapters, or even character dialogue? It would be so overwhelming that the reader would probably take one look and close the book forever. When writing is divided up into manageable parts that are cohesive, it's much easier for the reader to take in and process. A paragraph is a distinct segment of writing, often includes more than one sentence, and is separated from other paragraphs and text by a space.

                    Paragraphs break up text into manageable chunks that are easily read and visually make it more appealing and less daunting. The word paragraph comes from the Latin word paragraphos, which is roughly translated to mean a short-stroke marking a break in sense. The term graph is Latin for writing.
 
                    There is often some confusion about what the difference is between a paragraph and an essay. The best way to understand the difference is to think of the essay as a bigger version of a paragraph. A paragraph is made up of a topic sentence, supporting sentences, and a concluding sentence. An essay has all the same parts; only instead of sentences, an essay is made up of paragraphs.

                </p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>categoriest we provide</h4>
                <div class="underline">
                  <p>
                  What if a writer or novelist decided to write a 300-page book with no breaks in the text for new ideas, new chapters, or even character dialogue? It would be so overwhelming that the reader would probably take one look and close the book forever. When writing is divided up into manageable parts that are cohesive, it's much easier for the reader to take in and process. A paragraph is a distinct segment of writing, often includes more than one sentence, and is separated from other paragraphs and text by a space.

Paragraphs break up text into manageable chunks that are easily read and visually make it more appealing and less daunting. The word paragraph comes from the Latin word paragraphos, which is roughly translated to mean a short-stroke marking a break in sense. The term graph is Latin for writing.

There is often some confusion about what the difference is between a paragraph and an essay. The best way to understand the difference is to think of the essay as a bigger version of a paragraph. A paragraph is made up of a topic sentence, supporting sentences, and a concluding sentence. An essay has all the same parts; only instead of sentences, an essay is made up of paragraphs.
                  </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
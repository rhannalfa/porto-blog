<x-layout>
    <x-slot:title> {{ $title }} </x-slot:title>

    @foreach ($posts as $post)
    <div class="card text-left border px-4 my-4 bg-slate-200 rounded-lg">
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-body">
            <article class="py-8 max-w-screen-md border-b border-grey-500">
                <a href="/posts/{{$post['slug']}}" class="hover:underline">
                    <h2 class="mb-1 text-3xl tracking-tight font-bold text-grey-900">{{ $post['title'] }}</h2>
                </a>
                <div>
                    By
                    <a href="/authors/{{ $post->author->username }}" 
                    class="hover:underlinetext-base text-gray-500">
                        {{ $post->author->name }}
                    </a> 
                    in
                    <a href="/categories/{{ $post->category->slug }}" 
                    class="hover:underlinetext-base text-gray-500">
                        {{ $post->category->name }}
                    </a>
                    | {{ $post->created_at->format('j F Y') }}
                </div>
                <p class="my-4 font-light">
                    {{ Str::limit($post['body'], 150) }}
                </p>
                <a href="/posts/{{$post['slug']}}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
            </article>
        </div>
    </div>
    @endforeach
    
    
    
</x-layout>
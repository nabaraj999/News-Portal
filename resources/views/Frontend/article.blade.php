
<x-frontend-layout :title="$article->title" :description="$article->meta_description" :keywords="$article->meta_keywords">
    <section>
        <div class="container grid grid-cols-3 py-10">
            <div class="col-span-2 space-y-10">
                {{ $article->views }}
                {!! $article->content !!}
            </div>
            <div></div>
        </div>
    </section>
</x-frontend-layout>

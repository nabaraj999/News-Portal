
<x-frontend-layout :title="$category->title" :description="$category->meta_description" :keywords="$category->meta_keywords">

    <section>
        <div class="container grid grid-cols-3 py-10">
            <div class="col-span-2 space-y-10">
                @foreach ($articles as $article)
                    <x-article-card :article="$article" />
                @endforeach

                {{ $articles->links() }}
            </div>
            <div></div>
        </div>
    </section>
</x-frontend-layout>

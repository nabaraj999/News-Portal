
 @props(['article'])

 <div class="flex text-xs gap-2 items-center shadow hover:shadow-lg">
     <a href="{{ route('article', $article->id) }}">
         <img class="w-1/3" src="{{ asset($article->image) }}" alt="{{ $article->title }}">
     </a>
     <div>
         <h3 class="text-sm font-semibold line-clamp-1">
             {{ $article->title }}
         </h3>
         <div class="line-clamp-1">
             {!! $article->content !!}
         </div>
         <div class="flex justify-between">
             <small>
                 {{ nepalidate($article->created_at) }}
             </small>
             <a href="">read more</a>
         </div>
     </div>
 </div>

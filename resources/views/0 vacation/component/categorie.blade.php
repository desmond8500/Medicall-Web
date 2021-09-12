<h3>Catégories</h3>
<div class="card ">
    {{-- @dump($topic_id) --}}

    <div class="list-group">

        <a href="{{ route('blog.list') }}" class="list-group-item list-group-item-action {{ $menu ?? 'active' }} ">Tous les articles</a>

        @foreach ($topics as $topic)
            {{-- @isset ($menu) --}}
                {{-- @if ($topic->id == $menu->id)
                    <a href="{{route('blog',['topic'=>$topic->id])}}" class="list-group-item list-group-item-action active">{{ $topic->name }}</a>
                    @else
                    <a href="{{route('blog',['topic'=>$topic->id])}}" class="list-group-item list-group-item-action">{{ $topic->name }}</a>
                    @endif
                @else
                <a href="{{route('blog',['topic'=>$topic->id])}}" class="list-group-item list-group-item-action">{{ $topic->name }}</a>
                @endisset --}}
                <a href="" wire:click="$set('topic_id','{{ $topic->id }}')" class="list-group-item list-group-item-action">{{ $topic->name }}</a>
        @endforeach
    </div>
</div>

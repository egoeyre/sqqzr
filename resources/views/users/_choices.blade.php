@if (count($choices))

<ul class="list-group">
    @foreach ($choices as $choice)
        <li class="list-group-item">
            <a href="{{ route('choices.show', $choice->id) }}">
                {{ $choice->title }}
            </a>
            <span class="meta pull-right">
                {{ $choice->reply_count }} 回复
                <span> ⋅ </span>
                {{ $choice->created_at->diffForHumans() }}
            </span>
        </li>
    @endforeach
</ul>

@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif

{{-- 分页 --}}
{!! $choices->render() !!}
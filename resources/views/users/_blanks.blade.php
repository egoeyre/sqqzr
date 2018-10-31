@if (count($blanks))

<ul class="list-group">
    @foreach ($blanks as $blank)
        <li class="list-group-item">
            <a href="{{ route('blanks.show', $blank->id) }}">
                {{ $blank->title }}
            </a>
            <span class="meta pull-right">
                {{ $blank->bcategory->name }} 
                <span> ⋅ </span>
                {{ $blank->created_at->diffForHumans() }}
            </span>
        </li>
    @endforeach
</ul>

@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif

{{-- 分页 --}}
{!! $blanks->render() !!}
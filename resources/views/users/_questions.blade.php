@if (count($questions))

<ul class="list-group">
    @foreach ($questions as $question)
        <li class="list-group-item">
            <a href="{{ route('questions.show', $question->id) }}">
                {{ $question->title }}
            </a>
            <span class="meta pull-right">
                {{ $question->qcategory->name }} 
                <span> ⋅ </span>
                {{ $question->created_at->diffForHumans() }}
            </span>
        </li>
    @endforeach
</ul>

@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif

{{-- 分页 --}}
{!! $questions->render() !!}

@if (count($questions))

    <ul class="media-list">
        @foreach ($questions as $question)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('users.show', [$question->user_id]) }}">
                        <img class="media-object img-thumbnail" style="width: 52px; height: 52px;" src="{{ $question->user->avatar }}" title="{{ $question->user->name }}">
                    </a>
                </div>

                <div class="media-body">

                    <div class="media-heading">
                        <a href="{{ route('questions.show', [$question->id]) }}" title="{{ $question->title }}">
                            {{ $question->title }}
                        </a>
                        <p> {{ $question->answer }} </p>
                        

                    </div>
                    
                    <div class="media-body meta">

                        <a href="#" title="{{ $question->qcategory->name }}">
                            <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                             {{ $question->qcategory->name }}
                        </a>

                        <span> • </span>
                        <a href="{{ route('users.show', [$question->user_id]) }}" title="{{ $question->user->name }}">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            {{ $question->user->name }}
                        </a>
                        <span> • </span>
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        <span class="timeago" title="最后活跃于">{{ $question->updated_at->diffForHumans() }}</span>
                    </div>

                </div>
            </li>

            @if ( ! $loop->last)
                <hr>
            @endif

        @endforeach
    </ul>

@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif
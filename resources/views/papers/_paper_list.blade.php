@if (count($papers))

    <ul class="media-list">
        @foreach ($papers as $paper)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('users.show', [$paper->user_id]) }}">
                        <img class="media-object img-thumbnail" style="width: 52px; height: 52px;" src="{{ $paper->user->avatar }}" title="{{ $paper->user->name }}">
                    </a>
                </div>

                <div class="media-body">

                    <div class="media-heading">
                        <a href="{{ route('papers.show', [$paper->id]) }}" title="{{ $paper->title }}">
                            {{ $paper->title }}
                        </a>
                        <a class="pull-right" href="{{ route('papers.show', [$paper->id]) }}" >
                            <span class="badge"> {{ $paper->reply_count }} </span>
                        </a>
                    </div>

                    <div class="media-body meta">

                        <a href="#" title="{{ $paper->category->name }}">
                            <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                             {{ $paper->category->name }}
                        </a>

                        <span> • </span>
                        <a href="{{ route('users.show', [$paper->user_id]) }}" title="{{ $paper->user->name }}">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            {{ $paper->user->name }}
                        </a>
                        <span> • </span>
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        <span class="timeago" title="最后活跃于">{{ $paper->updated_at->diffForHumans() }}</span>
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

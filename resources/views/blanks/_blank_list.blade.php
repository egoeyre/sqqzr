@if (count($blanks))

    <ul class="media-list">
        @foreach ($blanks as $blank)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('users.show', [$blank->user_id]) }}">
                        <img class="media-object img-thumbnail" style="width: 52px; height: 52px;" src="{{ $blank->user->avatar }}" title="{{ $blank->user->name }}">
                    </a>
                </div>

                <div class="media-body">

                    <div class="media-heading">
                        <a href="{{ route('blanks.show', [$blank->id]) }}" title="{{ $blank->title }}">
                            {{ $blank->title }}
                        </a>
                        <p> {{ $blank->answer }} </p>
                        

                    </div>
                    
                    <div class="media-body meta">

                        <a href="#" title="{{ $blank->bcategory->name }}">
                            <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                             {{ $blank->bcategory->name }}
                        </a>

                        <span> • </span>
                        <a href="{{ route('users.show', [$blank->user_id]) }}" title="{{ $blank->user->name }}">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            {{ $blank->user->name }}
                        </a>
                        <span> • </span>
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        <span class="timeago" title="最后活跃于">{{ $blank->updated_at->diffForHumans() }}</span>
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
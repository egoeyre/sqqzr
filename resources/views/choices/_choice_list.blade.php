@if (count($choices))

    <ul class="media-list">
        @foreach ($choices as $choice)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('users.show', [$choice->user_id]) }}">
                        <img class="media-object img-thumbnail" style="width: 52px; height: 52px;" src="{{ $choice->user->avatar }}" title="{{ $choice->user->name }}">
                    </a>
                </div>

                <div class="media-body">

                    <div class="media-heading">
                        <a href="{{ route('choices.show', [$choice->id]) }}" title="{{ $choice->title }}">
                            {{ $choice->title }}
                        </a>
                        <a class="pull-right" href="{{ route('choices.show', [$choice->id]) }}" >
                            <span class="badge"> {{ $choice->answer }} </span>
                        </a>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>A:</th>
                                    <td>{{ $choice->optiona }}</td>
                                </tr>
                                <tr>
                                    <th>B:</th>
                                    <td>{{ $choice->optionb }}</td>
                                </tr>
                                <tr>
                                    <th>C:</th>
                                    <td>{{ $choice->optionc }}</td>
                                </tr>
                                <tr>
                                    <th>D:</th>
                                    <td>{{ $choice->optiond }}</td>
                                </tr>
                                
                            </tbody>
                        </table>

                    </div>
                    
                    <div class="media-body meta">

                        <a href="#" title="{{ $choice->category->name }}">
                            <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                             {{ $choice->category->name }}
                        </a>

                        <span> • </span>
                        <a href="{{ route('users.show', [$choice->user_id]) }}" title="{{ $choice->user->name }}">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            {{ $choice->user->name }}
                        </a>
                        <span> • </span>
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        <span class="timeago" title="最后活跃于">{{ $choice->updated_at->diffForHumans() }}</span>
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
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/home') }}">
                {{ config('app.name', '首页') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class="{{ active_class((if_route('tcategories.show') && if_route_param('tcategory', 4))) }}"><a href="{{ route('tcategories.show', 4) }}">公告</a></li>
                <li class="{{ active_class((if_route('tcategories.show') && if_route_param('tcategory', 1))) }}"><a href="{{ route('tcategories.show', 1) }}">分享</a></li>
                <li class="{{ active_class((if_route('tcategories.show') && if_route_param('tcategory', 2))) }}"><a href="{{ route('tcategories.show', 2) }}">教程</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        题库&nbsp&nbsp<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="{{ active_class(if_route('choices.index')) }}"><a href="{{ route('choices.index') }}">选择题</a></li>
                        <li class="{{ active_class(if_route('blanks.index')) }}"><a href="{{ route('blanks.index') }}">填空题</a></li>
                        <li class="{{ active_class(if_route('questions.index')) }}"><a href="{{ route('questions.index') }}">问答题</a></li>
                    </ul>
                </li>
                
                
                
                <li class="{{ active_class(if_route('papers.index')) }}"><a href="{{ route('papers.index') }}">我的试卷</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">登录</a></li>
                <li><a href="{{ route('register') }}">注册</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        新建&nbsp&nbsp<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('papers.create', Auth::id()) }}">                            
                                生成试卷
                            </a>
                        </li>
                       
                        <li>
                            <a href="{{ route('choices.create', Auth::id()) }}">                            
                                选择题
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blanks.create', Auth::id()) }}">                          
                                填空题
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('questions.create', Auth::id()) }}">
                                问答题
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('topics.create', Auth::id()) }}">                            
                                创建话题
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- 消息通知标记 --}}
                    <li>
                        <a href="{{ route('notifications.index') }}" class="notifications-badge" style="margin-top: -2px;">
                            <span class="badge badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'fade' }} " title="消息提醒">
                                {{ Auth::user()->notification_count }}
                            </span>
                        </a>
                    </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('users.show', Auth::id()) }}">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                个人中心
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.edit', Auth::id()) }}">
                               <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                               编辑资料
                           </a>
                       </li>
                       <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                        退出登录
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
        @endguest
    </ul>
</div>
</div>
</nav>
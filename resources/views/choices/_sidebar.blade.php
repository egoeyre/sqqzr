<div class="panel panel-default">
    <div class="panel-heading">
        分类
    </div>
    <div class="panel-body">
        <p>资质认定</p>
        <ul class="nav nav-pills">
		  <li role="presentation" class="{{ active_class((if_route('categories.show') && if_route_param('category', 1))) }}"><a href="{{ route('categories.show', 1) }}">基础</a></li>
		</ul>
		<br >
        <p>机动车</p>

        <ul class="nav nav-pills">
		  <li role="presentation" class="{{ active_class((if_route('categories.show') && if_route_param('category', 3))) }}"><a href="{{ route('categories.show', 3) }}">安检</a></li>
		  <li role="presentation" class="{{ active_class((if_route('categories.show') && if_route_param('category', 2))) }}"><a href="{{ route('categories.show', 2) }}">环检</a></li>
		  <li role="presentation" class="{{ active_class((if_route('categories.show') && if_route_param('category', 4))) }}"><a href="{{ route('categories.show', 4) }}">综检</a></li>
		</ul>
    </div>
</div>
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="index.html"><img src="images/logo.png" alt="Mouldifi" title="Mouldifi"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			<li class="has-sub active ">
				<a href="index.html">
					<i class="icon-gauge"></i><span class="title">@lang('dashboard.dashboard')</span>
				</a>
			</li>
			<li class="has-sub">
				<a href="#">
					<i class="icon-window"></i>
					<span class="title">
					@lang('sidebar.poster')
					</span>
				</a>
				<ul class="nav collapse">
					<li><a href="{{ route('poster.index') }}">
						<i class="icon-bag"></i>
						<span class="title">@lang('sidebar.poster_manage')</span>
					</a></li>
					<li><a href="{{ route('poster.create') }}">
						<i class="icon-feather"></i>
						<span class="title">@lang('sidebar.poster_add')</span>
					</a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#"><i class="icon-folder"></i><span class="title">@lang('sidebar.category')</span></a>
				<ul class="nav">
					<li><a href="{{ route('category.index') }}">
						<i class="icon-popup"></i>
						<span class="title">@lang('sidebar.category_manage')</span>
					</a></li>
					<li><a href="{{ route('category.create') }}">
						<i class=" icon-pencil"></i>
						<span class="title">@lang('sidebar.category_add')</span>
					</a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#"><i class="icon-globe"></i><span class="title">@lang('sidebar.country')</span></a>
				<ul class="nav collapse">
					<li><a href="{{ route('country.index') }}">
						<i class="icon-chart-line"></i>
						<span class="title">@lang('sidebar.country_manage')</span>
					</a></li>
					<li><a href="{{ route('country.create') }}">
						<i class=" icon-pencil"></i>
						<span class="title">@lang('sidebar.country_add')</span>
					</a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#"><i class="icon-network"></i><span class="title">@lang('sidebar.city')</span></a>
				<ul class="nav collapse">
					<li><a href="{{ route('city.index') }}">
						<i class="icon-chart-area"></i>
						<span class="title">@lang('sidebar.city_manage')</span>
					</a></li>
				</ul>
				<ul class="nav collapse">
					<li><a href="{{ route('city.create') }}">
						<i class=" icon-pencil"></i>
						<span class="title">@lang('sidebar.city_add')</span>
					</a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#"><i class=" icon-chat"></i><span class="title">@lang('sidebar.comment')</span></a>
				<ul class="nav collapse">
					<li><a href="{{ route('comment.index') }}">
						<i class="icon-drive"></i>
						<span class="title">@lang('sidebar.comment_manage')</span>
					</a></li>
					<li><a href="{{ route('comment.create') }}">
						<i class=" icon-pencil"></i>
						<span class="title">@lang('sidebar.comment_add')</span>
					</a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="{{ route('blocked_users') }}"><i class=" icon-minus-circled"></i><span class="title">@lang('sidebar.blocked_user')</span></a>
			</li>
		</ul>
		<!-- /main navigation -->		
    </div>
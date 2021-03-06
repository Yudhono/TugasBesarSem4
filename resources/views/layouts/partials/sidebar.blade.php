<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/avatar5.png')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li><a href="{{ url('posts') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.news') }}</span></a></li>
            <li><a href="{{ url('categories') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.categories') }}</span></a></li>
            <li><a href="{{ url('tags') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.tags') }}</span></a></li>
            <li><a href="{{ url('abouts') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.abouts') }}</span></a></li>
            <li><a href="{{ url('contacts') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.contacts') }}</span></a></li>
            <li><a href="{{ url('services') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.services') }}</span></a></li>
            <li><a href="{{ url('special_posts') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.special_news') }}</span></a></li>
            <li><a href="{{ url('galleries') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.galleries') }}</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

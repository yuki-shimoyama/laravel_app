<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                local test
            </a>
        </li>

        @foreach($sidebar as $item)
            <li>
                <a href="{{url('/')}}/{{$item->name}}">{{$item->name}}</a>
            </li>
        @endforeach

    </ul>
</div>
<!-- /#sidebar-wrapper -->

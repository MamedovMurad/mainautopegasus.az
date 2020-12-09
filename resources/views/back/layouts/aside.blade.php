
<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
{{--
                        <li><a href="index.html" key="t-default">Default</a></li>
--}}

                    </ul>
                </li>

    {{--            <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">HomePage</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="layouts-horizontal.html" key="t-horizontal">Slider</a></li>

                    </ul>
                </li>--}}

                <li>
                    <a href="makes" >
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Attributes</span>
                    </a>

                </li>
                <li>
                    <a href="models" >
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Models</span>
                    </a>

                </li>


                <li>
                    <a href="cars" >
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Cars</span>
                    </a>

                </li>
                <li>
                    <a href="cars" >
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">User Managment</span>
                    </a>

                </li>

                <li>
                    <a href="cars" >
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Comments</span>
                    </a>

                </li>
                <li>
                    <a href="cars" >
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Car request</span>

                    </a>

                </li>




        @if (Auth::user()->isAdmin==1)
        <li>
        <a href="{{route('editor')}}" >

                <i class="bx bx-layout"></i>

                <span key="t-layouts">istifadəçi</span>
            </a>

        </li>
        @endif










   {{--             <li>
                    <a href="" >
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Services</span>
                    </a>

                </li>--}}

             {{--   <li>
                    <a href="" >
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Blog</span>
                    </a>

                </li>

                <li>
                    <a href="" >
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Partniers</span>
                    </a>

                </li>
                <li>
                    <a href="" >
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Emails</span>
                    </a>

                </li>
                <li>
                    <a href="" >
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">Subscribes</span>
                    </a>

                </li>

                <li>
                    <a href="" >
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts">User Managment</span>
                    </a>

                </li>



--}}



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->


<template>
    <div class="topbar-main navbar m-b-0 b-0">
        <div class="container-fluid">

            <div class="topbar-left">
                <a href="/" class="logo">
                    <h3>스타일뷰</h3>
                </a>
            </div>


            <div class="menu-extras">

                <ul class="nav navbar-right list-inline">
                    <li class="d-none d-sm-inline-block list-inline-item">
                        <form role="search" class="app-search">
                            <input type="text" placeholder="Search..."
                                    class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <li class="list-inline-item">
                        <div class="dropdown">
                            <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                <i class="dripicons-user"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                <li><a href="#" class="dropdown-item">로그아웃</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        mounted(){

        }
    }
</script>

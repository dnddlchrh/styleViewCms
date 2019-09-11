<template>
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu">
                        <a href="#"><i class="fi-air-play"></i> <span> 대시보드 </span> </a>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="fa fa-shopping-cart"></i><span> 쇼핑몰관리 </span> </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="#">쇼핑몰 조회</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="fi-target"></i> <span> 상품관리 </span> </a>
                        <ul class="submenu">
                            <li><a href="#">상품목록</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="fa fa-shopping-bag"></i> <span> 주문관리 </span> </a>
                        <ul class="submenu">
                            <li><a href="#">주문조회</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="fa fa-line-chart"></i> <span> 광고관리 </span> </a>
                        <ul class="submenu">
                            <li><a href="#">광고비 정산 내역</a></li>
                            <li><a href="#">광고비 지원</a></li>
                            <li><a href="#">광고비 통계</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="fa fa-cog fa-fw"></i> <span> 설정 </span> </a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">시스템</a>
                                <ul class="submenu">
                                    <li><a href="#">사용자관리</a></li>
                                    
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#">관리자 설정</a>
                                <ul class="submenu">
                                    <li><a href="#">전담 담당자</a></li>
                                    <li><a href="#">버전</a></li>
                                </ul>
                            </li>
                        
                        </ul>
                    </li>

                </ul>
                <!-- End navigation menu  -->
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

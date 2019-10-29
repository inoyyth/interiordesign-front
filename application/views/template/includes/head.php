<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->

<div class="site-navbar-wrap">
    <div class="site-navbar-top">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-2">
                  <!-- update logo -->
                  <h1 class="mb-0 site-logo"><a href="#"><img src="https://i.ibb.co/9hzrw6L/logo-falco.png" alt="logo-falco" border="0"></a></h1>
                </div>
                <!--
                <div class="col-6">
                    <a href="<?php echo $this->profile['acf']['twitter'];?>" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                    <a href="<?php echo $this->profile['acf']['facebook'];?>" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                    <a href="<?php echo $this->profile['acf']['linkedin'];?>" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                    <a href="<?php echo $this->profile['acf']['instagram'];?>" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                </div>
                -->
                <div class="col-10">
                    <!--
                    <div class="d-flex ml-auto">
                    <a href="#" class="d-flex align-items-center ml-auto mr-4">
                        <span class="icon-phone mr-2"></span>
                        <span class="d-none d-md-inline-block"><?php echo $this->profile['acf']['phone'];?></span>
                    </a>
                    <a href="#" class="d-flex align-items-center">
                        <span class="icon-envelope mr-2"></span>
                        <span class="d-none d-md-inline-block"><?php echo $this->profile['acf']['email'];?></span>
                    </a>
                    </div>
                    -->
                    <div class="site-navbar">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                                    <a href="#" class="site-menu-toggle js-menu-toggle text-white">
                                        <span class="icon-menu h3"></span>
                                    </a>
                                </div>
                                <?php 
                                    echo $this->multi_menu->render(
                                        array(
                                            'nav_tag_open'        => '<ul class="site-menu js-clone-nav d-none d-lg-block">',            
                                            'parentl1_tag_open'   => '<li>',
                                            'parentl1_anchor'     => '<a href="%s">%s</a>',
                                            'parent_tag_open'     => '<li>',
                                            'parent_anchor'       => '<a href="%s">%s</a>',
                                            'children_tag_open'   => '<ul>'
                                        )
                                    ); 
                                ?>
                                <!-- <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li class="has-children active">
                                    <a href="index.html">Home</a>
                                    <ul class="dropdown arrow-top">
                                    <li><a href="#">Menu One</a></li>
                                    <li><a href="#">Menu Two</a></li>
                                    <li><a href="#">Menu Three</a></li>
                                    <li class="has-children">
                                        <a href="#">Sub Menu</a>
                                        <ul class="dropdown">
                                        <li><a href="#">Menu One</a></li>
                                        <li><a href="#">Menu Two</a></li>
                                        <li><a href="#">Menu Three</a></li>
                                        </ul>
                                    </li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="has-children">
                                    <a href="projects.html">Projects</a>
                                    <ul class="dropdown arrow-top">
                                    <li><a href="#">Menu One</a></li>
                                    <li><a href="#">Menu Two</a></li>
                                    <li><a href="#">Menu Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                </ul> -->
                            </div>
                         </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--
    <div class="site-navbar">
        <div class="container py-1">
            <div class="row align-items-center">
                <div class="col-2">
                    <h1 class="mb-0 site-logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo base_url('assets/themes/images/logo-falco.png');?>" alt="logo-falco" border="0" style="width:205px;height:75px;"></h1>
                </div>
                <div class="col-10">
                    <nav class="site-navigation text-right" role="navigation">
                    <div class="container">
                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                            <a href="#" class="site-menu-toggle js-menu-toggle text-white">
                                <span class="icon-menu h3"></span>
                            </a>
                        </div>
                        <?php 
                            echo $this->multi_menu->render(
                                array(
                                    'nav_tag_open'        => '<ul class="site-menu js-clone-nav d-none d-lg-block">',            
                                    'parentl1_tag_open'   => '<li>',
                                    'parentl1_anchor'     => '<a href="%s">%s</a>',
                                    'parent_tag_open'     => '<li>',
                                    'parent_anchor'       => '<a href="%s">%s</a>',
                                    'children_tag_open'   => '<ul>'
                                )
                            ); 
                        ?>
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li class="has-children active">
                            <a href="index.html">Home</a>
                            <ul class="dropdown arrow-top">
                            <li><a href="#">Menu One</a></li>
                            <li><a href="#">Menu Two</a></li>
                            <li><a href="#">Menu Three</a></li>
                            <li class="has-children">
                                <a href="#">Sub Menu</a>
                                <ul class="dropdown">
                                <li><a href="#">Menu One</a></li>
                                <li><a href="#">Menu Two</a></li>
                                <li><a href="#">Menu Three</a></li>
                                </ul>
                            </li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li class="has-children">
                            <a href="projects.html">Projects</a>
                            <ul class="dropdown arrow-top">
                            <li><a href="#">Menu One</a></li>
                            <li><a href="#">Menu Two</a></li>
                            <li><a href="#">Menu Three</a></li>
                            </ul>
                        </li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        </ul> 
                    </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    -->
</div>

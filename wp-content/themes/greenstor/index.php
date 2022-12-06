<?php get_header(); ?>

    <!-- Start About Section -->
    <section class="aboutSection secPadding" id="about">
        <div class="container">
            <div class="row">
                <div class="sectionTitle" data-aos="fade-down" data-aos-duration="500">
                    <h2 data-title="our story">about us</h2>
                </div>
            </div>
            <div class="row">
                <div class="aboutText" data-aos="fade-right" data-aos-duration="1000">
                    <h3>Welcome To Dine Out Restaurant</h3>
                    <p>Here at Dine Out’s Burgers and Meals we take pride in the quality of the meat used for each and every burger. If it’s not perfect and grilled just the way you ordered it, we won’t send it out. We guarantee the burger delivered to your table is the best burger you could have ordered.</p>
                    <p>No good meal is complete without that refreshing taste of local juice. We have over 20 types of juices, and a partition for desserts lovers.</p>
                    <a href="#ourMenu" class="btn btnDefault">check our menu</a>
                </div>
                <div class="aboutImage" data-aos="fade-left" data-aos-duration="1000">
                    <div class="imageBox">
                        <h3>20+ years experience</h3>
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/about-img.jpg" alt="About Image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Menu Section -->
    <section class="menuSection secPadding" id="ourMenu">
        <div class="container">
            <div class="row">
                <div class="sectionTitle" data-aos="fade-down" data-aos-duration="500">
                    <h2 data-title="order now">our menu</h2>
                </div>
            </div>
            <div class="row">
                <div class="menuTabs" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                    <button type="button" class="menuTabItem active" data-target="#lunch">lunch</button>
                    <button type="button" class="menuTabItem" data-target="#dinner">dinner</button>
                    <button type="button" class="menuTabItem" data-target="#drinks">drinks</button>
                    <button type="button" class="menuTabItem" data-target="#desserts">desserts</button>
                </div>
            </div>
            <div class="row menuTabContent active" id="lunch">
                <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/1.jpg" alt="menu item thumbnail">
                        <h3>lunch item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $40.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/2.jpg" alt="menu item thumbnail">
                        <h3>lunch item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $40.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/3.jpg" alt="menu item thumbnail">
                        <h3>lunch item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $40.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/4.jpg" alt="menu item thumbnail">
                        <h3>lunch item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $40.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/5.jpg" alt="menu item thumbnail">
                        <h3>lunch item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $40.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/6.jpg" alt="menu item thumbnail">
                        <h3>lunch item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $40.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/7.jpg" alt="menu item thumbnail">
                        <h3>lunch item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $40.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/8.jpg" alt="menu item thumbnail">
                        <h3>lunch item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $40.00
                    </div>
                </div>
            </div>
            <div class="row menuTabContent" id="dinner">
                <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/1.jpg" alt="menu item thumbnail">
                        <h3>dinner item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $30.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/2.jpg" alt="menu item thumbnail">
                        <h3>dinner item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $30.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/3.jpg" alt="menu item thumbnail">
                        <h3>dinner item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $30.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/4.jpg" alt="menu item thumbnail">
                        <h3>dinner item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $30.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/5.jpg" alt="menu item thumbnail">
                        <h3>dinner item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $30.00
                    </div>
                </div>
            </div>
            <div class="row menuTabContent" id="drinks">
                <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/1.jpg" alt="menu item thumbnail">
                        <h3>drink item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $10.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/2.jpg" alt="menu item thumbnail">
                        <h3>drink item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $10.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/3.jpg" alt="menu item thumbnail">
                        <h3>drink item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $10.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/4.jpg" alt="menu item thumbnail">
                        <h3>drink item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $10.00
                    </div>
                </div>
            </div>
            <div class="row menuTabContent" id="desserts">
                <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/1.jpg" alt="menu item thumbnail">
                        <h3>dessert item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $20.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/1.jpg" alt="menu item thumbnail">
                        <h3>dessert item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $20.00
                    </div>
                </div>
                <div class="menuItem" data-aos="fade-up-left" data-aos-duration="1000">
                    <div class="menuItemTitle">
                        <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/menu/1.jpg" alt="menu item thumbnail">
                        <h3>dessert item</h3>
                    </div>
                    <div class="menuItemPrice">
                        $20.00
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Testimonials Section -->
    <section class="testimSection secPadding" id="testim">
        <div class="container">
            <div class="row">
                <div class="sectionTitle" data-aos="fade-down" data-aos-duration="500">
                    <h2 data-title="testimonials">some feedbacks</h2>
                </div>
            </div>
            <div class="row testimItemContainer">
                <div class="testimItem" data-aos="flip-up" data-aos-duration="2000">
                    <div class="testimAuthor">
                        <div class="testimAuthorName">
                            <h3>Shrouk Emam</h3>
                            <span>Social Media Specialist</span>
                        </div>
                        <div class="testimAuthorImage">
                            <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/testimonials/2.jpg" alt="Client">
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nostrum non provident aut ex, error molestiae quia impedit placeat repellat.</p>
                    <div class="ratings">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimItem" data-aos="flip-up" data-aos-duration="2000">
                    <div class="testimAuthor">
                        <div class="testimAuthorName">
                            <h3>Ahmed Hafez</h3>
                            <span>Front-End Web Developer</span>
                        </div>
                        <div class="testimAuthorImage">
                            <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/testimonials/3.jpg" alt="Client">
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nostrum non provident aut ex, error molestiae quia impedit placeat repellat.</p>
                    <div class="ratings">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star transparentStar"></i>
                    </div>
                </div>
                <div class="testimItem" data-aos="flip-up" data-aos-duration="2000">
                    <div class="testimAuthor">
                        <div class="testimAuthorName">
                            <h3>Omnia Tharwet</h3>
                            <span>HR Director</span>
                        </div>
                        <div class="testimAuthorImage">
                            <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/testimonials/1.jpg" alt="Client">
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nostrum non provident aut ex, error molestiae quia impedit placeat repellat.</p>
                    <div class="ratings">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Team Section -->
    <section class="teamSection secPadding" id="team">
        <div class="container">
            <div class="row">
                <div class="sectionTitle" data-aos="fade-down" data-aos-duration="500">
                    <h2 data-title="team">our chefs</h2>
                </div>
            </div>
            <div class="row teamItemContainer">
                <div class="teamItem" data-aos="zoom-out-up" data-aos-duration="2000">
                    <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/team/1.jpg" alt="team item">
                    <div class="teamItemInfo">
                        <h3>Eman Younes</h3>
                        <p>head chef</p>
                    </div>
                </div>
                <div class="teamItem" data-aos="zoom-out-up" data-aos-duration="2000">
                    <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/team/2.jpg" alt="team item">
                    <div class="teamItemInfo">
                        <h3>Mohamed Ali</h3>
                        <p>head chef</p>
                    </div>
                </div>
                <div class="teamItem" data-aos="zoom-out-up" data-aos-duration="2000">
                    <img src="<?php echo get_bloginfo('template_directory') ?>/assets/img/team/3.jpg" alt="team item">
                    <div class="teamItemInfo">
                        <h3>Asmaa Emam</h3>
                        <p>head chef</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <?php get_footer(); ?>
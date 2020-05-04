<?php 
    get_header();
?>

    <div class="hero-image" <?php body_class(); ?> style="background: url(<?php echo $src = the_post_thumbnail_url( '' ); ?> ) no-repeat center top !important; background-size: cover !important;">
        <div class="hero-text">
            <h1>Your ally on the journey to mental wellness.</h1>
            <form class="allyu-cta-btn-1" action="https://dev.allyu.org/registering-at-allyu/">
                <button><i class="fas fa-user"></i>BECOME A MEMBER</button>
            </form>
            <div id="section10">
                <a href="#thanks" id="scroll-btn"><span></span></a>
            </div>
        </div>
    </div> 

    <h6 class="mission-statement">Forming Allies & Serving the Mental Health Community Since 2019</h6>
    
    <div class="container">
        <div class="row">
            <?php the_content(); ?>
        </div>
    </div>
    <main style="padding-top: 4.5rem; padding-bottom: 4.5rem;">
        <div class="container">
            <div class="row support-group-intro">
                <h1>Experience Our Community</h1>
                <p>AllyU has over 60+ online support groups where members share their experiences in a positive environment designed to inspire, encourage, and empower.</p>
            </div>
        
            <div class="row equal-height-columns">
                <div class="col-xs-12 col-sm-6 col-md-3 support-group column">
                    <div class="card">
                        <img src="<?php echo $src = get_theme_file_uri('/img/depression.jpg'); ?>" />
                        <h3>Depression</h3>
                        <p>Sadness touches our lives at different times, but usually comes and goes. Depression can leave you feeling continuously burderened and can squash the joy you once got out of pleasurable activities.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 support-group column">
                    <div class="card h-100">
                        <img src="<?php echo $src = get_theme_file_uri('/img/grief.jpg'); ?>" />   
                        <h3>Grief</h3>
                        <p>Sometimes our lives undergo changes we feel we aren't prepared for. We may experience sadness, hopelessness, and the longing for something that isn't there anymore.  Find support for grief here.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 support-group column">
                    <div class="card h-100">
                        <img src="<?php echo $src = get_theme_file_uri('/img/marriage.jpg'); ?>" />
                        <h3>Marriage/Family Relationships</h3>
                        <p>Relationships are a good source of love and support, but it can be stressful at times.  Learn strategies to cope with stressors and navigate social challenges to improve your relationship well-being.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 support-group column">
                    <div class="card h-100">
                        <img src="<?php echo $src = get_theme_file_uri('/img/bipolar.jpg'); ?>" />
                        <h3>Bipolar Disorder</h3>
                        <p>Peer-to-Peer support group for people who are dealing with the challenges of bipolar disorder.</p>
                    </div>
                </div>
            </div> 

        </div>
    </main>

    <section class="allyu-counter-stats">
        <div class="container">
            <div class="row">
                <p class="subtitle fancy"><span>Join today and find a <b>trusted resource</b> in our directory</span></p>

                <div class="col-md-4">
                    <div class="counter">
                        <i class="fas fa-code-branch"></i>
                        <h2 class="timer count-title count-number" data-to="300" data-speed="1500" >60</h2>
                        <p class="feature"><b>Online therapists</b> available 24/7 in our chatroom.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="counter">
                        <i class="fas fa-brain"></i>
                        <h2 class="timer count-title count-number" data-to="300" data-speed="1500" >200</h2>
                        <p class="feature">Links to our <b>mental health resources</b>, including counseling, medication therapy, shelters, and emergency hotlines.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="counter">
                        <i class="fas fa-apple-alt"></i>
                        <h2 class="timer count-title count-number" data-to="300" data-speed="1500" >500</h2>
                        <p class="feature">Links to <b>food banks, non-profit pantries, & donation centers</b></p>
                    </div>
                </div>
            </div>
            <div class="row allyu-cta">
                <form class="allyu-cta-btn-1" action="https://dev.allyu.org/registering-at-allyu/">
                    <button><i class="fas fa-user"></i>BECOME A MEMBER</button>
                </form>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">

            <div class="row support-group-intro">
                <h1>AllyU Feature Highlights</h1>
                <p>AllyU provides you with the latest in social technology to help you connect with others and recieve excellent mental health support.</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="service-group">
                        <div class="service-title">
                            <i class="far fa-comments"></i>
                            <h3>Chat Rooms</h3>
                        </div>
                        <p class="feature">Join live chats with other members and participate in online therapy sessions.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-group">
                        <div class="service-title">
                            <i class="fas fa-users"></i>
                            <h3>Group Forums</h3>
                        </div>
                        <p class="feature">60+ Mental Health Forums to help you share your thoughts in a positive and collaborative setting.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-group">
                        <div class="service-title">
                            <i class="fas fa-satellite-dish"></i>
                            <h3>Live Community</h3>
                        </div>
                        <p class="feature">Organize real life meetups and events in your community and invite your friends!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-group">
                        <div class="service-title">
                            <i class="fas fa-brain"></i>
                            <h3>e-Learning Sessions</h3>
                        </div>
                        <p class="feature">Licensed Mental Health Practitioners host online sessions to help you learn about your mental well-being.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-group">
                        <div class="service-title">
                            <i class="far fa-envelope"></i>
                            <h3>Instant Messaging</h3>
                        </div>
                        <p class="feature">Connect with your favorite members through private messaging.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="service-group">
                        <div class="service-title">
                            <i class="fas fa-user"></i>
                            <h3 class="timer">Personal Profile</h3>
                        </div>
                        <p class="feature">Let other members connect with the real you. Customize your personal profile <a href="#">today</a></p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="emergency"> 
        <div class="emergency-content">    
            <h2 class="emergency-intro">!<br> Emergency Services 24/7 Hotlines</h2>
            <p class="emergency-p"><b>AllyU</b> is dedicated to providing you with links to mental health services and resources from your local community.  If you need immediate help or feel unsafe, you may call <b>911</b> for psychiatric or medical attention or access our <b>Emergency Directory</b> with links from 24/7 call centers, hotlines, and warmlines available. **Please be aware that AllyU does not recommend the use of these resources as a replacement for professional help.  Please follow your healthcare provider's advice.</p>
        </div>
    </section>
    
    <?php 
        get_footer();
    ?>
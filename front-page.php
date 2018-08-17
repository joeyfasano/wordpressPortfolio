
<?php get_header(); ?>

  

<!-- hero -->
<section id="hero" class="hero is-dark is-large">
        <div class="dark-overlay">
            <div class="hero-body has-text-centered">
                <h1 class="title is-1">Joey Fasano</h1>
                <h2 class="subtitle is-3">Web Developer
                    <br>
                    <a href="https://www.linkedin.com/in/joseph-fasano/" target="_blank">
                        <i id="icon" class="fab fa-linkedin fa-1x grow"></i>
                    </a>
                    <a href="https://github.com/joeyfasano" target="_blank">
                        <i id="icon" class="fab fa-github fa-1x grow"></i>
                    </a>
                </h2>
            </div>
        </div>
    </section>

    <!-- ABOUT ME -->
    <section id="about" class="section is-medium">
        <div class="container">
            <div class="columns">
                <div class="column three-quarters">


                    <h2 class="title is-2">About Me</h2>
                    <hr>
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) :                the_post(); 
                            the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>             
                   
                    
                </div>

                <div id="headshot" class="column is-one-quarter">
                    <img class="round" src="<?php echo get_template_directory_uri(); ?>/images/joeyheadshot.jpg" alt="">
                </div>

            </div>
        </div>
    </section>

    <!-- projects -->
    <section id="projects" class="section is-medium">
        <div class="container">
            <h2 class="title is-2">Projects</h2>
            <hr>
            <div class="columns">
               
                <!-- project 1: portfolio -->
                <div class="column is-one-third">
                    <div class="card">
                        <div class="card-image">
                            <a href="http://stormy-fjord-21749.herokuapp.com/" target="_blank"><figure class="image is-4by3 project-grow">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/portfolio.png" alt="Placeholder image">
                            </figure></a>
                        </div>
                    </div>

                    <h3 class="title is-4">Portfolio</h3>
                    <p class="subtitle is-6"> This looks familiar! My portfolio was built using a custom WordPress theme that utilizes PHP code to make content interchangable. Click on the image to access the Github repository.
                    </p>
                </div>
                <!-- project 2: suite dreams -->
                <div class="column is-one-third">
                    <div class="card">
                        <div class="card-image">
                            <a href="http://stormy-fjord-21749.herokuapp.com/" target="_blank"><figure class="image is-4by3 project-grow">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/suitedreams.png" alt="Placeholder image">
                            </figure></a>
                        </div>
                    </div>

                    <h3 class="title is-4">Suite Dreams</h3>
                    <p class="subtitle is-6"> Suite Dreams is an application that allows users to easily and seamlessly record their dreams. This application
                        utilizes modern technologies like sentiment analysis and data visualization to enhance the user’s
                        experience. 
                    </p>
                </div>
                <!-- project 3: hobbyist -->
                <div class="column is-one-third">
                    <div class="card">
                        <div class="card-image">
                            <a href="https://github.com/argarlin24/hobbyist" target="_blank"><figure class="image is-4by3 project-grow">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/hobbyist3.png" alt="Placeholder image">
                            </figure></a>
                        </div>
                    </div>
                    <h3 class="title is-4">Hobbyist</h3>
                    <p class="subtitle is-6"> The Hobbyist project began with the vision to create an application that provides users with an environment
                        to discover new hobbies by teaching and learning from each other.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- skills -->
    <section id="skills" class="section">
        <div class="container has-text-centered">
        <h2 class="title is-2">Tech Skills</h2>
            <hr>
            <i class="fab fa-html5 fa-10x skill"></i>
            <i class="fab fa-css3-alt fa-10x skill"></i>
            <i class="fab fa-js-square fa-10x skill"></i>
            <i class="fab fa-node fa-10x skill"></i>
            <i class="fab fa-php fa-10x skill"></i>
            <i class="fab fa-wordpress fa-10x skill"></i>
            <i class="fab fa-react fa-10x skill"></i>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="">
        <div class="dark-overlay section is-large">
            <div class="container has-text-centered">

                <h1 class="title" style="color:white">Contact Me:</h1>
                <h2 class="subtitle is-4" style="color:white">joeyfasano@gmail.com
                    <br> (619) 410-2995
                </h2>

            </div>
        </div>
    </section>

<?php get_footer(); ?>


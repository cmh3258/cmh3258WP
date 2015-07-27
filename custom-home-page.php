<?php
/**
 * Template Name: Custom Home Page
 *
 */

get_header(); ?>


    <div class="full-screen-back">
      <div>
        <p id="hello">Hello</p>
        <p id="welcome">Welcome to my site</p>
      </div>
    </div>

    <section class="about-preview" id="about-preview">
      <div>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/chris.png" class="profilePicture" alt="ME"/>
        <h2>I am Chris Hume.</h2>
        <p>Developer <a href="https://twitter.com/HarvestDelivery" target="_blank" class="harvest">@Harvest</a>, 
          Recent grad from UT Austin, Lover of tech, sports, <!-- <a href="https://twitter.com/Medium" target="_blank" class="medium">Medium</a> --> and Jesus. 
          <!--<a href="" class="readMore">Read My Story</a>-->
        </p>
        <hr>
        <ul>
          <li><a href="https://medium.com/@yeddiejones" target="_blank" class="medium">Medium</a></li>
          <li><a href="https://twitter.com/yeddiejones" target="_blank" class="twitter">Twitter</a></li>
          <li><a href="https://github.com/cmh3258" target="_blank" class="github">GitHub</a></li>
          <li><a href="https://www.linkedin.com/in/chrismhume" target="_blank" class="linkedIn">LinkedIn</a></li>

      </div>
    </section>
    
   <!--  <section class="work-preview" id="work-preview">
      <h2>Work.</h2>
      <div class="previewContent">
        <div class="left-preview">
          <div class="">
            <img src="harvestd.png" alt="harvest" class="harvestScreen"/>
          </div>
          <h3>Harvest</h3>
          <p>
            Developer. Building Front end in AngularJS, HTML, CSS, Jquery and Javascript. 
            With the help of Yeoman, Grunt and Bower. <a href="" class="readMore">Read More</a>
          </p>
        </div>
        <div class="middle-preview">
          <div class="">
            <img src="myoldsite.png" alt="harvest" class="oldSiteScreen"/>
          </div>
          <h3>Old Personal Site</h3>
          <p>
            Developed my old site with HTML, CSS and a bit of Javascript. <a href="" class="readMore">Read More</a>
          </p>
        </div>
        <div class="right-preview">
          <div class="">
            <img src="recommenu.jpg" alt="harvest" class="recommenuScreen"/>
          </div>
          <h3>Recommenu</h3>
          <p>
            Developer. Built a B2B Rating product with AngularJS, HTML, CSS, Jquery and Javascript. 
             <a href="" class="readMore">Read More</a>
          </p>
        </div>
      </div>
    </section> -->


    <!-- <div id="preview-posts">
      <h2>Recent Articles.</h2>
      
      <?php
       /* $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 ) );

        if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();
            // Loop output goes here

            get_template_part( 'content', get_post_format() );

        endwhile; endif;*/
      ?>

      <h2>Work.</h2>
      
      <?php
       /* $latest_blog_posts = new WP_Query( 'cat=3&posts_per_page=3' );

        if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();
            // Loop output goes here

            get_template_part( 'content', get_post_format() );

        endwhile; endif;*/
      ?>
    </div>
 -->
    <footer>
      <p>Glad you stopped by. Peace Fam.</p>
    </footer>



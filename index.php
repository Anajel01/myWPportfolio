<?php get_header() ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>

    <?php
    $firsttext = get_field("first_title_text");
    $secondtext = get_field("second_title_text");
    $thirdtext = get_field("third_title_text");
    $fourthtext = get_field("fourth_title_text");
    $heroimage = get_field("hero_image");
    $yourlogo = get_field("your_logo");
    $lineopener = get_field("line_opener");
    $nextsection = get_field("next_section");
    $titletext = get_field("title_text");
    $aboutme = get_field("about_me_paragraph");
    $selfimage = get_field("self_image");
    $callaction = get_field("call_to_action_text");
    $cv = get_field("cv");
    $videourl = get_field("video_url");

    
    ?>

    <div class="everything">
        <div class="titletext">
            <p><?php echo $firsttext ?></p>
            <p><?php echo $secondtext ?></p>
            <p><?php echo $thirdtext ?></p>
            <p><?php echo $fourthtext ?></p>
        </div>
        
            
            
    </div>
    </div> <!-- .hero-section -->


    <div class="hexagondiv">
    <div class="welcometext">
        <p-1> <?php echo $lineopener ?> </p-1>
    </div>
    <div class="arrow"></div>
    <div class="hexagonbg">
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
    </div>
    <div class="hexagonbg">
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
    </div>
    <div class="hexagonbg">
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
    </div>
    <div class="hexagonbg">
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
    </div>
    
   </div>

  <div class="about"> 
    <div class="playerone">
        <img src="<?php echo $selfimage["url"] ?>" alt="">
    </div>  
    <div class="info">
        <h1><?php echo $titletext ?></h1>
        <p>
        <?php echo $aboutme ?>
        </p>
    
        <h2><?php echo $callaction ?></h2>
        
        <div class="button">
            <a href="<?php echo $cv["url"] ?>">CV</a>
            <a href="<?php echo $videourl ?>">video</a>
        </div>
    </div> 
   
    
    
  </div>

  <div class="hexagondiv">
    <div class="welcometext">
        <p-1> <?php echo $nextsection ?> </p-1>
    </div>
    <div class="arrow"></div>
    <div class="hexagonbg">
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
    </div>
    <div class="hexagonbg">
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
    </div>
    <div class="hexagonbg">
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
    </div>
    <div class="hexagonbg">
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
        <div class="hexagon"></div>
    </div>
    
   </div>
    <?php
    $cardLoop = new WP_Query(array(
        "post_type" => "card",
        "posts_per_page" => -1
    ));
    ?>
    <?php if($cardLoop->have_posts()): ?>
        <?php while($cardLoop->have_posts()): $cardLoop->the_post() ?>

            <?php
            $projecttitle = get_field("project_title");
            $projectdescription = get_field("project_description");
            $projectimage = get_field("project_image");
            ?>

            <!-- HTML -->
<div  class="cardsection">
   
    <div class="card">
        <img src="<?php echo $projectimage["url"] ?>" alt="Card Image">
        <div class="card-content">
            <h2><?php echo $projecttitle ?></h2>
            <p><?php echo $projectdescription ?></p>
        </div>
    </div>
    </div>

        <?php endwhile; ?>
    <?php endif ?>




    <?php endwhile; ?>
    <?php endif; ?>
    

<?php get_footer() ?>
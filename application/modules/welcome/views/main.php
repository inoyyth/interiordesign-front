<div class="site-blocks-cover overlay" style="background-image: url(<?php echo $banner['image'];?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center text-center justify-content-center">
          <div class="col-md-8">
            <span class="sub-text">Contractor Company</span>
            <h1>Falco Konstruksi</h1>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-block-1">
      <div class="container">
        <div class="row">
          <?php 
          if(count($top_block) > 0) {
            foreach($top_block as $kTopBlock=>$vTopBlock) {
          ?>
          <div class="col-lg-4">
            <a href="#" class="site-block-feature d-flex p-4 rounded mb-4">
              <div class="mr-3">
                <span class="icon flaticon-window font-weight-light h2"></span>
              </div>
              <div class="text">
                <h3><?php echo $vTopBlock['title']['rendered'];?></h3>
                <p class="clamped-text"><?php echo remove_p_tags($vTopBlock['content']['rendered']);?></p>
              </div>
            </a>   
          </div>
          <?php } } ?>
        </div>
      </div>
    </div>

    <div class="site-section border-bottom">
      <div class="container">
        <div class="row">
          <?php 
            if (count($middle_block) > 0) {
              foreach ($middle_block as $kMiddleBlock=>$vMiddleBlock) {
          ?>
          <div class="col-md-6 mb-5 mb-lg-0">
            <div class="media custom-media">
              <div class="mr-3 icon"><span class="flaticon-interior-design display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0"><?php echo $vMiddleBlock['title']['rendered'];?></h5>
                    <div class="clamped-text"><?php echo $vMiddleBlock['content']['rendered'];?></div>
              </div>
            </div>
          </div>
          <?php } } ?>
        </div>
      </div>
    </div>

    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="img-border">
              <img src="<?php echo $ask_us[0]['featured_image']['url'];?>" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-5 ml-auto">
            <span class="sub-title">Why Us</span>
            <h2 class="font-weight-bold text-black mb-5"><?php echo $ask_us[0]['title']['rendered'];?></h2>
            <div class="accordion" id="accordionExample">
              <?php 
                if (count($ask_us[0]['acf']['question_and_answer']) > 0) {
                foreach ($ask_us[0]['acf']['question_and_answer'] as $kQa=>$vQa) {
              ?>
              <h2 class="mb-0 border rounded mb-2">
                <button class="btn " type="button" data-toggle="collapse" data-target="#collapse-<?php echo $kQa+1;?>" aria-expanded="true" aria-controls="collapse-<?php echo $kQa+1;?>">
                  <?php echo $kQa + 1 . ". " . $vQa['question'];?>
                </button>
              </h2>

              <div id="collapse-<?php echo $kQa+1;?>" class="collapse <?php echo ($kQa==0 ? 'show' : '');?>" aria-labelledby="heading-<?php echo $kQa+1;?>" data-parent="#accordionExample">
                <div class="card-body">
                  <?php echo $vQa['answer'];?>
                </div>
              </div>
                <?php } } ?>
            </div>

          </div>
        </div>
      </div>
    </div>

    
    <div class="container site-section block-13 testimonial-wrap">

      <div class="row">
        <div class="col-12 text-center">
          <span class="sub-title">Happy Clients</span>
          <h2 class="font-weight-bold text-black mb-5">Testimonials</h2>
        </div>
      </div>

      <div class="nonloop-block-13 owl-carousel">
        <?php 
          if (count($testimonials) > 0) {
            foreach ($testimonials as $kTestimonial=>$vTestimonial) {
        ?>
        <div class="testimony">
          <img src="<?php echo $vTestimonial['featured_image']['url'];?>" alt="Image" class="img-fluid">
          <h3><?php echo $vTestimonial['title']['rendered'];?></h3>
          <span class="sub-title"><?php echo $vTestimonial['acf']['testimonial_job_title'];?></span>
          <p class"clamped-text"><?php echo $vTestimonial['content']['rendered'];?></p>
        </div>
        <?php } } ?>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <span class="sub-title">News &amp; Update</span>
            <h2 class="font-weight-bold text-black mb-5">Our Latest Posts</h2>
          </div>
        </div>
        <div class="row mb-5">
          <?php 
            if (count($latest_post) > 0) {
              foreach ($latest_post as $kLatestPost=>$vLatestPost) {
          ?>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
            <a href="#" class="d-block figure figure-index">
              <img src="<?php echo $vLatestPost['featured_image']['url'];?>" alt="Image" class="img-fluid">
            </a>
            <span class="text-muted d-block mb-2">23, January 2019</span>
            <h3><a href="<?php echo site_url('news/' . $vLatestPost['slug'] . '-' . $vLatestPost['id']);?>"><?php echo $vLatestPost['title']['rendered'];?></a></h3>
          </div>
          <?php } } ?>
        </div>
        <div class="row mt-5 text-center">
          <div class="col-12">
            <p><a href="<?php echo site_url('news');?>" class="btn btn-primary btn-lg rounded-0">View All Posts</a></p>
          </div>
        </div>
      </div>
    </div>

<div class="site-blocks-cover overlay inner-page" style="background-image: url(<?php echo $banner['image'];?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="sub-text">Get In Touch</span>
            <h1>Contact Us</h1>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12 col-lg-12">
          
            <h2 class="site-heading text-black mb-5"><?php echo $contact[0]['title']['rendered'];?></h2>
			<div><?php echo $contact[0]['content']['rendered'];?></div>
			<form id="form-inquiry-contact" lass="p-5 bg-white" action="<?php echo base_url('contact_us/submit_inquiry');?>">
			  <input type="hidden" name="<?=$csrf['name'];?>_contact" id="<?=$csrf['name'];?>_contact" value="<?=$csrf['hash'];?>"/>
				
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full name</label>
                  <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="phone">Phone no.</label>
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone No." required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" name="email-contact" class="form-control" placeholder="Email Address" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Type of works</label>
                  <select id="typeworks" name="type_works" class="form-control" required>
                    <option value="" disabled selected>Please choose</option>
                    <option value="house">Houses</option>
                    <option value="renovation">Renovation</option>
                    <option value="other">Others</option>
                  </select>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Starting projects</label>
                  <select id="starting" name="starting_project" class="form-control" required>
                    <option value="" disabled selected>Please choose</option>
                    <option value="asap">As soon as possible</option>
                    <option value="month1">1 - 3 Months</option>
                    <option value="month2">4 - 7 Months</option>
                    <option value="month3">8 - 12 Months</o ption>
                    <option value="don't know">Don't know</option>
                  </select>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Budget Estimation</label>
                  <select id="budget" name="budget" class="form-control" required>
                    <option value="" disabled selected>Please choose</option>
                    <option value="100-250 juta">100-250 juta</option>
                    <option value="250-500 juta">250-500 juta</option>
                    <option value="500 juta - 1 milyar">500 juta - 1 milyar</option>
                    <option value="> 1 milyar">> 1 milyar</option>
                  </select>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="location">Location</label>
                  <input type="text" id="location" name="location" class="form-control" placeholder="Location" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold">Contact via</label>
                  <select id="contact" name="contact_via" class="form-control" required>
                    <option value="" disabled selected>Please choose</option>
                    <option value="wa">Whatsapp</option>
                    <option value="sms">SMS</option>
                    <option value="phone">Phone</option>
                    <option value="email">Email</option>
                    <option value="anything">Anything</option>
                  </select>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
				           <button type="submit" id="btn-submit-inquiry" required="true" data-loading-text="Loading..."  class="btn btn-primary rounded-0 btn-lg">Send</button>
                </div>
              </div>
              <br>
              <div id="alert-contact-success" style="display:none;" class="alert alert-success alert-contact" role="alert"></div>
              <div id="alert-contact-failed" style="display:none;" class="alert alert-danger alert-contact" role="alert"></div>
  
            </form>
          </div>
        </div>
      </div>
    </div>

  <script>
    $(document).ready(function() {
      $("#form-inquiry-contact").submit(function(e){
          var url = $(this).attr('action');
          var data = $('form').serialize();
          var btn = $("#btn-submit-inquiry").button('loading');
          console.log(url);
          $.ajax({
              type: "POST",
              url: url,
              data: data,
              dataType: 'json',
              success: function(data){
                  console.log(data);
                  $("#"+data.csrfName+"_contact").val(data.csrfHash);
                  if (data.status === 200) {
                      $("#alert-contact-success").text(data.message).show();
                  } else {
                      $("#alert-contact-failed").text(data.message).show();
                  }
                  btn.button('reset');
                  setTimeout(function () { 
                    location.reload();
                  }, 3000);
              },
              error: function(error) {
                  $("#"+error.csrfName+"_contact").val(error.csrfHash);
                  $("#alert-contact-failed").text('Oops sory something wrong, please try again later').show();
                  btn.button('reset');
                  setTimeout(function () { 
                    location.reload();
                  }, 3000);
              }
          });
          setTimeout(function(){$(".alert-contact").hide(); }, 5000);
          e.preventDefault();
      });
    });
  </script>

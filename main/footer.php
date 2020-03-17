 <style type="text/css">
.res-br{
  display: none;
}
  input[type=text], input[type=number], input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #fff;
  padding: 20px 250px;
  margin: 0 auto;
}

.col-50 {
  float: left;
  width: 50%;
  display: inline-block;
  margin-top: 6px;/*
  padding:  0 50px;*/
}

.col-100 {
  float: left;
  width: 100%;
  margin-top: 6px;
  padding:  0 50px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.row{
  padding: 5px 50px;
}
.submit-btn{
  margin: 0 auto;
    width: 100%;
    display: block;
}
.first{
  padding: 0 10px 0 50px;
}
.second{
  padding: 0 50px 0 10px;
}
.pad-5{
   padding: 5rem;
}
.pl-50{
  padding-left: 50px;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  .desk-br{
    display: block;
  }
  .container {
    border-radius: 5px;
    background-color: #fff;
    padding: 0px 0px;
    margin: 0 auto;
  }
  .first{
    padding: 0 0px 0 0px;
  }
  .second{
    padding: 0 0px 0 0px;
  }
  .pad-5{
    padding: 1rem;
  }
  .submit-btn{
    width: 100%;
  }
  .col-50 {
    float: left;
    width: 100%;
    display: inline-block;
    margin-top: 6px;/*
    padding:  0 50px;*/
  }
  .row{
    padding: 0px 20px;
  }
  .col-100 {
    float: left;
    width: 100%;
    margin-top: 6px;
    padding:  0 0px;
  }

}
</style>

<div class="js-smooth-section u-bg-white">
<div class="pad-5">
<div class="container">
  <form id="req-forms-footer">
    <h3 class="o-h3 c-img-txt__title dark-teal" style="text-align: center;">Have questions? <br class="mob-block">Ask us anything.</h3>
      <div class="row">
      
        <div class="col-50 first">
          <input type="text" id="fname-footer" name="fname-footer" placeholder="First Name" required>
        </div>
      
        
        <div class="col-50 second">
          <input type="text" id="lname-footer" name="lname-footer" placeholder="Last Name" required>
        </div>
    </div>

    <div class="row">
      
        <div class="col-50 first">
          <input type="number" id="pnumber-footer" name="pnumber-footer" maxlength="10" placeholder="Phone Number" required>
        </div>
      
        
        <div class="col-50 second">
          <input type="email" id="email-footer" name="email-footer" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required>
        </div>
    </div>
    <!-- <div class="row">
      
      <div class="col-100">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div> -->
    <div class="row">
      
      <div class="col-100">
        <textarea id="subject-footer" name="subject-footer" placeholder="Message" style="height:200px" required></textarea>
      </div>
    </div>

     <div class="row">
      
      <div class="col-100">
        <h3 id="successmessage"></h3>
      </div>
    </div><br><br>  
    <div class="row">
      <button type="submit" id="req-submit" class="center-btn">
      <div class="c-btn c-btn--dark | js-btn submit-btn">
        <div class="c-btn__borders">
          <span class="c-btn__border c-btn__border--top | js-btn__border--horizontal"></span>
          <span class="c-btn__border c-btn__border--bottom | js-btn__border--horizontal"></span>
          <span class="c-btn__border c-btn__border--left | js-btn__border--vertical"></span>
          <span class="c-btn__border c-btn__border--right | js-btn__border--vertical"></span>
        </div>
        <div class="c-btn__text c-btn__text--top | js-btn__text--top">REQUEST AN APPOINTMENT</div>
        <div class="c-btn__text c-btn__text--bottom | js-btn__text--bottom" aria-hidden="true">REQUEST AN APPOINTMENT</div>
      </div>
      </button>

    </div>
  </form>

  <script>
    $(document).ready(function() { 
        $('#req-forms-footer').submit(function(event) {
          event.preventDefault();
          var formdata = $('#req-forms-footer').serialize();
          // alert(formdata);

            if ($('#fname-footer').val() != "" && $('#lname-footer').val() != "" && $('#pnumber-footer').val() != "" && $('#email-footer').val() != "" && $('#subject-footer').val() != "") {
                
                 $.ajax({
                                  url:'form-footer.php',
                                  type:'POST',
                                  data:formdata,
                                  success:function(result){
                                    
                                      
                                      $("#successmessage").css("display", "block");
                                      $("#successmessage").html("Your enquiry has been sent successfully");
                                      $("#fname-footer, #lname-footer, #pnumber-footer, #email-footer, #subject-footer").val("");
                                      // alert("its working");
                                  }
                        });

            
        }
                 else{
                  alert("All fields are mandatory");
                      }
        });
    });

    </script>


</div>
</div>
</div>





 <div class="o-page__bottom | js-smooth-section">
  <footer 
  class="c-site-foot o-gutter-s" 
  data-cursor='["light"]'
  data-parallax='{"yPercent": "[-0.75, 0]"}'
  data-parallax-no-firefox
>


  <div class="o-row">
    <div class="c-site-foot__top o-padding-top-s o-padding-bottom-xs">
      <a href="#" class="c-site-foot__logo" aria-label="Home">
        <img src="../assets/images/img/logo.png" >
      </a>
      <nav class="c-site-foot__nav" style="text-align: center;">
        <div class="c-site-foot__menu">
          <h4 class="c-site-foot__title o-h4">Get in touch</h4>

          <ul class="c-site-foot-menu">
            <li class="c-site-foot-menu__item">
              <a href="tel:727-733-6111" class="c-site-foot-menu__link | js-site-link" style="font-size: 45px;color: #ffffff;">727-733-6111</a>
            </li>
            <style type="text/css">
              .social-icon{
                font-size: 30px;
                color: #ffffff !important;
                padding: 10px;
              }
              .social-icon:hover{
                color: #008081 !important;
                padding: 10px;
              }
            </style>
            <li class="c-site-foot-menu__item">
             <a href="https://www.linkedin.com/company/health-and-psychiatry/"><i class="fa fa-linkedin social-icon"></i></a> 
             <a href="https://www.youtube.com/user/psychiatristfl"><i class="fa fa-youtube social-icon"></i></a> 
             <a href="https://www.facebook.com/healthandpsychiatry"><i class="fa fa-facebook social-icon"></i></a> 
            </li>

            
            <!-- <li class="c-site-foot-menu__item">
              <a href="#" class="c-site-foot-menu__link c-site-foot-menu__link--email | js-site-link">mail@health.com</a>
            </li> -->
          </ul>
        </div>
        <!-- <div class="c-site-foot__item">
          <h4 class="c-site-foot__title o-h4">Company</h4>
          <ul class="c-site-foot-menu">

                          <li class="c-site-foot-menu__item">
                <a href="#" class="c-site-foot-menu__link | js-site-link">About us</a>
              </li>
                          <li class="c-site-foot-menu__item">
                <a href="#" class="c-site-foot-menu__link | js-site-link">Treatments</a>
              </li>
                          <li class="c-site-foot-menu__item">
                <a href="#" class="c-site-foot-menu__link | js-site-link">Services</a>
              </li>
                          <li class="c-site-foot-menu__item">
                <a href="#" class="c-site-foot-menu__link | js-site-link">Contact</a>
              </li>
            
          </ul>
        </div> -->
      </nav>
    </div>
    <div class="c-site-foot__bottom">
      <p>Health and Psychiatry 2020 © A division of Behavioral Consultants, Inc. All rights reserved.</p>
      <p style="display: inline-block;float: right;">Designed &amp; Developed by <a href="https://ameritechgrp.com/"> Ameritech</a></p>
    </div>
  </div>
</footer> 
</div>
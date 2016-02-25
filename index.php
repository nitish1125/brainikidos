<?php 
$message='';
$ret= false;
if (isset($_POST['email']) && isset($_POST['phone'])) {
 //send email
 $name = isset($_POST['name']) ? $_POST['name'] : '';
 $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
 $email = isset($_POST['email']) ? $_POST['email'] : '';
 $message = isset($_POST['message']) ? $_POST['message'] : '';

 if(!empty($name) && !empty($email) && !empty($message)){

  $msg = 'Name: '. $name ."\r\n";
  $msg .= 'Phone: '. $phone ."\r\n";
  $msg .= 'Email: '. $email ."\r\n";
  $msg .= 'Message: '. $message ."\r\n";
   $headers = 'From: brainykidos@gmail.com' . "\r\n";
  mail("brainykidos@gmail.com,dinesh@thinkoverit.com", 'Query From BrainyKidos Site.', $msg,$headers);
  
  $result['success'] = true;
  $result['message'] = 'Thank you for contacting us, we will get back to you as early as possible.';
 }else{
  $result['success'] = false;
  $result['message'] = 'Please fill all fields with valid data.';
 }
 
 echo json_encode($result);
 exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Brainykidos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Brainykidos">
    <meta name="author" content="Pixel6 Web Studio">    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="images/x-icon">
    <link rel="icon" href="images/favicon.ico" type="images/x-icon">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/media.css" rel="stylesheet">
    <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE]>
     <link href="css/ie_all.css" rel="stylesheet">
    <![endif]-->
</head>
<body class="bk_body">
    <div class="bk_wrapper">
        <header class="bk_header clearfix">
            <div class="bk_logo">
                <a href="#"><img src="images/brainy_logo.png" alt="Brainykidos"></a>
            </div>
            <ul class="bk_list" id="bk_nav">
                <li class="bk_listitems "><a href="#"><span class="nav_home"></span><em>home</em></a></li>
                <li class="bk_listitems list_products"><a href="#products"><span class="nav_products"></span><em>products</em></a></li>
                <li class="bk_listitems list_about"><a href="#about_us"><span class="nav_about"></span><em>about us</em></a></li>
                <li class="bk_listitems list_contact"><a href="#contact_us"><span class="nav_contact"></span><em>contact us</em></a></li>
            </ul>
        </header>
        <div class="bk_container">
            <div class="bk_slider" id="products">
            
            
                <div class="bx_slider" id="slide_show">
                
                
                    <div class="slide1">
                        <div class="slider_main_section clearfix">
                            <div class="slidermain_container clearfix">
                                <div class="product_wrapper">
                                    <div class="slider_image">
                                        <img src="images/Midbrain-activation.png" alt="">
                                    </div>
                                    <div class="slider_image_background"></div>
                                    <div class="learnlink_wrapper clearfix"><a href="http://www.wisegeek.com/what-are-the-functions-of-the-midbrain.htm" class="learnmore_link" target="_blank">Learn more about MidBrain Activation</a></div>
                                </div>
                                
                                <div class="slider_description">
                                    <h3>MidBrain Activation</h3>
                                    <h4>What is Mid Brain?</h4>
                                    <p>The midbrain is a small region of the brain that serves as a relay center for visual,
                                        auditory, and motor system information. The midbrain is located above the brain stem of human
                                        beings. it is responsible for the perception of stimuli and the subsequent communication with the
                                        right and left hemispheres to process this perceptive information. Typically, as part of the lower
                                        brain centres, the mid brain is not subject to an individuals conscious awareness. Mid-Brain activation
                                        is the scientific method. Do you know that 95% of your brain is not used. Its usage can be maximized using Mid Brain Activation.</p>
                                    <h4>Why Middle Brain needs to be activated?</h4>
                                    <p>As individuals grow older, the brain has the tendency to automatically assign one
                                        hemisphere the brain to become more dominant in performing certain task(a process known as
                                        lateralisation). This means we end up using much less of our brain that we actually could! The process
                                        of "activating" the midbrain reverses this trend and allows us to use our brain more efficiently,
                                        hence the improvement in cognitive abilities and also the process of "activating" the midbrain will result in better communication with the left and right hemispheres</p>
                                    <h4>Benefits of activated Mid Brain?</h4>
                                    
                                    <ol>
                                        <li>Improves memory,</li>
                                        <li>improves concentration,</li>
                                        <li>more confidence,</li>
                                        <li>emotional stability,</li>
                                        <li>improves sensory perceptions</li>
                                        <li>improve motor skills</li>
                                        <li>Easy to relax</li>
                                    </ol>
                                    <a href="http://www.wisegeek.com/what-are-the-functions-of-the-midbrain.htm" class="learnmore_link" target="_blank">Learn more about MidBrain Activation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="slide2">
                        <div class="slider_main_section clearfix">
                            <div class="slidermain_container clearfix">
                                
                                <div class="product_wrapper">
                                    <div class="slider_image">
                                        <img src="images/BrainMap.png" alt="">
                                    </div>
                                    <div class="slider_image_background"></div>
                                    <div class="learnlink_wrapper clearfix"><a href="https://www.youtube.com/watch?v=OLLVYx0IPPU" class="learnmore_link" target="_blank">Learn more about D.M.I.T.</a></div>
                                </div>
                                
                                <div class="slider_description">
                                    <h3>D.M.I.T.</h3>
                                    <h4>Identify the hidden potential and leaning style of your child</h4>
                                    
                                    <ol>
                                        <li>Is your child more creative or logical</li>
                                        <li>is your child a quick or slow learner</li>
                                        <li>is your child better at Planning or Execution</li>
                                        <li>does your child have a Special Talent you don’t nurture</li>
                                        <li>is your child more intelligent than you comprehend</li>
                                        <li>Does you child learn better by Hearing seeing or doing.</li>
                                    </ol>
                                    
                                    <h4>Answers to all these is Dermatoglyphics Multiple Intelligence Test</h4>
                                    
                                    <p>Dermatoglyphics is an ancient Greek word. It means (Derma = "skin", glyph = "carving")
                                    It is the scientific study of fingerprints.
                                    </p>
                                    
                                    <ul>
                                        <li>Dermatoglyphics refers to the branch of science which studies the patterns of skins (dermal) ridges
                                            present on the fingers, toes and the soles of human. Its reveals the congenital links between our
                                            fingers and our intrinsic qualities and talents.
                                        </li>
                                        <li>Dermatoglyphics has absolute scientific basis, with 200 years of research. 
                                        It is analyzed and proven with evidence in anthropology, genetics, medicine and statistics.
                                        </li>
                                    </ul>
                                    
                                    <h4>The Benefits of Dermatoglyphics Technology</h4>
                                    
                                    <h4>Understand your child’s innate characteristic</h4>
                                    
                                    <p>Parents often misunderstood their children simply because they do not know their inborn characteristic.                     </p>
                                    <p>Multiple intelligence test help parents to understand and to develop an effective way to interact with your child                        based on their inborn communication style.
                                    </p>
                                    
                                    <h4>Know your child’s inborn learning style or ability</h4>
                                    
                                    <p>To know exactly the natural learning style a child posses</p>
                                    <p>A kinesthetic learner is good in expressing their feeling/thought through body language and prefers
                                        to learn/memorize through operation and movement.</p>
                                    <p>A visual learner has sharp observation/visual differentiation and prefers to learn through observation and reading.
                                    </p>
                                    <p>An auditory learner prefers to learn through auditory sense/oral practice and able to assimilate, organize and arrange oral information.</p>
                                    
                                    <h4>Discover your child’s hidden talent & potential</h4>
                                    
                                    <p>To use a scientifically proven method (up to 95% accuracy) to reveal a child’s inborn potential(strength and weakness)</p>
                                    <p>To give parents an insight into their child and to groom them effectively to the talents they possess</p>
                                    <p>To enable parents to focus on their child’s strength and to eliminate the ‘guessing game’ on their talent. It will eliminate the ‘trial and error’ situation when parents send their child to a certain class(i.e. art class or music class) without knowing if the child is capable to comprehend.</p>
                              
                                    <a href="https://www.youtube.com/watch?v=OLLVYx0IPPU" class="learnmore_link" target="_blank">Learn more about D.M.I.T.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="slide3">
                        <div class="slider_main_section clearfix">
                            <div class="slidermain_container clearfix">
                                     
                                <div class="product_wrapper">
                                    <div class="slider_image">
                                        <img src="images/languagekids.png" alt="">
                                    </div>
                                    <div class="slider_image_background"></div>
                                    <div class="learnlink_wrapper clearfix"><a href="http://en.wikipedia.org/wiki/Language_immersion" class="learnmore_link" target="_blank">Learn more about Language immersion</a></div>
                                </div>

                                <div class="slider_description">
                                    <h3>Language immersion</h3>
                                    <ul>
                                        <li>French</li>
                                        <li>Spanish</li>
                                        <li>German</li>
                                    </ul>
                                    <h4>outcome of Language immersion</h4>
                                    <ul>
                                        <li>Improvement in linguistic and meta linguistic abilities.</li>
                                        <li>An increase of cognitive ability such as divergent thinking, concept formation, verbal abilities, listening skills and general reasoning</li>
                                        <li>Improves one's understanding of his/her native language.</li>
                                        <li>Opens the door to other cultures and helps a child understand and appreciate people from other countries.</li>
                                        <li>Increases job opportunities in many careers where knowing another language is a real asset.</li>
                                        <li>Enhances memory</li>
                                    </ul>
                                    <a href="http://en.wikipedia.org/wiki/Language_immersion" class="learnmore_link" target="_blank">Learn more about Language immersion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="slide4">
                        <div class="slider_main_section clearfix">
                            <div class="slidermain_container clearfix">
       
                                <div class="product_wrapper">
                                    <div class="slider_image">
                                        <img src="images/working_memory.jpg" alt="">
                                    </div>
                                    <div class="slider_image_background"></div>
                                    <div class="learnlink_wrapper clearfix"><a href="https://www.youtube.com/watch?v=7ZxF0aQGkLI&noredirect=1#t=144" class="learnmore_link" target="_blank">Learn more about Maths &#38; Memory</a></div>
                                </div>
                                
                                <div class="slider_description">
                                    <h3>Speed Maths, Sharp Memory and Study Skills</h3>
                                    <ul>
                                        <li>Mechanism of Memory</li>
                                        <li>Memory & Mind Maps</li>
                                        <li>Mnemonics & Peg Methods</li>
                                        <li>Effective Study Systems</li>
                                        <li>Rapid Reading Methods</li>
                                        <li>Mental Calculations</li>
                                    </ul>
                                    <a href="https://www.youtube.com/watch?v=7ZxF0aQGkLI&noredirect=1#t=144" class="learnmore_link" target="_blank">Learn more about Maths &#38; Memory</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="left_control" id="slider-prev"></div>
                <div class="right_control" id="slider-next"></div>
                
            </div>
            <ul class="slider_section_list clearfix" id="bx-pager">
                    <li class="section_listitems">
                        <a href="" class="clearfix" data-slide-index="0">
                            <span class="fa fa-map-marker list_marker"></span>
                            <span class="listitem_head">MidBrain Activation</span>
                        </a>
                    </li>
                    <li class="section_listitems">
                        <a href="" class="clearfix" data-slide-index="1">
                            <span class="fa fa-map-marker list_marker"></span>
                            <span class="listitem_head">D.M.I.T.</span>
                        </a>
                    </li>
                    <li class="section_listitems">
                        <a href="" class="clearfix" data-slide-index="2">
                            <span class="fa fa-map-marker list_marker"></span>
                            <span class="listitem_head">Language immersion</span>
                        </a>
                    </li>
                    <li class="section_listitems">
                        <a href="" class="clearfix"  data-slide-index="3">
                            <span class="fa fa-map-marker list_marker"></span>
                            <span class="listitem_head">Maths &#38; Memory</span>
                        </a>
                    </li>
                </ul>
            <div class="bk_about" id="about_us">
                <h3>Team behind activity centre</h3>
                <div class="about_wrapper clearfix">
                    <div class="about_image_section">
                        <div class="about_image"><img src="images/abot_people1.png" alt=""></div>
                        <div class="follow_wrapper clearfix"><span class="follow_link">Follow us on :</span><a class="follow_image" target="_blank"href="https://www.facebook.com/pages/BrainyKidos/629047947218016"><img src="images/social_fb.png" alt=""></a></div>
                    </div>
                    <div class="about_description">
                        <ul class="about_list">
                            <li>This Activity centre is symbiosis of people from various fields.</li>
                            <li>For Language Immersion centre has well qualified faculty.</li>
                            <li>Faculty of Speed Maths holds record in India book of records and Limca Book of Records.</li>
                            <li>D.M.I.T. reports are prepared by experts and counseling is done by trained staff.</li>
                            <li>Mid Brain Activation, classes are conducted by Senior Trainers.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bk_footer" id="contact_us">
        <div class="bk_footer_wrapper">
            <div class="footer_wrapper clearfix">
                <div class="contact_section clearfix">
                    <h2>Contact Us</h2>
                    
                    <form action="" method="post" id="contact-form">
                      <label class="lbl_contact">Full Name</label>
					  <input type="text" name="name" id="name" placeholder="Full Name">
					  <label class="lbl_contact">Email</label>
                      <input type="text" name="email" placeholder="Email">
					  <label class="lbl_contact">Phone Number</label>
                      <input type="text" name="phone" placeholder="Phone Number">
					  <label class="lbl_contact">Message</label>
                      <textarea name="message" id="message" placeholder="Message" ></textarea>
                      <div class="newsletter_submit clearfix">
                        <input type="submit" value="Send Query" name="submit_contact" id="submit_contact">
                        <div class="loader_img"><img src="images/ajax-loader.gif"/></div>
                      </div>
                    </form>
                    
                    <div id="msg-success" class="success"></div>	
                    <div class="error"></div>
                </div>
                <div class="program_section">
                    <h2>Upcoming Program</h2>
                    <span>Program Highlights:</span>
                    <ul class="highlights_list">
                        <li><span>Mid-Brain Activation Batch on coming Weekend.</span></li>
                        <li><span>Speed Maths classes are conducted on demand.</span></li>
                        <li><span>French and Spanish, New batches starting.</span></li>
                    </ul>
                </div>
                <div class="parents_section">
                    <h2>Parents speaks</h2>
                    <div class="" id="slide_show2">
                        <blockquote class="thoughts thoughts_slide">
                           <p>After doing Mid Brain Activation for my daughter,
                           I have observed that her concentration and
                           decision making has improved.
                           </p>
                           <em>- Suresh Kakad, Athletics coach Balewadi stadium.</em>
                        </blockquote>
                        <blockquote class="thoughts thoughts_slide">
                           <p>My daughter loves to attend Language Immersion classes.
                           I also liked the way language is taught to kids.
                           </p>
                           <em>- Swapna Chaturvedi, Software Engineer.</em>
                        </blockquote>
                        <blockquote class="thoughts thoughts_slide">
                           <p>After the D.M.I.T. test,I was able to understand my son’s potentials and his learning style.
                           This will help me to communicate effectively with him.
                           </p>
                           <em>- Mr. Samul, NDA road</em>
                        </blockquote>
                    </div>
                    <div class="control_thoughts"><span id="slider-prev1" ></span> <span href="#" id="slider-next1" ></span></div>
                </div>
            </div>
            <div class="copyright_section clearfix">
                <div class="copy_phone">
                    <span class="fa fa-phone"></span>
                    <span>+91 94030 67900 / 80870 78030</span>
                </div>
                <div class="copy_rights">
                    <span>Copyright 2014 BrainyKidos. All rights reserved.</span>
                </div>
            </div>
            <div id="up_control">
             up
            </div>
        </div>
    </footer>
       <script >
        

      $('#contact-form').on('submit',function(e) {
	   $(".loader_img").show();
       $.ajax({
       url:'index.php',
       data:$(this).serialize(),
       type:'POST',
       dataType:'json',
       success:function(data){
        if(data.success == true){         
         $("#contact-form .error").html('');
         $("#msg-success").html(data.message);
	     $("#contact-form").hide();	
         console.log(data);	
        }else{
         $(".contact_section .error").html(data.message);
        }
		$(".loader_img").hide();
       },
      
       });
       e.preventDefault(); //=== To Avoid Page Refresh and Fire the Event "Click"===
      });
  

     </script>
    <script src="js/jquery.bxslider.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
</body>
</html>
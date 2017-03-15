

<div class="container-fluid footerwrapper">
   <div class="row containermainwrapper">

         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 footer1">
             <h2>Quick Links</h2>
             <ul>
                 <li> <a href="/home">Home</a></li>
                 <li> <a href="/services/door-glass-car-window-repair-and-replacement/">Services</a></li>
                 <li> <a href="/gallery">Gallery</a></li>
                 <li> <a href="/testimonials">Testimonials</a></li>
                 <li> <a href="/about-the-team">About the team</a></li>

                 <li><a href="javascript:void(0)" data-toggle="collapse" data-target="#demo">Location</a></li>


                 <div id="demo" class="collapse collapsewrapper">

                 <div class="locationmenue_wrapper">

                     <ul>

                         <?php
                         $args = array(
                             'sort_column' => 'post_date',
                             'sort_order' => 'asc',
                             'child_of' => '0',
                             'post_type' => 'page',
                             'post_status' => 'publish',
                             'parent' => 0,

                         );
                         $pages = get_pages($args);

                         if ($pages) {
                             $ic=0;
                             foreach ($pages as $page) :

                                 if($page->ID!=4 && $page->ID!=7 && $page->ID!=9 && $page->ID!=11 && $page->ID!=13 && $page->ID!=15){


                                     $args2 = array(
                                         'sort_column' => 'post_date',
                                         'sort_order' => 'asc',
                                         'child_of' => '0',
                                         'post_type' => 'page',
                                         'post_status' => 'publish',
                                         'parent' => $page->ID,

                                     );
                                     $pages2 = get_pages($args2);


                                     if ( is_page( $page->ID ) || $post->post_parent == $page->ID ) {
                                         $active = 'active';
                                     } else {
                                         $active = '';
                                     }


                                     if(count($pages2)>0) {
                                         // echo ' <li class="ssd dropdown lidiv'.$ic.' " ><a data-toggle="dropdown" class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                                         echo ' <li class="ssd  lidiv'.$ic.' '.$active.' " ><a  href="javascript:void(0)"> ' . $page->post_title . ' </a>';



                                     }else{
                                         echo ' <li class="ssd lidiv'.$ic.' '.$active.'" ><a  href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                                     }


                                     echo "</li>";

                                     $ic++;

                                 }
                             endforeach;
                         }
                         ?>

                         <div class="clearfix"></div>

                     </ul>
                     <div class="clearfix"></div>

                 </div>
                 </div>

                 <li> <a href="/contact-us">Contact Us</a></li>




             </ul>

         </div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 footer2">
             <h2>Proud Associates</h2>
             <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 proudassociates">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/proudassociatesimg1.png" alt="proudassociates">
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 proudassociates">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/proudassociatesimg2.png" alt="proudassociates">
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 proudassociates">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/proudassociatesimg3.png" alt="proudassociates">
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 proudassociates">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/proudassociatesimg4.png" alt="proudassociates">
                 </div>
             </div>
             <!--<img src="<?php /*echo get_template_directory_uri(); */?>/images/proudassociatesimages.jpg" alt="proudassociates">-->
         </div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 footer3">
             <h2>Contact Info</h2>
             <h4>Xtreme Auto Glass Pros - Plano</h4>
             <ul>
                 <li>
                     <div class="contactinfolist">
                         <div class="contactinfoiconwrapper">
                             <div class="align-icon">
                                 <i class="glyphicon glyphicon-map-marker"></i>
                             </div>
                         </div>
                         <span>11700 Preston Rd #660, Dallas, TX 75230</span>
                     </div>
                 </li>
                 <li>
                     <div class="contactinfolist">
                         <div class="contactinfoiconwrapper">
                             <div class="align-icon">
                                 <i class="glyphicon glyphicon-earphone"></i>
                             </div>
                         </div>
                         <span><a href="tel:8179320303">(817) 932-0303</a></span>
                     </div>
                 </li>
             </ul>
             <a href="tel:8179320303"></a>
             <h3>Follow Us</h3>
             <ul class="footersocialmedia">
                 <li>
                     <a href="https://www.facebook.com/Xtremeautoglassprosplano/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/socialicon1sml.png"></a>
                 </li>
                 <li>
                     <a href="https://plus.google.com/103593765409099998697" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/socialicon2sml.png"></a>
                 </li>
                 <li>
                     <a href="https://www.yelp.com/biz/xtreme-autoglass-pros-dallas-2" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/socialicon3sml.png"></a>
                 </li>
                 <li>
                     <a href="https://www.linkedin.com/in/rick-smeltzer-4781babb" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/socialicon4sml.png"></a>
                 </li>
                 <li>
                     <a href="https://www.youtube.com/channel/UCYF9jS2QejrHss0tjoydUcg" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/socialicon5sml.png"></a>
                 </li>
             </ul>
         </div>
         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 footer4">
             <h2>Contact Form</h2>
             <div class="contactusform">
                 <?php
                 echo do_shortcode( '[contact-form-7 id="65" title="Contact form 1"]' );
                 ?>

             </div>
         </div>
       <div class="clearfix"></div>

   </div>





</div>









   <!-- <ul>
        <?php
/*        $args = array(
            'sort_column' => 'post_date',
            'sort_order' => 'asc',
            'child_of' => '0',
            'post_type' => 'page',
            'post_status' => 'publish',
            'parent' => 0,

        );
        $pages = get_pages($args);

        if ($pages) {
            $ic=0;
            foreach ($pages as $page) :



                $args2 = array(
                    'sort_column' => 'post_date',
                    'sort_order' => 'asc',
                    'child_of' => '0',
                    'post_type' => 'page',
                    'post_status' => 'publish',
                    'parent' => $page->ID,

                );
                $pages2 = get_pages($args2);

                if ( is_page( $page->ID ) || $post->post_parent == $page->ID ) {
                    $active = 'active';
                } else {
                    $active = '';
                }



                if(count($pages2)>0) {
                    // echo ' <li class="ssd dropdown lidiv'.$ic.' " ><a data-toggle="dropdown" class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                    echo ' <li class="ssd dropdown lidiv'.$ic.''.$active.' " ><a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)"> ' . $page->post_title . ' </a>';

                    echo "<ul class=dropdown-menu>";


                    foreach($pages2 as $childpage){


                        echo ' <li class="ln lidiv'.$ic.''.$active.' "><a href="' . get_page_link($childpage->ID) . '"> ' . $childpage->post_title . ' </a></li>';

                    }
                    echo "</ul>";

                }else{
                    echo ' <li class="ssd lidiv'.$ic.' '.$active.'" ><a  class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                }


                echo "</li>";

                $ic++;


            endforeach;
        }
        */?>

    </ul>-->





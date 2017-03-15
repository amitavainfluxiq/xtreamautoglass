<div class="container-fluid topheaderblock">
    <div class="row topheader">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="top_left_block">
                <a href="tel:8179320303">  <img src="<?php echo get_template_directory_uri(); ?>/images/topimg1.png" alt="topimgleft"></a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
           <div class="toplogo">
              <a href="/home">  <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"></a>
           </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
           <div class="top_right_block">
               <a href="javascript:void(0)" class="contactclick">  <img src="<?php echo get_template_directory_uri(); ?>/images/topimg2.png" alt="topimgright"></a>

               <ul class="headersocialmedia">
                   <li>
                        <a href="https://www.facebook.com/Xtremeautoglassprosplano/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/socialicon1.png"></a>
                   </li>
                   <li>
                       <a href="https://plus.google.com/103593765409099998697" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/socialicon2.png"></a>
                   </li>
                   <li>
                       <a href="https://www.yelp.com/biz/xtreme-autoglass-pros-dallas-2" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/socialicon3.png"></a>
                   </li>
                   <li>
                       <a href="https://www.linkedin.com/in/rick-smeltzer-4781babb" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/socialicon4.png"></a>
                   </li>
                   <li>
                       <a href="https://www.youtube.com/channel/UCYF9jS2QejrHss0tjoydUcg" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/socialicon5.png"></a>
                   </li>
               </ul>
           </div>
        </div>
       <div class="clearfix"></div>
    </div>



 <div class="topmenu">
     <nav class="navbar navbar-default">

         <div class="navbar-header">

             <span class="responsivemenu">MENU</span>
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>

         </div>


         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav">

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

                         if($page->ID!=328 && $page->ID!=333 && $page->ID!=339 && $page->ID!=342 && $page->ID!=345 && $page->ID!=348 && $page->ID!=353 && $page->ID!=360 && $page->ID!=363 && $page->ID!=367 && $page->ID!=371 && $page->ID!=378 && $page->ID!=381 && $page->ID!=387
                             && $page->ID!=392 && $page->ID!=396 && $page->ID!=400 && $page->ID!=409 && $page->ID!=404 && $page->ID!=417 ){


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
                             echo ' <li class="ssd dropdown lidiv'.$ic.' '.$active.' " ><a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)"> ' . $page->post_title . ' </a>';

                             echo "<ul class=dropdown-menu>";


                             foreach($pages2 as $childpage){

                                 if ( is_page( $childpage->ID ) ) {
                                     $active = 'activechild';
                                 } else {
                                     $active = '';
                                 }


                                 echo ' <li class="ln lidiv'.$ic.' '.$active.' "><a href="' . get_page_link($childpage->ID) . '"> ' . $childpage->post_title . ' </a></li>';

                             }
                             echo "</ul>";

                         }else{
                             echo ' <li class="ssd lidiv'.$ic.' '.$active.'" ><a  class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                         }


                         echo "</li>";

                         $ic++;

                         }
                     endforeach;
                 }
                 ?>

             </ul>

         </div>

     </nav>
 </div>
    <div class="clearfix"></div>
</div>






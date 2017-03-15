<?php

//remove_filter( 'the_content', 'wpautop' );
//remove_filter( 'the_excerpt', 'wpautop' );
//remove_filter( 'comment_text', 'wpautop', 30 );



add_filter('tiny_mce_before_init', 'myextensionTinyMCE' );



function myextensionTinyMCE($init) {
    // Command separated string of extended elements
    $ext = 'span[class|style],h1[class|style],h2,h3,hr,ul[class],ol[class],li[class],div[class|id|style|link],meta';

    // Add to extended_valid_elements if it alreay exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // Super important: return $init!
    return $init;
}



add_filter('tiny_mce_before_init', 'myextensionTinyMCE' );






add_action( 'init', 'create_testimonial' );
function create_testimonial() {
    register_post_type( 'testimonial',
        array(
            'labels' => array(
                'name' => __( 'testimonial' ),
                'singular_name' => __( 'testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}











function wpb_hometestimoniallist() {
// the query
    global $paged;
    $the_query = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => 300 ,'order'=>'DESC','orderby'=>'date') );
    $string='<div id="myCarousel2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">';
// The Loop
    if ( $the_query->have_posts() ) {
        $string .= '';
        $i=0;
        while ( $the_query->have_posts() ) {

            $the_query->the_post();

            $blogspeaker=(get_the_title(get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_1_fieldID_4_numInSet_0'][0]));


            //print_r($blogspeaker);

            // $eventorganizer=(get_the_title(get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_10_fieldID_2_numInSet_0'][0]));

            //print_r(get_the_title(get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_8_fieldID_1_numInSet_0'][0]));

            $metaval=(get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_1_fieldID_4_numInSet_0']);
            //var_dump($pic);
            $postimg=wp_get_attachment_image( intval($metaval[0]) , 'blog-thumbail' );
            //print_r($pic);
            //print_r($postimg);
            if($postimg== NULL){
                $postimg='<img src="../wp-content/themes/xtreamautoglass/images/defaultlogo.jpg"/>';
            }
            //else $postimg="/wp-content/uploads/".$postimg;

            $testimonialauthor=((get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_1_fieldID_2_numInSet_0'][0]));

            $testimoniallocation=((get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_1_fieldID_5_numInSet_0'][0]));

if($i==0){

            $string.='



        <div class="item active">
            <div class="hometestimonial_box">

           <h2>'.$testimonialauthor.'</h2> 
           <h5>'.wp_trim_words(do_shortcode(wpautop(get_the_content())),32).'</h5>
           <div class="hometestimonial_img"> '.$postimg.'</div>                    
           <h3>'.$testimoniallocation.'</h3>
           </div>
        </div>


           ' ;
}
            else {
                $string.='



        <div class="item">
            <div class="hometestimonial_box">

           <h2>'.$testimonialauthor.'</h2>
           <h5>'.wp_trim_words(do_shortcode(wpautop(get_the_content())),32).'</h5>
           <div class="hometestimonial_img"> '.$postimg.'</div>
           <h3>'.$testimoniallocation.'</h3>
           </div>
        </div>


           ' ;

            }
$i++;
        }

        /*$string.= '<div class="blogpagination">';
        $big = 999999999; // need an unlikely integer
        $string.= paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $the_query->max_num_pages //$q is your custom query
        ) );
        $string.= '</div>';*/
    } else {
        // no posts found
    }

    $string .= ' </div>
<div class="carousel-controlwrapper">
 <a class="left  leftarrow carousel-control" href="#myCarousel2" role="button" data-slide="prev">
   <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>-->
  </a>
  <a class="right rightarrow carousel-control" href="#myCarousel2" role="button" data-slide="next">
   <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>-->
  </a>

  <div class="clearfix"></div>
  </div>
</div>';

    return $string;

    /* Restore original Post Data */
    wp_reset_postdata();
}
// Add a shortcode
add_shortcode('hometestimoniallists', 'wpb_hometestimoniallist');





function wpb_innertestimoniallist() {
// the query
    global $paged;
    $the_query = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => 5 ,'order'=>'DESC','orderby'=>'date', 'paged' => $paged) );
    $string='';
// The Loop
    if ( $the_query->have_posts() ) {
        $string .= '';
        while ( $the_query->have_posts() ) {

            $the_query->the_post();

            $blogspeaker=(get_the_title(get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_1_fieldID_4_numInSet_0'][0]));


            //print_r($blogspeaker);

            // $eventorganizer=(get_the_title(get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_10_fieldID_2_numInSet_0'][0]));

            //print_r(get_the_title(get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_8_fieldID_1_numInSet_0'][0]));

            $metaval=(get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_1_fieldID_4_numInSet_0']);
            //var_dump($pic);
           // $postimg=wp_get_attachment_image( intval($metaval[0]) , 'blog-thumbail' );
            //print_r($pic);
            //print_r($postimg);
           /* if($postimg== NULL){
                $postimg='<img src="../wp-content/themes/jungutah/images/defaultlogo.jpg"/>';
            }*/
            //else $postimg="/wp-content/uploads/".$postimg;

            $testimonialauthor=((get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_1_fieldID_2_numInSet_0'][0]));

            $testimoniallocation=((get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_1_fieldID_5_numInSet_0'][0]));

            $string.='  <div class="container testimonialscontainer">
  <div class="container">

  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">


  <h2>'.$testimonialauthor.'</h2>
  <span>'.$testimoniallocation.'</span>
  	</div>

  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
   <img src="/wp-content/themes/xtreamautoglass/images/testimonials_ct_left.png" class="testimonials_ct_left"> '. get_the_content() .'  <img src="/wp-content/themes/xtreamautoglass/images/testimonials_ct_right.png" class="testimonials_ct_right"></div>


 <div class="clearfix"></div>

 </div>
 </div>
            ';
        }

        $string.= '<div class="testimonialsagination">';
        $big = 999999999; // need an unlikely integer
        $string.= paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $the_query->max_num_pages //$q is your custom query
        ) );
        $string.= '</div>';
    } else {
        // no posts found
    }

   // $string .= ' </div>';

    return $string;

    /* Restore original Post Data */
    wp_reset_postdata();
}
// Add a shortcode
add_shortcode('innertestimoniallist', 'wpb_innertestimoniallist');





add_action( 'init', 'create_gallery' );
function create_gallery() {
    register_post_type( 'gallery',
        array(
            'labels' => array(
                'name' => __( 'gallery' ),
                'singular_name' => __( 'gallery' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}



function wpb_gallerypage() {
// the query
    global $paged;
    $the_query = new WP_Query( array( 'post_type' => 'gallery', 'posts_per_page' => 16 ,'order'=>'DESC','orderby'=>'date') );
    $string='';
// The Loop
    if ( $the_query->have_posts() ) {
        $string .= '';
        while ( $the_query->have_posts() ) {

            $the_query->the_post();


            $pic=(get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_2_fieldID_1_numInSet_0']);
            $postimg=(get_post_meta( intval($pic[0]) )['_wp_attached_file'][0]);

       $postimg="/wp-content/uploads/".$postimg;



            $metaval=(get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_2_fieldID_1_numInSet_0']);
           /* echo '<pre>';
            print_r($postimg);
            echo '</pre>';*/


            $imgtitle=((get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_2_fieldID_2_numInSet_0'][0]));
//print_r($imgtitle);

            $string.='
           <li class="col-lg-3 col-md-3 col-sm-3 col-xs-1">
           <a href='.$postimg.' rel="prettyPhoto[gallery1]"
           title="'.$imgtitle.'">
           <img  src='.$postimg.' ></a>
            ';
        }

      /*  $string.= '<div class="testimonialsagination">';
        $big = 999999999; // need an unlikely integer
        $string.= paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $the_query->max_num_pages //$q is your custom query
        ) );
        $string.= '</div>';*/
    } else {
        // no posts found
    }

    // $string .= ' </div>';

    return $string;

    /* Restore original Post Data */
    wp_reset_postdata();
}
// Add a shortcode
add_shortcode('gallerypage', 'wpb_gallerypage');




function wpb_homegallerypage() {
// the query
    global $paged;
    $the_query = new WP_Query( array( 'post_type' => 'gallery', 'posts_per_page' => 8 ,'order'=>'DESC','orderby'=>'date') );
    $string='';
// The Loop
    if ( $the_query->have_posts() ) {
        $string .= '';
        while ( $the_query->have_posts() ) {

            $the_query->the_post();


            $pic=(get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_2_fieldID_1_numInSet_0']);
            $postimg=(get_post_meta( intval($pic[0]) )['_wp_attached_file'][0]);

            $postimg="/wp-content/uploads/".$postimg;



            $metaval=(get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_2_fieldID_1_numInSet_0']);
            /* echo '<pre>';
             print_r($postimg);
             echo '</pre>';*/


            $imgtitle=((get_post_meta( get_the_ID() )['_simple_fields_fieldGroupID_2_fieldID_2_numInSet_0'][0]));
//print_r($imgtitle);

            $string.='
            <li class="col-lg-3 col-md-3 col-sm-2 col-xs-1">
           <a href='.$postimg.' rel="prettyPhoto[gallery1]"
           title="'.$imgtitle.'">
           <img  src='.$postimg.' ></a>






            ';
        }

        /*  $string.= '<div class="testimonialsagination">';
          $big = 999999999; // need an unlikely integer
          $string.= paginate_links( array(
              'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $the_query->max_num_pages //$q is your custom query
          ) );
          $string.= '</div>';*/
    } else {
        // no posts found
    }

    // $string .= ' </div>';

    return $string;

    /* Restore original Post Data */
    wp_reset_postdata();
}
// Add a shortcode
add_shortcode('homegallerypage', 'wpb_homegallerypage');

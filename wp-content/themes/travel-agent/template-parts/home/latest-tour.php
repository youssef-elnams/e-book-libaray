<?php
/**
 * Template part for displaying offer section
 *
 * @package Travel Agent
 * @subpackage travel_agent
 */

?>

<section id="travel-offer" class="py-5">
  <div class="container">
    <?php if( get_theme_mod('travel_agent_offer_section_short_title') != ''){ ?>
      <strong><?php echo esc_html(get_theme_mod('travel_agent_offer_section_short_title','')); ?></strong>
    <?php }?>
    <?php if( get_theme_mod('travel_agent_offer_section_tittle') != ''){ ?>
      <h2 class="my-3"><?php echo esc_html(get_theme_mod('travel_agent_offer_section_tittle','')); ?></h2>
    <?php }?>
    <?php if( get_theme_mod('travel_agent_offer_section_text') != ''){ ?>
      <p><?php echo esc_html(get_theme_mod('travel_agent_offer_section_text','')); ?></p>
    <?php }?>
    <div class="row mt-4">
      <?php
        $travel_agent_post_category = get_theme_mod('travel_agent_offer_section_category');
        if($travel_agent_post_category){
          $travel_agent_page_query = new WP_Query(array( 'category_name' => esc_html( $travel_agent_post_category ,'travel-agent')));?>
          <?php while( $travel_agent_page_query->have_posts() ) : $travel_agent_page_query->the_post(); ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="cat-inner-box mb-3">
                <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                <?php if( get_post_meta($post->ID, 'travel_agent_trip_amount', true) ) {?>
                  <h4><?php echo esc_html(get_post_meta($post->ID,'travel_agent_trip_amount',true)); ?></h4>
                <?php }?>
                <div class="offer-box p-3">
                  <h3><?php the_title(); ?></h3>
                  <?php if( get_post_meta($post->ID, 'travel_agent_trip_days', true) ) {?>
                    <span><i class="far fa-clock mr-2"></i><?php echo esc_html(get_post_meta($post->ID,'travel_agent_trip_days',true)); ?></span>
                  <?php }?>
                  <p class="my-3"><?php $adventure_travelling_excerpt = get_the_excerpt(); echo esc_html( adventure_travelling_string_limit_words( $adventure_travelling_excerpt,12 ) ); ?></p>
                  <div class="my-3 text-right">
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('Learn More','travel-agent'); ?></a>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        }
      ?>
    </div>
  </div>
</section>

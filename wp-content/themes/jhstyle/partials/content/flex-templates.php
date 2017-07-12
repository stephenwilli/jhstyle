<?php

// LOADS FLEXIBLE CONTENT LAYOUTS

  if( have_rows('flexible_content') ) :

    while ( have_rows('flexible_content') ) : the_row();

      if( get_row_layout() == 'full_width_image_background' ) { get_template_part( 'partials/content/full-width-image' ); }

      elseif( get_row_layout() == 'publications_grid' ) { get_template_part( 'partials/content/publications-grid' ); }

      elseif( get_row_layout() == 'team_grid' ) { get_template_part( 'partials/content/team-grid' ); }

      elseif( get_row_layout() == 'right_caption' ) { get_template_part( 'partials/content/right-caption' ); }

      elseif( get_row_layout() == 'left_caption' ) { get_template_part( 'partials/content/left-caption' ); }

      elseif( get_row_layout() == 'three_icons' ) { get_template_part( 'partials/content/three-icons' ); }

      elseif( get_row_layout() == 'full_width_text' ) { get_template_part( 'partials/content/full-width-text' ); }

    endwhile;

  endif;
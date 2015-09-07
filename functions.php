<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


/*****
 * Custom Functions
 ****/

function the_category_filter($thelist,$separator=' ') {
    if(!defined('WP_ADMIN')) {
        //list the category names to exclude
        $exclude = array('Featured');
        $cats = explode($separator,$thelist);
        $newlist = array();
        foreach($cats as $cat) {
            $catname = trim(strip_tags($cat));
            if(!in_array($catname,$exclude))
                $newlist[] = $cat;
        }
        return implode($separator,$newlist);
    } else
        return $thelist;
}
add_filter('the_category','the_category_filter',10,2);


/* Category Featured Images (requires plugin) */

function category_featured_image($params) {
    if( ( $category_image = category_image_src( $params, false ) ) != null ):
        return $category_image;
    endif;
}


/* Pagination */

function pagination( $text_align='center', $range=4, $pages=NULL, $prev=NULL, $next=NULL, $return=TRUE ) {
    if (empty($prev)) {
        $prev = '&lsaquo;';
    }

    if (empty($next)) {
        $next = '&rsaquo;';
    }

    // Gets the current page
    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }

    // Loads the number of pages from the loop if not set
    if (empty($pages)) {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    // Creates the pagination
    $pagination = NULL;
    if ($pages>1) {
        $page_array = array();

        $first_page = $paged-$range>0 ? $paged-$range : 1;
        $last_page = $first_page+$range*2<$pages ? $first_page+$range*2 : $pages;

        // Adds the "previous" button
        if ($paged>1) {
            $page_array[] = '<li class="first">'
                . '<a href="' . get_pagenum_link(1)
                . '" title="First Page">&laquo;</a></li>';
            $page_array[] = '<li>'
                . '<a href="' . get_pagenum_link($paged-1)
                . '">' . $prev . '</a></li>';
        }

        for ($i=$first_page; $i<=$last_page; ++$i) {
            if ($pages>1 && ($i<$paged+$range+1 || $i>$paged-$range-1)) {
                $active_class = $paged===$i ? ' class="active"' : NULL;
                $page_array[] = '<li' . $active_class . '>'
                    . '<a href="'
                    . get_pagenum_link($i) . '">' . $i . '</a>'
                    . '</li>';
            }
        }

        // Adds the "next" button
        if ($paged<$pages) {
            $page_array[] = '<li>'
                . '<a href="' . get_pagenum_link($paged+1)
                . '" title="Next Page">' . $next . '</a></li>';
            $page_array[] = '<li class="last">'
                . '<a href="' . get_pagenum_link($pages)
                . '" title="Last Page">&raquo;</a></li>';
        }

        $pagination = '<div class="text-'.$text_align.'"><ul class="pagination">'
            . implode("\n    ", $page_array)
            . '</ul></div>';
    }

    if ($return===TRUE) {
        echo $pagination;
    } else {
        return $pagination;
    }
}
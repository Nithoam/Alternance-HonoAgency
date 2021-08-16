<?php
function shortcodeSocialMedia($settings) {
  extract(
    shortcode_atts(
      array(
        'content' => '', // url or pathway for the picture
        'link' => '', 
        'title' => '', // Link's Title and picture's alt
        'rel' => '' // the relationship between our website and the link
      ),
      $settings
    )
  );

$tagLink = '<a href="'.$link.'" title="'.$title.'" rel="'.$rel.'">'.'<img class="social-media-icon" src="'.$content.'" alt="'.$title.'"></a>';

return $tagLink;
};
add_shortcodeSocialMedia('show_social_network', 'link');

?>
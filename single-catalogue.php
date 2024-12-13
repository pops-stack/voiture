<?php get_header();
$prix = get_post_meta(get_the_ID(), 'prix', true);
$pui = get_post_meta(get_the_ID(), 'puissance', true);
$vit = get_post_meta(get_the_ID(), 'vitesse', true);
$cara = get_post_meta(get_the_ID(), 'caracteristique', true);?>
<div class="container-post">
    <h1><?php the_title()?></h1>
    <?php if (has_post_thumbnail()) : ?>
        <img src='<?php the_post_thumbnail_url();?>'>
    <?php endif ?>
   
    <?php the_content(); ?>
    <div class="post-labels">
    <?php
    if (!empty($prix)) {
        echo '<p>Prix : ' . esc_html($prix) . '</p>';
    }
    if (!empty($pui)) {
        echo '<p>Puissance : ' . esc_html($pui) . '</p>';
    }
    if (!empty($vit)) {
        echo '<p>Vitesse : ' . esc_html($vit) . '</p>';
    }
    if (!empty($cara)) {
        echo '<p>Caractéristique : ' . esc_html($cara) . '</p>';
    }?>
</div>
   
</div>
 
 
<?php get_footer(); ?>
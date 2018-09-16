<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?php echo get_permalink(); ?>"
  },
  "headline": "<?php the_title(); ?>",
  "image": [
    "<?php 
    		$hero_image = get_field('hero_image'); 
    		$url = $hero_image['url'];
    		echo $url;
    ?>"
   ],
  "datePublished": "<?php echo get_the_date(); ?>",
  "dateModified": "<?php echo get_the_date(); ?>",
  "author": {
    "@type": "Person",
    "name": "Will King"
  },
   "publisher": {
    "@type": "Organization",
    "name": "Techlucidity",
    "logo": {
      "@type": "ImageObject",
      "url": "https://techlucidity.com/wp-content/themes/techlucidity/assets/images/techlucidity-logo.png"
    }
  },
  "description": "<?php createArticleSchema(); ?>"
}

</script>


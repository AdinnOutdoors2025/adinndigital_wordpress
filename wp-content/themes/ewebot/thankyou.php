<?php
/*
Template Name: Thank You
*/
?>
<?php
if ( !post_password_required() ) {
	get_header();
	the_post();
?>

    <?php
    $layout = gt3_option('page_sidebar_layout');
    $sidebar = gt3_option('page_sidebar_def');
    if (class_exists( 'RWMB_Loader' ) && gt3_get_queried_object_id() !== 0) {
        $mb_layout = rwmb_meta('mb_page_sidebar_layout');
        if (!empty($mb_layout) && $mb_layout != 'default') {
            $layout = $mb_layout;
            $sidebar = rwmb_meta('mb_page_sidebar_def');
        }
    }
    $column = 12;
    if ( ($layout == 'left' || $layout == 'right') && is_active_sidebar( $sidebar )  ) {
        $column = 9;
    }else{
        $sidebar = '';
    }
    if ($sidebar == '') {
        $layout = 'none';
    }
    $row_class = ' sidebar_'.esc_attr($layout);
    ?>

    <div class="container-full-width">
        <div class="row<?php echo esc_attr($row_class); ?>">
            <div class="content-container span<?php echo (int)$column; ?>">
                <section id='main_content'>
                <?php
                    the_content(esc_html__('Read more!', 'ewebot'));
                    wp_link_pages(array(
                        'before' => '<div class="page-link"><span>' . esc_html__('Pages', 'ewebot') . '</span>: ',
                        'link_before'      => '<span class="page-number">',
                        'link_after'       => '</span>',
                        'pagelink'         => '%',
                        'after' => '</div>'));
                if (gt3_option("page_comments") == "1" || true === gt3_option("page_comments")) { ?>
                    <div class="clear"></div>
                    <?php comments_template(); ?>
                <?php } ?>
                </section>
            </div>
            <?php
            if ($layout == 'left' || $layout == 'right') {
                echo '<div class="sidebar-container span'.(12 - (int)$column).'">';
                    if (is_active_sidebar( $sidebar )) {
                        echo "<aside class='sidebar'>";
                        dynamic_sidebar( $sidebar );
                        echo "</aside>";
                    }
                echo "</div>";
            }
            ?>
        </div>

    </div>

	<?php

get_footer();

} else { ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
	<?php echo((gt3_option('responsive') == "1" || true === gt3_option('responsive')) ? '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">' : ''); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<!--	<link rel="preconnect" href="https://ajax.googleapis.com" />-->
	<!--	<link rel="preconnect" href="https://fonts.googleapis.com" />-->
	<!--	<link rel="preconnect" href="https://fonts.gstatic.com" />-->
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@1&display=swap" rel="stylesheet">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-61V00HB191"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-61V00HB191');
</script>
<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '241687168240935');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=241687168240935&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Adinn Digital",
  "url": "https://adinndigital.com/",
  "logo": "https://adinndigital.com/wp-content/uploads/2021/04/adinnlogo.png",
  "sameAs": [
    "https://www.facebook.com/adinndigital",
    "https://www.instagram.com/adinndigital/",
    "https://www.linkedin.com/company/adinn-digital/"
  ]
}
</script>
<script type="application/ld+json">
{
	"@context": "http://schema.org/",
	"@type": "FAQPage",
	"mainEntity": [
		{
			"@type": "Question",
			"name": "What is a digital marketing services company?",
			"acceptedAnswer": {
				"@type": "Answer",
				"text": "A digital marketing services company helps businesses promote their products or services online through several digital channels like social media, search engines, email, and more."
			}
		},
		{
			"@type": "Question",
			"name": "How does Google PPC work?",
			"acceptedAnswer": {
				"@type": "Answer",
				"text": "Google PPC is a form of online advertising where businesses pay each time a user clicks on their ad. Ads are shown based on keywords, location, and other targeting options."
			}
		},
		{
			"@type": "Question",
			"name": "What is pay-per-clicking advertising?",
			"acceptedAnswer": {
				"@type": "Answer",
				"text": "Pay-per-click advertising is a model where businesses pay each time someone clicks on their ad, typically shown to users based on their search queries or interests."
			}
		},
		{
			"@type": "Question",
			"name": "Which is the best plan for a digital marketing strategy?",
			"acceptedAnswer": {
				"@type": "Answer",
				"text": "The best plan for a digital marketing strategy depends on the specific goals and needs of the business. Adinn Digital offers customized digital marketing solutions tailored to each client's needs."
			}
		},
		{
			"@type": "Question",
			"name": "Who is the best SEO agency?",
			"acceptedAnswer": {
				"@type": "Answer",
				"text": "Adinn Digital is a top SEO agency with a team of experts who use the latest techniques and tools to help businesses improve their online visibility and drive more organic traffic."
			}
		}
	]
}
</script>
<!-- Generated using https://microdatagenerator.org/localbusiness-microdata-generator/ -->
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "OnlineBusiness",
	"name": "Adinn Digital",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "29,1st street,Vanamamalai Nagar, Bypass Rd, Madurai, Tamil Nadu",
		"addressLocality": "Madurai",
		"addressRegion": "Tamilnadu",
		"postalCode": "625010"
	},
	"image": "https://adinndigital.com/wp-content/uploads/2022/12/SEO_bg_img.png",
	"email": "ba@adinn.co.in",
	"telePhone": "9626987861",
	"url": "https://adinndigital.com/",
	"openingHours": "Mo,Tu,We,Th,Fr,Sa 09:30-18:30",
	"openingHoursSpecification": [ {
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": [
			"Monday",
			"Tuesday",
			"Wednesday",
			"Thursday",
			"Friday",
			"Saturday"
		],
		"opens": "09:30",
		"closes": "18:30"
	} ],
	"geo": {
		"@type": "GeoCoordinates",
		"latitude": "9.9164656",
		"longitude": "78.0114195"
	},
	"priceRange":"₹"

}
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16833517559"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16833517559');
</script>

 
   <!-- Event snippet for adinn digital conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-16833517559/pCwkCOCOs5QaEPev7No-',
      'value': 1.0,
      'currency': 'INR'
  });
</script>
 


</head>

<body <?php body_class(); ?> <?php echo 'data-theme-color="'.esc_attr(gt3_option("theme-custom-color")).'"'; ?> >
<?php
wp_body_open();
gt3_get_default_header();
$gt3_ID = gt3_get_queried_object_id();
if(!is_404() && get_post_type() != 'gallery') {
	gt3_get_page_title($gt3_ID);
}
?>
<div class="site_wrapper fadeOnLoad">
	<?php

	$page_shortcode = '';
	if(class_exists('RWMB_Loader')) {
		$page_shortcode = rwmb_meta('mb_page_shortcode');
		if(strlen($page_shortcode) > 0) {
			echo do_shortcode($page_shortcode);
		}
	}
	?>
	<div class="main_wrapper">

?>
	<div class="pp_block">
        <div class="container_vertical_wrapper">
            <div class="container a-center pp_container">
                <h1><?php echo esc_html__('Password Protected', 'ewebot'); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
	</div>
<?php
	get_footer();
} ?>

<script>
    jQuery(function () {
  setTimeout(function() {
    window.location.replace("https://adinndigital.com/best-digital-marketing-company/");
  }, 5000);
});
</script>
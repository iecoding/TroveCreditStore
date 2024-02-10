<?php 
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up
 *
 * @package woocatalog
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <header class="md:hidden offcanvas-menu">
    <input type="checkbox" id="toogle-menu" />
    <label for="toogle-menu" class="toogle-open"><span></span></label>

    <nav>
      <div>
        <a href="#"> Navigation</a>
        <label for="toogle-menu" class="toogle-close">
          <span></span>
        </label>
      </div>
      <ul>
        <li><a href="<?php echo bloginfo('url'); ?>/"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="<?php echo bloginfo('url'); ?>/new/"><i class="fas fa-star"></i> Latest Products</a></li>
        <li><a href="<?php echo bloginfo('url'); ?>/special-offer/"><i class="fas fa-percentage"></i> Special Offers</a></li>
        <li><a href="<?php echo bloginfo('url'); ?>/shop/"><i class="fas fa-store-alt"></i> All products</a></li>
      </ul>
      <br>
      <hr />
      <ul>
        <li><a href="<?php echo bloginfo('url'); ?>/my-account/"><i class="fas fa-user"></i> My Account</a></li>
        <li><a href="<?php echo bloginfo('url'); ?>/cart/"><i class="fas fa-shopping-cart"></i> Cart</a></li>
        <li><a href="<?php echo bloginfo('url'); ?>/my-account/customer-logout/"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </nav>
  </header>
  <!-- START MAIN CONTENT -->
  <div class="flex flex-col h-screen justify-between">
    <header class="bg-gray-300 pt-10" style="background: url('<?php echo myprefix_get_option( 'bg_header' ) ?>'); background-repeat: no-repeat; background-size:cover;">
      <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <a class="pb-8" href="<?php echo get_home_url(); ?>">
            <?php 
            /**
             * Banner 02
             **/
            $bg_header = (myprefix_get_option( 'logo' ));
            if (isset($bg_header)) { ?>
              <img src="<?php echo $bg_header ?>" alt="<?php echo myprefix_get_option( 'resume' ); ?>">
            <?php 
            } else { ?>
              <h1><?php ?></h1>
            <?php 
            }?>
            </a>
        </div>
      </div>
      <div class="hidden md:block container mx-auto">
        <nav class="flex flex-col items-center z-[9999] font-bold">
          <ul>
            <li class="inline"><a class="uppercase px-5 py-3 inline-block hover:bg-stone-100" href="#" data-modal-target="defaultModal" data-modal-toggle="defaultModal"><i class="fas fa-search"></i> Search</a></li>
            <li class="inline"><a class="uppercase px-5 py-3 inline-block hover:bg-stone-100" href="<?php echo bloginfo('url'); ?>/shop/"><i class="fas fa-store-alt"></i> All products</a></li>
            <li class="inline"><a class="uppercase px-5 py-3 inline-block hover:bg-stone-100" href="<?php echo bloginfo('url'); ?>/cart/"><i class="fa fa-shopping-cart"></i> Cart</a></li>
            <li class="inline"><a class="uppercase px-5 py-3 inline-block hover:bg-stone-100" href="<?php echo bloginfo('url'); ?>/my-account/"><i class="fas fa-user"></i> My Account</a></li>
          </ul>
        </nav>
      </div>
    </header>
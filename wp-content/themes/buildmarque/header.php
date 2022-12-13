<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uptas
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- Font Awesome Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- Top Header section -->
  <div class="th bg-main py-2">
    <div class="container">
      <table>
        <tr>
          <td>
            <div class="lft">
              <a href="tel:01473738299" class=""><i class="fa fa-mobile text-second" aria-hidden="true"></i>&nbsp;&nbsp; 01473738299</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="mailto:vinstonsbuildmarque@btinternet.com" class="d-block d-sm-inline"><i class="fa fa-envelope-o text-second" aria-hidden="true"></i>&nbsp;&nbsp; vinstonsbuildmarque@btinternet.com</a>
            </div>
          </td>
          <td class="text-end">
            <div class="rgt">
              <a href="instragram" class="text-dark bg-third py-1 px-2"><i class="fa fa-instagram" aria-hidden="true"></i></a>&nbsp;
              <a href="facebook" class="text-dark bg-third py-1 px-2"><i class="fa fa-facebook mt-3 mt-sm-0" aria-hidden="true"></i></a>
            </div>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <!-- navbar section -->
  <div class="hn py-3">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/inc/img/logo.png" alt="" class="head_logo img-fluid" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php wp_nav_menu( array( 'menu_class' => 'navbar-nav ms-lg-auto', 'container' => 'ul', )); ?>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- .........................................Header Section........................................... -->
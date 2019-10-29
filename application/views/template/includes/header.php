<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="id" xml:lang="id">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $this->profile['acf']['name'];?> - <?php echo (isset($header_title) ? $header_title : 'Home Page');?></title>
        <meta name="description" content="<?php echo (isset($header_description) ? $header_description : $this->profile['acf']['description']);?>">
        <link rel="canonical" href="<?php echo current_url();?>" />
        <meta name="DC.title" content="<?php echo $this->profile['acf']['name'];?>" />
        <meta name="geo.region" content="ID-JK" />
        <meta name="geo.placename" content="jakarta utara" />
        <meta name="geo.position" content="-0.789275;113.921327" />
        <meta name="ICBM" content="-0.789275, 113.921327" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="<?php echo (isset($header_title) ? $header_title : 'Home Page');?> - <?php echo $this->profile['acf']['name'];?>">
        <meta itemprop="description" content="<?php echo (isset($header_description) ? $header_description :  $this->profile['acf']['description']);?>">
        <meta itemprop="image" content="<?php echo (isset($header_image) ? $header_image : $this->profile['acf']['logos']['url']);?>"> 
        <!-- opengraph FB -->
        <meta property="og:url" content="<?php echo current_url();?>" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo (isset($header_title) ? $header_title : 'Home Page');?> - <?php echo $this->profile['acf']['name'];?>" />
        <meta property="og:description" content="<?php echo (isset($header_description) ? $header_description :  $this->profile['acf']['description']);?>" />
        <meta property="og:image" content="<?php echo (isset($header_image) ? $header_image : $this->profile['acf']['logos']['url']);?>" />
        <meta property="og:app_id" content="1463119233924371"  />

        <link rel="alternate" hreflang="id" href="https://newlaunch.rumah123.com/en/property/">
        <link rel="icon" href="<?php echo base_url('assets/themes/img/icon.png');?>">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
        <link rel="stylesheet" href="<?php echo base_url('assets/themes/fonts/icomoon/style.css?'.date('YmdHis'));?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/themes/css/magnific-popup.css?'.date('YmdHis'));?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/themes/css/jquery-ui.css?'.date('YmdHis'));?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/themes/css/owl.carousel.min.css?'.date('YmdHis'));?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/themes/css/owl.theme.default.min.css?'.date('YmdHis'));?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/themes/css/bootstrap-datepicker.css?'.date('YmdHis'));?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/themes/fonts/flaticon/font/flaticon.css?'.date('YmdHis'));?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/themes/css/aos.css?'.date('YmdHis'));?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/themes/css/style.css?'.date('YmdHis'));?>">
        <?php echo $this->load->view('template/includes/custom_header_css');?>

        <script src="<?php echo base_url('assets/themes/js/jquery-3.3.1.min.js');?>"></script>
        <script src="<?php echo base_url('assets/themes/js/bootstrap.min.js');?>"></script>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N4L8ZKV');</script>
        <!-- End Google Tag Manager -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151118367-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-151118367-1');
        </script>

        <script>
        dataLayer = [{
            'pageCategory': 'load-page',
            'visitorType': 'high-value'
        }];
        </script>

    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4L8ZKV"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div class="site-wrap">
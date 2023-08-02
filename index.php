<?php require_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" />
        <title><?php echo $title; ?></title>

        <link rel="icon" type="image/png" sizes="60x60" href="<?php echo $pageurl; ?>/public/images/favicon.png" />
        
        <meta name="msapplication-TileColor" content="#111111" />
        <meta name="theme-color" content="#111111" />

        <link rel="stylesheet" href="<?php echo $pageurl; ?>/public/fonts/gotham/stylesheet.css" />
        <link rel="stylesheet" href="<?php echo $pageurl; ?>/public/index.css" />

        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo $title; ?>" />
        <meta property="og:description" content="<?php echo $description; ?>" />
        <meta property="og:image" content="<?php echo $pageurl; ?>/public/images/share.jpg" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="<?php echo $title; ?>" />
        <meta name="twitter:description" content="<?php echo $description; ?>" />
        <meta name="twitter:image" content="<?php echo $pageurl; ?>/public/images/share.jpg" />

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NKPSG6FN');</script>
        <!-- End Google Tag Manager -->

        <style>
            @font-face {
                font-family: 'gothambold';
                src: url('<?php echo $pageurl; ?>/public/fonts/gotham-bold.woff') format('woff');
                font-weight: normal;
                font-style: normal;

            }

            @font-face {
                font-family: 'gothamlight';
                src: url('<?php echo $pageurl; ?>/public/fonts/gotham-light.woff') format('woff');
                font-weight: normal;
                font-style: normal;

            }

            @font-face {
                font-family: 'gothammedium';
                src: url('<?php echo $pageurl; ?>/public/fonts/gothammedium.woff') format('woff');
                font-weight: normal;
                font-style: normal;

            } 
        </style>
    </head>

    <body id="<?php echo $page; ?>" class="<?php echo $subpage; ?>" style="background: #E6EBEF url('images/bg-details.png') no-repeat;">
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKPSG6FN"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
                    <div class="webapp">
            <?php include('components/preload.php'); ?>
            
            <?php include('components/header.php'); ?>

            <div asscroll-container>
                <div>
                    <?php
                        if($page != NULL){
                            include('pages/'.$page.'.php');
                        }
                    ?>
                
                    <?php include('components/footer.php'); ?>
                </div>
            </div>

            <div class="video-player">
                <video src="<?php echo $pageurl; ?>/public/video/video-postes-laurindo.mp4" controls></video>

                <svg class="close-menu-video" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </div>

            <div class="layer"></div>

            

            <?php include('components/whats-button.php'); ?>
        </div>
        
        <script src="<?php echo $pageurl; ?>/public/index.js"></script>
    </body>
</html>
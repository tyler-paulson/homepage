<?php require_once 'inc/helper.php'; ?><!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <title>Tyler Paulson Web Development</title>

        <meta name="description" content="Specializing in leveraging WordPress, WooCommerce and Vue.js for small businesses and not-for-profits.">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!--[if IE]><link rel="shortcut icon" href="/favicon.ico"><![endif]-->
        <!--[if !IE]><!--><link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico"><!-- <![endif]-->

        <style><?= inline_resource('/app.css'); ?></style>
        
    </head>

    <body>

        <header>
            <div class="wrap">
                <div class="logo"><span class="blue">tyler_paulson</span><span class="mobile"><br></span><span class="gray">(</span>web<span class="gray">)</span><span class="gray">:development</span></div>
            </div>
            <div class="desktop brain"></div>
            <h1>
                I’m an independent web developer 
                who specializes in leveraging 
                <a href="https://wordpress.org" class="wp" target="_blank">WordPress</a>, 
                <a href="https://woocommerce.com" class="woo" target="_blank">WooCommerce</a> and 
                <a href="https://vuejs.org" class="vue" target="_blank">Vue.js</a> 
                for small businesses and not-for-profits.
            </h1>
        </header>

        <div class="wrap">
            <div class="clients">
                <h2>The Company I Keep</h2>
                <ul class="clients_list">
                    <li>
                        <div class="clients_list--image">
                            <img src="/images/wb.svg" width="120" height="47">
                        </div>
                        <h5>Whiteboard</h5>
                        <div class="clients_list--location">Chattanooga, TN</div>
                        <h6>Since 2019</h6>
                        <div class="clients_list--role">Contractor</div>
                    </li>
                    <li>
                        <div class="clients_list--image">
                            <img src="/images/ga.svg" width="92" height="92">
                        </div>
                        <h5>Grid &amp; Arrow</h5>
                        <div class="clients_list--location">Lewisburg, PA</div>
                        <h6>Since 2017</h6>
                        <div class="clients_list--role" style="background-color:#044b7f;">Co-Founder</div>
                    </li>
                    <li>
                        <div class="clients_list--image">
                            <img src="/images/br@2x.png" width="96" height="96">
                        </div>
                        <h5>Book Riot</h5>
                        <div class="clients_list--location">Brookyln, NY</div>
                        <h6>Since 2017</h6>
                        <div class="clients_list--role" style="background-color:#ffd007;">Client</div>
                    </li>
                    <li>
                        <div class="clients_list--image">
                            <img src="/images/mogiv.svg" width="99" height="70">
                        </div>
                        <h5>Mogiv</h5>
                        <div class="clients_list--location">San Diego, CA</div>
                        <h6>2015–2017</h6>
                        <div class="clients_list--role" style="background-color:#90bd30;">Client</div>
                    </li>
                    <li>
                        <div class="clients_list--image">
                            <img src="/images/iearn.svg" width="84" height="84">
                        </div>
                        <h5>iEARN</h5>
                        <div class="clients_list--location">New York, NY</div>
                        <h6>2015–2017</h6>
                        <div class="clients_list--role" style="background-color:#79abd3;">Employee</div>
                    </li>
                </ul>
            </div>
        </div>


        <script src="<?= manifest_resource('/manifest.js') ?>"></script>
        <script src="<?= manifest_resource('/vendor.js') ?>"></script>
        <script src="<?= manifest_resource('/app.js') ?>"></script>

    </body>

</html>
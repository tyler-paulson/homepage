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
                            <img alt="Logo" src="/images/wb.svg" width="120" height="47">
                        </div>
                        <h5>Whiteboard</h5>
                        <div class="clients_list--location">Chattanooga, TN</div>
                        <h6>Since 2019</h6>
                        <div class="clients_list--role">Contractor</div>
                    </li>
                    <li>
                        <div class="clients_list--image">
                            <img alt="Logo" src="/images/ga.svg" width="92" height="92">
                        </div>
                        <h5>Grid &amp; Arrow</h5>
                        <div class="clients_list--location">Lewisburg, PA</div>
                        <h6>Since 2017</h6>
                        <div class="clients_list--role" style="background-color:#044b7f;">Co-Founder</div>
                    </li>
                    <li>
                        <div class="clients_list--image">
                            <img alt="Logo" src="/images/br@2x.png" width="96" height="96">
                        </div>
                        <h5>Book Riot</h5>
                        <div class="clients_list--location">Brookyln, NY</div>
                        <h6>Since 2017</h6>
                        <div class="clients_list--role" style="background-color:#ffd007;">Client</div>
                    </li>
                    <li>
                        <div class="clients_list--image">
                            <img alt="Logo" src="/images/mogiv.svg" width="99" height="70">
                        </div>
                        <h5>Mogiv</h5>
                        <div class="clients_list--location">San Diego, CA</div>
                        <h6>2015–2017</h6>
                        <div class="clients_list--role" style="background-color:#90bd30;">Client</div>
                    </li>
                    <li>
                        <div class="clients_list--image">
                            <img alt="Logo" src="/images/iearn.svg" alt="" width="84" height="84">
                        </div>
                        <h5>iEARN</h5>
                        <div class="clients_list--location">New York, NY</div>
                        <h6>2015–2017</h6>
                        <div class="clients_list--role" style="background-color:#79abd3;">Employee</div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="wrap">
            <div class="projects">
                <h2>Select Projects</h2>
                <ul class="projects_list">
                    <li>
                        <h5>WinShape On (Active)</h5>
                        <p>On contract with <a href="https://whiteboard.is" target="_blank">Whiteboard</a>, our team brought Winshape Camps summer experience online for a COVID-19 world using WooCommerce to feed data to multiple Vue.JS single-page apps.</p>
                    </li>
                    <li>
                        <h5>Precept Classes (Active)</h5>
                        <p>On contract with <a href="https://whiteboard.is" target="_blank">Whiteboard</a>, our team launched a portal for Bible Study leaders to post their groups and collect RSVPs on top of Precept’s Salesforce-powered API using a custom WordPress plugin.</p>
                    </li>
                    <li>
                        <h5>Tailored Book Recs (Active)</h5>
                        <p>I worked closely with the Director of Technology at <a href="https://riotnewmedia.com" target="_blank">Riot New Media</a> to develop a heavy customization of WooCommerce’s subscription plugin with a Vue onboarding for their personalized book recommendation service.</p>
                    </li>
                    <li>
                        <h5>Boil Line Coffee (Active)</h5>
                        <p><a href="https://gridandarrow.com" target="_blank">Grid & Arrow</a> launched a WooCommerce store / subscription service for our favorite <a href="https://boillinecoffee.com" target="_blank">small town PA coffee roaster</a>. When COVID-19 shut the shop down, we pivoted it to facilitate local delivery.</p>
                    </li>
                    <li>
                        <h5>NJ Masters (2018)</h5>
                        <p>On contract with <a href="https://jonathanfarrell.info" target="_blank">Jonathan Farrell</a>, I developed a relational database in WordPress using Advanced Custom Fields to store and retrieve this running club’s decades long archive of race results.</p>
                    </li>
                    <li>
                        <h5>Mogiv Dashboard (2015-2016)</h5>
                        <p>I designed and led the front-end development of Mogiv’s overhaul of its dashboards for both givers and the staff of its not-for-profit customers until its acquisition.</p>
                    </li>
                    <li>
                        <h5>Collaboration Centre (2014–2015)</h5>
                        <p>As an employee at <a href="https://us.iearn.org" target="_blank">iEARN</a>, I supported users, worked with contract development teams, and helped drive the feature roadmap for the online platform students across the globe use to collaborate.</p>
                    </li>
                    <li>
                        <h5>Miles A Minute (2013)</h5>
                        <p>On contract with <a href="http://threedev.com" target="_blank">ThreeDev</a>, I designed the app and website for the <a href="http://milesaminute.com" target="_blank">daily video devotional series</a> of author and pastor Miles McPherson.</p>
                    </li>
                </ul>
            </div>
        </div>

        <script src="<?= manifest_resource('/manifest.js') ?>"></script>
        <script src="<?= manifest_resource('/vendor.js') ?>"></script>
        <script src="<?= manifest_resource('/app.js') ?>"></script>

    </body>

</html>
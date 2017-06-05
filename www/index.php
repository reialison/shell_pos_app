<?php //echo base_url(); die();?> 
<!DOCTYPE html>
<!--
    Copyright (c) 2012-2016 Adobe Systems Incorporated. All rights reserved.

    Licensed to the Apache Software Foundation (ASF) under one
    or more contributor license agreements.  See the NOTICE file
    distributed with this work for additional information
    regarding copyright ownership.  The ASF licenses this file
    to you under the Apache License, Version 2.0 (the
    "License"); you may not use this file except in compliance
    with the License.  You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing,
    software distributed under the License is distributed on an
    "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
     KIND, either express or implied.  See the License for the
    specific language governing permissions and limitations
    under the License.
-->
<html>

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <!-- This is a wide open CSP declaration. To lock this down for production, see below. -->
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />
    <!-- Good default declaration:
    * gap: is required only on iOS (when using UIWebView) and is needed for JS->native communication
    * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
    * Disables use of eval() and inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
        * Enable inline JS: add 'unsafe-inline' to default-src
        * Enable eval(): add 'unsafe-eval' to default-src
    * Create your own at http://cspisawesome.com
    -->
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: 'unsafe-inline' https://ssl.gstatic.com; style-src 'self' 'unsafe-inline'; media-src *" /> -->

    <!-- <link rel="stylesheet" type="text/css" href="css/index.css" /> -->
    <link rel="stylesheet" type="text/css" href="css/portfolio.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.min.css" />
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css" />
    <link rel="stylesheet" type="text/css" href="css/swal-forms.css" />


    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900' rel='stylesheet' type='text/css'> -->
    <link rel="stylesheet" href="css/css/themes/default/jquery.mobile-1.4.5.css">
    <link type="text/css" rel="stylesheet" href="css/css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/css/style.min.css" />
    <link type="text/css" rel="stylesheet" href="css/css/colors/yellow.css" />
    <link type="text/css" rel="stylesheet" href="css/css/swipebox.css" />
    <link type="text/css" rel="stylesheet" href="css/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="css/css/sweetalert.css" />
    <link type="text/css" rel="stylesheet" href="css/css/toastr.min.css" />
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <!-- <link rel="stylesheet" href="css/js/slick/slick.css"> -->
    <!-- <script src="<?= base_url().'js/jquery.min.js'; ?>"></script> -->
    

    <!-- <link rel="stylesheet" href="<?= base_url().'js/jcarousel/jcarousel.responsive.css'; ?>"> -->
    <!-- <script src="js/jquery.mobile-1.4.3.min.js"></script> -->
    <script src="phonegap.js"></script>

    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/sweetalert.min.js"></script>
    <script src="js/swal-forms.js"></script>
    <script src="js/custom.js"></script>

    <title>Shell App Template v.1</title>
</head>

<!-- <body class="green">
    Loading ...

    <script type="text/javascript">
        app.initialize();
    </script> -->
<?php
  $finish = (isset($finish)) ? $finish : false;
?>
<body>

<div data-role="page" id="homepage"  data-theme="b" class="">
<div data-role="main" id="left-panel" class="ui-content" data-position="left">
              <nav class="main-nav">
                <ul>
                  <li class="first_li"><a href="<?=base_url().'app/shop/snacks'?>" rel="external"><span class="icon-size"><img src ="<?= base_url().'img/icons/chips.png'?>" /></span><span>SNACKS</span></a></li>
                  <li class="two_li"><a href="<?=base_url().'app/shop/nab'?>" rel="external" ><span class="icon-size"><img src ="<?= base_url().'img/icons/drinks.png'?>" /></span><span>DRINKS</span></a></li>
                  <li class="four_li"><a href="<?=base_url().'app/shop/tobacco'?>" data-transition="slidefade" rel="external" ><span class="icon-size"><img src ="<?= base_url().'img/icons/tobacco.png'?>" /></span><span>TOBACCO</span></a></li>
                  <li class="five_li"><a href="<?=base_url().'app/shop/food and coffee'?>"  data-transition="slidefade" rel="external"><span class="icon-size"><img src ="<?= base_url().'img/icons/coffee.png'?>" /></span><span>FOOD & COFFEE</span></a></li>
                </ul>
              </nav>

    </div>

    <div data-role="" data-position="fixed">
        <div class="nav_center_logo"></div>
        <div class="clear"></div>
    </div>
            <div role="main" class="ui-content">

        <div class="logo_container">
            <div class="logo">
            <img src="css/css/images/logo3.png'" alt="shell" title="shell" />
            <h2>Shell</h2>
            <span></span>                        
            </div>                     
        </div>

    </div>



    


       <input type="hidden" id="is_finish" value="<?=$finish?>">
       <div data-role="footer">
    <h4 class="banner_footer">Powered by <img class="btm_logo" src="<?=base_url().'img/header_logo_p1.png'?>"></h4>

<!-- <script>
  $(function(){


    check_finish();


    function check_finish(){
      var is_finish = $('#is_finish').val();

      if(is_finish){

        swal({
          title: "Thank you for shopping!",
          type:'success',
          text: "Your order is now on process and will be ready in a minute.",
          timer: 7000,
          showConfirmButton: false
        });
        
      }      
    }

  });

</script> -->
</body>

</html>
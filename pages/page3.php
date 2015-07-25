<!DOCTYPE html>
<!-- ### Sets the class and language for IE 7,8, and 9 ### -->
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"> <!--<![endif]-->

<!-- ### Sends users with a older version of IE to a page so they can update ### -->
<!--[if lt IE 7]>
<meta http-equiv="refresh" content="0; url=../update-browser.php">
<![endif]-->

<!-- ### START Head ### -->
<head>
    <!-- ### Basic Page Needs and Meta Data ### -->
    <title>Flexibar Sample Page 3</title>
    <meta name="robots" content="all"/>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="description" content="Flexibar Sample App"/>
    <meta name="author" content="Patches"/>
    <meta name="keywords" content="Flexibar, Sample App, Patches, PHP, JavaScript"/>

    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- ### Mobile Specific Meta Needs ###-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <!-- ### CSS Imports ### -->
    <link rel="stylesheet" href="/css/flexi-bar.css" type="text/css" media="screen"/>

    <!-- ### Style Adjustments for Flexibar on IE 7 ### -->
    <!--[if IE 7]>
    <link rel="stylesheet" href="/css/flexi-bar-IE7-adjustments.css" type="text/css" media="screen"/>
    <![endif]-->
</head>
<!-- ### END Head ### -->
<!-- ### START Body ### -->
<body>
<!-- ### START container ### -->
<div class="container">

    <!-- ### START content-area ### -->
    <div id="content-area">

        <div id="flexi-bar">
            <?php include("../inc/flexi-bar.php"); ?>
            <script type="text/javascript">
                document.getElementById("category1").className  = "current";
                document.getElementById("page3").className  = "current";
            </script>
        </div>

        <h1>Page 2</h1>
    </div>
    <!-- ### END content-area ### -->

</div>
<!-- ### END Container ### -->
</body>
<!-- ### END Body ### -->
</html>
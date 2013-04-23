<!DOCTYPE html>
<!--[if lte IE 8]><html class="ieold"><![endif]-->
<!--[if IE 9 ]><html class="ie"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->
    <head>

        <?include 'partials/meta.php';?>

        <link rel="stylesheet" href="../assets/css/main.css">

        <!-- https://github.com/aFarkas/html5shiv -->
        <!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script><![endif]-->

    </head>
    <body>

        <div id="fb-root"></div>

        <?include 'partials/nav.php';?>

        <?include 'partials/filler.php';?>

        <?include 'partials/footer.php';?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/lib/jquery-1.9.1.min.js"><\/script>')</script>

        <script data-main="../assets/js/main.min" src="../assets/js/require.js"></script>

        <?include 'partials/tracking.php';?>

        <script>
        (function(doc, script) {
            var js,
            fjs = doc.getElementsByTagName(script)[0],
            add = function(url, id) {
                if (doc.getElementById(id)) {return;}
                js = doc.createElement(script);
                js.src = url;
                id && (js.id = id);
                fjs.parentNode.insertBefore(js, fjs);
            };
            // Google+ button
            // add('//apis.google.com/js/plusone.js');
            // Facebook SDK
            add('//connect.facebook.net/en_US/all.js#xfbml=1', 'facebook-jssdk');
            // Twitter SDK
            add('//platform.twitter.com/widgets.js', 'twitter-wjs');
        }(document, 'script'));
        </script>
    </body>
</html>

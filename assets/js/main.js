requirejs.config({
    paths: {
        'bootstrap' : 'plugins/bootstrap-2.3.1.min',
        'validate' : 'plugins/jquery-validate-1.12.0pre.min',
        'hippify' : 'plugins/hippify/hippify.min',
        'fitvid' : 'plugins/fitvids.js/jquery.fitvids.min',
        'fancybox' : 'plugins/jquery-fancybox-2.1.4.min',
        'flexslider' : 'plugins/FlexSlider/jquery.flexslider-min'
    }
});

require(['order!validate', 'order!fitvid', 'order!fancybox', 'order!flexslider', 'order!hippify'], function() {
    $(function() {

        $('form').validate({
            invalidHandler: function(e, validator) {
                var errors = validator.numberOfInvalids(),
                    that = $(this);
                if (errors) {
                    var message = errors == 1 ?
                        'Oops, you missed a field' :
                        'Oops, you missed ' + errors + ' fields';
                    $("div.form-error").append(message);
                    $("div.form-error").show();
                } else {
                    $("div.form-error").hide();
                }
                $('html, body').animate({
                    scrollTop: that.parent().offset().top-20
                }, 500);
            }
        });

        $('.flexslider').flexslider();

        $('.video-wrapper').fitVids();

        $('.fancybox').fancybox({
            nextEffect: 'fade',
            prevEffect: 'fade'
        });

        $('.nav-mobile').on('click', function(e) {
            e.preventDefault();
            $('.nav-collapse').animate({
                height: 'toggle'
            });
        });

        var isSmall = function() {
            var winW = $(window).width();
            if (winW < 640) {
                return true;
            } else {
                return false;
            }
        };

        var clearStyles = function(e) {
            var windowWidth = $(window).width();
            if(!isSmall()) {
                $(e).removeAttr("style");
            }
        };

        $(window).resize(function(){
            clearStyles('.nav-collapse');
        });

    });
});
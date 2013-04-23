// Plugins

require(['fitvid'], function() {
    $(function() {
        $('.video-wrapper').fitVids();
    });
});

require(['flexslider'], function() {
    $(function() {
        $('.flexslider').flexslider();
    });
});

require(['fancybox'], function() {
    $(function() {
        $('.fancybox').fancybox({
            nextEffect: 'fade',
            prevEffect: 'fade'
        });
    });
});

require(['hippify']);


// Modules

require(['lib/modules/forms'], function(forms) {
    forms.formValidate('form');
});

require(['lib/modules/mobileNav'], function(mobileNav) {
    mobileNav.init();
});


// General

require(['functions'], function() {
    $(function() {

        $(window).resize(function(){
            clearStyles('.nav-collapse');
        });

    });
});
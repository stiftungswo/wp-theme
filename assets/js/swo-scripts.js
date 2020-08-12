jQuery(document).ready(function(){
    
    jQuery('.menu-item-has-children > a').click(function(e){

        var _this = jQuery(this);
        jQuery('.menu-item-has-children > a').not(_this).next('.sub-menu').slideUp();
        setTimeout(function(){
            _this.next('.sub-menu').slideDown();
        }, 300);

    });

});


console.log('Custom SWO scripts are running smoothly.');
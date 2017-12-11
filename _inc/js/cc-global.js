jQuery(document).ready(function($) {

    //blog
    var $blog = $('.page-template-template-blog-php');
    if ($blog.length){
        
        //var $blog_sidebar = $blog.find('.section-inner .sidebar');
        //$blog_sidebar.addClass('sticky-item');
    }
    
    //dropits
    var $dropits = $('.dropit');
    if ($dropits.length){
        $dropits.dropit();
        $dropits.show();
    }
    
    
});







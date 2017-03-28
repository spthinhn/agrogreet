function include(url){document.write('<script type="text/javascript" src="'+url+'"></script>')}

//------ base included scripts -------//
include('js/jquery.easing.js');
include('js/jquery.mousewheel.min.js');
include('js/jquery-ui-1.10.3.custom.min.js');
include('js/jquery.ui.touch-punch.js');
include('js/jquery.touchSwipe.min.js');
include("js/jquery-migrate-1.1.1.js");
include('js/klass.min.js');

include("js/owl.carousel.js");
 include('js/spin.min.js'); 
include('js/tmMultimediaGallery.js');
   
 include('js/camera.js');

include('js/jquery.equalheights.js');

/* Stellar.js
========================================================*/
// include('js/stellar/jquery.stellar.js');
// $(document).ready(function() { 
//   if ($('html').hasClass('desktop')) {
//       $.stellar({
//         horizontalScrolling: false,
//         verticalOffset: -50
//       });
//   }  
// });

include('js/TMForm.js');
 /*
 <!--[if (gt IE 9)|!(IE)]><!-->
     include('js/jquery.mobile.customized.min.js');
     <!--<![endif]-->
     */

//include('js/jquery.equalheights.js');

if(!FJSCore.mobile && !FJSCore.tablet){
    include('js/jquery.superscrollorama.js');
   include('js/smoothing-scroll.js');
}

if(!FJSCore.mobile){
   
    include('js/hoverIntent.js');
    include('js/superfish.js');
    include('js/greensock/TweenMax.min.js');   
    include("js/jquery.ui.totop.js");
     //include('js/TMgalleryPrototype.js');
} else{

}
//------------------------------------//
var win = $(window),
    doc = $(document),
    previousState = currentState = '',
    defLocation,
    msie = (navigator.appVersion.indexOf("MSIE")!==-1);
    currIndex = 0,
    showGallery = false;



function spinnerInit(){    
    var opts = {
        lines: 11,
        length: 10,
        width: 5,
        radius: 14, 
        corners: 1,
        color: '#fff',
        speed: 1.3,
        trail: 5
    },
    spinner = new Spinner(opts).spin($('#webSiteLoader')[0]);
}

function spinnerInitGallery(){
    var opts = {
        lines: 11,
        length: 10,
        width: 5,
        radius: 14, 
        corners: 1,
        color: '#fff',
        speed: 1.3,
        trail: 5
    }
    $('.imgSpinner').each(function(){
        var spinner = new Spinner(opts).spin($(this)[0]);
    })
}

function initCarousel (){
    var $owl = $("#owl1");
    $owl.owlCarousel({
        items : 3, //5 items above 1000px browser width
        itemsDesktop : [1900,2], //5 items between 1000px and 901px
        itemsDesktopSmall : [1366, 1], // betweem 900px and 601px
        itemsTablet: [500, 1], //2 items between 600 and 0
        itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
        navigation : true,
        pagination :  false
    });
}
function initCarousel_2 (){
    var $owl = $("#owl2");
    $owl.owlCarousel({
        items : 3, //5 items above 1000px browser width
        itemsDesktop : [1220,2], //5 items between 1000px and 901px
        itemsDesktopSmall : [970, 1], // betweem 900px and 601px
        itemsTablet: [760, 3], //2 items between 600 and 0
        itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
        navigation : false,
        pagination :  true,
    });
}

function initPlugins(){

    initContactForm();
    
   (!FJSCore.mobile && previousState && (FJSCore.state != previousState))&&($('.historyBack').attr('href','./'+previousState));

    if(!FJSCore.mobile){
      $().UItoTop({ easingType: 'easeOutQuart'});
  }




    $(".car_div .owl-wrapper .owl-item a").on('click', function(e){
        currIndex = $(this).attr('data-image');
        // $('.galleryHolder').trigger('showGallery');
        // console.log(currIndex);
        // console.log(currIndex);
        // return false;
        //$('./nature > .inner a').eq($(this).parent().index()).click();
      });


    // if(!FJSCore.mobile){

        $(".galleryHolder").tmMultimediaGallery({
            startIndex: 0,
            showOnInit: showGallery,
            container: '.galleryContainer',
            imageHolder: '.imageHolder', // imageHolder selector
            pagination: '.inner', // pagination selector
            description: '.galleryDiscription', // discription selector
            next: '.nextButton', // next button selector
            prev: '.prevButton', // prev button selector
            spinner: '.imgSpinner', // prev button selector
            autoPlayState: false,
            paginationDisplay: true,
            controlDisplay: true,
            autoPlayTime: 12,
            alignIMG: 'center',
            mobile: false,
            onShowActions: function(){
                // $(".inner a", this).eq(currIndex-1).trigger('click');
                 $("#other_pages").css('zIndex', 9999);
            },
            onHideActions: function(){
                 // $("#content").css('zIndex', -1);            
            }
        })

        $('.closeIconGallery').on('click', function(){
            $(".galleryHolder").trigger('hideGallery');
            $("#other_pages").css('zIndex', 200);            

        })

        // .trigger('showGallery');
        spinnerInitGallery();
        
        setTimeout(function () { win.trigger('resize'); }, 500);

        spinnerInit();
    // }
    //},300)
    
    // photoswipe
    // var phSwipe = $(".gall > div > a")
    // phSwipe.length && phSwipe.photoSwipe();

    // height_handler();



}





function scrolloramaInit(){
    if(!FJSCore.mobile && !FJSCore.tablet){
    var controller = $.superscrollorama();

    controller
        // page 1
        .addTween('h1 a img', TweenMax.from( $('h1 a img'), 0.8, {delay: 0.4, css:{opacity: 0, scale: 0.2, rotationY: 270, marginTop: -200}, ease: Expo.easeOut}))
        .addTween('h1 a span', TweenMax.from( $('h1 a span'), 0.6, {delay: 0.8, css:{opacity: 0 ,rotationX: 90 , scale: 0.2}, ease: Cubic.easeOut}),0 , -100)
         .addTween('h1 a em', TweenMax.from( $('h1 a em'), 0.6, {delay: 1.2, css:{opacity: 0 ,rotationX: 90 , scale: 0.2}, ease: Cubic.easeOut}),0 , -100)
        //.addTween('#page1 .s_p', TweenMax.from( $('#page1 .s_p'), 1.7, {delay: 1.3, css:{left: '-50%', opacity: 0}, ease: Cubic.easeOut}),0 , -250)
        .addTween('header', TweenMax.from( $('header'), .5, {delay: 1.5, css:{top: -150}, ease: Cubic.easeOut}))
         .addTween('.slogan_block_1', TweenMax.from( $('.slogan_block_1'), .5, {delay: 0.8, css:{opacity: 0, scale: 0.2}, ease: Cubic.easeOut}),0 , -250)

        // page 2
         //.addTween('#page2 #owl1 .item', TweenMax.from( $('#page2 #owl1 .item'), 1.7, {delay: 1.3, css:{left: '-50%', opacity: 0}, ease: Cubic.easeOut}),0 , -250)
          .addTween('.p2_block_1', TweenMax.from( $('.p2_block_1'), 1.0, {delay: 1.8, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -250)
          .addTween('.p2_block_2', TweenMax.from( $('.p2_block_2'), 1.0, {delay: 1.8, css:{opacity: 0 , rotationY:-270, transformOrigin:"right 50% -200"}, ease: Cubic.easeOut}),0 , -250)
       //.addTween('#page2 #owl1 .item', TweenMax.from( $('#page2 #owl1 .item'), 1.0, {delay: 1.4, css:{bottom: -50px, opacity: 0, rotation:  0}, ease: Cubic.easeOut}), 0 ,300)
        .addTween('#page2 h2', TweenMax.from( $('#page2 h2'), 1.0, {delay: 0.2, css:{opacity: 0 , rotationY:180, transformOrigin:"left 50% -100"}, ease: Cubic.easeOut}),0 , -250)
        .addTween('#page2 h3', TweenMax.from( $('#page2 h3'), 1.0, {delay: 0.4, css:{opacity: 0 , rotationY:-180, transformOrigin:"right 50% -100"}, ease: Cubic.easeOut}),0 , -250)
        .addTween('#page2 .bord_1', TweenMax.from( $('#page2 .bord_1'), 1.0, {delay: 0.0, css:{opacity: 0 , rotationY:-180, transformOrigin:"right 50% -100"}, ease: Cubic.easeOut}),0 , -250)
        
        // page 3
         .addTween('#page3 h2', TweenMax.from( $('#page3 h2'), 1.0, {delay: 1.0, css:{opacity: 0 , rotationY:180, transformOrigin:"left 50% -100"}, ease: Cubic.easeOut}),0 , -250)
         .addTween('#page3 .bord_2', TweenMax.from( $('#page3 .bord_2'), 1.3, {delay: 0.6, css:{opacity: 0 , rotationY:-180, transformOrigin:"right 50% -100"}, ease: Cubic.easeOut}),0 , -250)
        .addTween('#page3 .btn', TweenMax.from( $('#page3 .btn'), 0.5, {delay: 1.0, css:{ opacity: 0 ,scale: 0.2}, ease: Cubic.easeOut}),0 ,-300)
        .addTween('#owl1 .item', TweenMax.from( $('#owl1 .item'), 0.8, {delay: 2.4, css:{opacity: 0 ,scale: 0.2, rotationZ: 90}, ease: Cubic.easeOut}),0 ,-250)
        .addTween('#page3 .p3_plane', TweenMax.from( $('#page3 .p3_plane'), 0.5, {delay: 0.0, css:{ opacity: 0 ,scale: 0.2, rotationX: 90}, ease: Cubic.easeOut}),0 ,-250)
         .addTween('#page3 p', TweenMax.from( $('#page3 p'), .7, {delay: 1.6, css:{bottom: '-30px', opacity: 0}, ease: Cubic.easeOut}),0 , -300)

        // page 4
         .addTween('#page4 h2', TweenMax.from( $('#page4 h2'), 1.0, {delay: 0.2, css:{opacity: 0 , rotationY:180, transformOrigin:"left 50% -100"}, ease: Cubic.easeOut}),0 , -300)
        .addTween('#page4 h3', TweenMax.from( $('#page4 h3'), 1.0, {delay: 0.4, css:{opacity: 0 , rotationY:-180, transformOrigin:"right 50% -100"}, ease: Cubic.easeOut}),0 , -300)
        .addTween('#page4 .bord_3', TweenMax.from( $('#page4 .bord_3'), 1.0, {delay: 0.0, css:{opacity: 0 , rotationY:-180, transformOrigin:"right 50% -100"}, ease: Cubic.easeOut}),0 , -300)
        .addTween('.p4_block_1', TweenMax.from( $('.p4_block_1'), 1.0, {delay: 1.8, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -300)
        .addTween('.p4_block_2', TweenMax.from( $('.p4_block_2'), 1.0, {delay: 1.8, css:{opacity: 0 , rotationY:-270, transformOrigin:"right 50% -200"}, ease: Cubic.easeOut}),0 , -300)
        .addTween('.p4_block_3', TweenMax.from( $('.p4_block_3'), 1.0, {delay: 2.8, css:{opacity: 0 , rotationY:270, transformOrigin:"left 50% -200"}, ease: Cubic.easeOut}),0 , -300)
        .addTween('.p4_block_4', TweenMax.from( $('.p4_block_4'), 1.0, {delay: 2.8, css:{opacity: 0 , rotationY:-270, transformOrigin:"right 50% -200"}, ease: Cubic.easeOut}),0 , -300)
       
        // page 5
         .addTween('#page5 .slider_wrapper', TweenMax.from( $('#page5 .slider_wrapper'), 1.0, {delay: 0.2, css:{opacity: 0 , rotationY:180, transformOrigin:"left 50% -100"}, ease: Cubic.easeOut}),0 , -300)
        //.addTween('#page5 .p5_pic1', TweenMax.from( $('#page5 .p5_pic1'), .7, {delay: 0.4, css:{right: '-100%', opacity: 0 ,scale: 0.2}, ease: Cubic.easeOut}),0 ,-300)
        //.addTween('#page5 h2', TweenMax.from( $('#page5 h2'), .7, {delay: 0.6, css:{left: '-50%', opacity: 0}, ease: Cubic.easeOut}),0 , -300)
        //.addTween('#page5 p', TweenMax.from( $('#page5 p'), .7, {delay: 0.6, css:{right: '-50%', opacity: 0}, ease: Cubic.easeOut}),0 , -300)
        //.addTween('#page5 .list_2', TweenMax.from( $('#page5 .list_2'), .7, {delay: 0.6, css:{right: '-50%', opacity: 0}, ease: Cubic.easeOut}),0 , -300)


         // page 6
        .addTween('#page6 h2', TweenMax.from( $('#page6 h2'), 1.0, {delay: 0.2, css:{opacity: 0 , rotationY:180, transformOrigin:"left 50% -100"}, ease: Cubic.easeOut}),0 , -300)
        .addTween('#page6 h3', TweenMax.from( $('#page6 h3'), 1.0, {delay: 0.4, css:{opacity: 0 , rotationY:-180, transformOrigin:"right 50% -100"}, ease: Cubic.easeOut}),0 , -300)
        .addTween('#page6 .bord_4', TweenMax.from( $('#page6 .bord_4'), 1.0, {delay: 0.0, css:{opacity: 0 , rotationY:-180, transformOrigin:"right 50% -100"}, ease: Cubic.easeOut}),0 , -300)
        .addTween('.name', TweenMax.from( $('.name'), 1.0, {delay: 0.2, css:{opacity: 0 , rotationY:180, transformOrigin:"left 50% -100"}, ease: Cubic.easeOut}),0 , -300)
        .addTween('.email', TweenMax.from( $('.email'), 1.0, {delay: 0.8, css:{opacity: 0 , rotationY:180, transformOrigin:"left 50% -100"}, ease: Cubic.easeOut}),0 , -300)
        .addTween('.message', TweenMax.from( $('.message'), 1.0, {delay: 1.4, css:{opacity: 0 , rotationY:180, transformOrigin:"left 50% -100"}, ease: Cubic.easeOut}),0 , -300)
        .addTween('.form_b_1', TweenMax.from( $('.form_b_1'), 1.0, {delay: 2.0, css:{opacity: 0 , rotationY:180, transformOrigin:"left 50% -100"}, ease: Cubic.easeOut}),0 , -300)
       .addTween('.form_b_2', TweenMax.from( $('.form_b_2'), 1.0, {delay: 2.0, css:{opacity: 0 , rotationY:-180, transformOrigin:"right 50% -100"}, ease: Cubic.easeOut}),0 , -300)
       .addTween('#page6 h6', TweenMax.from( $('#page6 h6'), 1.0, {delay: 0.2, css:{opacity: 0 , rotationY:-180, transformOrigin:"right 50% -100"}, ease: Cubic.easeOut}),0 , -300)
       .addTween('#page6 .p6_block_1', TweenMax.from( $('.p6_block_1'), 1.0, {delay: 0.8, css:{opacity: 0 , rotationY:-180, transformOrigin:"right 50% -100"}, ease: Cubic.easeOut}),0 , -300)
       .addTween('.p6_block_2', TweenMax.from( $('#page6 .p6_block_2'), 1.0, {delay: 1.2, css:{opacity: 0 , rotationY:-180, transformOrigin:"right 50% -100"}, ease: Cubic.easeOut}),0 , -300)
       .addTween('#page6 .p6_block_3', TweenMax.from( $('#page6 .p6_block_3 '), 1.0, {delay: 2.0, css:{opacity: 0 , rotationY:-180, transformOrigin:"right 50% -100"}, ease: Cubic.easeOut}),0 , -300)

}
}       


$(document).on('changeLocation',function (e){
    previousState = currentState;
    currentState = history.state;

})

$(document).on('changeState',function (e){
 //   console.log(previousState);
 //   console.log(currentState);

    // if(currentState == "gallery.html"){
    //     $(FJSCore).trigger('changeState','gallery')
    // }
    
    //((previousState === currentState) && (currentState === 'gallery.html')) && (showGallery = true);
})

$(function(){

          $(document).on('scroll', function() {
              if(win.scrollTop()>0){
                  $('.mainNav').addClass('head_bg');
              }else{
                   $('.mainNav').removeClass('head_bg');
              }
  })
    $("#year").text((new Date).getFullYear());
    $("#year1").text((new Date).getFullYear());

    previousState = currentState = history.state;

    /*var doMenuHide = false;*/

    $('#mainNav>ul>li>a').each(function(){
        var $this = $(this),
            txt = $this.text();
        $this.html('<div><span>'+ txt +'</span></div><div><span>'+ txt +'</span></div>');
    })


    // camera
    $('#camera_wrap').camera({
        loader: true,
        pagination: true,
        thumbnails: false,
        height: '51.28205128205128%',
        caption: true,
        navigation: true,
        fx: 'scrollTop',
        autoAdvance: true
    });
        $('#camera_wrap_1').camera({
        loader: true,
        pagination: true,
        thumbnails: false,
        height: '63.85%',
        caption: true,
        navigation: true,
        fx: 'simpleFade',
        autoAdvance: true
    });

    $(".navigCamera .next_b").click(function(){
            $(".camera_next").click();
            }
        );
    $(".navigCamera .prev_b").click(function(){
            $(".camera_prev").click();
            }
        );
    // end camera

    initPlugins();
    
    if(FJSCore.mobile){
        $('body').css({'min-width':'inherit'});   

       // $('#mobile-navigation > option').eq(2).remove();

        $(document)
        .on('show','#mobile-content>*', function(e,d){    
            initPlugins(); 
            $('.galleryHolder').trigger('showGallery');
            $(".folioList > li").click( function(){
            var instance = Code.photoSwipe('.photoSwipe1 a', this);
            Code.PhotoSwipe.Current.show(0);                   
                    }
                )              
        })      
        .on('hide','#mobile-content>*',function(e,d){
        })
    } else {
        $('#mainNav').superfish({
            animation:     {height:'show'},
            animationOut:  {height:'hide'},
            delay: 500
        });

        spinnerInit();
        scrolloramaInit();
    }
    
    var otherPageContainer = $('#other_pages'),
        $selector = !msie ? $('body'): $('html');
    otherPageContainer
        .on('show','>*',function(e,d){
            $.when(d.elements)
                .then(function(){


 // $('.galleryHolder', d.curr)
 //        .trigger('showGallery')
 //         .trigger('goTo', [3, 'quick'])
                        
                        
                      
                    
                    // d.curr.find('.inner a').eq(currIndex-1).click();

                    $('a[href="./'+ FJSCore.state +'"]').parents('.item').trigger('click');

                    $('#category_pages .closeBtn').addClass('fa fa-times');

                    if(!d.curr.hasClass('_active')){
                        d.curr                      
                            .stop()
                            .css({
                                display:'block'
                            ,   opacity:0
                            })
                            .animate({
                                opacity:1
                            },{
                                duration:200
                                ,complete:function(){
                                    d.curr.addClass('_active');
                                    win.trigger('resize');
                                }
                            })
                    }
                    console.log(currIndex);
                    initPlugins();
                    $('.galleryHolder').trigger('showGallery')
                      .trigger('goTo', [currIndex.toString(), 'quick'])
                      

                     $('body').addClass('show-sub-pages');

                    d.curr
                        .addClass('activeSubPage')             
                        .stop(true, true)
                        .css({display:'block', top:-$(window).outerHeight()})
                        .animate({
                            top:0
                        },{
                            duration:800,
                            ease: 'easeOutExpo',
                            complete:function(){
                                FJSCore.modules.longScroller.blockScrollCalc = true;
                                $selector
                                    .css({'overflow':'hidden','-webkit-overflow-scrolling':'none'});
                                $('body')
                                    .trigger('resizeContent');                            
                            }
                        })
                })          
        })
        .on('hide','>*',function(e,d){
            FJSCore.modules.longScroller.blockScrollCalc = false;
            $(this)
                .removeClass('activeSubPage')
                .stop(true, true)
                .animate({
                    top: -$(window).outerHeight()
                },{
                    duration:800,
                    ease: 'easeInExpo',
                    complete:function(){
                        $(this).css({display:'none'});
                        $selector
                            .css({'overflow':'visible', '-webkit-overflow-scrolling':'touch'});
                        $('body').removeClass('show-sub-pages');
                        $('body')
                            .trigger('resizeContent');           
                    }
                })
        })	

   
})
/*---------------------- end ready -------------------------------*/

win
// .on('resize', onResize)
// .on('orientationchange', onResize)
.load(function(){

     if(!FJSCore.mobile){
       // $('#owl1 .item .box').TMgalleryPrototype({destination:$('body')});
     }

    initCarousel();
    initCarousel_2();

    $("#webSiteLoader").fadeOut(500, 0, function(){
        $(this).remove();
        win
            .trigger('resize')
            .trigger('scroll')
            .trigger('afterload');

        $('body').trigger('resizeContent');       
    }); 

    FJSCore.modules.responsiveContainer({
        elementsSelector: '#other_pages>div',
        affectSelectors: '',
        type: 'inner',
        defStates: ',about,contacts,members'
    });

    win
        .trigger('resize');
    
    if(FJSCore.mobile){
        //----- mobile scripts ------//
        $('#mobile-header>*').wrapAll('<div class="container"></div>');
        $('#mobile-footer>*').wrapAll('<div class="container"></div>');
    }
});

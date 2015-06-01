
function ReturnToOriginalSlide()
{
document.getElementById("OriginalSlide").src="AllServicesSlide.png"
}

function ReturnSidesToOriginal() {
  document.getElementById("SliderWidth").style.background="orange";}
  

function changeSidesTan() {
  document.getElementById("SliderWidth").style.background="#EBB177";}


function changeSidesBlue() {
  document.getElementById("SliderWidth").style.background="#0000FF";}

function changeSidesRed() {
  document.getElementById("SliderWidth").style.background="red";}


function changeSidesPurple() {
  document.getElementById("SliderWidth").style.background="purple";}
  
  function changeSidesLightGreen() {
  document.getElementById("SliderWidth").style.background="#0099FF";}


function changeSidesPink() {
  document.getElementById("SliderWidth").style.background="#FF0099";}

function changeSidesSilver() {
  document.getElementById("SliderWidth").style.background="gray";}

function changeSidesGreen() {
  document.getElementById("SliderWidth").style.background="#00ff00";}

 function TurnDatabaseManagementBright()
{
document.getElementById("DatabaseManagement").src="DatabaseManagement.png";
}

function TurnWebDevBright()
{
document.getElementById("WebDevelopment").src="WebDevelopment.png";
}

function TurnMobileBright()
{ 
document.getElementById("Mobile").src="Mobileicon.png";
}

function TurnWebDesignBright()
{
document.getElementById("WebDesign").src="WebDesign.png";
}

function TurnSocialMediaBright()
{
document.getElementById("SocialMedia").src="SocialMedia.png";
}

function TurnEcommerceBright()
{
document.getElementById("Ecommerce").src="Ecommerce.png";
}

function TurnAnalyticsBright()
{
document.getElementById("Analytics").src="Analytics.png";
}

function TurnSEOBright()
{
document.getElementById("SEO").src="SEO.png";
}

function TurnAllServicesTrans()
{
document.getElementById("AllServices").src="AllServicesTransparent.png";
}

function TurnWebDevBackToTransparent()
{
document.getElementById("WebDevelopment").src="WebDevelopmentTransparent.png";
}

function TurnMobileBackToTransparent()
{
document.getElementById("Mobile").src="Mobileicontrans.png";
}

function TurnWebDesignBackToTransparent()
{
document.getElementById("WebDesign").src="WebDesignTransparent.png";
}

function TurnDatabaseBackToTransparent()
{
document.getElementById("DatabaseManagement").src="DatabaseTrans.png";
}

function TurnSocialMediaBackToTransparent()
{
document.getElementById("SocialMedia").src="SocialMediaTrans.png";
}

function TurnEcommerceBackToTransparent()
{
document.getElementById("Ecommerce").src="EcommerceTrans.png";
}

function TurnAnalyticsBackToTransparent()
{
document.getElementById("Analytics").src="AnalyticsTrans.png";
}

function TurnSEOBackToTransparent()
{
document.getElementById("SEO").src="seo-trans.png";
}

function TurnAllServicesBackToBright()
{
document.getElementById("AllServices").src="AllServices.png";
}

function ChangeSlideToDesign()
{
document.getElementById("OriginalSlide").src="WebDesignSlide.png";
}

function ChangeSlideToMobile()
{
document.getElementById("OriginalSlide").src="MobileSlide.png";
}

function ChangeSlideToWebDev()
{
document.getElementById("OriginalSlide").src="WebDevSlide.png";
}

function ChangeSlideToDatabase()
{
document.getElementById("OriginalSlide").src="DatabaseSlide.png";
}

function ChangeSlideToSocialMedia()
{
document.getElementById("OriginalSlide").src="SocialMediaSlide.png";
}

function ChangeSlideToEcommerce()
{
document.getElementById("OriginalSlide").src="EcommerceSlide.png";
}

function ChangeSlideToAnalytics()
{
document.getElementById("OriginalSlide").src="AnalyticsSlide.png";
}

function ChangeSlideToSEO()
{
document.getElementById("OriginalSlide").src="SEOSlide.png";
}





$(window).load(function(){
// Start plugin
(function($) {
    // if you do not like to use the function name 'slideShow', change this variable
    var pluginId = 'slideShow';

    var methods = {
        init: function(options) {
            var $self = this;

            return this.each(function() {
                var $this = $(this),
                    data = $this.data(pluginId);

                // If the plugin hasn't been initialized yet
                if (!data) {
                    var defaults = {
                        speed: 750,
                        interval: 2000,
                        initial: 2000,
                        elements: 'img',
                        method: 'next',
                        stall: true,
                        cycle: true
                    };

                    // Extend default settings
                    data = $.extend(defaults, options);

                    // Control settings and styles
                    data.$root = $self;
                    data.$current = $(':last', data.$root);
                    data.$current.siblings(data.elements).hide();
                    data.running = false;

                    // Save settings
                    $this.data(pluginId, data);

                    // Start slides
                    if (data.cycle) {
                        methods.start(data);
                    }
                }
            });
        },

        start: function(data) {
            if (!data) {
                data = this.data(pluginId);
                data.cycle = true;
            }

            clearTimeout(data.timeout);

            data.timeout = setTimeout(function() {
                data.$root[pluginId](data.method, true);
            }, data.initial);
        },

        stop: function(data) {
            if (!data) {
                data = this.data(pluginId);
                data.cycle = false;
            }

            clearTimeout(data.timeout);
        },

        next: function(noforce) {
            var force = noforce ? false : true;
            
            return this.each(function() {
                var data = $(this).data(pluginId),
                    el = data.$current.next();

                if (el.length === 0) {
                    el = $(data.elements, this).first();
                }

                methods.transit(el, data, force);
            });
        },

        prev: function(noforce) {
            var force = noforce ? false : true;
            
            return this.each(function() {
                var data = $(this).data(pluginId),
                    el = data.$current.prev();

                if (el.length === 0) {
                    el = $(data.elements, this).last();
                }

                methods.transit(el, data, force);
            });
        },

        rand: function(noforce) {
            var force = noforce ? false : true;
            
            return this.each(function() {
                var data = $(this).data(pluginId),
                    $sibs = data.$current.siblings(data.elements),
                    rand = Math.floor(Math.random() * $sibs.length),
                    el = $sibs[rand];

                methods.transit(el, data, force);
            });
        },

        settings: function() {
            return $(this).data(pluginId);
        },

        transit: function(el, data, force) {
            if ((!data.cycle && !force) || (data.stall && data.running)) {
                return;
            }

            if (data.cycle) {
                data.running = true;
                methods.stop(data);
            }

            data.$current.fadeOut(data.speed);
            data.$current = $(el).fadeIn(data.speed, function(a) {
                if (data.cycle) {
                    data.running = false;
                    methods.start(data, true);
                }
            });
        }
    };

    $.fn[pluginId] = function(method) {

        // Method calling logic
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' + method + ' does not exist on jQuery.' + pluginId);
        }

    };
})(jQuery);
// End plugin

var $show = $('.slideshow');

// Slideshow with all defaults
$show.slideShow({
    // Speed of the animation
    speed: 700,
    // Child elements selector / decides what the slides will be, default = img
    elements: 'img',
    // This will prevent a new animation being added to the existing que if the object is already being animated, use with caution, default = false
    stall: false,
    // Wether or not to continuesly cycle through images
    cycle: true,
    // First slide delay from pageload event (if cycle = true)
    initial: 8000,
    // Interval for the cycle (if cycle = true)
    interval: 8000,
    // Can be next = forward, prev=backward or rand, will be used in cycle (if cycle = true)
    method: 'next'
}).click(function() {
    $show.slideShow('prev'); // Clicking container itself = next too
});
$('#nextSlide').click(function() {
    $show.slideShow('next'); // Go to next slide in line 
});

$('#prevSlide').click(function() {
    $show.slideShow('prev'); // Go to previous slide in line 
});

$('#startSlide').click(function() {
    $show.slideShow('start'); // Start cycling through the slides, or reset cycling if already active
});

$('#stopSlide').click(function() {
    $show.slideShow('stop'); // Stop cycling through slides
});

// Start 2nd slideshow with all defaults no triggers:
$('.slideshow2').slideShow();

console.log($('.slideshow').slideShow('settings'));
console.log($('.slideshow2').sleShow('settings'));
});//]]>;





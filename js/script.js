document.addEventListener("DOMContentLoaded", function(event) {

    //Un commentaire
    console.log("Ça fonctionne!!!");


    function scrollWaypointInit( items, trigger ) {
        items.each( function() {
            var element = $(this),
                osAnimationClass = element.data("animation"),
                osAnimationDelay = element.attr('data-animation-delay');

            element.css({
                '-webkit-animation-delay':  osAnimationDelay,
                '-moz-animation-delay':     osAnimationDelay,
                'animation-delay':          osAnimationDelay
            });

            var trigger = ( trigger ) ? trigger : element;

            trigger.waypoint(function() {
                element.addClass('animated').addClass(osAnimationClass);
            },{
                // triggerOnce: true,
                offset: '80%'
            });
        });
    }

    const menu = document.querySelector("#toggle");
    if(menu !== null) {
        menu.addEventListener("click", (e) => {
            menu.classList.toggle("active");
            document.querySelector("#overlay").classList.toggle("open");
        });
    }

    scrollWaypointInit( $('.animateMe') );






});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJzY3JpcHQuanMiXSwic291cmNlc0NvbnRlbnQiOlsiZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcihcIkRPTUNvbnRlbnRMb2FkZWRcIiwgZnVuY3Rpb24oZXZlbnQpIHtcclxuXHJcbiAgICAvL1VuIGNvbW1lbnRhaXJlXHJcbiAgICBjb25zb2xlLmxvZyhcIsOHYSBmb25jdGlvbm5lISEhXCIpO1xyXG5cclxuXHJcbiAgICBmdW5jdGlvbiBzY3JvbGxXYXlwb2ludEluaXQoIGl0ZW1zLCB0cmlnZ2VyICkge1xyXG4gICAgICAgIGl0ZW1zLmVhY2goIGZ1bmN0aW9uKCkge1xyXG4gICAgICAgICAgICB2YXIgZWxlbWVudCA9ICQodGhpcyksXHJcbiAgICAgICAgICAgICAgICBvc0FuaW1hdGlvbkNsYXNzID0gZWxlbWVudC5kYXRhKFwiYW5pbWF0aW9uXCIpLFxyXG4gICAgICAgICAgICAgICAgb3NBbmltYXRpb25EZWxheSA9IGVsZW1lbnQuYXR0cignZGF0YS1hbmltYXRpb24tZGVsYXknKTtcclxuXHJcbiAgICAgICAgICAgIGVsZW1lbnQuY3NzKHtcclxuICAgICAgICAgICAgICAgICctd2Via2l0LWFuaW1hdGlvbi1kZWxheSc6ICBvc0FuaW1hdGlvbkRlbGF5LFxyXG4gICAgICAgICAgICAgICAgJy1tb3otYW5pbWF0aW9uLWRlbGF5JzogICAgIG9zQW5pbWF0aW9uRGVsYXksXHJcbiAgICAgICAgICAgICAgICAnYW5pbWF0aW9uLWRlbGF5JzogICAgICAgICAgb3NBbmltYXRpb25EZWxheVxyXG4gICAgICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgICAgIHZhciB0cmlnZ2VyID0gKCB0cmlnZ2VyICkgPyB0cmlnZ2VyIDogZWxlbWVudDtcclxuXHJcbiAgICAgICAgICAgIHRyaWdnZXIud2F5cG9pbnQoZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgICAgICBlbGVtZW50LmFkZENsYXNzKCdhbmltYXRlZCcpLmFkZENsYXNzKG9zQW5pbWF0aW9uQ2xhc3MpO1xyXG4gICAgICAgICAgICB9LHtcclxuICAgICAgICAgICAgICAgIC8vIHRyaWdnZXJPbmNlOiB0cnVlLFxyXG4gICAgICAgICAgICAgICAgb2Zmc2V0OiAnODAlJ1xyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICBjb25zdCBtZW51ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiN0b2dnbGVcIik7XHJcbiAgICBpZihtZW51ICE9PSBudWxsKSB7XHJcbiAgICAgICAgbWVudS5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKGUpID0+IHtcclxuICAgICAgICAgICAgbWVudS5jbGFzc0xpc3QudG9nZ2xlKFwiYWN0aXZlXCIpO1xyXG4gICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI292ZXJsYXlcIikuY2xhc3NMaXN0LnRvZ2dsZShcIm9wZW5cIik7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcblxyXG4gICAgc2Nyb2xsV2F5cG9pbnRJbml0KCAkKCcuYW5pbWF0ZU1lJykgKTtcclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxufSk7Il0sImZpbGUiOiJzY3JpcHQuanMifQ==

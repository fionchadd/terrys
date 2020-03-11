jQuery(window).load(function() {
//slider for images
        jQuery('.flexslider.gallery').flexslider({
            animation: "fade",
           slideshow: true,
           slideshowSpeed: 5000,
              animationSpeed: 2000,
              animationLoop: true,
              controlNav: false,
              directionNav: false,	
          });

          // viewport height on mobile
          function resetHeight(){
            // reset the body height to that of the inner browser
            document.body.style.height = window.innerHeight + "px";
        }
        // reset the height whenever the window's resized
        window.addEventListener("resize", resetHeight);
        // called to initially set the height.
        resetHeight();
        });
          
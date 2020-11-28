 import lax from 'lax.js'
 window.onload = function () {
    lax.init()

    // Add a driver that we use to control our animations
    lax.addDriver('scrollY', function () {
      return window.scrollY
    })

    // Add animation bindings to elements
    // Header
    lax.addElements('.s-header__scroll', {
      scrollY: {
        opacity: [
          [100, 400],
          [1, 0]
        ]
      }
    });
    lax.addElements(`.text-0`, {
        scrollY: {
          opacity: [
            [0, 'screenWidth/2'],
            [0, 1]
          ]
        }
    });

    lax.addElements(`.img-scale`, {
        scrollY: {
          scale: [
            [0, 'screenWidth/3'],
            [0, 1.2]
          ]
        }
    });

    let i = 100;
    document.querySelectorAll('.js-opacity-texts-1 p').forEach((elem) => {
      i += 30;
       lax.addElements(`.${elem.classList[0]}`, {
        scrollY: {
          opacity: [
            ['screenWidth/6', 'screenWidth/2'],
            [0, 1]
          ]
        }
      });



    });
   
  }
import {gsap, Power0, Power2, Power1, Power4} from 'gsap';

export class Button {
  constructor() {
    let magnets = document.querySelectorAll('.btn--wrapper')
    let strength = 75

    if (magnets.length === 0) return;

    this.init(magnets, strength);
  }

  init(magnets, strength) {
    magnets.forEach((magnet) => {

      magnet.addEventListener('mousemove', moveMagnet);
      magnet.addEventListener('mouseout', function (event) {
        let magnetLine = event.currentTarget.querySelector('.btn__text-line')
        let magnetLine2 = event.currentTarget.querySelector('.btn__text-line2')

        gsap.to(event.currentTarget, 1, {x: 0, y: 0, ease: Power2.easeOut})
        if (magnetLine) gsap.to(magnetLine, 1, {x: 0, y: 0, ease: Power2.easeOut})
        if (magnetLine2) gsap.to(magnetLine2, 1, {x: 0, y: 0, ease: Power4.easeOut})
      });
    });

    function moveMagnet(event) {
      let magnetButton = event.currentTarget
      let magnetLine = magnetButton.querySelector('.btn__text-line')
      let magnetLine2 = magnetButton.querySelector('.btn__text-line2')
      let bounding = magnetButton.getBoundingClientRect()

      let customStrength = 0

      if (magnetButton.querySelector('.btn').getAttribute('magnetic-strength')) {
        customStrength = magnetButton.querySelector('.btn').getAttribute('magnetic-strength')
      }

      gsap.to(magnetButton, 1, {
        x: (((event.clientX - bounding.left) / magnetButton.offsetWidth) - 0.5) * (customStrength ? customStrength : strength),
        y: (((event.clientY - bounding.top) / magnetButton.offsetHeight) - 0.5) * (customStrength ? customStrength : strength),
        ease: Power0.easeOut
      })


      if (magnetLine) {
        gsap.to(magnetLine, 1, {
          x: (((event.clientX - bounding.left) / magnetButton.offsetWidth) - 0.5) * (customStrength ? customStrength : strength) * 0.5,
          y: (((event.clientY - bounding.top) / magnetButton.offsetHeight) - 0.5) * (customStrength ? customStrength : strength) * 0.5,
          ease: Power0.easeOut
        })
      }

      if (magnetLine2) {
        gsap.to(magnetLine2, 1, {
          x: (((event.clientX - bounding.left) / magnetButton.offsetWidth) - 0.5) * (customStrength ? customStrength : strength) * 0.5,
          y: (((event.clientY - bounding.top) / magnetButton.offsetHeight) - 0.5) * (customStrength ? customStrength : strength) * 0.5,
          ease: Power4.easeOut
        })
      }
    }
  }
}

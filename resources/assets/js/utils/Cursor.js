export class Cursor {
  constructor() {
    this._move = document.querySelector(".sub-footer__cta");
    this._subfooter = document.querySelector(".sub-footer");

    if (!this._move) return;

    this.init();
  }

  init() {

    this._subfooter.onpointerenter = () => {
      this._move.classList.add("active")
    }

    this._subfooter.onpointerleave = () => {
      this._move.classList.remove("active")
    }


    document.body.onpointermove = event => {
      const {clientX, clientY} = event;

      this._move.animate({
        left: `${clientX}px`,
        top: `${clientY}px`

      }, {duration: 2000, fill: "forwards"})
    }
  }
}

import {Plugins, Sortable} from "@shopify/draggable";

export class Puzzle {
  constructor() {
    this._puzzle = document.querySelector('.s-team-list-wrapper');

    if (!this._puzzle) return;

    console.log(this._puzzle.querySelectorAll('.c-team'))

    // this.init();
  }

  init() {
    const sortable = new Sortable(this._puzzle, {
      draggable: '.c-team',
      mirror: {
        constrainDimensions: true,
      },
      plugins: [Plugins.SwapAnimation, Plugins.SortAnimation],
      swapAnimation: {
        duration: 800,
        easingFunction: 'cubic-bezier(.32, .94, .6, 1)',
        horizontal: true,
      },
      sortAnimation: {
        duration: 800,
        easingFunction: 'cubic-bezier(.32, .94, .6, 1)',
      }
    })
  }
}

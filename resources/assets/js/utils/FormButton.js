export class FormButton {
  constructor() {
    this._btn = document.querySelector('.forminator-button')
    if (!this._btn) return

    this.init()
  }

  init() {
    let inner = this._btn.innerHTML;
    this._btn.innerHTML = ''

    let divParent = document.createElement('div')
    let divLine1 = document.createElement('div')
    let divLine2 = document.createElement('div')

    divParent.classList.add('btn__text')
    divLine1.classList.add('btn__text-line')
    divLine2.classList.add('btn__text-line2')

    divParent.innerHTML = inner
    divParent.appendChild(divLine1)
    divParent.appendChild(divLine2)


    this._btn.appendChild(divParent)
  }
}

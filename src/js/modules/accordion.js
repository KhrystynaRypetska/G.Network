

export default class Accordion {
  constructor(className = 'js-accordion') {
    this.items = [...document.getElementsByClassName(className)]
  }

  accordionHandler(items) {
    items.forEach((item, index) => {

      items[index].addEventListener('click', (event)=> {
        const currentElem = event.currentTarget
        const panel = currentElem.nextElementSibling

        currentElem.classList.toggle('active')

        if (panel.style.maxHeight) {
          panel.style.maxHeight = null
        } else {
          panel.style.maxHeight = panel.scrollHeight + 'px'
        }
      })
    })

  }

  init() {
    if (this.items.length) {
      this.accordionHandler(this.items)
    }
  }
}


export default class Accordion {
  constructor(className = 'js-accordion') {
    this.items = [...document.getElementsByClassName(className)]
  }

  accordionHandler(items) {
    items[0].classList.toggle('active')
    const panelFirst = items[0].nextElementSibling

    panelFirst.style.maxHeight = panelFirst.scrollHeight + 'px'

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

        this.closePrevHandler(items, currentElem)
      })
    })

  }

  closePrevHandler(itemsArr, current) {
    itemsArr.forEach((item)=> {
      const panel = item.nextElementSibling
      if (item !== current) {
        item.classList.remove('active')
        panel.style.maxHeight = null
      }
    })
  }

  init() {
    if (this.items.length) {
      this.accordionHandler(this.items)
    }
  }
}
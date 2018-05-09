const menuData = require('./menu-data');

let smartMenu = '<ul class="nav navbar-nav">'

const buildMenu = (list) => (
  list.map((item) => {
    let itemString = `<li><a href="${item.href}?${Math.random()}" target="_top">${item.title}</a>`
    if (item.children) {
      itemString += `<ul class="dropdown-menu">`
      itemString += buildMenu(item.children)
      itemString += `</ul>`
    }
    itemString += `</li>`
    return itemString;
  }).join('')
)

smartMenu += buildMenu(menuData);

smartMenu += '</ul>'


module.exports = smartMenu;
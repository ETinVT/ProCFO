const menuData = require('./menu-data');

let cssMenu = '<div id="nav-menu"><ul class="menu" id="nav">'

const buildMenu = (list) => (
  list.map((item) => {
    let itemString = `
      <li ${item.children ? 'class="parent"' : null}>
        <span class="${item.children ? 'topdaddy' : 'top'}">
          <span class="leftBG"></span>
          <a href="${item.href}?${Math.random()}" target="_top">${item.title}</a>
          <span class="rightBG"></span>
          <span class="selector"></span>
        </span>`
    if (item.children) {
      itemString += `<ul>`
      itemString += buildMenu(item.children)
      itemString += `</ul>`
    }
    itemString += `</li>`
    return itemString;
  }).join('')
)

cssMenu += buildMenu(menuData);

cssMenu += '</ul></div>'


module.exports = cssMenu;
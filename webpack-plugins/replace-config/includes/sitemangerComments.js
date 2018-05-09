const smartMenu = require('../smart-menu');
const cssMenu = require('../css-menu');

const sitemangerCommentReplacements = [
  {
    pattern: /<!-- Start Navbar -->/,
    replacement: process.env.NAVBAR === 'smart' ? smartMenu : cssMenu
  },
  {
    pattern: /<!-- Start Stylesheet -->/,
    replacement: `<link href="http://cp${process.env.CPSERVER}.cpasitesolutions.com/~${process.env.CPUSERNAME}/admin/compiled.css" rel="stylesheet">`
  },
  {
    pattern: /<!-- Start Header -->/,
    replacement: `<h2>${process.env.COMPANYNAME}</h2>`
  },
]

module.exports = sitemangerCommentReplacements
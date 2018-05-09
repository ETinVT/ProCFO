const smartMenu = require('../helpers/menu/smart-menu');
const cssMenu = require('../helpers/menu/css-menu');
const content = require('../helpers/html/content');
const hubPictures = require('../helpers/html/hubPictures');
const hubTabs = require('../helpers/html/hubTabs');

const sitemangerCommentReplacements = [
  {
    pattern: /<!-- Start Navbar -->/,
    replacement: process.env.NAVBAR === 'smart' ? smartMenu : cssMenu
  },
  {
    pattern: /<!-- Start Stylesheet -->/,
    replacement: process.env.CSSLOCATION === 'local' ? '' : `<link href="http://cp${process.env.CPSERVER}.cpasitesolutions.com/~${process.env.CPUSERNAME}/admin/compiled.css" rel="stylesheet">`
  },
  {
    pattern: /<!-- Start Header -->/,
    replacement: `<h2>${process.env.COMPANYNAME}</h2>`
  },
  {
    pattern: /<!-- Start Page -->/,
    replacement: content
  },
  {
    pattern: /<!-- Start Page Pictures -->/,
    replacement: hubPictures
  },
  {
    pattern: /<!-- Start Page Tabs -->/,
    replacement: hubTabs
  }
]

module.exports = sitemangerCommentReplacements
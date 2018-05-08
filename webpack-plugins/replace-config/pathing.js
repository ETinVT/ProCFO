const replacePathing = [
  {
    pattern: /(src="|href="|url\()\/(images|~)/,
    replacement: function (match, protocol, path) {
      return `${protocol}http://cp${process.env.CPSERVER}.cpasitesolutions.com/${path}`
    }
  },
]

module.exports = replacePathing;
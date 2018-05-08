const replacePathing = [
  {
    pattern: /(src="|href=")\/(images|~)/,
    replacement: function (match, protocol, path) {
      return `${protocol}http://cp${process.env.CPSERVER}.cpasitesolutions.com/${path}`
    }
  }
]

module.exports = replacePathing
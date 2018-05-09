const pathingReplacement = [
  {
    pattern: process.env.CSSLOCATION === 'local' ? /skipreplacement/ : /(href=")\/(images|~)/,
    replacement: function (match, protocol, path) {
      return `${protocol}http://cp${process.env.CPSERVER}.cpasitesolutions.com/${path}`
    }
  },
  {
    pattern: process.env.JSLOCATION === 'local' ? /skipreplacement/ : /(src=")\/(images|~)/,
    replacement: function (match, protocol, path) {
      return `${protocol}http://cp${process.env.CPSERVER}.cpasitesolutions.com/${path}`
    }
  },
  {
    pattern: process.env.IMGLOCATION === 'local' ? /skipreplacement/ : /(url\()\/(images|~)/,
    replacement: function (match, protocol, path) {
      return `${protocol}http://cp${process.env.CPSERVER}.cpasitesolutions.com/${path}`
    }
  },
]

module.exports = pathingReplacement;
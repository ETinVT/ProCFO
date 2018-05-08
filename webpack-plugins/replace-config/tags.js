const replaceTags = [
  {
    pattern: /{company_name}/,
    replacement: process.env.COMPANYNAME
  },
  {
    pattern: /{firm_type}/,
    replacement: process.env.FIRMTYPE
  },
  {
    pattern: /{street_address}/,
    replacement: process.env.STREETADDRESS
  },
  {
    pattern: /{city}/,
    replacement: process.env.CITY
  },
  {
    pattern: /{state}/,
    replacement: process.env.STATE
  },
  {
    pattern: /{zip}/,
    replacement: process.env.ZIP
  },
  {
    pattern: /{email}/,
    replacement: process.env.EMAIL
  },
  {
    pattern: /{phone}/,
    replacement: process.env.PHONE
  },
  {
    pattern: /{fax}/,
    replacement: process.env.FAX
  },
  {
    pattern: /{domain}/,
    replacement: process.env.DOMAIN
  },
  {
    pattern: /{page_title}/,
    replacement: `${process.env.CITY}, ${process.env.STATE} CPA / ${process.env.COMPANYNAME}`
  },
  {
    pattern: /{consult_text}/,
    replacement: process.env.CONSULTTEXT
  },
  {
    pattern: /{facebook}/,
    replacement: process.env.FACEBOOK
  },
  {
    pattern: /{googleplus}/,
    replacement: process.env.GOOGLEPLUS
  },
  {
    pattern: /{linkedin}/,
    replacement: process.env.LINKEDIN
  },
  {
    pattern: /{twitter}/,
    replacement: process.env.TWITTER
  }
]

module.exports = replaceTags
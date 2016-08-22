# HOW TO USE - GUIDE:

Define true/false value to purify external or all links as per your need


[![Latest Version](https://img.shields.io/packagist/v/nexuslinkservices/external-link-purifier.svg?style=flat-square)](https://packagist.org/packages/nexuslinkservices/link-email-highlighter)
[![Software License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nexuslinkservices/external-link-purifier/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/email-link-highlighter/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/nexuslinkservices/external-link-purifier/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/email-link-highlighter/build-status/master)

i.e.:  I want to highlight only links in my content, so I need to 
define following variables in my configuration yaml file.

```
external_link:
    purify: true    
```

```
Note(s): 
1. If configuration yaml is not there in your project then the default configuration will be taken into consideration.
2. The bundle uses symfony yaml component to parse the yaml configuration.
```

Following is the reference code to make it working,

```
/**
 * CODE

 * create a new object of LinkPurifier class
 * call purify method with 3 arguments
 * $content to purify links
 * $domain keep links of this domain and remove other external links (optional), If not specified remove all links
 * $purify true/false (optional)
 */

$linkPurifier = new LinkPurifier($pathToYaml);  //$pathToYaml is optional as mentioned earlier
$filteredContent = $linkPurifier->Purify($contentToBePurifyForLinks, $domainToKeep, $purify);
```

That's it with the bundle.

## CONTRIBUTING:

Pull requests are always welcome.
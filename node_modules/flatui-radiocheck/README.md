# Warning: This is still alpha. Expect it to break.

# flatui-radiocheck
jQuery radiocheck plugin lifted from https://github.com/designmodo/Flat-UI

# What is Flat-UI?
Flat UI is a free Bootstrap theme from the guys at designmodo. It consists of a set of CSS, some fonts, some image
assets and some JavaScripts (mostly jQuery plugins) to add some nice UI/UX behaviors.

# What is flatui-radiocheck?
This is just the jQuery radiocheck plugin. It will allow you to initialize custom radio- and checkboxes. It is in fact
the only javascript that is _added_ by designmodo. The rest is just bundled redistributable stuff.

# But why this seperate repository?
If you have ever tried to get Flat-UI running as a UI kit of choice for a modern single page app using buildtools such
as Webpack, you probably found out that this process is cumbersome. Luckily, all the redistributable stuff that
Flat-UI uses is installable per `npm`, which allows for these libraries to be loaded using `require()` statements.

lets take a look at some of the devDependencies of Flat-UI:

```json
devDependencies": {
    "jquery": "~1.11.1",
    "jquery-ui": "~1.10.4",
    "bootstrap": "~3.2.0",
    "bootstrap-switch": "~3.0.2",
    "holderjs": "~2.4.0",
    "typeahead.js": "~0.10.5",
    "bootstrap-tagsinput": "~0.4.2",
    "select2": "~3.5.1"
```

Not only are these sometimes dated, but radiocheck is missing as it was _bundled_ with Flat-UI. So if you want to walk down the path of modern build tools with Flat-UI, you can get a lot, but not everything. Until now.

# How to use this?

`npm install flatui-radiocheck --save`

Will download and install the node_module and add it to your package.json.

You can then simply `require('flatui-radiocheck')` in your code. After that you can simply do a `$('input[type=checkbox]').radiocheck()` and all should be well.

Mind you that you will obviously need all the other dependencies and ofcourse the CSS, but there are a lot of options here. You can choose to have all the LESS/SASS stuff (if you want to maintain flexibility, but if you'd want that than why choose Flat-UI to begin with, right?), you can opt to use a `require()`able version of just the CSS (check npmjs.com), or you can simply just use a redistributable, minified css and host it as a static file.

# Credits

Credit where credit is due: The radiocheck plugin was contributed by https://github.com/pytkin as part of https://github.com/designmodo/Flat-UI

I only made this repository to fit my particular need and published it here should there be other people attempting the same thing. So any work added by me in this regard is licensed MIT.

Flat UI Free is licensed under a Creative Commons Attribution 3.0 Unported (CC BY 3.0) (http://creativecommons.org/licenses/by/3.0/) and MIT License - http://opensource.org/licenses/mit-license.html.

You are allowed to use these elements anywhere you want, however we’ll highly appreciate if you will link to our website: http://designmodo.com/flat-free/

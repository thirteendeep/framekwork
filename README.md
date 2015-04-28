# Globalia Framework

* [Gulp](#getting-started-with-gulp)

# Getting Started with gulp

#### 1. Install gulp globally:

```sh
$ npm install --global gulp
```

#### 2. Install gulp in your project devDependencies:

```sh
$ npm install --save-dev gulp
```

#### 3. Create a `gulpfile.js` at the root of your project:

```js
var gulp = require('gulp');

gulp.task('default', function() {
  // place code for your default task here
});
```

#### 4. Run gulp:

```sh
$ gulp
```

The default task will run and do nothing.

To run individual tasks, use `gulp <task> <othertask>`.



http://google-code-prettify.googlecode.com/svn/trunk/README.html


---

[Grid](http://foundation.zurb.com/docs/components/grid.html)

[Block grid](http://foundation.zurb.com/docs/components/block_grid.html)

[Visibility](http://foundation.zurb.com/docs/components/visibility.html)

[Px to rem](http://bourbon.io/docs/#px-to-rem)

[Text input](http://bourbon.io/docs/#text-inputs)

---

Why size your text with EMs in CSS?

Style sheets become easier to maintain because all text set in EMs scale to the body font-size. Only one element's font-size needs to change instead of individually changing the font-size of each element.

Accessibility is increased for end-users because text is scaled based on their preferences rather than set statically in pixels. Additionally, end-users can use hot keys to scale the text in all browsers. Many people have difficulty reading small text on a computer screen.


# Globalia Front Framework

* <a href="http://site.local/docs" target="_blank">Documentation</a>
* [Routing](#Routing)
* [Gulp](#getting-started-with-gulp)

---

# Routing

### How it's works

```
http://site.local/[view]/[section](optional)
```
```
/application/view/gui/index.php
http://site.local/gui/
```

```
/application/view/integration/team.php 
http://site.local/integration/team
```


---


# Getting Started with gulp

#### 1. Install gulp globally:

```sh
$ npm install --global gulp
```

#### 2. Install gulp in your project devDependencies:

```sh
$ npm install --save-dev gulp
```

#### 3. Run gulp:

```sh
$ gulp
```

To run individual tasks, use `gulp <task> <othertask>`.


* watch-sass
* css
* js


---

# Grid

Start by adding an element with a class of `row`. This will create a horizontal block to contain vertical columns. Then add divs with a `column` class within that row. You can use `column` or `columns` - the only difference is grammar. Specify the widths of each column with the `small-#`, `medium-#`, and `large-#` classes.

Foundation is mobile-first. Code for small screens first, and larger devices will inherit those styles. Customize for larger screens as necessary.

```html
<div class="row">
  <div class="small-2 large-4 columns">...</div>
  <div class="small-4 large-4 columns">...</div>
  <div class="small-6 large-4 columns">...</div>
</div>
<div class="row">
  <div class="large-3 columns">...</div>
  <div class="large-6 columns">...</div>
  <div class="large-3 columns">...</div>
</div>
<div class="row">
  <div class="small-6 large-2 columns">...</div>
  <div class="small-6 large-8 columns">...</div>
  <div class="small-12 large-2 columns">...</div>
</div>
<div class="row">
  <div class="small-3 columns">...</div>
  <div class="small-9 columns">...</div>
</div>
<div class="row">
  <div class="large-4 columns">...</div>
  <div class="large-8 columns">...</div>
</div>
<div class="row">
  <div class="small-6 large-5 columns">...</div>
  <div class="small-6 large-7 columns">...</div>
</div>
<div class="row">
  <div class="large-6 columns">...</div>
  <div class="large-6 columns">...</div>
</div>
```

[Grid](http://foundation.zurb.com/docs/components/grid.html)

[Block grid](http://foundation.zurb.com/docs/components/block_grid.html)

[Visibility](http://foundation.zurb.com/docs/components/visibility.html)

[Px to rem](http://bourbon.io/docs/#px-to-rem)

[Text input](http://bourbon.io/docs/#text-inputs)

---

Why size your text with EMs in CSS?

Style sheets become easier to maintain because all text set in EMs scale to the body font-size. Only one element's font-size needs to change instead of individually changing the font-size of each element.

Accessibility is increased for end-users because text is scaled based on their preferences rather than set statically in pixels. Additionally, end-users can use hot keys to scale the text in all browsers. Many people have difficulty reading small text on a computer screen.



http://google-code-prettify.googlecode.com/svn/trunk/README.html
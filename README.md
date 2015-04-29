# Globalia Front Framework

* <a href="http://site.local/docs" target="_blank">Documentation</a>
* [Routing](#Routing)
* [Gulp](#getting-started-with-gulp)
* [Grid](#grid)
* [Block grid](#block-grid)

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


Tasks : `watch-sass`, `css`, `js`


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
```

### Advanced
You can nest the grids indefinitely, though at a certain point it will get absurd.

```html
<div class="row">
  <div class="small-8 columns">8
    <div class="row">
      <div class="small-8 columns">8 Nested
        <div class="row">
          <div class="small-8 columns">8 Nested Again</div>
          <div class="small-4 columns">4</div>
        </div>
      </div>
      <div class="small-4 columns">4</div>
    </div>
  </div>
  <div class="small-4 columns">4</div>
</div>
```

### Collapse/Uncollapse Rows
The collapse class lets you remove column gutters (padding).

There are times when you won't want each media query to be collapsed or uncollapsed. In this case, use the media query size you want and collapse or uncollapse and add that to your row element. Example shows no gutter at small media size and then adds the gutter to columns at medium.

```html
<div class="row medium-uncollapse large-collapse">
    <div class="small-6 columns">
        Removes gutter at large media query
    </div>
    <div class="small-6 columns">
        Removes gutter at large media query
    </div>
</div>
```

### Centered Columns
Center your columns by adding a class of `small-centered` to your `column`. Large will inherit small centering by default, but you can also center solely on large by applying a `large-centered` class. To uncenter on large screens use `large-uncentered`.

```html
<div class="row">
  <div class="small-3 small-centered columns">3 centered</div>
</div>
<div class="row">
  <div class="small-6 large-centered columns">6 centered</div>
</div>
<div class="row">
  <div class="small-9 small-centered large-uncentered columns">9 centered</div>
</div>
<div class="row">
  <div class="small-11 small-centered columns">11 centered</div>
</div>
```

# Block Grid
Block grids give you a way to evenly split contents of a list within the grid. If you wanted to create a row of five images or paragraphs that need to stay evenly spaced no matter the screen size, the block grid is for you.

### Basic
Use a simple `small-block-grid-#` class to code up the block grid and specify the number of items in a row.

```html
<ul class="small-block-grid-3">
  <li><!-- Your content goes here --></li>
  <li><!-- Your content goes here --></li>
  <li><!-- Your content goes here --></li>
</ul>
```

### Advanced
Use additional classes to specify a different number of items in a row for each screen size.

```html
<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
  <li><!-- Your content goes here --></li>
  <li><!-- Your content goes here --></li>
  <li><!-- Your content goes here --></li>
  <li><!-- Your content goes here --></li>
  <li><!-- Your content goes here --></li>
  <li><!-- Your content goes here --></li>
</ul>
```


[Visibility](http://foundation.zurb.com/docs/components/visibility.html)

[Text input](http://bourbon.io/docs/#text-inputs)

---

Why size your text with EMs in CSS?

Style sheets become easier to maintain because all text set in EMs scale to the body font-size. Only one element's font-size needs to change instead of individually changing the font-size of each element.

Accessibility is increased for end-users because text is scaled based on their preferences rather than set statically in pixels. Additionally, end-users can use hot keys to scale the text in all browsers. Many people have difficulty reading small text on a computer screen.



http://google-code-prettify.googlecode.com/svn/trunk/README.html
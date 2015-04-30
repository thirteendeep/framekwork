# Globalia Front Framework

* <a href="http://site.local/docs" target="_blank">Documentation</a>
* [Routing](#Routing)
* [Gulp](#getting-started-with-gulp)
* [Grid](#grid)
* [Block grid](#block-grid)
* [Visibility](#visibility)
* [Text Inputs](#text-inputs)

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

# Visibility Classes
Visibility classes let you show or hide elements based on screen size or device orientation. You can use visibility classes to control which elements users see depending on their browsing environment.

### Show by Screen Size
In this example, we use the __show__ visibility classes to show certain strings of text based on the device on which users view a page. If their browser meets the class's conditions, the element will be shown. If not, it will be hidden.

```html
<p class="panel">
  <strong class="show-for-small-only">This text is shown only on a small screen.</strong>
  <strong class="show-for-medium-up">This text is shown on medium screens and up.</strong>
  <strong class="show-for-medium-only">This text is shown only on a medium screen.</strong>
  <strong class="show-for-large-up">This text is shown on large screens and up.</strong>
  <strong class="show-for-large-only">This text is shown only on a large screen.</strong>
  <strong class="show-for-xlarge-up">This text is shown on xlarge screens and up.</strong>
  <strong class="show-for-xlarge-only">This text is shown only on an xlarge screen.</strong>
  <strong class="show-for-xxlarge-up">This text is shown on xxlarge screens and up.</strong>
</p>
```

### Hide by Screen Size
This example shows the opposite: It uses the __hide__ visibility classes to state which elements should disappear based on your device's screen size or orientation. Users will see elements on every browser __except__ those that meet these conditions.

````html
<p class="panel">
  <strong class="hide-for-small-only">You are <em>not</em> on a small screen.</strong>
  <strong class="hide-for-medium-up">You are <em>not</em> on a medium, large, xlarge, or xxlarge screen.</strong>
  <strong class="hide-for-medium-only">You are <em>not</em> on a medium screen.</strong>
  <strong class="hide-for-large-up">You are <em>not</em> on a large, xlarge, or xxlarge screen.</strong>
  <strong class="hide-for-large-only">You are <em>not</em> on a large screen.</strong>
  <strong class="hide-for-xlarge-up">You are <em>not</em> on an xlarge screen and up.</strong>
  <strong class="hide-for-xlarge-only">You are <em>not</em> on an xlarge screen.</strong>
  <strong class="hide-for-xxlarge-up">You are <em>not</em> on an xxlarge screen.</strong>
</p>
```

### Responsive Visibility
Finally, if you want to hide some content but still make it accessible for screen readers, use the __hidden__ visibility classes. Do not confuse these classes with __hide__ visibility classes. Use these classes in conjunction with the __hide__ and __show__ visibility classes to control complex layouts while offering accessibility for those using screen readers.

```html
<p class="panel">
  <strong class="hidden-for-small-only">You are <em>not</em> on a small screen.</strong>
  <strong class="hidden-for-medium-up">You are <em>not</em> on a medium, large, xlarge, or xxlarge screen.</strong>
  <strong class="hidden-for-medium-only">You are <em>not</em> on a medium screen.</strong>
  <strong class="hidden-for-large-up">You are <em>not</em> on a large, xlarge, or xxlarge screen.</strong>
  <strong class="hidden-for-large-only">You are <em>not</em> on a large screen.</strong>
  <strong class="hidden-for-xlarge-up">You are <em>not</em> on an xlarge screen and up.</strong>
  <strong class="hidden-for-xlarge-only">You are <em>not</em> on an xlarge screen.</strong>
  <strong class="hidden-for-xxlarge-up">You are <em>not</em> on an xxlarge screen.</strong>
</p>
```
To reverse the rules defined by __hidden__, use the __visible__ visibility classes.

### Orientation Detection
This straightforward example shows how two strings of text determine whether or not an element is visible in different orientations. This will change on mobile devices when you rotate the device. On desktop, the orientation is almost always reported as landscape.

```html
<p class="panel">
  <strong class="show-for-landscape">You are in landscape orientation.</strong>
  <strong class="show-for-portrait">You are in portrait orientation.</strong>
</p>
```


# Text Inputs
Generates variables for all HTML text-based inputs. Please note that you must use interpolation on the variable: `#{$all-text-inputs}`.

```css
#{$all-text-inputs} {
  border: 1px solid #f00;
}

#{$all-text-inputs-focus},
#{$all-text-inputs-hover} {
  border: 1px solid #0f0;
}

#{$all-text-inputs-active} {
  border: 1px solid #00f;
}
```

# rem
Why size your text with EMs in CSS?

Style sheets become easier to maintain because all text set in EMs scale to the body font-size. Only one element's font-size needs to change instead of individually changing the font-size of each element.

Accessibility is increased for end-users because text is scaled based on their preferences rather than set statically in pixels. Additionally, end-users can use hot keys to scale the text in all browsers. Many people have difficulty reading small text on a computer screen.

```css
.node {
	font-size: rem-calc(20);
}
```

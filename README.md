WP BS Standalone Starter Template
===

This starter template is intended for use with the <a href="https://github.com/RelevanceDigital/wp-bs4-starter-theme" target="_blank">WordPress
Bootstrap Starter Theme</a>. It uses the same content and folder structure as the WordPress starter, but WordPress
is not required for it to run. 

Frontend developers can use it with dummy content and then pass it to a backend developer to convert into a WordPress theme with minimal effort.

- Includes gulp file to watch/compile/compress scss, js and images.
- Uses [browserSync](https://browsersync.io/) to reload browsers after file changes.
- Includes [lazysizes](https://github.com/aFarkas/lazysizes) for lazyloading srcset images (object-fit plugin enabled as an example).


## Requirements

- LAMP Stack ([Laragon](https://laragon.org/), [XAMPP](https://www.apachefriends.org/), [MAMP](https://www.mamp.info/) or similar)
- node/npm
- Gulp installed globally: `npm install --global gulp-cli`
 

Getting Started
---------------

**Installation**

1. Edit `gulpfile.js` and update the browserSync proxy location to your localhost path
2. Run `npm install` to install dependencies
3. Run `gulp install` to copy library scss files into the main scss folder
4. Run `gulp` to generate compiled assets and watch folders

## Styles

Running `gulp install` copies the main bootstrap.scss file from `node_modules` into the scss folder. It replaces the paths to imported files and imports `_custom.scss` to override default variables.

The original variables file is also copied into the `scss` folder as `_variables-reference.scss`.

`style.scss` imports `bootstrap.scss`. **style.scss is the file to add your custom scss to.**

When running `gulp`, any changes to files in the `scss` folder will regenerate the compiled css files in `assets/css` (compressed) and `css` (nested).

To add your own scss files, add them to the `scss` folder without a `_` prefix.

## JavaScript

Adding or editing files in the `js` folder whilst running `gulp` will compile them to the `assets/js` folder.

Bootstrap and Fontawesome are loaded from a cdn.

## Images

Any images added to the `images` folder whilst running `gulp` are automatically compressed and added to the `assets/images` folder.

2 compression types are available. If the default `imagescompress` reduces the quality of your images you can use `imagesreduced` by changing the `watch` task in `gulpfile.js`.

Theme Structure
---------------

The theme is set up in the same way that WordPress themes are structured.
The header and menu of the site are in header.php and the site footer in footer.php. These files are then included in other page templates.

- header.php - Contains the document head and menu. This file is included at the top of all other page templates.
- footer.php - Contains the site footer and closes tags opened in header.php. It is included at the bottom of all other page templates.
- archive.php - The main blog listing page showing the latest posts. Create additonal archive-post-type.php files as needed for other listing pages.
- single.php - Represents a single blog post.
- page.php - A static page template, similar to single.php but without the author and post date output.
- 404.php - The 404 not found page template.
- bootstrap.php - A test page so that you can see how changes affect the styling of Bootstrap components.
- /template-parts/ - Contains smaller blocks of content that can be reused and included in other pages.
- /template-parts/blocks/ - Contains the template files for the reusable Gutenberg editor blocks.

Notes On Styling
----------------

**Use Bootstrap!** It's more than just a grid and has everything needed to scaffold a site.  
Modify the framework output by overriding its variables in /scss/_custom.scss, don't manually overwrite the framework classes and leave the varables as defaults.  
Bootstrap components are accessible, so think twice before replacing them with something that isn't.

**Mobile first** - Default styles should be for the smallest screens, with styles affecting larger screens wrapped in media queries.  
Bootstrap has [media query mixins](https://getbootstrap.com/docs/4.1/layout/overview/#responsive-breakpoints) available which work with the defined breakpoints.  
Writing desktop first CSS means that a mobiel browser first needs to parse the default CSS and then additional media queries so smaller devices need to do more work to render a page.

**Don't undo global styles** - The theme will eventually be used for a CMS with non-technical users adding content.  
If you remove bullets from all list items globally, then the content output doesn't look right when a user adds a list into the editor.  
Likewise, don't remove bottom margins from paragraphs, don't force paragraph alignment or anything else that might cause issues with user added content.  
Bootstrap has classes like `list-unstyled` which can be used in specific places rather than affecting the whole website.

**Use variables for all colours and sizes** - Defining colours as variables means that they can be easily updated without needing to search and replace all instances across multiple files.  
When the styling gets used as a WordPress theme, we also need to specify those colours in the configuration so that the colours available in the editor match the custom ones defined in the theme. This is easier to keep track of if all colours are defined in /scss/_custom.scss.  
This is the same for font sizing as we need to match the editor buttons (Large, small etc) to the sizes defined in our theme. 

**Avoid images in CSS files** - 99% of the images on the site will be user-defined through the site admin. These images will be added inline rather than compiled in CSS files.  
This has a number of benefits: 
- Browsers download all images specified in a CSS file if they are needed or not.
- When added inline, we can use the [Lazysizes unveilhooks plugin](https://github.com/aFarkas/lazysizes/tree/gh-pages/plugins/unveilhooks) to lazyload the images, speeding up page loading time.

**Avoid the use of background images** - SEO's like alt text attributes which can't be added to background images.  
When possible, use `object-fit: cover` instead.

```
<img data-src="/image.jpg" data-sizes="auto" data-parent-fit="cover" class="imagecontainer-img-cover lazyload" alt="">
```
The above tag comes from the [Lazysizes object-fit plugin](https://github.com/aFarkas/lazysizes/tree/gh-pages/plugins/object-fit).  
The WordPress theme has a function to generate lazyloading srcset images using object-fit: cover. The output is similar to the above.  
`object-fit: contain` can also be used by changing the data-parent-fit and class attributes.

**Don't target elements or IDs** - Try and always use classes for styling.  
IDs are overly specific and can cause problems later down the line. Element IDs also need to be unique which means that the styles can't be reused.  
Imagine the following:

```
.block-title h2 {
     font-family: $font-family-serif;
     font-size: $font-size-lg;
   }
``` 

If the title element needs to be changed to a h3 or h4 etc the styling will break.  
Either be less specific and just target the `.block-title` class or use a modifying class like `.block-title-lg` or utility classes such as `font-family-serif` or `font-size-lg`.

```
.font-family-serif {
  font-family: $font-family-serif;
}
.font-size-lg {
  font-size: $font-size-lg;
}
```

WordPress Quirks
----------------

When the WordPress block editor (Gutenberg) is used, there are some additional quirks that need to be taken into account.

Usually, when you want full-width blocks and other blocks of limited width, you would use Bootstrap `container` or `container-fluid` to wrap the content in various places.  
Whilst in the context of WordPress content, this isn't possible.  
**The main content area of the page must be wrapped in a container.** If it isn't then standard editor output such as paragraphs, titles and any content outputted from a core block would be 100% the width of the browser.

The custom blocks that we add to the editor with our custom styling must be valid HTML in their own right. This means that they cannot break the wrapping container and then open it up again after the content. The blocks would eaither not work of the output would be tidied to remove the broken HTML.

For this reason, two classes are added which will break the content out of the container `alignwide` and `alignfull`.  
These classes are also used by core editor blocks when the user wants them to be wider than the rest of the page content, so they should not be removed even if the designs don't use them (Styles are in /scss/custom/_gutenberg.scss).

Check /template-parts/blocks/demo-block-2.php for example usage.
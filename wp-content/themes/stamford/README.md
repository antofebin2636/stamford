# TLDR;

- `cd` in to the theme, run `npm i`. This installs all required packages.
- Activate the theme, then force update the permalinks in the admin. This saves the cachebusting rules to `.htaccess`.
- Set the domain name in `webpack.config.js` to the domain you're working on.
- run `npx webpack` to start development. This will fire up BrowserSync, and automatically watch and compile the JS and SCSS.

## 'Cachebusting'

The theme uses a cachebusting method that requires additional rules in the `.htaccess` file to work properly. These are added automatically when you save the permalink options in the WordPress dashboard.

If the site CSS or JS isn't loading properly, make sure the rewrite rules are in the `.htaccess` file. If they aren't, simply hit `update` in the permalinks menu and they should get written to the file.

## SCSS / CSS

The source SCSS file for the theme is located in `src/scss/theme.scss`, and compiles to `/dist/theme.css` using Webpack. This is then imported by the theme.

### Compiling

To compile the file again, run `npx webpack` (or `npx webpack --progress` if you want more feedback).
If `npx webpack` doesn't work, you probably haven't installed the dependencies first (`npm i`).
This should combine the various files, and minify them. It should also automatically watch the file for changes.

## JavaScript

The source JavaScript file for the theme is located in `src/js/theme.js`, and compiles to `/dist/theme.js` using Webpack. This is then imported by the theme.

Libraries are added and installed using [npm](www.npmjs.com "npm").

### Adding a library

- Find the library on [npm](www.npmjs.com "npm").
- Install the library using `npm i --save name-of-the-package`.
- Import the package in `src/js/theme.js` eg. `import { name-of-the-package } from "name-of-the-package";`
- You can then initialise the library below inside the jQuery wrapper.
- Occasionally it's worth going inside the package-json

### Compiling

To compile the file again, run `npx webpack` (or `npx webpack --progress` if you want more feedback).
If `npx webpack` doesn't work, you probably haven't installed the dependencies first (`npm i`).
This should combine the various files, and minify them. It should also automatically watch the file for changes.

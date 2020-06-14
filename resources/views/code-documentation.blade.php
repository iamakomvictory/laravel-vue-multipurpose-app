

https://fontawesome.com/how-to-use/on-the-web/using-with/sass
|::::in the variable section of your application place this in sass/app.scss to use fontawesome font in your app:::::::|
 $fa-font-path: "../webfonts";
 |:::::::::::::|


|:::::in the booststrap section of your app place the code below in sass/app.scss :::::|
https://fontawesome.com/how-to-use/on-the-web/using-with/sass

@import '~bootstrap/scss/bootstrap';
@import '~admin-lte/dist/css/adminlte.css'; //Root to this path is node_modules
@import '~@fortawesome/fontawesome-free/scss/fontawesome.scss';
@import '~@fortawesome/fontawesome-free/scss/solid.scss';
@import '~@fortawesome/fontawesome-free/scss/brands.scss';

|:::::::::::::|
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Album</title>

        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/js" href="/js/app.js">
    </head>
    <body>
        <div class="banner">
            <nav class="navbar banner-nav absolute-bottom">
                <div class="container">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="featured">
            <div class="featured-item">
                <div class="featured-image-container col-md-7">
                    <div class="featured-big"></div>
                </div>
                <div class="featured-image-container  col-md-5">
                    <div class="featured-small"></div>
                </div>
            </div>
            <div class="featured-item">
                <div class="featured-image-container  col-md-5">
                    <div class="featured-small"></div>
                </div>
                <div class="featured-image-container col-md-7">
                    <div class="featured-big"></div>
                </div>
            </div>
            <div class="featured-item">
                <div class="featured-image-container col-md-7">
                    <div class="featured-big"></div>
                </div>
                <div class="featured-image-container  col-md-5">
                    <div class="featured-small"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="about-us container">
            <div class="about-us-head"><h3>ABOUT US</h3></div>
            <div class="col-md-6">
                <div class="about-us-image">
                    <img src="/images/about/about_us.jpg" alt="About Us">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-us-image">
                    <h4>lorem Ipsum</h4>
                    <span>Auris eget vestibulum augue. Integer sit amet tellus libero.
                        Nam ac enim ut velit dictum congue. 
                        Integer vitae elit in risus laoreet porttitor non nec enim. 
                        Donec nec sapien odio. Nullam dictum, elit maximus vulputate venenatis, 
                        neque velit tincidunt mauris, ac facilisis ligula mi et neque. 
                        Vivamus ut felis sem. In eget diam lorem. Aliquam tincidunt. 
                        Aliquam venenatis non orci egestas cursus. 
                        Phasellus venenatis blandit odio, in tincidunt ex trist. 
                        Integer sit amet tellus libero.Nam ac enim ut velit dictum congue. 
                        Integer vitae elit in risus laoreet porttitor non nec enim.
                    </span>
                </div>
            </div>
        </div>
        <div class="row gallery">
            <div class="container">
                <div class="col-md-6">
                    <div class="gallery-item-big">
                        <a href="#">
                            <img 
                                src="/images/gallery/gallery-item-big1.jpg" 
                                alt="Camera"
                                class="w-100"
                            >
                        </a>
                    </div>
                    <div class="gallery-item-small">
                        <div class="w-50 float-left">
                            <a href="#">
                                <img 
                                    src="/images/gallery/gallery-item-small1.jpg" 
                                    alt="Camera"
                                    class="w-100"
                                >
                            </a>
                        </div>
                        <div class="w-50 float-left">
                            <a href="#">
                                <img 
                                    src="/images/gallery/gallery-item-small2.jpg" 
                                    alt="Camera"
                                    class="w-100"
                                >
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="gallery-item-small">
                        <div class="w-50 float-left">
                            <a href="#">
                                <img 
                                    src="/images/gallery/gallery-item-small4.jpg" 
                                    alt="Camera"
                                    class="w-100"
                                >
                            </a>
                        </div>
                        <div class="w-50 float-left">
                            <a href="#">
                                <img 
                                    src="/images/gallery/gallery-item-small3.jpg" 
                                    alt="Camera"
                                    class="w-100"
                                >
                            </a>
                        </div>
                    </div>
                    <div class="gallery-item-big">
                        <a href="#">
                            <img 
                                src="/images/gallery/gallery-item-big2.jpg" 
                                alt="Camera"
                                class="w-100"
                            >
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer">

        </div>
    </body>
</html>

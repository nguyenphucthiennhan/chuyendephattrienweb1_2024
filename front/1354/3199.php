<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/1354.less', 'css/1354.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="./css/1354.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <section class="blog-section py-5">
        <div class="container">
            <h2 class="section-title text-center">From Our Blog</h2>
            <p class="section-subtitle text-center">
                Our bundles were designed to conveniently package your tanning essentials while saving you money.
            </p>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">

                        <div class="fixed-image-size mb-3"> <img src="./images/blog-15.jpg" alt="Blog Post 1" class="img"></div>
                        <div class="post-meta">
                            <span class="post-category">Tips</span>
                            <span class="post-date">| October 1, 2021</span>
                        </div>
                        <h4 class="post-title">The Best Way To Select Good High-End Cosmetic Products</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">
                        <div class="fixed-image-size mb-3"><img src="./images/blog-13.jpg" alt="Blog Post 2" class="img"></div>
                        <div class="post-meta">
                            <span class="post-category">Make Up</span>
                            <span class="post-date">| October 1, 2021</span>
                        </div>
                        <h4 class="post-title">Herbal Ingredients And Their Role In Beauty Creams</h4>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-post">
                        <div class="fixed-image-size mb-3"><img src="./images/blog-09.jpg" alt="Blog Post 3" class="img"></div>
                        <div class="post-meta">
                            <span class="post-category">Skin Care</span>
                            <span class="post-date">| October 1, 2021</span>
                        </div>
                        <h4 class="post-title">Morning beauty routine: our main rules</h4>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-post">View All Posts</a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="de-DE" prefix="og: http://ogp.me/ns#">
    <meta charset="UTF-8">
    <title>Taste the Difference | Streams, Trees & Mountains </title>
    <meta name="description" content="BeBlack is short for beautiful black. A creative OnePager free to use. Created by www.lautenschlager.de">
    <link rel="author" href="https://lautenschlager.de" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/flexboxgrid.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/theme.css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <header class="fade-in">
        <div class="navigation-bar flex middle-xs">
            <img src="img/logo.svg" class="logo">
            <nav class="end-xs">
                <ul>
                    <li><a href="#about-us">About us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#benefits">Benefits</a></li>
                    <li><a href="#contact">Contact</a></li>
                    @if (Route::has('login'))
                            @auth
                                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                    @endif
                </ul>
            </nav>
        </div>
        <div class="hero flex middle-xs" style="background-image: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7)), url('img/hero-image.webp');
    }">
    <div class="hero-text ">
        <h1>Taste the Difference</h1>
        <p>From leaf to cup, a journey of flavor and purity.</p>
    </div>
</div>
</header>
<div class="wrapper">
    <main>
        <section class="intro" id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <h2 class="section-title">About Us</h2>
                    </div>
                </div>
                <div class="row margin-bottom ">
                    <div class="col-md">
                        <p class="highlight">At Karuwala Mukalana Tea, we are passionate about bringing you the finest, most ethically sourced teas from our pristine forest estate.</p>
                        <p class="author">- A G Sachith Wajirakantha</p>
                    </div>
                    <div class="col-md">
                        <p>Our journey began with a commitment to preserving the natural beauty of our estate while crafting exceptional teas that reflect the richness of our environment. Each tea leaf is meticulously handpicked and processed, ensuring that every cup delivers an unparalleled taste experience.</p>
                    </div>
                    <div class="col-md">
                        <p>But our dedication extends beyond just great tea. We are deeply committed to environmental sustainability, engaging in reforestation efforts and eco-friendly farming practices. With every sip of Karuwala Mukalana Tea, you're not just enjoying a delicious beverage – you're supporting a cause.</p>
                    </div>
                </div>
                <!--div class="row team center-xs">
                    <div class="col-md">
                        <div class="hover-outer-box">
                            <img src="img/Romi-Kobe.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Romi Kobe</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    <a href="#!" target="blank" rel="noopener"><img src="img/facebook-icon.svg" class="team-icon"></a> <a href="#!" target="blank" rel="noopener"><img src="img/twitter-icon.svg" class="team-icon"></a>
                                </div>
                            </div>
                        </div>
                        <p class="team-name">Romi Kobe<br/><span class="position">CEO</span></p>
                    </div>
                    <div class="col-md">
                        <div class="hover-outer-box">
                            <img src="img/Isaac-Desideria.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Isaac Desideria</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    <a href="#!" target="blank" rel="noopener"><img src="img/facebook-icon.svg" class="team-icon"></a> <a href="#!" target="blank" rel="noopener"><img src="img/twitter-icon.svg" class="team-icon"></a>
                                </div>
                            </div>
                        </div>
                        <p class="team-name">Isaac Desideria<br/><span class="position">CTO</span></p>
                    </div>
                    <div class="col-md">
                        <div class="hover-outer-box">
                            <img src="img/Magda-Ilija.jpg">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Magda Ilija</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                                    <a href="#!" target="blank" rel="noopener"><img src="img/facebook-icon.svg" class="team-icon"></a> <a href="#!" target="blank" rel="noopener"><img src="img/twitter-icon.svg" class="team-icon"></a>
                                </div>
                            </div>
                        </div>
                        <p class="team-name">Magda Ilija<br/><span class="position">CFO</span></p>
                    </div>
                </div-->
            </div>
        </section>
        <hr/>

        <section class="cta middle-xs" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center-xs">
                        <h2 class="section-title">PRODUCTS</h2>
                    </div>
                </div>
                <div class="row" style="padding-top: 10%;">
                    <div class="col-md-6">
                        <div class="product-image">
                            <img src="img/pd02.png" alt="Product 2" style = " width:100%">
                        </div>
                    </div>
                    <div class="col-md-6" style="padding-top: 10%; margin-left:-10%">
                        <div class="product-description" style="text-align: right;">
                            <h3>Product Name 2</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor ligula vel justo ultrices, sit amet faucibus mi scelerisque. Aliquam erat volutpat. Mauris rhoncus felis vel metus fermentum, sed euismod ex viverra.</p>
                            <a href=""><button class="light">buy yours Now!</button></a>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 10%;">
                    <div class="col-md-6" style="padding-top: 10%; margin-right:-10%; margin-left:10%">
                        <div class="product-description">
                            <h3>Product Name 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus auctor ligula vel justo ultrices, sit amet faucibus mi scelerisque. Aliquam erat volutpat. Mauris rhoncus felis vel metus fermentum, sed euismod ex viverra.</p>
                            <a href=""><button class="light">buy yours Now!</button></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-image" style="align : right;">
                            <img src="img/pd01.png" alt="Product 1" style="margin-left:-10%">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta middle-xs">
            <div class="container">
                <div class="row middle-md">
                    <div class="col-md-8">
                        <h2>Call to Action</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                        <a href=""><button class="light">Call to action</button></a>
                    </div>
                    <div class="col-md-4">
                        <img src="img/cta-display.png" class="display">
                    </div>
                </div>
            </div>
        </section>
        <section class="portfolio" id="portfolio">
            <div class="container">
                <div class="row center-xs">
                    <div class="col-md">
                        <h2 class="section-title">Galarry</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                    </div>
                </div>
            </div>
            <div class="padding-small">
                <div class="row margin-bottom-small">
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/project-1.png">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Image 01</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                    <a href=""><button class="light">Call to action</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/project-2.png">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Image 02</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                    <a href=""><button class="light">Call to action</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/project-3.png">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Image 03</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                    <a href=""><button class="light">Call to action</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-bottom-small">
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/project-4.png">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Image 04</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                    <a href=""><button class="light">Call to action</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/project-5.png">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Image 05</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                    <a href=""><button class="light">Call to action</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hover-outer-box">
                            <img src="img/project-6.png">
                            <div class="hover-inner-box">
                                <div class="hover-content">
                                    <h3>Image 06</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
                                    <a href=""><button class="light">Call to action</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta">
                <div class="container">
                    <div class="row center-xs">
                        <div class="col-md">
                            <h2>Call to action</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <a href=""><button class="light">Call to action</button></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="blurbs" id="benefits">
                <div class="container">
                    <div class="row">
                        <div class="col-md center-xs">
                            <h2 class="section-title">Benefits</h2>
                        </div>
                    </div>
                    <div class="row margin-bottom-small center-xs">
                        <div class="col-md">
                            <img src="img/001-achievement.svg" class="icon ">
                            <h3>Benefit 1</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                        <div class="col-md">
                            <img src="img/002-pencil.svg" class="icon">
                            <h3>Benefit 2</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                        <div class="col-md">
                            <img src="img/003-idea.svg" class="icon">
                            <h3>Benefit 3</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                    </div>
                    <div class="row center-xs">
                        <div class="col-md">
                            <img src="img/004-shopping-bag.svg" class="icon">
                            <h3>Benefit 4</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                        <div class="col-md">
                            <img src="img/005-fountain-pen.svg" class="icon">
                            <h3>Benefit 5</h3>
                            <p>Lorem ipsum dolor sit amet, c-r adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim. </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="newsletter">
                <div class="container">
                    <div class="row center-xs">
                        <div class="col-md ">
                            <h2>Our newsletter</h2>
                            <form class="flex center-xs">
                                <input placeholder="Enter Your Email" type="email" required="" name="">
                                <button>SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md center-xs">
                            <h2 class="section-title">Contact</h2>
                        </div>
                    </div>
                    <div class="row margin-bottom-small center-xs">
                        <div class="col-md">Call Us<br/>+49 561 0000 0000</div>
                        <div class="col-md">Address<br/>Streetname 12</div>
                        <div class="col-md">Email<br/>kontakt@lautenschlager.de</div>
                    </div>
                    <form action="">
                        <div class="row margin-bottom-small center-xs">

                            <div class="col-md padding-small">
                                <div class="row">
                                    <div class="col-md">
                                        <input placeholder="Enter Your Name" type="text" name="" value="" class="margin-bottom-small">
                                        <input placeholder="Enter Your Email" type="email" name=""  value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md padding-small">
                                <textarea placeholder="Your Message" name="" rows="8" class="margin-bottom-small"></textarea>
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </main>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md center-xs">
                    <img src="img/logo-footer.svg" class="margin-bottom" style="max-width: 150px;">
                </div>
            </div>
            <div class="row margin-bottom-small">
                <div class="col-md-8">
                    <h3>About us</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-4">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about-us">About us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#why-us">Why us</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md ">
                    <p>Follow me on <a href="https://twitter.com/lautenschlagera" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #38A1F3;">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg></a></p>
                    <p>Template created for free commercial use by Andreas Lautenschlager.</p>
                    <p>More free downloads under <a href="https://lautenschlager.de" target="_blank" rel="noopener">lautenschlager.de</a></p>
                    <a rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank"><img alt="Creative Commons License" style="border-width:0; max-width: 60px;" src="https://i.creativecommons.org/l/by/4.0/88x31.png"></a><br>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank">Creative Commons Attribution 4.0 International License</a>.
                    <p>I thank following people for their contribution: <a href="credits.txt">Credits</a>.</p>
                </div>

            </div>
        </div>
    </footer>

    <div class="row secondary-footer">
        <div class="col-md">
         <p>Made with love ♥ by Andreas Lautenschlager © 2019.</p>                
     </div>
     <div class="col-md end-md">
         <p><a href="#">Imprint</a> | <a href="#">Data Protection</a></p>                
     </div>
 </div>
 <script src="https://cdn.polyfill.io/v2/polyfill.min.js?callback=polyfillsAreLoaded" defer></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="js/script.js" defer></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/landingPage.css') }}">
</head>
<body>
    <nav class="cabecera">
        <div>
            <img src="{{ asset('img/leaf-nature.png') }}" alt="logo">
            <span class="logo">Redondos</span>
        </div>
        <ul class="links hideElement">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Service</a>
            </li>
            <li>Pagos</li>
            <li>Blog</li>
            <li>Contacto</li>
            <li>
                <a href="{{ route('login') }}" class="login">Iniciar Sesion</a>
            </li>
        </ul>
        <img class="menu" src="{{ asset('img/menu.svg') }}" alt="">
    </nav>

    <section class="principal">
        <div class="socialMedia">
            <img src="{{ asset('img/twitter_x_new_logo.svg') }}" alt="">
            <img src="{{ asset('img/linkedin_logo.svg') }}" alt="">
            <img src="{{ asset('img/FB_logo.svg') }}" alt="">
            <span class="linea"></span>
            <span>Follow us</span>
        </div>
        <div class="presentation tipo1">
            <span class="phrase">Vegan Enviroment</span>
            <span class="motivation">Eat well and Energize your Body</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia enim quaerat delectus explicabo sed obcaecati vero, dicta repellendus culpa hic sapiente, itaque veniam iusto quidem tenetur libero accusantium ullam. Neque!</p>
            <div class="buttons">
                <button>Let's Try</button>
                <button>Read More</button>
            </div>
        </div>
        <div class="imagen tipo1">
            <img src="{{ asset('img/food.png') }}" alt="">
        </div>
        <div class="presentation tipo2 ocultar">
            <span class="phrase">Vegan Community</span>
            <span class="motivation">Build a healthy life whithout effort</span>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia enim quaerat delectus explicabo sed obcaecati vero, dicta repellendus culpa hic sapiente, itaque veniam iusto quidem tenetur libero accusantium ullam. Neque!</p>
            <div class="buttons">
                <button>Let's Try</button>
                <button>Read More</button>
            </div>
        </div>
        <div class="imagen tipo2 ocultar">
            <img src="{{ asset('img/food2.png') }}" alt="">
        </div>
        <div class="cambio">
            <input type="radio" name="slideCambio" id="1" checked>
            <input type="radio" name="slideCambio" id="2">
        </div>
    </section>

    <section class="letreroLed">
        <div class="scroller_inner">
            <div class="item item1" item-number="1">
                <img src="{{ asset('img/leaf.svg') }}" alt="">
                <span>Energize</span>
            </div>
            <div class="item item2" item-number="2">
                <img src="{{ asset('img/leaf.svg') }}" alt="">
                <span>Love</span>
            </div>
            <div class="item item3" item-number="3">
                <img src="{{ asset('img/leaf.svg') }}" alt="">
                <span>Healthy</span>
            </div>
            <div class="item item4" item-number="4">
                <img src="{{ asset('img/leaf.svg') }}" alt="">
                <span>Family</span>
            </div>
            <div class="item item5" item-number="5">
                <img src="{{ asset('img/leaf.svg') }}" alt="">
                <span>Fit</span>
            </div>
            <div class="item item6" item-number="6">
                <img src="{{ asset('img/leaf.svg') }}" alt="">
                <span>Community</span>
            </div>
        </div>
    </section>

    <section class="aboutUs">
        <div class="imageAbout">
            <span class="barraAbout"></span>
            <span class="puntoAbout"></span>
            <div class="award">
                &starf;
                <span>Award Winning</span>
            </div>
            <img src="{{ asset('img/verticalAward.jpg') }}" alt="">
        </div>
        <div class="text">
            <span>About Us</span>
            <h1>Environmental Sustainable Forever Green Future</h1>
            <div class="details">
                <img src="{{ asset('img/economical.svg') }}" alt="">
                <div>
                    <span>Economic Benefits</span>
                    <p>fugiat voluptate voluptatem deserunt corrupti dicta fuga commodi. Officiis perferendis nesciunt perspiciatis dicta, repudiandae exercitationem voluptatum?</p>
                </div>
            </div>
            <div class="details">
                <img src="{{ asset('img/health_heart.svg') }}" alt="">
                <div>
                    <span>No saturated fats</span>
                    <p>soluta quod adipisci delectus ducimus quaerat corrupti saepe ea similique debitis minima ut! Quisquam veritatis dolorum ad.</p>
                </div>
            </div>
            <div class="linkAbout">
                <button>More About us</button>
                <img src="{{ asset('img/arrow.svg') }}" alt="">
            </div>
            <img src="{{ asset('img/leaf2.svg') }}" alt="">
        </div>
    </section>
    <section class="services">
        <span>Our services</span>
        <div class="some">
            <h1>Redondos Provide Enviroment Best Leading Services</h1>
            <div class="botonMando">
                <button id="left">&#8592</button>
                <button id="right">&#8594</button>
            </div>
        </div>
        
        <div class="contenedorCarousel">
            <div class="carousel">
                <div class="cards">
                    <img src=" {{ asset('img/economical.svg') }} " alt="">
                    <span>Salad</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corrupti</p>
                    <img src="{{ asset('img/delicius.webp') }}" alt="" draggable="false">
                </div>
                <div class="cards">
                    <img src=" {{ asset('img/economical.svg') }} " alt="" draggable="false">
                    <span>Delivery</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corrupti</p>
                    <img src="{{ asset('img/delivery.webp') }}" alt="" draggable="false">
                </div>
                <div class="cards">
                    <img src=" {{ asset('img/economical.svg') }} " alt="" draggable="false">
                    <span>Raw Food</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corrupti</p>
                    <img src="{{ asset('img/clean.jpeg') }}" alt="" draggable="false">
                </div>
                <div class="cards">
                    <img src=" {{ asset('img/economical.svg') }} " alt="" draggable="false">
                    <span>Restaurant</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corrupti</p>
                    <img src="{{ asset('img/restaurant.jpeg') }}" alt="" draggable="false">
                </div>
                <div class="cards">
                    <img src=" {{ asset('img/economical.svg') }} " alt="" draggable="false">
                    <span>Healthy</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corrupti</p>
                    <img src="{{ asset('img/healthy.webp') }}" alt="" draggable="false">
                </div>
                <div class="cards">
                    <img src=" {{ asset('img/economical.svg') }} " alt="" draggable="false">
                    <span>Catering</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corrupti</p>
                    <img src="{{ asset('img/catering.jpeg') }}" alt="" draggable="false">
                </div>
                <div class="cards">
                    <img src=" {{ asset('img/economical.svg') }} " alt="" draggable="false">
                    <span>Energize</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corrupti</p>
                    <img src="{{ asset('img/healthy.jpeg') }}" alt="" draggable="false">
                </div>
                <div class="cards">
                    <img src=" {{ asset('img/economical.svg') }} " alt="" draggable="false">
                    <span>Products</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corrupti</p>
                    <img src="{{ asset('img/products.jpeg') }}" alt="" draggable="false">
                </div>
                <div class="cards">
                    <img src=" {{ asset('img/economical.svg') }} " alt="" draggable="false">
                    <span>Low Fat</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, corrupti</p>
                    <img src="{{ asset('img/LowFat.jpeg') }}" alt="" draggable="false">
                </div>
            </div>
        </div>
    </section>
    <section class="final">
        <div class="greet">
            <span>
                <img src="{{ asset('img/skill.svg') }}" alt="">
                Our skills
            </span>
            <h1>Getting a greener future safe Enviroment</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, consequatur consectetur corrupti magnam, rerum modi non esse excepturi dolorum magni quos laboriosam, dolores commodi molestiae id! Doloribus culpa magnam delectus.</p>
            <div class="checks">
                <div>
                    <img src="{{ asset('img/check.svg') }}" alt="">
                    <span>Delicuios Food</span>
                </div>
                <div>
                    <img src="{{ asset('img/check.svg') }}" alt="">
                    <span>Affordable prices</span>
                </div>
            </div>
            <div class="skills">
                <div class="bar" id="bar1">
                    <span class="label">Deliciuos</span>
                    <div class="progress-container">
                        <div class="progress" data-percentage=""></div>
                    </div>
                    <span class="value"></span>
                </div>
                <div class="bar" id="bar2">
                    <span class="label">Cheap</span>
                    <div class="progress-container">
                        <div class="progress" data-percentage=""></div>
                    </div>
                    <span class="value"></span>
                </div>
            </div>
        </div>
        <div class="bestFood">
            <div>
                <div>  
                    <p>The best</p>
                    <span>FOOD</span>
                    <p>Ever</p>
                </div>
                <img src="{{ asset('img/tacos.webp') }}" alt="">
            </div>
        </div>

    </section>
    <section class="footer">
        <div>

        </div>
    </section>
    
    <script src="{{ asset('js/slideCambio.js') }}"></script>
    <script src="{{ asset('js/letreroLed.js') }}"></script>
    <script src=" {{ asset('js/carousel.js') }} "></script>
    <script src=" {{ asset('js/barProgress.js') }} "></script>
</body>
</html>
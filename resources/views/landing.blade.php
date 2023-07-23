<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumberbumiorganik</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/stylelanding.css') }}" rel="stylesheet" />

</head>
<body>


<header>

    <!-- <input type="checkbox" name="" id="toggler"> -->
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">SumberBumi<span>Organik</span></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#product">product</a>
        <a href="#reviews">reviews</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
    </div>
</header>

<section class="home" id="home">
    <div class="content">
        <h3>fresh flowers<h3>
        <span>naturan and beautiful flowers</span>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique distinctio accusamus voluptatibus amet unde? Doloremque, 
        sunt nisi debitis dolorum tempora, quasi, voluptas tenetur quas omnis vitae magni minus corrupti? Unde?</p>
        <a href="#" class="btn">shop now</a>

    </div>
</section>

<section class="about" id="about">
    <h1 class="heading"> <span>about</span> Us </h1>
    <div class="row">

        <div class="video-container">
            <video src="{{ asset('img/bumii.mp4') }}" loop autoplay muted></video>
            <h3>best flower sellers</h3>
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Dolor perspiciatis totam unde vitae excepturi autem laborum accusantium Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            quos alias necessitatibus blanditiis voluptate, inventore tempora cupiditate vel aut numquam perferendis culpa.lorem</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, nisi ex sapiente officia nostrum doloribus 
            cupiditate quidem perferendis rem voluptatem blanditiis, consectetur consequatur omnis? Debitis, repellat eius? Aut, nihil excepturi?</p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>
<section>

<!-- icons section starts -->

<!-- <section class="icons-container">

    <div class="icons">
        <img src="{{ asset('img/cartt.png') }}" alt="">
        <div class="info">
            <h3>free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="{{ asset('img/cartt.png') }}" alt="">
        <div class="info">
            <h3>10 days returns</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="{{ asset('img/cartt.png') }}" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="{{ asset('img/cartt.png') }}" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by paypal</span>
        </div>
    </div>

</section> -->
<!-- icons section ends -->


<!-- products section starts -->

<section class="products" id="products">
    <h1 class="heading">latest<span>products</span></h1>
    <div class="box-container">
        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="{{ asset('img/puk.jpg') }}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99<span>$15.99</span></div>
            </div>
        </div>


        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="{{ asset('img/puk.jpg') }}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99<span>$15.99</span></div>
            </div>
        </div>


        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="{{ asset('img/puk.jpg') }}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99<span>$15.99</span></div>
            </div>
        </div>


        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="{{ asset('img/puk.jpg') }}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99<span>$15.99</span></div>
            </div>
        </div>


        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="{{ asset('img/puk.jpg') }}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99<span>$15.99</span></div>
            </div>
        </div>


        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="{{ asset('img/puk.jpg') }}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99<span>$15.99</span></div>
            </div>
        </div>


        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="{{ asset('img/puk.jpg') }}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99<span>$15.99</span></div>
            </div>
        </div>


        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="{{ asset('img/puk.jpg') }}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99<span>$15.99</span></div>
            </div>
        </div>

        
        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="{{ asset('img/puk.jpg') }}" alt="">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="cart-btn">add to cart</a>
                    <a href="#" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>flower pot</h3>
                <div class="price"> $12.99<span>$15.99</span></div>
            </div>
        </div>
    </div>
</section>
<!-- products section ends -->
    
</body>
</html>
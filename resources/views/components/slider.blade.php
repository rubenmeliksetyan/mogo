<div id="myCarousel" class="carousel slide carousel-fade carousel--main" pause="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active" data-interval="10000">
            <h2><b>01</b> Intro</h2>
        </li>
        <li data-target="#myCarousel" data-slide-to="1">
            <h2><b>02</b> work</h2>
        </li>
        <li data-target="#myCarousel" data-slide-to="2">
            <h2><b>03</b> about</h2>
        </li>
        <li data-target="#myCarousel" data-slide-to="3">
            <h2><b>04</b> contacts</h2>
        </li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="gradient">
                <h2>Creative Template</h2>
                <h1>Welcome<br> to Mogo</h1>
                <div class="line"></div>
                <a class="learn-more" href="#">Learn more</a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="gradient"
                 style="background: linear-gradient(to bottom,rgba(243,129,129,.85) 0,rgba(243,129,129,.85) 44%,rgba(252,227,138,.85) 100%), url( {{ asset('img/3.jpg') }});">
                <h2>Creative Template</h2>
                <h1>What<br>we do</h1>
                <div class="line"></div>
                <a class="learn-more" href="#">Learn more</a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="gradient"
                 style="background: linear-gradient(to bottom,rgba(243,129,129,.85) 0,rgba(243,129,129,.85) 44%,rgba(252,227,138,.85) 100%),url({{ asset('img/5.jpg') }});">
                <h2>Creative Template</h2>
                <h1>STORY <br>ABOUT US</h1>
                <div class="line"></div>
                <a class="learn-more" href="#">Learn more</a>
            </div>
        </div>
        <div class="carousel-item">
            <div class="gradient"
                 style="background: linear-gradient(to bottom,rgba(243,129,129,.85) 0,rgba(243,129,129,.85) 44%,rgba(252,227,138,.85) 100%),url({{ asset('img/4.jpg') }}); background-repeat: no-repeat; -webkit-background-size: cover;background-size: cover;">
                <h2>Creative Template</h2>
                <h1>Welcome<br> to Mogo</h1>
                <div class="line"></div>
                <a class="learn-more" href="#">Learn more</a>
            </div>
        </div>
    </div>
    <div class="main-carousel-nav-wrapper">
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
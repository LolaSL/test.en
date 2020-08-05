<?php
require "include/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['title']; ?></title>
    <!-- Boostrap Grid -->
    <link rel="stylesheet" type="text/css" href="/media/assets/boostrap-grid-only/css/grid12.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="/media/css/style.css">
</head>
<body>
    <div id="wrapper">

        <header id="header">
            <div class="header_top">
                <div class="container">
                    <div class ="header_top_logo">
                    <h1><?php echo $config['title']; ?></h1>
                  </div>
                  <nav class="header_top_menu">
                    <ul>
                     <li><a href="/">Home</a></li>
                     <li><a href="/pages/about_me.php">About me</a></li>
                     <li><a href="https://www.youtube.com/somebody" target="blank">I'm in Youtube</a></li>
                    </ul>
                  </nav>
                </div>
<div id="content">
    <div class="container">
        <div class="row">
            <section class="content__left col-md-8">
            <div class="block">
            <a href="#">All entries</a>
            <h3>Newest in blog</h3>
            <div class="block__content">
            <div class="articles">  

<article class="article">
    <div class="article_image" style="background-image: url(/media/images/background.jfif);"></div>
    <div class="article_info">
        <a href="#">How did I travel in London last year</a>
        <div class="article_info_meta">
            <small>Categorie: <a href="#">Travelling</a></small>
        </div>
        <div class="article_info_preview">Why I'd chosen the London?
London is the capital of Great Britain and the one of the most diverse cities on the planet.
There are great museums, theater and galleries, <br/>as well as some of the best shopping in the world. And when I booked air-tickets I felt that this trip would be interesting and unforgettable.<br/>
Where I have been and what I have seen during four days?<br/>
The Tower of London.<br/>
Her Majesty's Royal Palace and Fortress of the Tower of London, is a historic castle on the north
bank of the River Thames in central London. I was the first time in London. As for me, it is really Great and impressive Place in England.<br/>
London Eye.<br/>
The London Eye is a large metal Ferris wheel. It is also known as the Millennium Wheel. Ferris wheel spuned slowly and gave the opportunity to pay attention to all around sight seeings.<br/>
Madame Tussaud.<br/>
Madame Tussaud is a wax museum in London.I heard many stories regarding this museum before. So, why not to pay a visit to this sightseeing, create my own opinion and have some fun?<br/>
 It was Great fun there. Like if I had visited the magic camp from childhood!
It was unforgettable journey.</div>
    </div>
</article>
<br/>
<article class="article">
    <div class="article_image" style="background-image: url(/media/images/background.jfif);"></div>
    <div class="article_info">
        <a href="#">My further trip to Amsterdam</a>
        <div class="article_info_meta">
            <small>Categorie: <a href="#">Further trips</a></small>
        </div>
        <div class="article_info_preview">Unfortunately my trip to Amsterdam was cancelled because of COVID-19. But I hope in next year to travel there. It will be nice tour in Netherlands.</div>
    </div>
</article>
<br/>
<article class="article">
    <div class="article_image" style="background-image: url(/media/images/background.jfif);"></div>
    <div class="article_info">
        <a href="#">Making video from slides</a>
        <div class="article_info_meta">
            <small>Categorie: <a href="#">Video</a></small>
        </div>
        <div class="article_info_preview">Really, it is not so hard process to create video from slides. At present time there are many gadgets, small programs from play store
which can help in creation videos. <br/>Also has place possibility to apply music in video by choice. It needs to download some slides to special program and choose music. Well done! </div>
    </div>
</article>
<br/>
<article class="article">
    <div class="article_image" style="background-image: url(/media/images/background.jfif);"></div>
    <div class="article_info">
        <a href="#">Sport</a>
        <div class="article_info_meta">
            <small>Categorie: <a href="#">Sport</a></small>
        </div>
        <div class="article_info_preview">Real life is impossible without sport and exercises. Sport makes our life full of energy, gives ability to think wisely, help to loose extra pounds and etc.<div/>
</div>
</article>
<br/>
<article class="article">
    <div class="article_image" style="background-image: url(/media/images/background.jfif);"></div>
    <div class="article_info">
        <a href="#">No Hunting for Snow Leopard!</a>
        <div class="article_info_meta">
            <small>Categorie: <a href="#">Nature & Mammals</a></small>
        </div>
        <div class="article_info_preview">No hunting for Snow Loepard. It is against of Nature and Mammals. We should save our flora and fauna!</div>
</div>
</article>
        <footer id="footer">
            <div class="container">
                <div class="footer_logo">
                    <h1><?php echo $config['title']; ?></h1>
                </div>
                <nav class="header_top_menu">
                <a href="#"><i class="fa fa-envelope"></i>support@company.com</a>
                            </ul>
                          </address>
                        </div>
                            <div class="col-md-3">
                                    <div class="headline"><p>Company</p></div>
                                    <ul class="list-unstyled link-list">
                            <li><a href="#">About Us</a></li>
                            <li> <a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Cancellation/Rescheduling policy</a></li>
                          </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     </footer>
</body>
</html>
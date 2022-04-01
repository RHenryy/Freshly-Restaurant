<?php include("header.php"); ?>
<div class="slider wrapper">

    <img src="../img/slider-01.jpg" alt="">
    <img src="../img/slider-02.jpg" alt="">
    <img src="../img/slider-03.jpg" alt="">
</div>

<main class="wrapper">

    <section class="welcome">

        <h1>Welcome to Freshly Restaurant</h1>
        <article>
            <img src="../img/location.jpg" alt="" class="float-right">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                dolor in hendrerit in vulputate velit esse molestie consequat,
                vel illum dolore eu feugiat nulla facilisis at vero eros et
                accumsan et iusto odio dignissim qui blandit praesent luptatum
                zzril delenit augue duis dolore te feugait nulla facilisi.
                Nam liber tempor cum soluta nobis eleifend option congue
                nihil imperdiet doming id quod mazim placerat facer possim
                assum. Typi non habent claritatem insitam; est usus legentis
                in iis qui facit eorum claritatem.</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                dolor in hendrerit in vulputate velit esse molestie consequat,
                vel illum dolore eu feugiat nulla facilisis at vero eros et
                accumsan et iusto odio dignissim qui blandit praesent luptatum
                zzril delenit augue duis dolore te feugait nulla facilisi.
                Nam liber tempor cum soluta nobis eleifend option congue
                nihil imperdiet doming id quod mazim placerat facer possim
                assum.</p>
        </article>
    </section>
    <h1>Special menus</h1>
    <section class="menu">
        <article>
            <h3>Meat Menu</h3>
            <figure class="abs">
                <img src="../img/meat-menu.jpg" alt="">
                <figcaption>
                    <div class="span"><span class="large">20 €</span><br /><span>Soft drinks included*</span></div>
                </figcaption>
            </figure>
            <ul>
                <li>Lorem ipsum dolor sit.</li>
                <li>Dolorem est fuga possimus.</li>
                <li>Amet consectur aperiam iusto.</li>
                <li>Iste apreriam facere reprerit.</li>
                <li>Ipsa autem accusam ducimus</li>
            </ul><br />
            <a href="menu.php">See more</a>
        </article>
        <article>
            <h3>Fish Menu</h3>
            <figure class="abs">
                <img src="../img/fish-menu.jpg" alt="">
                <figcaption>
                    <div class="span"><span class="large">25 €</span><br /><span>Soft drinks included*</span></div>
                </figcaption>
            </figure>
            <ul>
                <li>Lorem ipsum dolor sit.</li>
                <li>Dolorem est fuga possimus.</li>
                <li>Amet consectur aperiam iusto.</li>
                <li>Iste apreriam facere reprerit.</li>
                <li>Ipsa autem accusam ducimus</li>
            </ul><br />
            <a href="menu.php">See more</a>
        </article>
        <article>
            <h3>Vegetarian Menu</h3>
            <figure class="abs">
                <img src="../img/vegetarian-menu.jpg" alt="">
                <figcaption>
                    <div class="span"><span class="large">22.50 €</span><br /><span>Soft drinks included*</span></div>
                </figcaption>
            </figure>
            <ul>
                <li>Lorem ipsum dolor sit.</li>
                <li>Dolorem est fuga possimus.</li>
                <li>Amet consectur aperiam iusto.</li>
                <li>Iste apreriam facere reprerit.</li>
                <li>Ipsa autem accusam ducimus</li>
            </ul><br />
            <a href="menu.php">See more</a>
        </article>
    </section>


</main>
<?php include_once("footer.php") ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../slick.js"></script>
<script src="../slick.min.js"></script>
<script>
    $(document).ready(function() {
        $('.slider').slick({

        });
    });
</script>
</body>

</html>
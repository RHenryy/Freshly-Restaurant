<?php include_once("header.php")
?>
<main class="wrapper">
    <section class="main-course">
        <article>
            <h1>Details of our menus</h1>
            <p>Choose your main course according to your menu!</p>
            <button type="button" data-filter="all">All</button>
            <button type="button" data-toggle=".category-a">Meat</button>
            <button type="button" data-toggle=".category-c">Fish</button>
            <button type="button" data-filter=".category-b">Vegan</button>
            <div class="container">
                <div class="mix category-a" data-order="1"><img src="../img/menus/meat-01.jpg"></div>
                <div class="mix category-b" data-order="2"><img src="../img/menus/vegan-01.jpg"></div>
                <div class="mix category-a" data-order="3"><img src="../img/menus/meat-02.jpg"></div>
                <div class="mix category-c" data-order="4"><img src="../img/menus/fish-01.jpg"></div>
                <div class="mix category-b" data-order="5"><img src="../img/menus/vegan-02.jpg"></div>
                <div class="mix category-a" data-order="6"><img src="../img/menus/meat-03.jpg"></div>
                <div class="mix category-c" data-order="7"><img src="../img/menus/fish-02.jpg"></div>
                <div class="mix category-c" data-order="8"><img src="../img/menus/fish-03.jpg"></div>
                <div class="mix category-b" data-order="9"><img src="../img/menus/vegan-03.jpg"></div>
            </div>
        </article>
    </section>
    <section class="deserts">
        <h1>Deserts</h1>
        <p>Here are the deserts you can choose to finish your meal (included in your menu).</p>
        <div class="container">
            <div class="mix category-a" data-order="1"><img src="../img/menus/desert-01.jpg"></div>
            <div class="mix category-b" data-order="2"><img src="../img/menus/desert-02.jpg"></div>
            <div class="mix category-a" data-order="3"><img src="../img/menus/desert-03.jpg"></div>

        </div>
    </section>
    <section class="cocktails">
        <h1>Cocktails</h1>
        <p>Soft drinks are included, but if you want you can order one of our excellent cocktails (not included in the menu).</p>
        <div class="container">
            <div class="mix category-a" data-order="1"><img src="../img/menus/drink-01.jpg"></div>
            <div class="mix category-b" data-order="2"><img src="../img/menus/drink-02.jpg"></div>
            <div class="mix category-a" data-order="3"><img src="../img/menus/drink-03.jpg"></div>

        </div>
    </section>


</main>
<?php include_once("footer.php") ?>
<script src="../mixitup.min.js"></script>
<script>
    var mixer = mixitup('.container');
</script>
</body>

</html>
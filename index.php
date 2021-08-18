<!doctype html>
<html lang="en">

<?php
include_once __DIR__ . "/../../dui/_index.php";

Head('trillo')
        ->meta(author: "enginoobz", description: "landing page for trillo")
        ->css('css/main.css')
        ->show();
?>

<body class="flat-style custom-bg">
        <!-- <div class="display-table">
                <div class="display-content ">
                        <section class="container">
                        </section>
                </div>
        </div> -->
        <div class="content-container">
                <!-- HEADER -->
                <header class="header">
                        <img src="img/logo.png" alt="trillo logo" class="logo">

                        <!-- TODO - DUI: Input component for Material/Flat style  -->
                        <!-- Flexbox -->
                        <form action="javascript:'" class="input-wrapper search-box">
                                <input type="text" class="input__field" placeholder="Search hotels">
                                <button class="input__btn">
                                        <svg class="input__icon">
                                                <use href="img/sprite.svg#icon-magnifying-glass"></use>
                                        </svg>
                                </button>
                        </form>


                </header>
                <!-- HEADER END -->
                <div class="content">
                        <nav class="sidebar">
                                Nav
                        </nav>
                        <main class="hotel-view">
                                View
                        </main>
                </div>
        </div>
        <script async src="../../dui/js/main.js" type="module"></script>
</body>

</html>
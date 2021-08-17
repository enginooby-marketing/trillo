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
                <header class="header">
                        Header
                </header>
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
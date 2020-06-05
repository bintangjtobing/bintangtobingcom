<!DOCTYPE HTML>
<html>

<head>
    <title>Mau cari apa nih? - Bintang Tobing</title>
    <link rel="shortcut icon" href="{!!asset('storage/img/icon-64x.png')!!}" alt="icon BT">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="linktree/assets/css/main.css" />
    <link rel="stylesheet" href="linktree/assets/css/custom.css" />
    <noscript>
        <link rel="stylesheet" href="linktree/assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <span class="logo"><img src="linktree/images/logobt.svg" alt="" /></span>
            <p>Mau cari apa nih?<br>
                Dibuat oleh <a href="https://instagram.com/bintangjtobing">@bintangjtobing</a>.
            </p>
        </header>
        <!-- Introduction -->
        <section id="askfm">
            <ul class="actions fit">
                <li><a href="/ask-fm" class="button large fit askfm-theme">&#129300; Ask.fm <sup class="supli">kalau mau
                            tanya-tanya silahkan
                            aja.</sup></a></li>
            </ul>
        </section>
        <section id="youtube">
            <ul class="actions fit">
                <li><a href="/youtube" class="button large fit yt-theme">&#128249; Youtube</a>
                </li>
            </ul>
        </section>
        <section id="github">
            <ul class="actions fit">
                <li><a href="/github" class="button large fit gt-theme">&#128187; Github</a>
                </li>
            </ul>
        </section>
        <section id="instagram">
            <ul class="actions fit">
                <li><a href="/instagram" class="button large fit ig-theme">&#129331; Instagram</a>
                </li>
            </ul>
        </section>
        <!-- Footer -->
        <footer id="footer">
            <section>
                <h2>Tertarik dengan fitur ini?</h2>
                <p>Fitur ini dibuat untuk keperluan pribadi. Dikarenakan website linkt**** terlalu terbatas dan harganya
                    juga lumayan untuk fitur seperti itu. Jika kalian tertarik dengan fitur lengkap seperti ini. Mungkin
                    saya bisa pertimbangkan untuk mengembangkan fitur ini ke publik. Pertimbangannya bisa dengan voting.
                    Jika banyak dari kalian yang request fitur ini. Saya akan mengembangkannya dan mempublikasikannya
                    secara gratis, tidak ada biaya apapun untuk mendapatkan fitur lengkap seperti ini.</p>
                <h4>Bagaimana? Tertarik?</h4>
                <ul class="actions">
                    <?php $tokens = bin2hex(openssl_random_pseudo_bytes(64)); ?>
                    <li><a href="/kirim-vote/{{$tokens}}" class="button">Kembangkanlah!</a></li>
                </ul>
            </section>
            <section>
                <h2>Jangan segan untuk menghubungiku</h2>
                <dl class="alt">
                    <dt>Email</dt>
                    <dd><a href="#">hello@bintangtobing.com</a></dd>
                </dl>
                <ul class="icons">
                    <li><a href="/twitter" class="icon brands fa-twitter alt"><span class="label">Twitter</span></a>
                    </li>
                    <li><a href="/facebook" class="icon brands fa-facebook-f alt"><span
                                class="label">Facebook</span></a></li>
                    <li><a href="/instagram" class="icon brands fa-instagram alt"><span
                                class="label">Instagram</span></a></li>
                    <li><a href="/github" class="icon brands fa-github alt"><span class="label">GitHub</span></a></li>
                </ul>
            </section>
            <p class="copyright">&copy; Bintang Tobing - Mau cari apa nih?</p>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="linktree/assets/js/jquery.min.js"></script>
    <script src="linktree/assets/js/jquery.scrollex.min.js"></script>
    <script src="linktree/assets/js/jquery.scrolly.min.js"></script>
    <script src="linktree/assets/js/browser.min.js"></script>
    <script src="linktree/assets/js/breakpoints.min.js"></script>
    <script src="linktree/assets/js/util.js"></script>
    <script src="linktree/assets/js/main.js"></script>

</body>

</html>

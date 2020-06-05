<!DOCTYPE HTML>
<html>

<head>
    <title>Mau liat apa nih? - Bintang Tobing</title>
    <link rel="shortcut icon" href="{!!asset('storage/img/icon-64x.png')!!}" alt="icon BT">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="linktree/assets/css/main.css" />
    <link rel="stylesheet" href="linktree/assets/css/custom.css" />
    <noscript>
        <link rel="stylesheet" href="linktree/assets/css/noscript.css" /></noscript>


    {{-- META CONTENT --}}
    <meta name="title" content="Mau liat apa nih? - Bintang Tobing">
    <meta name="keywords" content="Mau liat apa nih bintang, bintang tobing, bintangtobing, Mau liat apa">
    <meta name="description"
        content="Tempat kalian pengen tau di platform mana sih saya aktif? Nah disini akan menjawab dan kalian langsung tau apa apa saja aktifitas yang dilakukan. Hehehe">
    <meta name="author" content="Bintang Jeremia Tobing">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">

    {{-- SOCIAL MEDIA TAGS --}}
    {{-- FACEBOOK SOCMED --}}
    <meta property="fb:admins" content="111044563749542">
    <meta property="og:title" content="Mau liat apa nih? - Bintang Tobing">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{URL::current()}}">
    <meta property="og:image" content="{!!asset('storage/img/covermcan.jpg')!!}">
    <meta property="og:description"
        content="Tempat kalian pengen tau di platform mana sih saya aktif? Nah disini akan menjawab dan kalian langsung tau apa apa saja aktifitas yang dilakukan. Hehehe">
    <meta property="og:site_name" content="Bintang Tobing.">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{URL::current()}}">
    <meta property="twitter:title" content="Mau liat apa nih? - Bintang Tobing">
    <meta property="twitter:description"
        content="Bintang Tobing page is made for personal creative curriculum vitae. Also for personal satisfaction and personal completeness in this digital age.">
    <meta property="twitter:image" content="storage/img/covermcan.jpg">
</head>

<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header -->
        <header id="header" class="alt">
            <span class="logo"><img src="linktree/images/logobt.svg" alt="" /></span>
            <p>Mau liat apa nih?<br>
                Dibuat oleh <a href="https://instagram.com/bintangjtobing">@bintangjtobing</a>.
            </p>
        </header>
        <!-- Introduction -->
        <section id="askfm">
            <ul class="actions fit">
                <li><a href="/ask-fm" class="button large fit askfm-theme">&#129300; Ask.fm <sup class="supli">Tempat
                            perkepoan.</sup></a></li>
            </ul>
        </section>
        <section id="youtube">
            <ul class="actions fit">
                <li><a href="/youtube" class="button large fit yt-theme">&#128249; Youtube <sup class="supli">Tempat
                            pidio pidio.</sup></a>
                </li>
            </ul>
        </section>
        <section id="github">
            <ul class="actions fit">
                <li><a href="/github" class="button large fit gt-theme">&#128187; Github <sup class="supli">sok
                            ngoding.</sup></a>
                </li>
            </ul>
        </section>
        <section id="instagram">
            <ul class="actions fit">
                <li><a href="/instagram" class="button large fit ig-theme">&#129331; Instagram <sup class="supli">Tempat
                            pencitraan.</sup></a>
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
                @if(session('sukses'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{session('sukses')}}
                </div>
                @endif
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
            <p class="copyright">&copy; Bintang Tobing - Mau liat apa nih?</p>
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

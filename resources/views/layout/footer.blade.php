
<div class="it-footer-main">
    <div class="container">
        <section class="py-4">
            <div class="row">
                <div class="col-lg-6 col-md-6 pb-2">
                    <h4><a href="#" title="Vai alla pagina: Contatti">Contatti</a></h4>
                    <p>
                        <strong>Comune di {{$comune->name}}</strong><br>
                        <p>{{$comune->address}}</p>
                        <p>Codice fiscale / P. IVA: {{$comune->fiscal_code}}</p>
                    </p>
                    <div class="link-list-wrapper">
                        <ul class="footer-list link-list clearfix">
                            <li><a class="list-item" href="mailto:{{$comune->pec}}" title="Vai alla pagina: Posta Elettronica Certificata">Pec: {{$comune->pec}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 pb-2">
                    <div class="pb-2">
                        <h4><a href="#" title="Vai alla pagina: Seguici su">Seguici su</a></h4>
                        <ul class="list-inline text-left social">
                            <li class="list-inline-item">
                                <a class="p-2 text-white" href="{{$comune->facebook_link}}" target="_blank">
                                    <svg class="icon icon-sm icon-white align-top"><use xlink:href="{{asset("/bootstrap-italia/svg/sprites.svg#it-facebook")}}"></use></svg>
                                    <span class="visually-hidden">Facebook</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="p-2 text-white" href="{{$comune->instagram_link}}" target="_blank">
                                    <svg class="icon icon-sm icon-white align-top"><use xlink:href="{{asset("/bootstrap-italia/svg/sprites.svg#it-instagram")}}"></use></svg>
                                    <span class="visually-hidden">Instagram</span>
                                </a>
                            </li>
                        </ul>
                    </div>
{{--                    <div class="pb-2">--}}
{{--                        <h4><a href="#" title="Vai alla pagina: Newsletter">Newsletter</a></h4>--}}
{{--                        <p>Form Newsletter</p>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
    </div>
</div>
<div class="it-footer-small-prints clearfix">
    <div class="container">
        <h3 class="visually-hidden">Sezione Link Utili</h3>
        <ul class="it-footer-small-prints-list list-inline mb-0 d-flex flex-column flex-md-row">
            <li class="list-inline-item"><a href="{{$comune->fiscal_code}}/privacy-policy" title="Privacy-Policy">Privacy policy</a></li>
        </ul>
    </div>
</div>



<div class="cookie-consent-bar" id="cookieConsentBar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">

                <p class="mb-0">Questo sito utilizza cookie di tipo tecnico, per cui le informazioni raccolte non saranno utilizzate per finalità commerciali nè comunicate a terze parti. Potrebbero essere presenti collegamenti esterni (esempio social, youtube, maps) per le cui policy si rimanda ai portali collegati, in quanto tali cookie non vengono trattati da questo sito.
                    <br>Proseguendo nella navigazione accetti l’uso dei cookie.</p>
            </div>
            <div class="col-md-4 text-md-right mt-3 mt-md-0">
                <button type="button" class="btn btn-light" onclick="acceptCookies()">Ok ho capito</button>
            </div>
        </div>
    </div>
</div>

<!-- Cookie Icon -->
<div class="cookie-icon" id="cookieIcon" onclick="showCookieConsentBar()">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
        <path d="M9.405 1.05a1 1 0 0 1 1.17.866c.08.603.258 1.185.523 1.722a1 1 0 0 1-.291 1.25l-.37.374a4.992 4.992 0 0 1 0 2.936l.37.374a1 1 0 0 1 .291 1.25 7.004 7.004 0 0 1-.523 1.722 1 1 0 0 1-1.17.866 6.99 6.99 0 0 1-1.725-.346 1 1 0 0 1-.622-.91V12.45a5.012 5.012 0 0 1-1.246 0v-.04a1 1 0 0 1-.622-.91 6.99 6.99 0 0 1-1.725-.346 1 1 0 0 1-1.17.866 7.004 7.004 0 0 1-.523-1.722 1 1 0 0 1 .291-1.25l.37-.374a4.992 4.992 0 0 1 0-2.936l-.37-.374a1 1 0 0 1-.291-1.25 7.004 7.004 0 0 1 .523-1.722 1 1 0 0 1 1.17-.866 6.99 6.99 0 0 1 1.725.346 1 1 0 0 1 .622.91v.04a5.012 5.012 0 0 1 1.246 0v.04a1 1 0 0 1 .622.91 6.99 6.99 0 0 1 1.725.346zM6 8a2 2 0 1 0 4 0 2 2 0 0 0-4 0z"/>
    </svg>
</div>

<script src="{{asset("js/sweet-alert.min.js")}}"></script>
<script src="{{asset('bootstrap-italia/js/bootstrap-italia.bundle.min.js') }}"></script>

{{--<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>--}}
<script>
    bootstrap.loadFonts('{{asset('bootstrap-italia/fonts') }}');
</script>

<script>
    function acceptCookies() {
        // Logic to set a cookie indicating acceptance
        document.cookie = "cookies_accepted=true; path=/; max-age=" + (60*60*24*365); // 1 year
        hideCookieConsentBar();
        showCookieIcon();
    }



    function hideCookieConsentBar() {
        document.getElementById('cookieConsentBar').style.display = 'none';
    }

    function showCookieConsentBar() {
        document.getElementById('cookieConsentBar').style.display = 'block';
    }

    function showCookieIcon() {
        document.getElementById('cookieIcon').style.display = 'block';
    }

    function hideCookieIcon() {
        document.getElementById('cookieIcon').style.display = 'none';
    }

    // Check if the cookie consent has already been given
    window.onload = function() {
        if (document.cookie.split('; ').find(row => row.startsWith('cookies_accepted'))) {
            hideCookieConsentBar();
            showCookieIcon();
        } else if (document.cookie.split('; ').find(row => row.startsWith('cookies_declined'))) {
            showCookieConsentBar();
        }
    }
</script>

</body>
</html>

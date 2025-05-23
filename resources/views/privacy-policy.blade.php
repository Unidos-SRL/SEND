@include("layout.header")
<div class="container mt-5">
    <nav class="breadcrumb-container" aria-label="breadcrumb">
        <ol class="breadcrumb p-0" data-element="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{$comune->fiscal_code}}">Home</a><span class="separator">/</span></li>
            <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12 col-lg-4">
            <div data-bs-toggle="sticky" data-bs-stackable="true" class="" style="">
                <nav class="navbar it-navscroll-wrapper navbar-expand-lg it-bottom-navscroll it-right-side" data-bs-navscroll="">
                    <button class="custom-navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" data-bs-toggle="navbarcollapsible" data-bs-target="#navbarNav"><span class="it-list"></span>1. Introduzione</button>
                    <div class="progress custom-navbar-progressbar">
                        <div class="progress-bar it-navscroll-progressbar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                    </div>
                    <div class="navbar-collapsable" id="navbarNav">
                        <div class="overlay fade"></div>
                        <a class="it-back-button" href="#" role="button">
                            <svg class="icon icon-sm icon-primary align-top">
                                <use href="{{asset("/bootstrap-italia/svg/sprites.svg#it-chevron-left")}}" xlink:href="/bootstrap-italia/dist/svg/sprites.svg#it-chevron-left"></use>
                            </svg>
                            <span>Indietro</span>
                        </a>
                        <div class="menu-wrapper">
                            <div class="link-list-wrapper">
                                <h3>Privacy Policy</h3>
                                <div class="progress">
                                    <div class="progress-bar it-navscroll-progressbar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                </div>
                                <ul class="link-list">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#p1">
                                            <span>1. Introduzione </span>
                                        </a>
                                        <ul class="link-list">
                                            <li class="nav-link">
                                                <a class="nav-link" href="#p2">
                                                    <span>Titolare del trattamento</span>
                                                </a>
                                            </li>
                                            <li class="nav-link">
                                                <a class="nav-link" href="#p3">
                                                    <span>Responsabile della protezione dei dati personali</span>
                                                </a>
                                            </li>
                                            <li class="nav-link">
                                                <a class="nav-link" href="#p4">
                                                    <span>Luogo del trattamento dei dati</span>
                                                </a>
                                            </li>
                                            <li class="nav-link">
                                                <a class="nav-link" href="#p5">
                                                    <span>Tipologie di dati trattati</span>
                                                </a>
                                            </li>
                                            <li class="nav-link">
                                                <a class="nav-link" href="#p6">
                                                    <span>Liceità del trattamento</span>
                                                </a>
                                            </li>
                                            <li class="nav-link">
                                                <a class="nav-link" href="#p7">
                                                    <span>Facoltatività del conferimento dei dati</span>
                                                </a>
                                            </li>
                                            <li class="nav-link">
                                                <a class="nav-link" href="#p8">
                                                    <span>Modalità di trattamento dei dati</span>
                                                </a>
                                            </li>

                                            <li class="nav-link">
                                                <a class="nav-link" href="#p9">
                                                    <span>Diritti dell'interessato</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="col-12 col-lg-8 it-page-sections-container">
            <h2 class="it-page-section" id="p1">Introduzione</h2>
            <p>
                Scopo della presente informativa, resa ai sensi del Regolamento europeo n. 679/2016 e del D.lgs n. 196/2003, è quello di fornire informazioni in merito al trattamento dei dati personali raccolti durante la navigazione sul sito web ufficiale dell'Ente e dei portali da esso gestiti. Si tratta di un'informativa rivolta agli utenti che interagiscono con i servizi web del portale Unidos S.r.l. rilasciato in licenza alla Pubblica Amministrazione riportata sull’header del sito.
            </p>
            <h4 class="it-page-section" id="p2">Titolare del trattamento</h4>
            <p>
                A seguito della consultazione dei servizi resi da questo portale, possono essere trattati dati relativi a persone identificate o identificabili. Il Titolare del loro trattamento è [nome ente], con sede a [indirizzo], codice fiscale
                {{$comune->fiscal_code}}.
            </p>

            <h4 class="it-page-section" id="p3">Responsabile della protezione dei dati personali</h4>
            <p>
                Il responsabile della protezione dei dati personali (anche conosciuto con la dizione in lingua inglese data protection officer – DPO) è una figura prevista dall'art. 37 del Regolamento (UE) 2016/679. Il Titolare del trattamento individua un professionista esterno a cui affidare l’incarico di Responsabile della protezione dei dati, anche mediante l’affidamento di un servizio a una Società che fornisca assistenza nell’ambito della protezione dei dati personali (come da art .6 del Regolamento Comunale sopra menzionato).
                Con proprio decreto il {{$comune->name}} ha designato quale Responsabile per la protezione dei dati (DATA PROTECTION OFFICER - DPO) la {{$comune->dpo_data}}.
            </p>

            <h4 class="it-page-section" id="p4">Luogo del trattamento dei dati</h4>
            <p>
                I trattamenti connessi ai servizi web di questo sito hanno luogo presso le sedi dell'Ente e sono curati solo da personale tecnico incaricato del trattamento, oppure da eventuali incaricati di occasionali operazioni di manutenzione. Nessun dato derivante dal servizio web viene comunicato o diffuso, salvo nei casi espressamente previsti dalla legge. I dati personali forniti dagli utenti sono utilizzati al solo fine di eseguire il servizio o la prestazione richiesta ed espressa nelle finalità del trattamento e sono comunicati a terzi nel solo caso in cui ciò sia a tal fine necessario.
            </p>

            <h4 class="it-page-section" id="p5">Tipologie di dati trattati</h4>
            <h6>Dati di navigazione</h6>
            <p>I sistemi informatici e le procedure software preposte al funzionamento di questo sito web acquisiscono, nel corso del loro normale esercizio, alcuni dati personali la cui trasmissione è implicita nell'uso dei protocolli di comunicazione di Internet. Trattasi di informazioni che non sono raccolte per essere associate a interessati identificati, ma che per loro stessa natura potrebbero, attraverso elaborazioni ed associazioni con dati detenuti da terzi, permettere di identificare gli utenti.
                In questa categoria di dati rientrano gli indirizzi IP o i nomi a dominio dei computer utilizzati dagli utenti che si connettono al sito, gli indirizzi in notazione, in sigla URI (Uniform Resource Identifier) delle risorse richieste, l'orario della richiesta, il metodo utilizzato nel sottoporre la richiesta al server, la dimensione del file ottenuto in risposta, il codice numerico indicante lo stato della risposta data dal server (buon fine, errore, ecc.) ed altri parametri relativi al sistema operativo e all'ambiente informatico dell'utente.
                Questi dati vengono utilizzati al solo fine di ricavare informazioni statistiche anonime sull’uso del sito e per controllare il corretto funzionamento. I dati potrebbero essere utilizzati per l'accertamento di responsabilità in caso di ipotetici reati informatici ai danni del sito.
            </p>

            <h6>
                Dati forniti volontariamente dall'utente
            </h6>
            <p>
                L'invio facoltativo, esplicito e volontario di posta elettronica agli indirizzi riportati su questo sito o l’invio, per mezzo dello stesso, di altri eventuali dati personali comporta la successiva acquisizione ed elaborazione dei dati necessari per fornire il servizio e/o rispondere alle richieste.
            </p>
            <h6>Cookies</h6>
            <p>La piattaforma utilizza solo cookies tecnici.</p>

            <h4 class="it-page-section" id="p6">Liceità del trattamento</h4>
            <p>Il trattamento viene effettuato per e nell'ambito delle funzioni istituzionali dell'Ente, per l'esecuzione di un servizio di interesse pubblico, ai sensi dell'art. 6 del Regolamento UE n. 2016/679.</p>

            <h4 class="it-page-section" id="p7">Facoltatività del conferimento dei dati</h4>
            <p>
                A parte quanto sopra  specificato per i dati di navigazione, l'utente è libero di fornire i dati personali riportati nei moduli di richiesta o comunque indicati in contatti con gli uffici per richiedere l'invio di materiale informativo o di altre comunicazioni. Il loro mancato conferimento può comportare l'impossibilità di ottenere quanto richiesto. A riguardo, eventuali informative di sintesi possono essere riportate nelle pagine e sezioni del sito predisposte per particolari servizi a richiesta.
            </p>

            <h4 class="it-page-section" id="p8">Modalità di trattamento dei dati</h4>
            <p>
                I dati personali sono trattati con strumenti informatici per il tempo strettamente necessario a conseguire gli scopi per cui sono stati raccolti. Sono adottate, da parte di ciascun settore, tutte le misure di sicurezza necessarie per prevenire la perdita dei dati, usi illeciti o non corretti ed accessi non autorizzati. Ove l'accesso a particolari servizi sia subordinato alla registrazione previa comunicazione di dati personali, il Comune di Reggio Calabria, può conservare i dati tecnici relativi alle connessioni (log) per consentire i controlli di sicurezza richiesti dalla legge ed al fine di migliorare la qualità dei servizi forniti all'utente.
            </p>

            <h4 class="it-page-section" id="p9">Diritti dell'interessato</h4>
            <p>
                I soggetti a cui si riferiscono i dati personali hanno il diritto in qualunque momento di ottenere la conferma dell'esistenza o meno dei medesimi dati e di conoscerne il contenuto e l'origine, verificarne l'esattezza o chiederne l'integrazione o l'aggiornamento, oppure la rettificazione (artt. 15 e seguenti del Regolamento UE 2016/679 e artt. 7 e seguenti del D.lgs. n. 196/2003).  Ai sensi del medesimo articolo, i soggetti a cui si riferiscono i dati personali hanno il diritto di chiedere la cancellazione, la trasformazione in forma anonima o il blocco dei dati medesimi, se trattati in violazione di legge, nonché di opporsi in ogni caso, per motivi legittimi, al loro trattamento.
                I diritti dell'interessato possono essere esercitati, contattando il responsabile della protezione dei dati personali (RDP) del
                {{$comune->name}}
            </p>

            <div style="min-height: 100px"></div>
        </div>
    </div>
</div>
@include("layout.footer")

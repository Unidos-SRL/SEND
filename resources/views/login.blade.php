@include('layout.header', ["comune"=>$comune, "user"=>false])
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="{{asset("css/spid-sp-access-button.min.css")}}" />
<script type="text/javascript"src={{asset("js/spid-sp-access-button.min.js")}}></script>
<!-- Add only if you want load remotally the idps list -->
<script src="{{asset("js/spid-idps.js")}}"></script>
<div class="container pb-5 pt-5" id="main-container">
    <nav class="breadcrumb-container" aria-label="breadcrumb">
        <ol class="breadcrumb p-0" data-element="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{$comune->fiscal_code}}">Home</a><span class="separator">/</span></li>
            <li class="breadcrumb-item active" aria-current="page">Accedi al servizio</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12 col-lg-8 ">
            <div class="cmp-text-button mt-3">
                <h2 class="title-xxlarge mb-0">{{env("APP_TITLE")}}</h2>
                <div class="text-wrapper">
                    <p class="subtitle-small mb-3">Accedi con le tue credenziali.</p>
                </div>

                <br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                           {{ $error }}
                        @endforeach
                    </div>
                @endif
                <br>

                <form method="POST" action="{{ url('/'.$comune->fiscal_code.'/login') }}">
                    @csrf
                    <label>Email:</label><br>
                    <input type="email" name="email" value="{{ old('email') }}" required><br><br>

                    <label>Password:</label><br>
                    <input type="password" name="password" required><br><br>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

            </div>


        </div>
    </div>
</div>
@include('layout.footer', ["comune"=>$comune, "user"=>false])



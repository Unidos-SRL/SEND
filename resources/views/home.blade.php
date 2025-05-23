@include('layout.header', ["comune"=>$comune, "user"=>true])

<style>
    .visible{
        display: block;
    }

    .hidden{
        display: none;
    }
</style>

<main class="pt-5 pb-5">
    <div class="container">
        <h3>{{env("APP_TITLE")}}</h3>

    </div>
</main>

@include('layout.footer', ["comune"=>$comune, "user"=>false])

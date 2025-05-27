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
        <hr>
        <div class="row">
            <div class="col-md-10">
                <h6>Riepilogo notifiche</h6>
            </div>

            <div class="col-md-2">
                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target=".bd-example-modal-xl">Nuovo invio</button>
            </div>
        </div>
    </div>
</main>
@include("sections.send_notification")
@include('layout.footer', ["comune"=>$comune, "user"=>false])

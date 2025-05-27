
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title h5 " id="myExtraLargeModalLabel">Invio nuova notifica</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi finestra modale"></button>
            </div>
            <div class="modal-body">
                <form action="" class="form-control" id="send_new_notification">
                    <div class="row">
                        <div class="col-md-4">
                            <fieldset class="form-group">
                                <legend>Oggetto</legend>
                                <input type="text" class="form-control" id="oggetto" placeholder="Inserisci oggetto" required>
                            </fieldset>

                        </div>
                        <div class="col-md-4">
                            <fieldset class="form-group">
                                <legend>Numero protocollo</legend>
                                <input type="text" class="form-control" id="numero_protocollo" placeholder="Inserisci numero protocollo" required>
                            </fieldset>

                        </div>
                        <div class="col-md-4">
                            <fieldset class="form-group">
                                <legend>Data protocollo</legend>
                                <input type="date" class="form-control" id="data_protocollo" placeholder="Inserisci data protocollo" required>
                            </fieldset>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <legend>Gruppo di radio</legend>
                                <div class="form-check form-check-inline">
                                    <input name="tipo_persona" type="radio" id="persona_fisica" checked>
                                    <label for="persona_fisica">Persona fisica</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="tipo_persona" type="radio" id="giuridica">
                                    <label for="giuridica">Persona giuridica</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <legend>Codice fiscale/ Partita Iva</legend>
                                <input type="text" class="form-control" id="cf_piva" placeholder="Inserisci il codice fiscale o la partita iva" required>
                            </fieldset>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <input type="file" name="file_uploads" id="file_uploads" class="upload" multiple="multiple" />
                        <label for="upload1">
                            <svg class="icon icon-sm" aria-hidden="true"><use href="{{asset("/bootstrap-italia/svg/sprites.svg#it-upload")}}"></use></svg>
                            <span>Carica file *</span>
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Annulla</button>
                <button class="btn btn-primary btn-sm" type="button" onclick="sendNotification()">Invia</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function sendNotification(){
        var form = $('#send_new_notification')[0]; // prendi l'elemento DOM puro

        if (!form.checkValidity()) {
            // Form non valido
            $(form).addClass('was-validated');
        } else {
            // Form valido
            alert('Form valido! Puoi inviare i dati.');
            // $(form).submit(); // Se vuoi inviare effettivamente
        }
    }
</script>

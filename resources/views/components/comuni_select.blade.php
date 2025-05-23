<?php
$comuni = \App\Models\Comuni::all();
$comuni_province = array();
foreach ($comuni as $comune){
    $comuni_province[$comune->comune] = $comune->sigla_provincia;
}
?>

<script>
    let comuni_province = JSON.parse(atob("{{base64_encode(json_encode($comuni_province))}}"));
    console.log(comuni_province);
</script>

<div class="select-wrapper">
    <label for="{{$id}}">{{$label}}</label>
    <select class="form-control" id="{{$id}}" title="Scegli una provincia" {{$required}}>
        <option selected value="">Scegli una opzione</option>
        @foreach($comuni as $comune)
            <option value="{{$comune->comune}}">{{$comune->comune}}</option>
        @endforeach
    </select>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var selectAutocomplete = new bootstrap.SelectAutocomplete(document.querySelector('#{{$id}}'), {
            showAllValues: false,
            defaultValue: '',
            autoselect: false,
            showNoOptionsFound: false,
            dropdownArrow: () => '',
        });

        $('#{{$id}}').on('change', function (){
            $("#{{$id_cap_to_update}}").val(comuni_province[$(this).val()]);
            $("#{{$id_cap_to_update}}").trigger("change");
            $("#{{$id_cap_to_update}}").siblings('label[for="{{$id_cap_to_update}}"]').addClass('active');
        });
    })
</script>

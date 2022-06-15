<script src="{{asset('assets/vendor/selected2/dist/js/select2.min.js')}}"></script>
<!-- ADMIN SCRIPT -->
<script src="{{asset('assets/vendor/dist/js/jquery.min.js')}}"></script>
<script src="{{asset('/assets/vendor/dist/DataTables/datatables.min.js')}}"></script>
<script src="{{asset('assets/vendor/dist/DataTables/DataTables-1.12.1/css/dataTables.bootstrap5.min.css')}}"></script>
<script src="{{asset('assets/vendor/dist/js/bootstrap.bundle.min.js')}}">
</script>
<script src="{{asset('assets/vendor/selected2/dist/js/select2.min.js')}}"></script>
<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $('.alert').fadeTo(10000, 0).slideUp(7000, function() {
                $(this).remove();
            }, 5000);
            ('classError').remove();
        });
    })
</script>
<script>
    let numFile = 2;

    function ajouter() {
        $('.input-add').append('<div class="d-flex">\
            <input type = "file"\
            class = "form-control my-1 " name ="file' + numFile + '"/>\
            <span class="ms-2 bi-trash-fill bi--xl text-danger" onclick="deleteP(this)"></span>\
            </div>');
        $('#count').val(numFile);
        numFile++;
    }

    function deleteP(el) {
        $(el).parent('div').remove();
        numFile = $('#count').val();
        let val = $('#count').val();
        $('#count').val(val - 1);
        console.log();
    }
</script>
@if(session('serviceAff') ?? 0)
<script>
    $(window).ready(function() {
        $('#modalAff').click();
    });
</script>
@endif
@if(session('agentAff') ?? 0)
<script>
    $(window).ready(function() {
        $('#agentAffModal').click();
    });
</script>
@endif
@if(session('produitAff') ?? 0)
<script>
    $(window).ready(function() {
        $('#produitModife').click();
    });
</script>
@endif
<script type="text/javascript">
    $('.selectMarque').select2({
        placeholder: 'Seclectionner une marque',
        tags: true,
        ajax: {
            url: '/selectMarque',
            dataType: 'json',
            delay: 100,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.marque,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
    $('.SelectModel').select2({
        placeholder: 'Seclectionner un model',
        tags: true,
        ajax: {
            url: '/selectModel',
            dataType: 'json',
            delay: 100,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.model,
                            id: item.id,
                        }
                    }),
                };
            },
            cache: true
        }
    });
</script>
<!-- END ADMIN SCRIPT -->
<!-- ALL SCRIPT LAYER -->
@if ($parentIndex ?? '')
<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $('.alert').fadeTo(10000, 0).slideUp(7000, function() {
                $(this).remove();
            }, 5000);
        });
    })
</script>
<script>
    var nav = document.getElementById('nav');
    if (window.scrollY == 0) {
        nav.classList.remove('bg-danger');
    }
</script>
@endif
<script src="{{asset('assets/vendor/dist/js/bootstrap.bundle.min.js')}}">
</script>
<!-- END SCRIPT LAYER -->

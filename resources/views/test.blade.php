<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="{{asset('assets/vendor/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/css_js/css.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/icons/font/bootstrap-icons.css')}}">
<script src="{{asset('assets/vendor/dist/js/jquery.min.js')}}"></script>
<script src="{{asset('/assets/vendor/dist/DataTables/datatables.min.js')}}"></script>
<script src="{{asset('assets/vendor/dist/DataTables/DataTables-1.12.1/css/dataTables.bootstrap5.min.css')}}"></script>
<script src="{{asset('assets/vendor/dist/js/bootstrap.bundle.min.js')}}">
</script>

<div class="container">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

    <!-- Modal -->
    <div class="show" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>

<!--Delete The Modal -->
<div class="modal fade common_delete_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title mb-4">Are You Sure Want to Delete?</h4>

                <button type="button" class="btn btn-danger text-white text-center ctm-border-radius mb-2 mr-3" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-theme text-white text-center ctm-border-radius mb-2 button-1 deleteList">Delete</button>
                <label for="error" class="deleteError"></label>
            </div>
        </div>
    </div>
</div>
<!-- End Delete the Modal -->
<!-- Success the Modal -->
<a style="display:none" href="javascript:void(0);" data-toggle="modal" data-backdrop="static" data-target="#common_success_modal" id="common_success_modal_click"></a>
<div class="modal fade" id="common_success_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title mb-4" id="common_success_modal_heading"></h4>
            </div>
        </div>
    </div>
</div>
<!-- End Success the Modal -->
<!-- Import Data Modal -->
<div class="modal fade" id="addNewTeam">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <a href="" id="import_data_modal_pdf_example" target="_blank">Dumy</a>
                <h4 class="modal-title mb-3" id='import_data_modal_head'> </h4>
                <div class="form-group">
                    <form method="post" id="importmodal">
                        @csrf
                        <input type="hidden" name="type" value='' id="import_data_modal_type">
                        <input type="file" name="import" class="form-control" id="import" accept=".xlsx">
                    </form>
                </div>
                <label for="error" class="deleteError"></label>

                <button type="button" class="btn btn-danger text-white ctm-border-radius float-right ml-3" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-theme button-1 text-white ctm-border-radius float-right import_data_modal_form" data-url="" data-backurl="">Add</button>
            </div>
        </div>
    </div>
</div>
<!-----------------------End Import Data Modal -------------------->

<!----------------------view Password model------------------->

<div class="modal fade" id="password">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content passmodal">
            <!-- Modal body -->
            <div class="modal-body">
                <button type="button" class="close closePassword" data-dismiss="modal">&times;</button>
                <h4 class="modal-title mb-3" id="password_verify">Password verify</h4>
                <div class="form-group">
                    Email Id is: {{ @Auth::user()->email }}
                    <form method="post" id="formpassword">
                        @csrf
                        <input type="Password" name="password" id="apassword">
                        <label for="error" class="passwordError"></label>

                        <button type="button" class="btn btn-theme button-1 ctm-border-radius text-white float-right AuthenticateAdmin" data-url="{{url('/reauthenticate')}}" data-back_url="{{url('/Job-listing-websites')}}">verify</button>

                    </form>
                    <button type="button" class="btn btn-danger ctm-border-radius float-right ml-3" data-dismiss="modal">Cancel</button>

                </div>

            </div>
        </div>
    </div>
</div>


<div class="sidebar-overlay" id="sidebar_overlay"></div>

<!-- jQuery -->
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

@if(Request::segment(1) == 'home' || (Request::segment(1) == '' || Request::segment(1) == null) )

<!-- Chart JS -->
<script src="{{asset('assets/js/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart.js')}}"></script>
@endif
<!-- Sticky sidebar JS -->
<script src="{{asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
<script src="{{asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>



<!-- Select2-->
<!-- <script src="{{asset('assets/plugins/plugins/select2/moment.min.js')}}"></script> -->
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>


<!--jquery validator-->

<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>

<script src="{{asset('assets/js/additional-methods.min.js')}}"></script>

<script src="{{asset('assets/js/validate.js')}}"></script>
<script src="{{asset('assets/js/validate1.js')}}"></script>

<!--sweetalert js-->
<script src="{{asset('assets/js/sweetalert.min.js')}}"></script>

<!--multipleselect-->
<script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
<!--multipleselect-->
<script src="{{asset('assets/plugins/select2/moment.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script type="text/javascript">
    $('select').selectpicker();
    $('.datetimepicker').datetimepicker({
        format: 'DD/MM/YYYY',
        icons: {
            up: "fa fa-angle-up",
            down: "fa fa-angle-down",
            next: 'fa fa-angle-right',
            previous: 'fa fa-angle-left'
        }
    });
</script>

</html>
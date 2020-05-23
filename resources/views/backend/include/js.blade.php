


<!-- Bootstrap core JavaScript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<!--jquery-->

<!-- JavaScript used in the new RPO -->
<script src="{{asset('public/backend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('public/backend')}}/js/moment.js"></script>
<script src="{{asset('public/backend')}}/lib/cssmenu/menu_script.js"></script>
<script src="{{asset('public/backend')}}/lib/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('public/backend')}}/lib/datatable/js/dataTables.fixedColumns.min.js"></script>
<script src="{{asset('public/backend')}}/lib/validationengine/js/jquery.validationEngine.js"></script>
<script src="{{asset('public/backend')}}/lib/validationengine/js/languages/jquery.validationEngine-en.js"></script>

<!-- for print -->
<script src="{{asset('public/backend')}}/js/jquery.printarea.js"></script>

<!-- // <script src="{{asset('public/backend')}}/js/buttons.print.min.js"></script> -->
<!-- // <script src="{{asset('public/backend')}}/js/dataTables.buttons.min.js"></script> -->

    <!-- for timepicker -->
<!-- <link type="text/css" href="{{asset('public/backend')}}/lib/datetimepicker/bootstrap-datetimepicker.min.js" rel="stylesheet"> -->

<script src="{{asset('public/backend')}}/js/custom.js"></script>
<script src="{{asset('public/backend')}}/js/select2.full.min.js"></script>
<!-- Java Scripts added for high chart utilization -->
<script src="{{asset('public/backend')}}/highchart/highcharts.js"></script>
<!-- End of JavaScript link  -->



<!-- for bootstrap slider ~~~~~~~~~~~~~~   -->
<!-- <script src="{{asset('public/backend')}}/js/highlight.js"></script>
       <script src="{{asset('public/backend')}}/js/main.js"></script>
       <script src="{{asset('public/backend')}}/js/bootstrap-switch.js"></script> -->
<!-- end bootstrap slider ~~~~~~~~~~~~~~   -->




<!--<script src="js/docs.min.js"></script>-->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="js/ie10-viewport-bug-workaround.js"></script>-->

 <script>
        $(function() {
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();
                var link = $(this).attr("href");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete this data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        window.location.href = link;
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            });
        });

    </script>
    <script class="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>
</body>

</html>

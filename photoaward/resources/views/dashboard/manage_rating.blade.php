<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Picture +254</title>

	{{-- <script src="{{ asset('js/right_click.js') }}"></script> --}}
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('dashboard/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard/assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('dashboard/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('dashboard/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/logo_.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/logo_.png')}}">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

	<style type="text/css">
		  .swal2-popup {
			  font-size: 1.6rem !important;
			}
	</style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
	@include('dashboard.nav-bar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
	@include('dashboard.side-bar')
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
						
					{{-- start form --}}
					<div class="panel" style="width: 80%; margin: 0 auto;">
						@include('errors')

							@if (session('success'))
	                        <div class="alert alert-success alert-dismissable">
	                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	                            {{ session('success') }}
	                        </div>
	                   		 @endif
	                  		  @if (session('warning'))
	                        <div class="alert alert-warning">
	                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	                            {{ session('warning') }}
	                        </div>
	                   		 @endif								
								<div class="panel-heading">
									<h3 class="panel-title" style="font-weight: bold;"><i class='fa fa-list-alt' style="margin-right: 10px;"></i>Manage Rating Scales</h3>
									
									<a style="margin-bottom: 5px;" href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">Add Scale</a>
								</div>
							<div class="panel-body">
 								<table id="example" class="table table-striped table-bordered" style="width:100%">
								        <thead>
								            <tr>
								                <th>Name</th>
								                <th>Action</th>
								            </tr>
								        </thead>
								        <tbody>
								        @foreach($scales as $scale)
								            <tr>
								                <td>{{ $scale->name }}</td>
								                
								                <td >
								                	<a onclick="edit_income({{ $scale->id }})" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit Jury" class="" style="margin-right: 10px; color: green; font-size: 20px;"><i class="fa fa-pencil"></i></a>

								                	<a href="javascript:void(0);" onclick="deleteScale({{ $scale->id }})" data-toggle="tooltip" title="Deactivate Jury" class="" style="margin-right: 10px; color: red; font-size: 20px;"><i class="fa fa-times-circle"></i></a>

								                </td>

								            </tr>
								            @endforeach
								        </tfoot>
								    </table>
							</div>
						</div>

					{{-- end form --}}
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->


		<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Rating Scale</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="panel-body">
 			<form method="POST" action="add-scale">
 			{{ csrf_field() }}
            <label>Scale Name</label>                       
			<input type="text" class="form-control input-lg" placeholder="" name="name" required="">
			<br>
			
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>		


<!-- Modal -->
<div class="modal fade" id="upadateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Rating Scale</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="panel-body">
 			<form method="POST" action="add-scale" id="form">
 			{{ csrf_field() }}
 			<input type="hidden" name="id">
            <label>Scale Name</label>                       
			<input type="text" class="form-control input-lg" placeholder="" name="name" required="">
			<br>
			
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="save()" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

		<div class="clearfix"></div>
	@include('dashboard.footer')
	</div>
	<!-- END WRAPPER -->

	
	<!-- Javascript -->
	<script src="{{asset('dashboard/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{asset('dashboard/assets/scripts/klorofil-common.js')}}"></script>

	{{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

	
	<script>
		$(document).ready(function() {
		    $('#example').DataTable();
		} );

	    function readURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            

            reader.onload = function (e) {

                $('#profile-img-tag').attr('src', e.target.result);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }

    $("#profile-img").change(function(){

        readURL(this);

    });

	</script>
<script type="text/javascript">
	function edit_income(id)
    {
      save_method = 'update';
      $('#upadateModal').modal({
                    backdrop: 'static'
    });
      $('#form')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "{{ route('get-scale') }}",
        type: "GET",
        data: {id: id},
        dataType: "JSON",
        success: function(data)
        {
             $('[name="name"]').val(data.name);
            $('[name="id"]').val(data.id);


            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Scale'); // Set title to Bootstrap modal title
 
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

  function save()
 {

      // ajax adding data to database
       Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes!',
                    showLoaderOnConfirm: true,
                  }).then((result) => {
                    if (result.value) {
                         $.ajax({
                              url : "{{ route('update-scale') }}",
                              type: "POST",
                              data: $('#form').serialize(),
                              _token: '{{csrf_token()}}',
                              dataType: "JSON",
                              success: function(data)
                              {              
                                Swal.fire({
                                  title: 'Saved!',
                                  text: "Details have been saved successfully!",
                                  icon: 'success',
                                  closeButtonText: 'No, cancel!',
                                }
                                ).then((result)=>{
                                  location.reload();
                                }
                                );
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                // alert('Error deleting data');
                                Swal.fire({
                                           title: 'Oops...',
                                            text: 'Error saving details!',
                                            icon: 'error',
                                          })
                            }
                        });                     
                    }
                  });
 }

 function deleteScale(id)
    {

       Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes!',
                    showLoaderOnConfirm: true,
                  }).then((result) => {
                    if (result.value) {
                         $.ajax({
                              url : "{{ url('delete-scale') }}/"+id,
                              type: "DELETE",
                              data: {_token: '{{csrf_token()}}'},
                              dataType: "JSON",
                              success: function(data)
                              {               
                                Swal.fire({
                                  title: 'Deleted!',
                                  text: "Record has been deleted successfully!",
                                  icon: 'success',
                                  closeButtonText: 'No, cancel!',
                                }
                                ).then((result)=>{
                                  location.reload();
                                }
                                );
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                // alert('Error deleting data');
                                Swal.fire({
                                           title: 'Oops...',
                                            text: 'Error deleting record!',
                                            icon: 'error',
                                          })
                            }
                        });                     
                    }
                  });
    }

</script>

</body>

</html>

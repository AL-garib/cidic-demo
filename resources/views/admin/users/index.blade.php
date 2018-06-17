@extends('layouts.control-panel.master-panel') 
@section('css')

<link href="{{ asset('css/plugins/datatables/jquery.dataTables.css') }}" rel="stylesheet">
<link href="{{ asset('js/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css') }}" rel="stylesheet">
<link href="{{ asset('css/plugins/datepicker/bootstrap-datepicker.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.css">
<link rel="stylesheet" href="{{ asset('css/jquery.tag-editor.css') }}">
@endsection
 
@section('content')
<!-- Main content -->
<div class="main-content">
	<h1 class="h1"> الاعضاء &#x1F46A; </h1>
	<h1 class="page-title">جميع الاعضاء <strong>&#x1F920;</strong> &#x1F5EF; &#x1F4B0;</h1>
	<p id='latitudeAndLongitude'></p>
	<p id='address'></p>
	<!-- Breadcrumb -->
	<ol class="breadcrumb breadcrumb-2">
		<li><a href=""><i class="fa fa-home"></i>الرئيسية</a></li>
		<li><a href="basic-tables.html"> الاعضاء</a></li>
		<li class="active"><strong>جميع  الاعضاء</strong></li>
	</ol>
	<div class="row">
		<div class="col-lg-12 animatedParent animateOnce z-index-50">
			<div class="panel panel-default animated fadeInUp">
				<div class="panel-heading clearfix">
					<h3 class="panel-title">عرض لجميع المدن </h3>
					<ul class="panel-tool-options">
						<button type="button" data-toggle="modal" data-target="#Creating" class="btn bttn-jelly bttn-md bttn-primary">
							اضافة
							&#x2693;
						</button>
					</ul>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="user-table table table-striped table-bordered table-hover tableable">

							<thead>

								<tr>
									<th>&#x26A1; #</th>
									<th>&#x1F3AD; اسم العضو</th>
									<th>&#x1F3AD; نوع العضو</th>
									<th> رقم العضو</th>
									<th>&#x1F4B8; ايميل العضو</th>
									<th>&#x1F6A1; عدد النقاط</th>
									<th>&#x1F6A1; عدد الاعلانات</th>
									<th>&#x1F4C5; التاريخ</th>
									<th>&#x2753; الحالة</th>
									{{--
									<th>&#x2699; اجراءات</th> --}}
								</tr>

							</thead>

							<tbody>

							</tbody>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('admin.users._assests.form')
</div>
@endsection
 
@section('js')

<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/extensions/Buttons/js/buttons.html5.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/extensions/Buttons/js/buttons.colVis.js') }}"></script>
<script src="{{ asset('js/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/plugins/datepicker/locales/bootstrap-datepicker.ar.js') }}"></script>
<script src="{{ asset('js/jquery.caret.min.js') }}"></script>
<script src="{{ asset('js/jquery.tag-editor.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.js"></script>
<script>
	var datatable = $('.tableable').DataTable({
			processing: true,
            serverSide: true,
			ajax: '{{ route("all_users") }}',
			columns : [
			{data: 'id'},
            {data: 'name'},
            {data: 'role'},
            {data: 'number_phone'},
            {data: 'email'},
            {data: 'awereded'},
            {data: 'posters_count'},
            {data: 'created_at'},
            {data: 'action', searchable: false, orderable: false},
			], 
			dom: '<"html5buttons" B>lTfgitp',
			order: [ [0, 'desc'] ],
			buttons: [
				{
					extend: 'copyHtml5',
					exportOptions: {
						columns: [ 0, ':visible' ]
					}
				},
				{
					extend: 'excelHtml5',
					exportOptions: {
						columns: ':visible',
						text:'Welcome'
					}
				},
				{
					extend: 'pdfHtml5',
					exportOptions: {
						columns: [ 0, 1, 2, 3, 4 ]
					}
				},
				'colvis'
			],
		"oLanguage":{
			"sProcessing": "جارٍ التحميل...",
			"sLengthMenu": "أظهر _MENU_ مدخلات",
			"sZeroRecords": "لم يعثر على أية سجلات",
			"sInfo": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
			"sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل",
			"sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
			"sInfoPostFix": "",
			"sSearch": "ابحث:",
			"sUrl": "",
			"oPaginate": {
				"sFirst": "الأول",
				"sPrevious": "السابق",
				"sNext": "التالي",
				"sLast": "الأخير"
			}
		}
		});;
	$(document).ready(function () {
		$('#tags').tagEditor({
			delimiter: ', ', /* space and comma */
			forceLowercase: false,
			placeholder: 'الوسوم ...',
		});

		$('.deleted').submit(function(e) {
        e.preventDefault();
        var form = $(this);

        var method = form.find('input[name="_method"]').val() || 'POST';

        var url = form.prop('action');
        console.log(url)
        

        swal({
            title: " هل أنت متأكد ؟ &#x1F937;&#x200D;&#x2640;&#xFE0F;",
            html: "ألصورة راح تنحذف نهائياً من النظام ! &#x1F477;&#x200D;&#x2642;&#xFE0F;",
            type: 'error',
            showCancelButton: true,
            animation: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "يبوي احذف &#x1F477;&#x200D;&#x2642;&#xFE0F;",
            cancelButtonText: "الغاء &#x1F6AF;!",
            preConfirm:
                function (option) {
                    return new Promise(function (resolve) {
                        $.ajax({
                            type: method,
                            url: url,
                            data: form.serialize(),
                            success: function (res) {
                                console.log(res)
                                swal({
                                    title: res.data.success,
                                    html: res.data.body,
                                    type: 'success'
                                });
                            },
                        });
                    });
                }
        });

    }); // End Of Deleteing 

		$('#year-view').datepicker({
        language: 'ar',
        startView: 2,
        keyboardNavigation: false,
        forceParse: false,
        format: "yyyy-mm-dd"
    }); // End Of Calnder


		setInterval( function () 
			{ 
			datatable.ajax.reload(); 
		}, 30000 );

	@if(session()->has('title'))

			swal({
				title:"{!! session()->get('title') !!}",
				html: "{!! session()->get('body') !!}",
				animation: true,
				type: 'success',
			});
		datatable.ajax.reload();
		console.log(datatable);
        datatable.draw();

	@endif
		
		if( navigator.geolocation )
        {
           // Call getCurrentPosition with success and failure callbacks
           navigator.geolocation.getCurrentPosition( success, fail );
        }
        else
        {
           alert("Sorry, your browser does not support geolocation services.");
		}
		
		function success (position) {
			
			 // Assigning The Resutlt
			$('#latitude').val(position.coords.latitude);

			$('#longitude').val(position.coords.longitude);
			
		}
		function fail (position) {
			console.log(position)
		}

	});

</script>
@endsection
<!-- DataTables -->
<link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<x-admin-layout>
  <x-slot name="title">
    Tag
  </x-slot>

  <x-slot name="contentHeader">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Tag</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ URL::to('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Tag</li>
        </ol>
      </div>
    </div>
  </x-slot>

  <x-slot name="body">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Tag List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>Options</th>
                      <th>Nama Tag</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tags as $t)
                    <tr>
                      <td>
                        <div class="">
                          <div class="icheck-primary d-inline mr-3">
                            <input type="checkbox" value="" id="check{{ $loop->iteration }}">
                            <label for="check{{ $loop->iteration }}"></label>
                          </div>
                          <div class="icheck-primary d-inline mr-1">
                            <i class="far fa-edit"></i>
                            <a href="" id="editTag" data-toggle="modal" data-target="#modal-default" data-name="{{ $t->name }}">
                              Edit
                            </a>
                          </div>
                          <div class="icheck-primary d-inline">
                            <i class="far fa-trash-alt"></i>
                            <a href="tag/destroy/{{ $t->name }}">
                              Delete
                            </a>
                          </div>
                        </div>
                      </td>
                      <td>{{ $t->name }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <th colspan="2">
                      <div class="form-group">
                        <div class="icheck-primary d-inline mr-3">
                          <input type="checkbox" value="" id="checkAll" class="checkbox-toggle">
                          <label for="checkAll">Check All</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <i class="far fa-trash-alt"></i>
                          <a href="#" class="delete-all">
                            Delete All Selected
                          </a>
                        </div>
                      </div>
                    </th>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <div class="card card-outline card-success">
              <div class="card-header">
                <h3 class="card-title">New Tag</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="tag/store" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputTag1">Nama Tag</label>
                    <input type="text" name="name" class="form-control" id="exampleInputTag1" placeholder="Masukkan nama tag">

                    @if($errors->has('name'))
                    <div class="text-danger">
                      {{ $errors->first('name') }}
                    </div>
                    @endif
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Tag "<span id="nameTag"></span>"</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="" method="post" id="editForm">
              {{ csrf_field() }}
              <div class="modal-body">
                <input type="hidden" name="oldName" id="oldTag">
                <div class="form-group">
                  <label for="updateTag">Nama Tag</label>
                  <input type="text" name="name" class="form-control" id="updateTag" placeholder="Masukkan nama tag">

                  @if($errors->has('name'))
                  <div class="text-danger">
                    {{ $errors->first('name') }}
                  </div>
                  @endif
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    </div>
  </x-slot>
</x-admin-layout>

<!-- DataTables  & Plugins -->
<script src="/vendor/almasaeed2010/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/almasaeed2010/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/vendor/almasaeed2010/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/vendor/almasaeed2010/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/vendor/almasaeed2010/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>

<script>
$(function () {
  $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "buttons": ["copy"],
    "order": [[1, 'asc']],
    "columns": [
      { "orderable": false, "width": "30%" }, null
    ]
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  $('.checkbox-toggle').click(function () {
    var clicks = $(this).data('clicks')
    if (clicks) {
      //Uncheck all checkboxes
      $('tbody input[type=\'checkbox\']').prop('checked', false)
    } else {
      //Check all checkboxes
      $('tbody input[type=\'checkbox\']').prop('checked', true)
    }
    $(this).data('clicks', !clicks)
  });

  // $.ajaxSetup({
  //   headers: {
  //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //   }
  // });
  $('body').on('click', '#editTag', function (event) {

    event.preventDefault();
    var name = $(this).data('name');
    // console.log(name);
    $.get('tag/show/' + name, function (data) {
      // $('#submit').val("Edit Tag");
      $('#modal-default').modal('show');
      $('#nameTag').html(data.data.name);
      $('#editForm').attr('action', 'tag/update/'+data.data.name);
      $('#oldTag').val(data.data.name);
      $('#updateTag').val(data.data.name);
    })
  });

  $('.delete-all').on('click', function(e) {
    var allVals = [];
    $(".sub_chk:checked").each(function() {
      allVals.push($(this).attr('data-id'));
    });

    if(allVals.length <=0)
    {
      alert("Please select row.");
    }  else {
      var check = confirm("Are you sure you want to delete this row?");
      if(check == true){
        var join_selected_values = allVals.join(",");

        $.ajax({
          url: $(this).data('url'),
          type: 'DELETE',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: 'ids='+join_selected_values,
          success: function (data) {
            if (data['success']) {
              alert(data['success']);
            } else if (data['error']) {
              alert(data['error']);
            } else {
              alert('Whoops Something went wrong!!');
            }
          },
          error: function (data) {
            alert(data.responseText);
          }
        });
      }
    }
  });

  // $('[data-toggle=confirmation]').confirmation({
  //   rootSelector: '[data-toggle=confirmation]',
  //   onConfirm: function (event, element) {
  //     element.trigger('confirm');
  //   }
  // });
});
</script>
<!-- https://www.codecheef.org/article/edit-data-with-bootstrap-modal-window-in-laravel -->

<!-- DataTables -->
<link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Toastr -->
<link rel="stylesheet" href="/vendor/almasaeed2010/adminlte/plugins/toastr/toastr.min.css">

<meta name="csrf-token" content="{{ csrf_token() }}">

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
          <li class="breadcrumb-item"><a href="{{ Route('index') }}">Home</a></li>
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
                <h3 class="card-title">Daftar Tag</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th></th>
                      <th>No</th>
                      <th>Nama Tag</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tags as $t)
                    <tr>
                      <td>
                        <div class="icheck-primary d-inline">
                          <input type="checkbox" class="checkbox-tag" id="check{{ $loop->iteration }}" data-name="{{ $t->name }}">
                          <label for="check{{ $loop->iteration }}"></label>
                        </div>
                      </td>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $t->name }}</td>
                      <td>
                        <a href="" class="btn btn-sm btn-warning edit-tag" data-toggle="modal" data-target="#modal-default" data-name="{{ $t->name }}" data-url="{{ Route('tag.show', $t->name) }}">
                          <i class="far fa-edit"></i>
                          Edit
                        </a>
                        <a href="" class="btn btn-sm btn-danger delete-tag" data-name="{{ $t->name }}" data-url="{{ Route('tag.destroy', $t->name) }}">
                          <i class="far fa-trash-alt"></i>
                          Hapus
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <th colspan="4">
                      <div class="form-group">
                        <div class="icheck-primary d-inline mr-3">
                          <input type="checkbox" value="" id="checkAll" class="checkbox-toggle">
                          <label for="checkAll">Check All</label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <a href="" class="btn btn-sm btn-danger delete-all" data-url="{{ Route('tag.destroyAll') }}">
                            <i class="far fa-trash-alt"></i>
                            Hapus yang ditandai
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
                <h3 class="card-title">Tambah Tag</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ Route('tag.store') }}" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputTag1">Nama Tag</label>
                    <input type="text" name="tag" class="form-control" id="exampleInputTag1" placeholder="Masukkan nama tag" required>

                    @if($errors->has('tag'))
                    <div class="text-danger">
                      {{ $errors->first('tag') }}
                    </div>
                    @endif
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <!-- /.card-body -->

                <!-- <div class="card-footer">
              </div> -->
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
            {{ method_field('PUT') }}
            <div class="modal-body">
              <input type="hidden" name="oldName" id="oldTag">
              <div class="form-group">
                <label for="updateTag">Nama Tag</label>
                <input type="text" name="editTag" class="form-control" id="updateTag" placeholder="Masukkan nama tag">

                @if($errors->has('editTag'))
                <div class="text-danger">
                  {{ $errors->first('editTag') }}
                </div>
                @endif
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
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
<!-- Toastr -->
<script src="/vendor/almasaeed2010/adminlte/plugins/toastr/toastr.min.js"></script>


<script>
{!! session('status') !!}

$(function () {
  var oTable = $("#example").DataTable({
    "responsive": true, "autoWidth": false,
    "order": [[2, 'asc']],
    "columns": [
      { "width": '10%', "orderable": false }, { "width": '10%' }, { "width": '55%' }, { "width": '25%', "orderable": false }
    ],
    "language": {
      "oPaginate": {
        "sPrevious": "‹",
        "sNext":     "›",
      }
    },
    "dom":'<"float-left"l><"search-tag">t<"float-left"i><"float-right"p>'
  });
  $("div.search-tag").html(
    '<div class="card-tools ml-auto bd-highlight float-right">'+
    '<div class="input-group input-group-sm" style="width: 150px;">'+
    '<input id="searchTag" type="text" class="form-control float-right" placeholder="Cari tag" />'+
    '<div class="input-group-append">'+
    '<button class="btn btn-default">'+
    '<i class="fas fa-search"></i>'+
    '</button>'+
    '</div>'+
    '</div>'+
    '</div>'
  );
  $('#searchTag').on('keyup change', function () {
    oTable.column(1).search($(this).val()).draw();
  });

  $('.checkbox-toggle').click(function (e) {
    if ($(this).is(':checked',true)) {
      $('.checkbox-tag').prop('checked', true)
      $('.checkbox-toggle').prop('checked', true)
    } else {
      $('.checkbox-tag').prop('checked', false)
      $('.checkbox-toggle').prop('checked', false)
    }
  });

  $('.checkbox-tag').on('click',function(){
    if($('.checkbox-tag:checked').length == $('.checkbox-tag').length){
      $('.checkbox-toggle').prop('checked',true);
    }else{
      $('.checkbox-toggle').prop('checked',false);
    }
  });

  $('.edit-tag').click(function (event) {

    event.preventDefault();
    $.get($(this).data('url'), function (data) {
      $('#modal-default').modal('show');
      $('#nameTag').html(data.data.name);
      $('#editForm').attr('action', 'tag/'+data.data.name);
      $('#oldTag').val(data.data.name);
      $('#updateTag').val(data.data.name);
    })
  });
  $('.delete-tag').click(function (e) {
    var check = confirm("Yakin untuk menghapus data?");
    var name = $(this).data('name');

    if (check) {
      $.ajax({
        url: $(this).data('url'),
        type: 'DELETE',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: 'name='+$(this).data('name'),
        success: function (data) {
          if (data['success']) {
            location.reload();
          } else {
            alert('Whoops Something went wrong!!');
          }
        },
        error: function (data) {
          alert(data.responseText);
        }
      });
    }
    return false;
  });

  $('.delete-all').on('click', function(e) {
    var allVals = [];
    $(".checkbox-tag:checked").each(function() {
      allVals.push($(this).attr('data-name'));
    });

    if(allVals.length <=0) {
      toastr.warning("Tidak ada yang ditandai.");
    } else {
      var check = confirm("Yakin untuk menghapus data yang ditandai?");
      if(check){
        var join_selected_values = allVals.join(",");

        $.ajax({
          url: $(this).data('url'),
          type: 'DELETE',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: 'ids='+join_selected_values,
          success: function (data) {
            if (data['success']) {
              location.reload();
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
    return false;
  });

  // $('[data-toggle=confirmation]').confirmation({
  //   rootSelector: '[data-toggle=confirmation]',
  //   onConfirm: function (event, element) {
  //     element.trigger('confirm');
  //   }
  // });
});
</script>
<!-- https://daengweb.id/membuat-crud-laravel-8-jetstream-livewire -->
<!-- https://www.itsolutionstuff.com/post/how-to-delete-multiple-records-using-checkbox-in-laravel-5-example.html -->
<!-- https://hdtuto.com/article/php-laravel-56-how-to-delete-multiple-row-with-checkbox-using-ajax -->

@extends('admin.layouts.app')


@section('content')
  <div class="card recent-sales overflow-auto">

    <div class="card-body mt-4">
      {{-- <h5 class="card-title fw-semibold">Members</h5> --}}

      {{-- <div class="pb-3">
        <a href="#" class="btn bg-primary text-light button-create">Add Member</a>
      </div> --}}

      <table id="tablePengguna" class="display">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Username</th>
                <th>Phone Number</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>
      </table>

      <!-- Modal Create -->
      <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Member</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="alert alert-danger d-none"></div>
              <div class="alert alert-success d-none"></div>
              <div class="mb-3 row">
                <label for="name" class="col-sm-2-col col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="name">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="username" class="col-sm-2-col col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="username" id="username">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="phone" class="col-sm-2-col col-form-label">Phone Number</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="phone" id="phone">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="password" class="col-sm-2-col col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" id="password">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary button-save" type="submit">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection

@push('addon-script')
    <script>
      $(document).ready(function() {
        $('#tablePengguna').DataTable({
          processing:true,
          serverside:true,
          ajax:"{{ url('/userAjax') }}",
          columns:[{
            data:'DT_RowIndex',
            name:'DT_RowIndex',
            orderable:true,
            searchable:true,
          }, {
            data:'name',
            name:'Name',
          }, {
            data: 'username',
            name: 'Username'
          }, {
            data: 'phone',
            name: 'Phone'
          }
          // , {
          //   data: 'aksi',
          //   name: 'Aksi'
          // }
        ]
        });
      });

      $.ajaxSetup({
        headers:{
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      // Saving
      $('body').on('click', '.button-create', function(e) {
        e.preventDefault();
        $('#createModal').modal('show');
        $('.button-save').click(function() {
          simpan();
        });
      });

      $('body').on('click', '.button-edit', function(e) {
        var id = $(this).data('id');
        $.ajax({
          url:'/userAjax/' + id + '/edit',
          type:'GET',
          success:function(response){
            $('#createModal').modal('show');
            $('#name').val(response.result.name);
            $('#username').val(response.result.username);
            $('#phone').val(response.result.phone);
            $('#password').val(response.result.password);
            console.log(response.result);
            $('.button-save').click(function() {
              simpan(id);
            });
          }
        });
      });

      // Delete
      $('body').on('click', '.button-del', function(e) {
        // alert('cuy');
        if (confirm('Anda yakin ingin menghapus data user ini?') == true) {
          var id = $(this).data('id');
          $.ajax({
            url: '/userAjax/' + id,
            type: 'DELETE',
          });
          $('#tablePengguna').DataTable().ajax.reload();
        }
      });

      // Save
      function simpan(id = '') {
        if (id == '') {
          var var_url = '/userAjax';
          var var_type = 'POST';
        } else {
          var var_url = '/userAjax/' + id;
          var var_type = 'PUT';
        }

          $ .ajax({
            url: var_url,
            type: var_type,
            data:{
              name: $('#name').val(),
              username: $('#username').val(),
              phone: $('#phone').val(),
              password: $('#password').val(),
            },
            success:function(response){
              if(response.errors){
                console.log(response.errors);
                $('.alert-danger').removeClass('d-none');
                $('.alert-danger').html("<ul>");
                $.each(response.errors, function(key,value) {
                  $('.alert-danger').find('ul').append("<li>" + value + "</li>");
                });
                $('.alert-danger').append("</ul>");
              } else {
                $('.alert-success').removeClass('d-none');
                $('.alert-success').html(response.success);
              }
              $('#tablePengguna').DataTable().ajax.reload();
            }

          });
        };


      $('#createModal').on('hidden.bs.modal', function() {
        // alert('Haloo');
        $('#name').val('');
        $('#username').val('');
        $('#phone').val('');
        $('#password').val('');

        $('.alert-danger').addClass('d-none');
        $('.alert-danger').html('');

        $('.alert-success').addClass('d-none');
        $('.alert-success').html('');
        
      });

    </script>
@endpush
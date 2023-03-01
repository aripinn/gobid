@extends('admin.layouts.app')


@section('content')
  <section class="section dashboard">
    <a href="{{ route('items.create') }}" class="btn btn-primary mb-4">
      Tambah
    </a>
    <div class="row">
      <div class="col-xl-4 col-sm-6 col-10 mx-sm-0 mx-auto">
        @if (count($items) > 0)
        @foreach ($items as $item)
          <div class="card recent-sales overflow-auto">
            <div class="card-body pt-4">
              <img src="/assets/item-img/{{ $item->image }}" alt="{{ $item->name }}" class="w-100">
              <h5 class="card-title mb-1 pb-0">{{ $item->name }}</h5>
              {{-- <h6 class="fw-semibold">Harga Awal : Rp. <span class="harga">{{ $item->start_price }}</span></h6> --}}
              <h6 class="fw-semibold">Harga Awal : Rp <span>{{ $item->start_price }}</span></h6>
              {{-- <p class="card-text">
                {{ $item->auction_end_time->format('d M Y, H:i:s') }}
              </p> --}}
              <p class="card-text">
                {{ $item->description }}
              </p>
              <div class="d-flex justify-content-end gap-2">
                <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                </form>


                <a href="" class="btn btn-warning">
                  Edit
                </a>
                <a href="{{ route('items.show', $item->id) }}" class="btn btn-primary">
                  Detail
                </a>
              </div>
            </div>



          {{-- <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <img src="{{ $item->image_url }}" alt="{{ $item->name }}" class="img-thumbnail" style="max-width: 150px;">
                    </td>
                    <td>
                        <a href="" class="btn btn-primary">View</a>
                    </td>
                </tr> --}}
                
              </div>
              @endforeach
            @else
                <p>No items found.</p>
            @endif
      </div>
    </div>
  </section>
@endsection

@push('addon-script')
    <script>
      $(document).ready(function() {
        $('#tablePengguna').DataTable({
          processing:true,
          serverside:true,
          ajax:"{{ url('/staffAjax') }}",
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
            data: 'email',
            name: 'Email'
          }, {
            data: 'aksi',
            name: 'Aksi'
          }]
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
          url:'/staffAjax/' + id + '/edit',
          type:'GET',
          success:function(response){
            $('#createModal').modal('show');
            $('#name').val(response.result.name);
            $('#username').val(response.result.username);
            $('#email').val(response.result.email);
            $('#role').val(response.result.role);
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
            url: '/staffAjax/' + id,
            type: 'DELETE',
          });
          $('#tablePengguna').DataTable().ajax.reload();
        }
      });

      // Save
      function simpan(id = '') {
        if (id == '') {
          var var_url = '/staffAjax';
          var var_type = 'POST';
        } else {
          var var_url = '/staffAjax/' + id;
          var var_type = 'PUT';
        }

          $ .ajax({
            url: var_url,
            type: var_type,
            data:{
              name: $('#name').val(),
              username: $('#username').val(),
              role: $('#role').val(),
              email: $('#email').val(),
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
        $('#email').val('');
        $('#password').val('');

        $('.alert-danger').addClass('d-none');
        $('.alert-danger').html('');

        $('.alert-success').addClass('d-none');
        $('.alert-success').html('');
        
      });

    </script>
@endpush
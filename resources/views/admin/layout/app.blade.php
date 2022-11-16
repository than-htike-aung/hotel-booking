<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{ asset('backend/uploads/favicon.png') }}">

    <title>Admin Panel</title>

    @include('admin.layout.styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @include('admin.layout.scripts')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <div class="navbar-bg"></div>
            @include('admin.layout.nav')

            @include('admin.layout.sidebar')

            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>@yield('heading')</h1>
                       <div class="ml-auto">
                            @yield('right_top_button')
                       </div>
                        
                    </div>
                    @yield('main_content')


                </section>
            </div>

        </div>
    </div>
    

    @include('admin.layout.scripts_footer')

    @if($errors->any())
        @foreach($errors->all() as $error)
           <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ $error }}'
            });
           </script>
        @endforeach
    @endif

    @if(session()->get('error'))
        <script>
            iziToast.error({
                title: '',
                position: 'center',
                message: '{{ session()->get('error') }}'
            });
        </script>
    @endif

    
@if(session()->get('success'))
<script>
    iziToast.success({
        title: '',
        position: 'topRight',
        message: '{{ session()->get('success') }}',
    });
</script>
@endif
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(function(){
    $(document).on('click', '#delete', function(e){
      e.preventDefault();
      var link = $(this).attr("href");

            Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = link
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })

    })
  })

 
</script>

</body>

</html>
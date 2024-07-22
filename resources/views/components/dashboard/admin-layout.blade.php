<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('user/css/bootstrap.min.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="{{ url('user/css/dataTables.bootstrap5.min.css') }}" />
    <link rel="stylesheet" href="{{ url('user/css/style.css') }}" />



    
    <title>User</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <style>
       .ck-editor__editable[role="textbox"] {
                /* Editing area */
                min-height: 250px;
            }
    </style>

  </head>
  <body>
    <!-- top navigation bar -->
    <x-dashboard.admin-navbar />
   
    <!-- Sidebar -->
   <x-dashboard.admin-sidebar />
    
   
    {{-- Contents part --}}
    <main class="mt-5 pt-3">
      <div class="container-fluid">
      {{ $slot }}
      </div>
    </main>

    



    <script>
      ClassicEditor
          .create( document.querySelector( '#content' ) )
          .catch( error => {
              console.error( error );
          } );
  </script>
  
    <script src="//cdn.ckeditor.com/4.24.0-lts/full/ckeditor.js"></script>
    <script src="{{ url('user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="{{ url('user/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ url('user/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('user/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ url('url/js/script.js') }}"></script>
  </body>
</html>

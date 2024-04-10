<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel File Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Icon cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Vendor CSS  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/file-manager/css/file-manager.css')}}">

  </head>
  <body>


  <div class="conatiner">
    <h2>Laravel File Manager</h2>

    <div class="row">
        <div class="col-md-12" id="fm-main-block">
            <div id="fm" style="min-height: 800px;"></div>
        </div>
    </div>
  </div>

  <!-- Vendor JS  -->
  <script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js')}}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded',function(){
            document.getElementById('fm-main-block').setAttribute('style','height:'+window.innerHeight+'px');

            fm.$store.commit('fm/setFileCallBack',function(fileUrl){
                window.opener.fmSetLink(fileUrl);
                window.close();
            })
        })
    </script>
  </body>
</html>
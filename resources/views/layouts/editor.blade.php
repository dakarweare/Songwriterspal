<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <link rel="stylesheet" type="text/css" href="{{ asset('css/leftmenu.css') }}" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.min.css" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

<!--End Top Navigation-->


        <main class="py-4">
        <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12">
        <aside>
          <div class="">
            <div class="user-panel">
              <div class="pull-left image">
                <img src="http://via.placeholder.com/160x160" class="rounded-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>Tools</p>
                <a href="#"><i class="fa fa-circle text-danger"></i> Published</a>
              </div>
            </div>
            <ul class="list-sidebar bg-defoult">
              <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i> <span class="nav-label"> Dashboards </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <!--<ul class="sub-menu collapse" id="dashboard">
                <li class="active"><a href="#">CSS3 Animation</a></li>
                <li><a href="#">General</a></li>
                <li><a href="#">Buttons</a></li>
                <li><a href="#">Tabs & Accordions</a></li>
                <li><a href="#">Typography</a></li>
                <li><a href="#">FontAwesome</a></li>
                <li><a href="#">Slider</a></li>
                <li><a href="#">Panels</a></li>
                <li><a href="#">Widgets</a></li>
                <li><a href="#">Bootstrap Model</a></li>
              </ul>
            </li>
            <li> <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a> </li>
            <li> <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active" > <i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span> <span class="fa fa-chevron-left pull-right"></span> </a>
            <ul class="sub-menu collapse" id="products">
              <li class="active"><a href="#">CSS3 Animation</a></li>
              <li><a href="#">General</a></li>
              <li><a href="#">Buttons</a></li>
              <li><a href="#">Tabs & Accordions</a></li>
              <li><a href="#">Typography</a></li>
              <li><a href="#">FontAwesome</a></li>
              <li><a href="#">Slider</a></li>
              <li><a href="#">Panels</a></li>
              <li><a href="#">Widgets</a></li>
              <li><a href="#">Bootstrap Model</a></li>
            </ul>
          </li>
          <li> <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a> </li>
          <li> <a href="#" data-toggle="collapse" data-target="#tables" class="collapsed active" ><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa fa-chevron-left pull-right"></span></a>
          <ul  class="sub-menu collapse" id="tables" >
            <li><a href=""> Static Tables</a></li>
            <li><a href=""> Data Tables</a></li>
            <li><a href=""> Foo Tables</a></li>
            <li><a href=""> jqGrid</a></li>
          </ul>
        </li>
        <li> <a href="#" data-toggle="collapse" data-target="#e-commerce" class="collapsed active" ><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa fa-chevron-left pull-right"></span></a>
        <ul  class="sub-menu collapse" id="e-commerce" >
          <li><a href=""> Products grid</a></li>
          <li><a href=""> Products list</a></li>
          <li><a href="">Product edit</a></li>
          <li><a href=""> Product detail</a></li>
          <li><a href="">Cart</a></li>
          <li><a href=""> Orders</a></li>
          <li><a href=""> Credit Card form</a> </li>
        </ul>
      </li>-->
      <li> <a href=""><i class="fa fa-pie-chart"></i> <span class="nav-label">Words</span> </a></li>
      <li> <a href="#"><i class="fa fa-pie-chart"></i> <span class="nav-label">Phrases</span></a> </li>
      <li> <a href="#"><i class="fa fa-pie-chart"></i> <span class="nav-label">Rhymes</span></a> </li>
      <li> <a href="#"><i class="fa fa-pie-chart"></i> <span class="nav-label">Dictionary</span></a> </li>
      <li> <a href="#"><i class="fa fa-pie-chart"></i> <span class="nav-label">Thesaurus</span></a> </li>    </ul>
    </div>
    </aside>
    </div>
    <div class="col-md-9 col-xs-12 col-sm-12">
    @yield('content')
    </div>

    </div>
    </main>
    </div>
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-wysiwyg/0.3.3/bootstrap3-wysihtml5.all.min.js"></script>
    <script defer>
    //Gross
$(document).ready(function(){
    const songTitle = document.getElementById("song_name");
    const songId = document.getElementById("song_id").value;
    const songEditor = $("#editor");
    $('.toast').toast({
        animation: true,
        autohide: true,
        delay: 3000
    });
    songEditor.wysihtml5();
    $('.button-left').click(function(){
       $('.sidebar').toggleClass('fliph');
   });

   /**
    * Real time update of like everything I guess
    */

    const updatePanel = (status) => {
        let chosenToast;
        if( status === 1 )
        {
            chosenToast = $('#good_toast')
        }

        if( status === 0 )
        {
            chosenToast = $("#bad_toast")
        }

        chosenToast.toast("show")
    }

    const updateSong = async () => {
        console.log({
            song_name: songTitle.value,
            song_content: songEditor.val()
        })
        //Probably replace this with axios but for now fuck it
        const response = await fetch(`/song/update/${songId}`, {
            method: 'POST',
            body: JSON.stringify({ 
                song_name: songTitle.value,
                song_content: songEditor.val()
            }),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Content-Type':'application/x-www-form-urlencoded'
            },
        })

        const data = await response.json()

        updatePanel(data.status)
    }

   setInterval(() => {
       updateSong()
   }, 5000)

});
    </script>
</body>
</html>

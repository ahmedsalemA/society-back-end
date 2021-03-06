<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">

  <link href="{{asset('css/admin.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
  <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet">
 

  <link href="{{asset('css/home.css')}}" rel="stylesheet">


  <!-- css of the main contant of friend page -->
 @yield('css')
 

<style type="text/css"> 
#sidebar-wrapper::-webkit-scrollbar {
  width: 1px;
}
#sidebar-wrapper::-webkit-scrollbar-track {
  background: rgb(255, 255, 255);
  margin-left: 10px;
}
#sidebar-wrapper::-webkit-scrollbar-thumb{
  background: rgb(2, 136, 209);
}
#sidebar-wrapper{
  overflow-x: hidden;
}
</style>

  <!-- databastable -->
  <link href="{{asset('css/dataTables.responsive.css')}}" rel="stylesheet">

  <!-- DataTables CSS -->
  <link href="{{asset('css/dataTables.bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


      </head>

      <body>

        <div id="wrapper">

         <!-- Sidebar -->
         <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
            <li class="sidebar-brand">
             @if(Auth::user()->avatar)

               <img src="{{asset(Auth::user()->avatar)}}">
               @else
               <img src="{{asset('images/loginpage/one.jpg')}}">
              @endif
            <h4 style="text-align: center;">Dr/{{Auth::user()->name}}</h4>
            
             <button class="btn btn-default">Doctor</button>
           </li>

           <li class="<?php $page =  $title; if ($page == 'Home') {echo 'active_l';}?>">
             <a href="{{ url('/') }}"><i class="fa fa-home adminside"></i>Home</a>
           </li>
           <li class="<?php $page =  $title; if ($page == 'Profile') {echo 'active_l';}?>">
             <a href="{{ url('/profile') }}"><i class="fa fa-user adminside"></i>Profile</a>
           </li>
           <li class="<?php $page =  $title; if ($page == 'Message') {echo 'active_l';}?>"><a href="{{ url('/masseges') }}"><i class="fa fa-envelope adminside"></i>Message</a></li>

           <li class="<?php $page =  $title; if ($page == 'Questions') {echo 'active_l';}?>"><a href="{{ url('/questiontoanswer') }}"><i class="glyphicon glyphicon-question-sign adminside"></i>Questions</a></li>
           <li class="<?php $page =  $title; if ($page == 'Materials') {echo 'active_l';}?>">
             <a href="{{ url('/Materials') }}"><i class="glyphicon glyphicon-file adminside"></i>Materials</a>

           </li>
           <div id="sidbarfooter">
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
            
              <a href="{{ url('/setting') }}" class="footicon pull-right"><i class="setting" aria-hidden="true"></i> 
              </a>
            <a href="{{ url('/logout') }}" class="footicon" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
             <i class="logout" aria-hidden="true"></i>
             </a>

            </div>
        </ul>

      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <div class="container-fluid">

          <!-- row -->
          <div class="row">

            <nav class="navbar navbar-default Header">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><i class="home_menu_icon" aria-hidden="true"></i><?php echo $title; ?></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <div class="nav navbar-nav navbar-left col-md-8">
                    <ul class="pull-right nav navbar-nav">
                     <!-- Messages list -->
                     <li class="dropdown">    <!-- userdata -->
                      <a href=""   class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="h_message" aria-hidden="true"></i></a>

                      <ul class="dropdown-menu my-dropdown">

                        <li>
                          <a href="#">
                            <div class="pic"><img src="images/icon/header-pic.png" alt=""/></div>
                            <div class="cht-not-rgt">
                              <div class="cht-snd-name">Anas Abdallah:</div>
                              <div class="cht-short-msg">“I didn’t like the design can you..</div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pic"><img src="images/icon/header-pic.png" alt=""/></div>
                            <div class="cht-not-rgt">
                              <div class="cht-snd-name">Rita Tran</div>
                              <div class="cht-short-msg">:“I really like the design but can y..</div>
                            </div>
                          </a>
                        </li>
                      </ul>


                    </li>   <!-- end userdata -->


                  </li>    <!-- end Messages -->  

                  <li class="dropdown">    <!-- userdata -->
                    <a href="" class="icon-info" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell h_notfication" aria-hidden="true"></i>
                      <span class="label label-primary">3</span> </a>

                      <ul class="dropdown-menu my-dropdown">

                        <li>
                          <a href="#">
                            <div class="pic"><img src="images/icon/header-pic.png" alt=""/></div>
                            <div class="cht-not-rgt">
                              <div class="cht-snd-name">Anas Abdallah:</div>
                              <div class="cht-short-msg">“I didn’t like the design can you..</div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pic"><img src="images/icon/header-pic.png" alt=""/></div>
                            <div class="cht-not-rgt">
                              <div class="cht-snd-name">Rita Tran</div>
                              <div class="cht-short-msg">:“I really like the design but can y..</div>
                            </div>
                          </a>
                        </li>
                      </ul>



                    </li>   <!-- end userdata -->
                    <!--Notifications-->

                  </ul>

                </div>

                <ul class="nav navbar-nav navbar-right col-md-3">
                  <li><a href="#"><img src="images/index/logo.png" width="135" height="35"></a></li>

                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>

        <div class="row">
          <div class="col-md-12 maincontant">
          @yield('content')

      </div>   <!-- Question posts -->




    </div>  <!-- end of main contant -->


  </div> <!-- end row -->


</div>

</div> <!-- /#page-content-wrapper -->


</div> <!-- /#wrapper -->

<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{asset('js/metisMenu.min.js')}}"></script>

<!-- DataTables JavaScript -->
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('js/dataTables.responsive.js')}}"></script>
<script src="{{asset('js/sweetalert-dev.js')}}"></script>
 @include('partials.flash')

<script>
  $(document).ready(function() {
    $('#dataTables-example').DataTable({
      responsive: true
    });
  });
</script>
<!-- Menu Toggle Script -->
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){


    $("[data-toggle=tooltip]").tooltip();
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".btn-pref .btn").click(function () {
      $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
  });
  });
</script>
<script type="text/javascript" src="{{asset('js/chat.js')}}"></script>

</body>

</html>




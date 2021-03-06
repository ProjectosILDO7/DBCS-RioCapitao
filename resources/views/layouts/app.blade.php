<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>@yield('title') - CS-Rio Capitão</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/all.css') }}"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
  <body class="app sidebar-mini">


    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="{{ route('home.admin') }}">CS - Rio Capitão</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="procurar">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        {{-- <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">VocÊ tem 4 notificações.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li> --}}

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            @if(Auth()->user()->admin=='1')
            <li><a class="dropdown-item" href="{{ route('pedioConsultaGetList') }}"><i class="fa fa-envelope-o fa-lg"></i> Solicitações ( <span class="font-weight-bold text-primary">{!! app(App\Http\Controllers\estatisticasController::class)->totalSolitacaoConsulta() !!} </span>)</a></li>
            @endif
            
            <li><a class="dropdown-item" href="{{ route('page-user') }}"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
            <li><a class="dropdown-item" href="{{ route('login.sair') }}"><i class="fa fa-sign-out fa-lg"></i> Saír</a></li>
          </ul>
        </li>
      </ul>
    </header>


    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{ asset('img/CoraçãoSaúde.png') }}" alt="User Image" width="20%" height="40%">
        <div class="small">
          <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
          <p class="app-sidebar__user-designation">
            @if (auth()->user()->admin === 1)
                {{ 'Admin' }}
            @elseif(auth()->user()->admin === 2)
                {{ 'Medico/a' }}
            @elseif(auth()->user()->admin === 3)
                {{ 'Sou cliente' }}
            @endif
          </p>
        </div>
      </div>

      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{ route('home.admin') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Painel de controle</span></a></li>
        {{-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a> --}}
          {{-- <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul> --}}
        </li>
              
        @if(auth()->user()->admin === 1)
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-database"></i><span class="app-menu__label">Cadastro</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="{{ route('user.especialidade') }}"><i class="icon fa fa-graduation-cap"></i> Especialidade</a></li>
              <li><a class="treeview-item" href="{{ route('medicoList') }}"><i class="icon fa fa-user-md"></i> Médico</a></li>
              <li><a class="treeview-item" href="{{ route('pacienteList') }}"><i class="icon fa fa-solid fa-bed"></i> Paciente</a></li>
              <li><a class="treeview-item" href="{{ route('quartoList') }}"><i class="icon fa fa-hospital-o" aria-hidden="true"></i> Quartos de internamento</a></li>
              <li><a class="treeview-item" href="{{ route('horaVisitaList') }}"><i class="icon fa fa-clock-o"></i> Horas de visita</a></li>
            </ul>
          </li>
          
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-table"></i><span class="app-menu__label">Actividades</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
          <li><a class="treeview-item" href="{{ route('listConsulta') }}"><i class="icon fa fa-stethoscope"></i> Consultas</a></li>
              <li><a class="treeview-item" href="{{ route('internamentos') }}"><i class="icon fa fa-medkit"></i> Internamentos</a></li>
              <li><a class="treeview-item" href="{{ route('actividadeMedicas') }}"><i class="icon fa fa-heartbeat"></i> Actividades Médicas</a></li>
            </ul>
          </li>
          <li class="treeview"><a class="app-menu__item" href="{{ route('printRelatorio') }}"><i class="app-menu__icon fa fa-line-chart"></i><span class="app-menu__label">Relatório</span></a></li>

       @endif 
        
      @if(auth()->user()->admin === 2)
      
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-table"></i><span class="app-menu__label">Actividades Médicas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="{{ route('mostraDisponibilidade') }}"><i class="icon fa fa-stethoscope"></i> Marcar disponibilidade</a></li>
              <li><a class="treeview-item" href="{{ route('meusPacientes') }}"><i class="icon fa fa-medkit"></i> Vêr meus paciente</a></li>
            </ul>
          </li>

      @endif

      @if(auth()->user()->admin === 3)
      
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-table"></i><span class="app-menu__label">Actividades</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="{{ route('actividadeMedicas') }}"><i class="icon fa fa-stethoscope"></i> Vér disponibilidade dos médicos</a></li>
              <li><a class="treeview-item" href="{{ route('pedioConsulta') }}"><i class="icon fa fa-medkit"></i> Solicitar consulta</a></li>
            </ul>
          </li>

      @endif
        

        {{-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="blank-page.html"><i class="icon fa fa-circle-o"></i> Blank Page</a></li>
            <li><a class="treeview-item" href="page-login.html"><i class="icon fa fa-circle-o"></i> Login Page</a></li>
            <li><a class="treeview-item" href="page-lockscreen.html"><i class="icon fa fa-circle-o"></i> Lockscreen Page</a></li>
            <li><a class="treeview-item" href="page-user.html"><i class="icon fa fa-circle-o"></i> User Page</a></li>
            <li><a class="treeview-item" href="page-invoice.html"><i class="icon fa fa-circle-o"></i> Invoice Page</a></li>
            <li><a class="treeview-item" href="page-calendar.html"><i class="icon fa fa-circle-o"></i> Calendar Page</a></li>
            <li><a class="treeview-item" href="page-mailbox.html"><i class="icon fa fa-circle-o"></i> Mailbox</a></li>
            <li><a class="treeview-item" href="page-error.html"><i class="icon fa fa-circle-o"></i> Error Page</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Docs</span></a></li>
      </ul> --}}
    </aside>

    <main class="app-content">
    
         @yield('content')
      
    </main>


    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('fontawesome/js/fontawesome.main.js') }}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('js/plugins/pace.min.js') }}"></script>

    <!-- Page specific javascripts-->
    
    
    <script type="text/javascript" src="{{ asset('js/plugins/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/dropzone.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/chart.js') }}"></script>`
    
    <script type="text/javascript">

    var data = {
      	labels: ["jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Ago", "set", "Out", "Nov", "Dez"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: {!! app(App\Http\Controllers\estatisticasController::class)->totalRegistarConsulta() !!}
      		},
      		// {
      		// 	label: "My Second dataset",
      		// 	fillColor: "rgba(151,187,205,0.2)",
      		// 	strokeColor: "rgba(151,187,205,1)",
      		// 	pointColor: "rgba(151,187,205,1)",
      		// 	pointStrokeColor: "#fff",
      		// 	pointHighlightFill: "#fff",
      		// 	pointHighlightStroke: "rgba(151,187,205,1)",
      		// 	data: {!! app(App\Http\Controllers\estatisticasController::class)->totalRegistarConsulta() !!}
      		// }
      	]
      };

      var pdata = [
      	{
      		value: {!! app(App\Http\Controllers\estatisticasController::class)->totalPacientes() !!},
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Total de Pacientes"
      	},
      	{
      		value: {!! app(App\Http\Controllers\estatisticasController::class)->totalInternamentos() !!},
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "Tota de internamentos"
      	}
      ];
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);

      

    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>

    {{-- Select2 --}}
    <script type="text/javascript">
      $('#sl').on('click', function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').on('click', function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#pacienteSelect').select2();
    </script>

    {{-- Select2 --}}
    <script type="text/javascript">
      $('#sl').on('click', function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').on('click', function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#medicoSelect').select2();
    </script>

    {{-- Select2 --}}
    <script type="text/javascript">
      $('#sl').on('click', function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').on('click', function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#quartoSelect').select2();
    </script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->

<script type="text/javascript" src="{{ asset('js/plugins/bootstrap-notify.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/sweetalert.min.js') }}"></script>
<script type="text/javascript">
  $('#demoNotify').click(function(){
    $.notify({
      title: "Actualização completa : ",
      message: "Something cool is just updated!",
      icon: 'fa fa-check' 
    },{
      type: "info"
    });
  });

  $('#apagar').click(function(){
    swal({
      title: "Tens a certeza ?",
      text: "Após ter apagado não tem como reverter, somente realizar um outro cadastro!",
      type: "warning",
      showCancelButton: true,
      confirmButtonText: "Sim, Apagar isso!",
      cancelButtonText: "Não, cancelar acção!",
      closeOnConfirm: false,
      closeOnCancel: false
    }, function(isConfirm) {
      if (isConfirm) {
        swal("Apagado com sucesso!", "O seu pedido foi apagado com sucesso.", "success");
      } else {
        swal("Cancelado", "O seu pedido foi cancelado com sucesso:)", "error");
      }
    });
  });
</script>

<script type="text/javascript">
  var data = {
    labels: ["jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Ago", "set", "Out", "Nov", "Dez"],
    datasets: [
      {
        label: "My First dataset",
        fillColor: "rgba(220,220,220,0.2)",
        strokeColor: "rgba(220,220,220,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(220,220,220,1)",
        data:  {!! app(App\Http\Controllers\estatisticasController::class)->totalRegistarConsulta() !!}
      }

    ]
  };

  var dataRadar = {
    labels: ["jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Ago", "set", "Out", "Nov", "Dez"],
    datasets: [
      {
        label: "My First dataset",
        fillColor: "rgba(220,220,220,0.2)",
        strokeColor: "rgba(220,220,220,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(220,220,220,1)",
        data:  {!! app(App\Http\Controllers\estatisticasController::class)->totalRegistoInternamento() !!}
      }

    ]
  };
    
  // var ctxl = $("#lineChartDemo").get(0).getContext("2d");
  // var lineChart = new Chart(ctxl).Line(data);
  
  var ctxb = $("#barChartDemo").get(0).getContext("2d");
  var barChart = new Chart(ctxb).Bar(data);
  
   var ctxr = $("#radarChartDemo").get(0).getContext("2d");
  var radarChart = new Chart(ctxr).Radar(dataRadar);
  
  // var ctxpo = $("#polarChartDemo").get(0).getContext("2d");
  // var polarChart = new Chart(ctxpo).PolarArea(pdata);
  
  // var ctxp = $("#pieChartDemo").get(0).getContext("2d");
  // var pieChart = new Chart(ctxp).Pie(pdata);
  
  // var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
  // var doughnutChart = new Chart(ctxd).Doughnut(pdata);
</script>
<!-- Google analytics script-->
<script type="text/javascript">
  if(document.location.hostname == 'pratikborsadiya.in') {
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-72504830-1', 'auto');
    ga('send', 'pageview');
  }
</script>

  </body>
</html>
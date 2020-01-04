
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Apps Sales V1.0">
	<meta name="author" content="Infinity Solutions | Bintang Tobing">
	<meta name="keyword" content="Apps Sales">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infinity Solutions System</title>
 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="{!! asset('asset/css/bootstrap.min.css')!!}">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="{!!asset('asset/css/plugins/font-awesome.min.css')!!}"/>
      <link rel="stylesheet" type="text/css" href="{!!asset('asset/css/plugins/simple-line-icons.css')!!}"/>
      <link rel="stylesheet" type="text/css" href="{!!asset('asset/css/plugins/animate.min.css')!!}"/>
      <link rel="stylesheet" type="text/css" href="{!!asset('asset/css/plugins/fullcalendar.min.css')!!}"/>
      <link rel="stylesheet" type="text/css" href="{!!url('https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css')!!}">
      <link href="{!!asset('asset/css/style.css')!!}" rel="stylesheet">
      <link href="{!!asset('asset/css/bootstrap-datetimepicker.min.css')!!}" rel="stylesheet">
      <script src="{!!url('http://code.jquery.com/jquery-1.8.3.min.js')!!}"></script>
  {{-- <link rel="stylesheet" href="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css')!!}">
      <script src="{!! asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js')!!}"></script> --}}
	<!-- end: Css -->

	<link rel="shortcut icon" href="{!!asset('asset/img/logomi.png')!!}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="/home" class="navbar-brand">
                 <b>INFINITYSYSTEM</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
              <li class="user-name"><span>{{auth()->user()->fullname}}</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="https://res.cloudinary.com/infinitysolutions-co-id/image/upload/v1563857701/avatar_toxmes.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="/profile"><span class="fa fa-user"></span> My Profile</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                      <li><a href="/member/{{auth()->user()->id}}/edit"><span class="fa fa-cogs"></span></a></li>
                        <li><a class="dropdown-item" href="/logout"><span class="fa fa-power-off "></span></a><form id="logout-form" action="" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">

          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a href="/home"><span class="fa-home fa"></span> Dashboard
                      </a>
                    </li>
                    @if(auth()->user()->type=='administrator')
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span> Master
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                        <ul class="nav nav-list tree">
                          <li><a href="/customer">Customer Management</a></li>
                          <li><a href="/supplier">Supplier Management</a></li>
                          <li><a href="/item">Items Management</a></li>
                          <li><a href="/member">User Management</a></li>
                          <li><a href="/authority">Authority</a></li>
                        </ul>
                      </a>
                    </li>
                    @endif
                    {{-- <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span> Associate
                      </a>
                    </li> --}}
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Sales  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="/so">Sales Orders</a></li>
                        <li><a href="/sales-invoices">Sales Invoices</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Purchase  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="/purchase-orders">Purchase Orders</a></li>
                        <li><a href="/purchase-invoices">Purchase Invoices</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-table"></span> Finance  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                          <li><a href="/receipts">Receipts</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Reports <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                          <li><a href="/sales-order-report">Sales Order Report</a></li>
                          <li><a href="/sales-invoices-report">Sales Invoices Report</a></li>
                          <li><a href="/check-in-report">Check-in Report</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->


          <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">
                        <h3 class="animated fadeInLeft">Welcome to Infinity System, <strong>{{auth()->user()->fullname}}</strong>!</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Medan,Indonesia</p>
                      <p class="animated fadeInDown">Your current role is <i><strong>{{auth()->user()->type}}</strong></i>.</p>

                        <!-- <ul class="nav navbar-nav">
                            <li><a href="" >Impedit</a></li>
                            <li><a href="" class="active">Virtute</a></li>
                            <li><a href="">Euismod</a></li>
                            <li><a href="">Explicar</a></li>
                            <li><a href="">Rebum</a></li>
                        </ul> -->
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
                          <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Medan</h3>
                          <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <div class="wheather">
                            <div class="stormy rainy animated pulse infinite">
                              <div class="shadow">

                              </div>
                            </div>
                            <div class="sub-wheather">
                              <div class="thunder">

                              </div>
                              <div class="rain">
                                  <div class="droplet droplet1"></div>
                                  <div class="droplet droplet2"></div>
                                  <div class="droplet droplet3"></div>
                                  <div class="droplet droplet4"></div>
                                  <div class="droplet droplet5"></div>
                                  <div class="droplet droplet6"></div>
                                </div>
                            </div>
                          </div>
                        </div>                   
                    </div>
                  </div>                    
                </div>

                <div class="col-md-12" style="padding:20px;">
                    @if (session('notifikasi'))
                      <div class="alert alert-success">
                          {{ session('notifikasi') }}
                      </div>
                    @endif

                    @yield('content')
      		      </div>
          <!-- end: content -->   
      </div>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                  <li class="active ripple">
                    <a href="/home"><span class="fa-home fa"></span> Dashboard
                    </a>
                  </li>
                  @if(auth()->user()->type=='administrator')
                  <li class="ripple">
                    <a class="tree-toggle nav-header">
                      <span class="fa-diamond fa"></span> Master
                      <span class="fa-angle-right fa right-arrow text-right"></span>
                      <ul class="nav nav-list tree">
                        <li><a href="/customer">Customer Management</a></li>
                        <li><a href="/item">Items Management</a></li>
                        <li><a href="/member">User Management</a></li>
                        <li><a href="/authority">Authority</a></li>
                      </ul>
                    </a>
                  </li>
                  @endif
                  <li class="ripple">
                    <a class="tree-toggle nav-header">
                      <span class="fa-area-chart fa"></span> Associate
                    </a>
                  </li>
                  <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Sales  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                      <li><a href="/so">Sales Orders</a></li>
                      <li><a href="/sales-invoices">Sales Invoices</a></li>
                    </ul>
                  </li>
                  <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-table"></span> Finance  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                        <li><a href="/receipts">Receipts</a></li>
                    </ul>
                  </li>
                  <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Reports <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                        <li><a href="/sales-order-report">Sales Order Report</a></li>
                        <li><a href="/sales-invoices-report">Sales Invoices Report</a></li>
                        <li><a href="/check-in-report">Check-in Report</a></li>
                    </ul>
                  </li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->
    <!-- start: Javascript -->
    <script src="{!!asset('asset/js/jquery.min.js')!!}"></script>
    <script src="{!!asset('asset/js/jquery.ui.min.js')!!}"></script>
    <script src="{!!asset('asset/js/bootstrap.min.js')!!}"></script>
    
   
    
    <!-- plugins -->
    <script src="{!!asset('asset/js/plugins/moment.min.js')!!}"></script>
    <script src="{!!asset('asset/js/plugins/fullcalendar.min.js')!!}"></script>
    <script src="{!!asset('asset/js/plugins/jquery.nicescroll.js')!!}"></script>
    <script src="{!!asset('asset/js/plugins/jquery.vmap.min.js')!!}"></script>
    <script src="{!!asset('asset/js/plugins/maps/jquery.vmap.world.js')!!}"></script>
    <script src="{!!asset('asset/js/plugins/jquery.vmap.sampledata.js')!!}"></script>
    <script src="{!!asset('asset/js/plugins/chart.min.js')!!}"></script>
    <script src="{!!asset('asset/js/bootstrap-datetimepicker.min.js')!!}"></script>
    <script src="{!!asset('asset/js/plugins/bootstrap-material-datetimepicker.js')!!}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> --}}


    <!-- custom -->
     <script src="{!! asset('asset/js/main.js')!!}"></script>
     
     <script type="text/javascript">
      (function(jQuery){

        // start: Chart =============

        Chart.defaults.global.pointHitDetectionRadius = 1;
        Chart.defaults.global.customTooltips = function(tooltip) {

            var tooltipEl = $('#chartjs-tooltip');

            if (!tooltip) {
                tooltipEl.css({
                    opacity: 0
                });
                return;
            }

            tooltipEl.removeClass('above below');
            tooltipEl.addClass(tooltip.yAlign);

            var innerHtml = '';
            if (undefined !== tooltip.labels && tooltip.labels.length) {
                for (var i = tooltip.labels.length - 1; i >= 0; i--) {
                    innerHtml += [
                        '<div class="chartjs-tooltip-section">',
                        '   <span class="chartjs-tooltip-key" style="background-color:' + tooltip.legendColors[i].fill + '"></span>',
                        '   <span class="chartjs-tooltip-value">' + tooltip.labels[i] + '</span>',
                        '</div>'
                    ].join('');
                }
                tooltipEl.html(innerHtml);
            }

            tooltipEl.css({
                opacity: 1,
                left: tooltip.chart.canvas.offsetLeft + tooltip.x + 'px',
                top: tooltip.chart.canvas.offsetTop + tooltip.y + 'px',
                fontFamily: tooltip.fontFamily,
                fontSize: tooltip.fontSize,
                fontStyle: tooltip.fontStyle
            });
        };
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };
        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                fillColor: "rgba(21,186,103,0.4)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(66,69,67,0.3)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                 data: [18,9,5,7,4.5,4,5,4.5,6,5.6,7.5]
            }, {
                label: "My Second dataset",
                fillColor: "rgba(21,113,186,0.5)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [4,7,5,7,4.5,4,5,4.5,6,5.6,7.5]
            }]
        };

        var doughnutData = [
                {
                    value: 300,
                    color:"#129352",
                    highlight: "#15BA67",
                    label: "Alfa"
                },
                {
                    value: 50,
                    color: "#1AD576",
                    highlight: "#15BA67",
                    label: "Beta"
                },
                {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#15BA67",
                    label: "Gamma"
                },
                {
                    value: 40,
                    color: "#0F5E36",
                    highlight: "#15BA67",
                    label: "Peta"
                },
                {
                    value: 120,
                    color: "#15A65D",
                    highlight: "#15BA67",
                    label: "X"
                }

            ];


        var doughnutData2 = [
                {
                    value: 100,
                    color:"#129352",
                    highlight: "#15BA67",
                    label: "Alfa"
                },
                {
                    value: 250,
                    color: "#FF6656",
                    highlight: "#FF6656",
                    label: "Beta"
                },
                {
                    value: 100,
                    color: "#FDB45C",
                    highlight: "#15BA67",
                    label: "Gamma"
                },
                {
                    value: 40,
                    color: "#FD786A",
                    highlight: "#15BA67",
                    label: "Peta"
                },
                {
                    value: 120,
                    color: "#15A65D",
                    highlight: "#15BA67",
                    label: "X"
                }

            ];

        var barChartData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "My First dataset",
                        fillColor: "rgba(21,186,103,0.4)",
                        strokeColor: "rgba(220,220,220,0.8)",
                        highlightFill: "rgba(21,186,103,0.2)",
                        highlightStroke: "rgba(21,186,103,0.2)",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgba(21,113,186,0.5)",
                        strokeColor: "rgba(151,187,205,0.8)",
                        highlightFill: "rgba(21,113,186,0.2)",
                        highlightStroke: "rgba(21,113,186,0.2)",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            };

         window.onload = function(){
                var ctx = $(".doughnut-chart")[0].getContext("2d");
                window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {
                    responsive : true,
                    showTooltips: true
                });

                var ctx2 = $(".line-chart")[0].getContext("2d");
                window.myLine = new Chart(ctx2).Line(lineChartData, {
                     responsive: true,
                        showTooltips: true,
                        multiTooltipTemplate: "<%= value %>",
                     maintainAspectRatio: false
                });

                var ctx3 = $(".bar-chart")[0].getContext("2d");
                window.myLine = new Chart(ctx3).Bar(barChartData, {
                     responsive: true,
                        showTooltips: true
                });

                var ctx4 = $(".doughnut-chart2")[0].getContext("2d");
                window.myDoughnut2 = new Chart(ctx4).Doughnut(doughnutData2, {
                    responsive : true,
                    showTooltips: true
                });

            };
        
        //  end:  Chart =============

        // start: Calendar =========
         $('.dashboard .calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: '2015-02-12',
            businessHours: true, // display business hours
            editable: true,
            events: [
                {
                    title: 'Business Lunch',
                    start: '2015-02-03T13:00:00',
                    constraint: 'businessHours'
                },
                {
                    title: 'Meeting',
                    start: '2015-02-13T11:00:00',
                    constraint: 'availableForMeeting', // defined below
                    color: '#20C572'
                },
                {
                    title: 'Conference',
                    start: '2015-02-18',
                    end: '2015-02-20'
                },
                {
                    title: 'Party',
                    start: '2015-02-29T20:00:00'
                },

                // areas where "Meeting" must be dropped
                {
                    id: 'availableForMeeting',
                    start: '2015-02-11T10:00:00',
                    end: '2015-02-11T16:00:00',
                    rendering: 'background'
                },
                {
                    id: 'availableForMeeting',
                    start: '2015-02-13T10:00:00',
                    end: '2015-02-13T16:00:00',
                    rendering: 'background'
                },

                // red areas where no events can be dropped
                {
                    start: '2015-02-24',
                    end: '2015-02-28',
                    overlap: false,
                    rendering: 'background',
                    color: '#FF6656'
                },
                {
                    start: '2015-02-06',
                    end: '2015-02-08',
                    overlap: true,
                    rendering: 'background',
                    color: '#FF6656'
                }
            ]
        });
        // end : Calendar==========

        // start: Maps============

          jQuery('.maps').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#fff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#C8EEFF', '#006491'],
            normalizeFunction: 'polynomial'
        });

        // end: Maps==============

      })(jQuery);
     </script>
     <script type="text/javascript" charset="utf8" src="{!!url('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js')!!}"></script>
  <!-- end: Javascript -->
  </body>
</html>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

        <title>Coleccion de Datos</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
	
    <!-- torta -->
	<script type="text/javascript">
    $(function () {

        // Radialize the colors
        Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
            return {
                radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
                stops: [
                    [0, color],
                    [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                ]
            };
        });

        // Build the chart
        $('#pregunta2').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: '2. ¿CUÁL ES EL GÉNERO DEL ENTREVISTADO?'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        },
                        connectorColor: 'silver'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: [
                @foreach($pregunta2 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ]
            }]
        });

        $('#pregunta5').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: '5. ¿Dónde nació?'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        },
                        connectorColor: 'silver'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: [
                @foreach($pregunta5 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ]
            }]
        });

        $('#pregunta6').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: '6. ¿Hace cuánto tiempo vive aquí?'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        },
                        connectorColor: 'silver'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: [
                @foreach($pregunta6 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ]
            }]
        });

        $('#pregunta8').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: '8. ¿De qué nacionalidad es usted?'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        },
                        connectorColor: 'silver'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: [
                @foreach($pregunta8 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ]
            }]
        });

        $('#pregunta9').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: '9. ¿Cuándo tiene un problema de salud, a que especialidad acude al hospital?'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        },
                        connectorColor: 'silver'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: [
                @foreach($pregunta9 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ]
            }]
        });

        $('#pregunta10').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: '10. ¿Qué referencias tomaría en cuenta para la obtención de fichas para su atención? (Marque todas las respuestas que se apliquen.)'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        },
                        connectorColor: 'silver'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: [
                @foreach($pregunta10 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ]
            }]
        });

        $('#pregunta20').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: '20. ¿En su decisión de escoger un hospital, que considera como más importante?'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        },
                        connectorColor: 'silver'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: [
                @foreach($pregunta20 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ]
            }]
        });

    });
    </script>
    
    <!-- barras -->
    <script type="text/javascript">
    $(function () {
        $('#pregunta3').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '3. ¿Cuántos años cumplidos tiene?'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Cantidad de personas'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'cantidad: <b>{point.y:.1f} personas</b>'
            },
            series: [{
                name: 'Population',
                data: [
                    
                @foreach($pregunta3 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });

        $('#pregunta7').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '7. ¿Hace cuánto tiempo fue la ultima vez que visito este hospital?'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Cantidad de personas'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'cantidad: <b>{point.y:.1f} personas</b>'
            },
            series: [{
                name: 'Population',
                data: [
                    
                @foreach($pregunta7 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });

        $('#pregunta11').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '11. ¿Cuánto tiempo le toma estar en el hospital, desde que entra hasta que sale de la misma?'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Cantidad de personas'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'cantidad: <b>{point.y:.1f} personas</b>'
            },
            series: [{
                name: 'Population',
                data: [
                    
                @foreach($pregunta11 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });

        $('#pregunta12').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '12. ¿Cuánto tiempo aguarda en la sala de espera para ser atendió por su doctor?'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Cantidad de personas'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'cantidad: <b>{point.y:.1f} personas</b>'
            },
            series: [{
                name: 'Population',
                data: [
                    
                @foreach($pregunta12 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });

        $('#pregunta13').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '13. ¿En cuánto tiempo el doctor de su especialidad le atiende?'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Cantidad de personas'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'cantidad: <b>{point.y:.1f} personas</b>'
            },
            series: [{
                name: 'Population',
                data: [
                    
                @foreach($pregunta13 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });

        $('#pregunta14').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '14. ¿Cuántas personas familiares le acompañan al hospital?'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Cantidad de personas'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'cantidad: <b>{point.y:.1f} personas</b>'
            },
            series: [{
                name: 'Population',
                data: [
                    
                @foreach($pregunta14 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });

        $('#pregunta15').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '15. ¿En qué meses del año existe mayor afluencia de pacientes al hospital? ¿según su apreciación?'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Cantidad de personas'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'cantidad: <b>{point.y:.1f} personas</b>'
            },
            series: [{
                name: 'Population',
                data: [
                    
                @foreach($pregunta15 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });

        $('#pregunta16').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '16. ¿En qué días de la semana hay más afluencia de pacientes?'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Cantidad de personas'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'cantidad: <b>{point.y:.1f} personas</b>'
            },
            series: [{
                name: 'Population',
                data: [
                    
                @foreach($pregunta16 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });

        $('#pregunta17').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '17. ¿Cómo fue su experiencia con el equipo de apoyo del hospital (administrativos, cajeros, guardia)? Seleccione un valor'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Cantidad de personas'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'cantidad: <b>{point.y:.1f} personas</b>'
            },
            series: [{
                name: 'Population',
                data: [
                    
                @foreach($pregunta17 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });

        $('#pregunta18').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '18. ¿Cómo fue su experiencia con el doctor de su especialidad? Seleccione un valor'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Cantidad de personas'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'cantidad: <b>{point.y:.1f} personas</b>'
            },
            series: [{
                name: 'Population',
                data: [
                    
                @foreach($pregunta18 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });

        $('#pregunta19').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: '19. ¿Cómo fue su experiencia con las instalaciones del hospital? Seleccione un valor'
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Cantidad de personas'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'cantidad: <b>{point.y:.1f} personas</b>'
            },
            series: [{
                name: 'Population',
                data: [
                    
                @foreach($pregunta19 as $c)
                    ['{{array_get($c, "name")}}', {{array_get($c, 'valor')}}],
                @endforeach
                ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });
    });
    </script>

	</head>
	<body>
        <div id="wrapper">
            <!-- Navigation -->
            @include('layouts.nav')
            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Dashboard <small>Coleccion de datos</small>
                            </h1>
                            <ol class="breadcrumb">
                                <li class="active">
                                    <i class="fa fa-dashboard"></i> Dashboard
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div id="pregunta2"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview2" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>

                    <div id="pregunta3"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview3" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                    
                    <div id="pregunta5"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview5" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
             
                    <div id="pregunta6"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview6" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                    
                    <div id="pregunta7"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview7" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                    
                    <div id="pregunta8"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview8" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                 
                    <div id="pregunta9"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview9" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                   
                    <div id="pregunta10"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview10" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                    
                    <div id="pregunta11"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview11" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>

                    <div id="pregunta12"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview12" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>

                    <div id="pregunta13"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview13" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                    
                    <div id="pregunta14"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview14" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                    
                    <div id="pregunta15"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview15" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                    
                    <div id="pregunta16"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview16" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                    
                    <div id="pregunta17"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview17" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                    
                    <div id="pregunta18"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview18" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                    
                    <div id="pregunta19"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview19" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                    
                    <div id="pregunta20"  style="min-width: 300px; height: 400px; margin: 0 auto"></div>
                    <a href="/pdfview20" target="_blank" class="btn btn-primary" role="button">Ver Tabla</a>
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <script src="/js/highcharts.js"></script>
        <script src="/js/modules/exporting.js"></script>
	</body>
</html>

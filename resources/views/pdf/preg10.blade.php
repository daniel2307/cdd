<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Highcharts Example</title>

        <title>Coleccion de Datos</title>


  </head>
  <body>
        <div class="wrapper">
            <main>
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        10. ¿Qué referencias tomaría en cuenta para la obtención de fichas para su atención?
                    </h1>
                                    
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>nombre y apellido</th>
                                    <th>medio para obtener ficha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{ $d->pregunta1 }}</td>
                                    <td>{{ $d->pregunta10 }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>                                    
                                
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->
        </div>
        </main>
        </div>
  </body>
</html>

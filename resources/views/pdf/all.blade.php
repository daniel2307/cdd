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
                                    
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>1. ¿Cuál es su nombre y apellido?</th>
                                    <th>2. ¿cual es el genero del entrevistado?</th>
                                    <th>3. ¿Cuántos años cumplidos tiene?</th>
                                    <th>4. ¿Cuál es la fecha de su nacimiento?</th>
                                    <th>5. ¿Dónde nació?</th>
                                    <th>6. tiempo vive aquí[meses]</th>
                                    <th>7. ultima vez que visito este hospital[meses]</th>
                                    <th>8. ¿De qué nacionalidad es usted?</th>
                                    <th>9. a que especialidad acude al hospital</th>
                                    <th>10. formas de obtención de fichas</th>
                                    <th>11. permanencia en el hospital[horas]</th>
                                    <th>12. tiempo en la sala de espera[min]</th>
                                    <th>13. tiempo de atencion por el doctor[min]</th>
                                    <th>14. familiares que acompañan al hospital</th>
                                    <th>15. meses con mayor afluencia</th>
                                    <th>16. dias con mayor afluencia</th>
                                    <th>17. experiencia con el equipo</th>
                                    <th>18. experiencia con el doctor</th>
                                    <th>19. experiencia con las instalaciones</th>
                                    <th>20. decisión de escoger un hospital</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $mod)
                                <tr>
                                    <td>{{ $mod->pregunta1 }}</td>
                                    <td>{{ $mod->pregunta2 }}</td>
                                    <td>{{ $mod->pregunta3 }}</td>
                                    <td>{{ $mod->pregunta4 }}</td>
                                    <td>{{ $mod->pregunta5 }}</td>
                                    <td>{{ $mod->pregunta6 }}</td>
                                    <td>{{ $mod->pregunta7 }}</td>
                                    <td>{{ $mod->pregunta8 }}</td>
                                    <td>{{ $mod->pregunta9 }}</td>
                                    <td>{{ $mod->pregunta10 }}</td>
                                    <td>{{ $mod->pregunta11 }}</td>
                                    <td>{{ $mod->pregunta12 }}</td>
                                    <td>{{ $mod->pregunta13 }}</td>
                                    <td>{{ $mod->pregunta14 }}</td>
                                    <td>{{ $mod->pregunta15 }}</td>
                                    <td>{{ $mod->pregunta16 }}</td>
                                    <td>{{ $mod->pregunta17 }}</td>
                                    <td>{{ $mod->pregunta18 }}</td>
                                    <td>{{ $mod->pregunta19 }}</td>
                                    <td>{{ $mod->pregunta20 }}</td>
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

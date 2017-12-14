@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1>FORMULARIO MODELO 3 DE COLECCIÓN DE DATOS</h1>
        <hr>
        <form role="form" method="POST" action="/modelo3">
            {{ csrf_field() }}
            
            <div class="card card-info card-inverse">
                <div class="card-header card-info">
                    I. DATOS GENERALES DEL ENCUESTADO (EN ATENCION AL CLIENTE)
                </div>
                <div class="card-block bg-white">
                    <fieldset class="form-group">
                        <label>1. ¿Cuál es su nombre y apellido?</label>
                        <input name="pregunta1" class="form-control">
                    </fieldset>

                    <fieldset class="form-group">
                        <label>2. ¿CUÁL ES EL GÉNERO DEL ENTREVISTADO?</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="pregunta2" id="optionsRadios1" value="Masculino"> Masculino
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="pregunta2" id="optionsRadios2" value="Femenino"> Femenino
                            </label>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <label>3. ¿Cuántos años cumplidos tiene?</label>
                        <input name="pregunta3" class="form-control" type="number">
                    </div>

                    <fieldset class="form-group">
                        <label>4. ¿Cuál es la fecha de su nacimiento?</label>
                        <input name="pregunta4" class="form-control" type="date">
                    </fieldset>

                    <fieldset class="form-group">
                        <label>5. ¿Dónde nació?</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="pregunta5" id="optionsRadios1" value="En este lugar"> En este lugar
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="pregunta5" id="optionsRadios2" value="En otro lugar del pais"> En otro lugar del pais
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="pregunta5" id="optionsRadios3" value="En el exterior"> En el exterior
                            </label>
                        </div>
                    </fieldset>
                    
                    <div class="form-group">
                        <label>6. ¿Hace cuánto tiempo vive aquí?</label>
                        <div class="row">
                            <div class="col-xl-6">
                                <input name="pregunta61" class="form-control" type="number" placeholder="Años">
                            </div>
                            <div class="col-xl-6">
                                <input name="pregunta62" class="form-control" type="number" placeholder="Meses">
                            </div>
                        </div>
                    </div>

                    <fieldset class="form-group">
                        <label>7. ¿Hace cuánto tiempo fue la primera vez que visito este hospital?</label>
                        <div class="row">
                            <div class="col-xl-4">
                                <input name="pregunta71" class="form-control" type="number" placeholder="Años">
                            </div>
                            <div class="col-xl-4">
                                <input name="pregunta72" class="form-control" type="number" placeholder="Meses">
                            </div>
                            <div class="col-xl-4">
                                <input name="pregunta73" class="form-control" type="number" placeholder="Dias">
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>

            <div class="card card-warning card-inverse">
                <div class="card-header card-warning">
                    II. DATOS DE ORIGEN Y MODALIDAD DE ATENCION DEL PACIENTE
                </div>
                <div class="card-block bg-white">

                    <div class="form-group">
                        <label>8. ¿De qué nacionalidad es usted?</label>
                        <select name="pregunta8" class="form-control">
                            <option value="Boliviano/a rural"> 1. Boliviano/a rural</option>
                            <option value="Boliviano/a urbano"> 2. Boliviano/a urbano</option>
                            <option value="Extranjero"> 3. Extranjero</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>9. ¿Cuándo tiene un problema de salud, a que especialidad acude al hospital?</label>
                        <select name="pregunta9" class="form-control">
                            <option value="Medicina general"> Medicina general</option>
                            <option value="Medicina especializada"> Medicina especializada</option>
                            <option value="Otro"> Otro.........</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>10. ¿Qué referencias tomaría en cuenta para la obtención de fichas para su atención? (Marque todas las respuestas que se apliquen.)</label>
                        <select name="pregunta10" class="form-control">
                            <option value="Madrugar"> Madrugar</option>
                            <option value="Vía Telefónica"> Vía Telefónica</option>
                            <option value="Comprar ficha día anterior"> Comprar ficha día anterior</option>
                            <option value="Vía internet"> Vía internet</option>
                            <option value="Otro"> Otro........</option>
                        </select>
                    </div>
                </div>
            </div>

            
            <div class="card card-info card-inverse">
                <div class="card-header card-info">
                    III. TIEMPOS DE ATENCION AL PACIENTE EN EL HOSPITAL
                </div>
                <div class="card-block bg-white">
                    <fieldset class="form-group">
                        <label>11. ¿Cuánto tiempo le toma estar en el hospital, desde que entra hasta que sale de la misma?</label>
                        <div class="row">
                            <div class="col-xl-4">
                                <input name="pregunta111" class="form-control" type="number" placeholder="Dias">
                            </div>
                            <div class="col-xl-4">
                                <input name="pregunta112" class="form-control" type="number" placeholder="horas">
                            </div>
                            <div class="col-xl-4">
                                <input name="pregunta113" class="form-control" type="number" placeholder="minutos">
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset class="form-group">
                        <label>12. ¿Cuánto tiempo aguarda en la sala de espera para ser atendió por su doctor?</label>
                        <div class="row">
                            <div class="col-xl-6">
                                <input name="pregunta121" class="form-control" type="number" placeholder="horas">
                            </div>
                            <div class="col-xl-6">
                                <input name="pregunta122" class="form-control" type="number" placeholder="minutos">
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <label>13. ¿En cuánto tiempo el doctor de su especialidad le atiende?</label>
                        <div class="row">
                            <div class="col-xl-6">
                                <input name="pregunta131" class="form-control" type="number" placeholder="horas">
                            </div>
                            <div class="col-xl-6">
                                <input name="pregunta132" class="form-control" type="number" placeholder="minutos">
                            </div>
                        </div>
                    </fieldset>

                    <fieldset class="form-group">
                        <label>14. ¿Cuántas personas familiares le acompañan al hospital?</label>
                        <input name="pregunta14" class="form-control" type="number">
                    </fieldset>
                </div>
            </div>

            <div class="card card-primary card-inverse">
                <div class="card-header card-primary">
                    IV. PERSPECTIVAS DE LA AFLUENCIA DE PACIENTES AL HOSPITAL
                </div>
                <div class="card-block bg-white">
                    <div class="form-group">
                        <label>15. ¿En qué meses del año existe mayor afluencia de pacientes al hospital? ¿según su apreciación?</label>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta151" type="checkbox" value="Enero"> Enero
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta152" type="checkbox" value="Febrero"> Febrero
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta153" type="checkbox" value="Marzo"> Marzo
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta154" type="checkbox" value="Abril"> Abril
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta155" type="checkbox" value="Mayo"> Mayo
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta156" type="checkbox" value="Junio"> Junio
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta157" type="checkbox" value="Julio"> Julio
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta158" type="checkbox" value="Agosto"> Agosto
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta159" type="checkbox" value="Septiembre"> Septiembre
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta1510" type="checkbox" value="Octubre"> Octubre
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta1511" type="checkbox" value="Noviembre"> Noviembre
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta1512" type="checkbox" value="Diciembre"> Diciembre
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>16. ¿En qué días de la semana hay más afluencia de pacientes?</label>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta161" type="checkbox" value="Lunes"> Lunes
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta162" type="checkbox" value="Martes"> Martes
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta163" type="checkbox" value="Miercoles"> Miercoles
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta164" type="checkbox" value="Jueves"> Jueves
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="pregunta165" type="checkbox" value="Viernes"> Viernes
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card card-success card-inverse">
                <div class="card-header card-success">
                    V. SATISFACCION DEL PACIENTE
                </div>
                <div class="card-block bg-white">
                    <div class="form-group">
                        <label>17. ¿Cómo fue su experiencia con el equipo de apoyo del hospital (administrativos, cajeros, guardia)? Seleccione un valor</label>
                        <select name="pregunta17" class="form-control">
                            <option value="1">malo</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5" selected>5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="10">excelente</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>18. ¿Cómo fue su experiencia con el doctor de su especialidad? Seleccione un valor</label>
                        <select name="pregunta18" class="form-control">
                            <option value="1">malo</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5" selected>5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="10">excelente</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>19. ¿Cómo fue su experiencia con las instalaciones del hospital? Seleccione un valor</label>
                        <select name="pregunta19" class="form-control">
                            <option value="1">malo</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5" selected>5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="10">excelente</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>20. ¿En su decisión de escoger un hospital, que considera como más importante?</label>
                        <select name="pregunta20" class="form-control">
                            <option value="Calidad">1. Calidad</option>
                            <option value="Servicio">2. Servicio</option>
                            <option value="Garantía">3. Garantía</option>
                            <option value="Precio">4. Precio</option>
                        </select>
                    </div>
                </div>
            </div>
            
                
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>

    </div>
</div>
<!-- /.row -->
@endsection
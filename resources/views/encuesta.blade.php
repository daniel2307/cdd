@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1>FORMULARIO MODELO 3 DE COLECCIÓN DE DATOS</h1>
        <hr>
        <form role="form">

            <h3>I. DATOS GENERALES DEL ENCUESTADO (EN ATENCION AL CLIENTE)</h3>
            <hr>

            <fieldset class="form-group">
                <label>1. ¿Cuál es su nombre y apellido?</label>
                <input class="form-control">
            </fieldset>

            <fieldset class="form-group">
                <label>2. ¿CUÁL ES EL GÉNERO DEL ENTREVISTADO?</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Masculino
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Femenino
                    </label>
                </div>
            </fieldset>

            <div class="form-group">
                <label>3. ¿Cuántos años cumplidos tiene?</label>
                <input class="form-control" type="number">
            </div>

            <fieldset class="form-group">
                <label>4. ¿Cuál es la fecha de su nacimiento?</label>
                <input class="form-control" type="date">
            </fieldset>

            <fieldset class="form-group">
                <label>5. ¿Dónde nació?</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> En este lugar
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> En otro luagr del pais
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> En el exterior
                    </label>
                </div>
            </fieldset>
            
            <div class="form-group">
                <label>6. ¿Hace cuánto tiempo vive aquí?</label>
                <input class="form-control" type="number" placeholder="Años">
                <input class="form-control" type="number" placeholder="Meses">
            </div>

            <fieldset class="form-group">
                <label>7. ¿Hace cuánto tiempo fue la primera vez que visito este hospital?</label>
                <input class="form-control" type="number" placeholder="Años">
                <input class="form-control" type="number" placeholder="Meses">
            </fieldset>

            <h3>II. DATOS DE ORIGEN Y MODALIDAD DE ATENCION DEL PACIENTE</h3>
            <hr>

            <fieldset class="form-group">
                <label>8. ¿De qué nacionalidad es usted?</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> 1. Boliviano/a rural
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> 2. Boliviano/a urbano
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> 3. Extranjero
                    </label>
                </div>
            </fieldset>
            
            <fieldset class="form-group">
                <label>9. ¿Cuándo tiene un problema de salud, a que especialidad acude al hospital?</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Medicina general
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Medicina especializada
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> Otro.........
                    </label>
                </div>
            </fieldset>

            <fieldset class="form-group">
                <label>10. ¿Qué referencias tomaría en cuenta para la obtención de fichas para su atención? (Marque todas las respuestas que se apliquen.)</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Madrugar
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Vía Telefónica
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> Comprar ficha día anterior
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> Vía internet
                    </label>
                </div>

                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"> Otro........
                    </label>
                </div>
            </fieldset>

            <h3>III. TIEMPOS DE ATENCION AL PACIENTE EN EL HOSPITAL</h3>
            <hr>
            
            <fieldset class="form-group">
                <label>11. ¿Cuánto tiempo le toma estar en el hospital, desde que entra hasta que sale de la misma?</label>
                <input class="form-control" type="number" placeholder="Dias">
                <input class="form-control" type="time" placeholder="horas">
            </fieldset>
            
            <fieldset class="form-group">
                <label>12. ¿Cuánto tiempo aguarda en la sala de espera para ser atendió por su doctor?</label>
                <input class="form-control" type="time" placeholder="horas">
            </fieldset>

            <fieldset class="form-group">
                <label>13. ¿En cuánto tiempo el doctor de su especialidad le atiende?</label>
                <input class="form-control" type="time" placeholder="horas">
            </fieldset>

            <fieldset class="form-group">
                <label>14. ¿Cuántas personas familiares le acompañan al hospital?</label>
                <input class="form-control" type="number">
            </fieldset>

            <h3>IV. PERSPECTIVAS DE LA AFLUENCIA DE PACIENTES AL HOSPITAL</h3>
            <hr>

            <div class="form-group">
                <label>15. ¿En qué meses del año existe mayor afluencia de pacientes al hospital? ¿según su apreciación?</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Enero
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Febrero
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Marzo
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Abril
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Mayo
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Junio
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Julio
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Agosto
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Septiembre
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Octubre
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Noviembre
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Diciembre
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label>16. ¿En qué días de la semana hay más afluencia de pacientes?</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Lunes
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Martes
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Miercoles
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Jueves
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value=""> Viernes
                    </label>
                </div>
            </div>

            <h3>V. SATISFACCION DEL PACIENTE</h3>
            <hr>

            <div class="form-group">
                <label>17. ¿Cómo fue su experiencia con el equipo de apoyo del hospital (administrativos, cajeros, guardia)? Seleccione un valor</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>

            <div class="form-group">
                <label>18. ¿Cómo fue su experiencia con el doctor de su especialidad? Seleccione un valor</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>

            <div class="form-group">
                <label>19. ¿Cómo fue su experiencia con las instalaciones del hospital? Seleccione un valor</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>

            <div class="form-group">
                <label>20. ¿En su decisión de escoger un hospital, que considera como más importante?</label>
                <select class="form-control">
                    <option>1. Calidad</option>
                    <option>2. Servicio</option>
                    <option>3. Garantía</option>
                    <option>4. Precio</option>
                </select>
            </div>
                
            <button type="submit" class="btn btn-primary">Submit Button</button>
            <button type="reset" class="btn btn-danger">Reset Button</button>
        </form>

    </div>
</div>
<!-- /.row -->
@endsection
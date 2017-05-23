<section id="papers" class="section align-center">
    <div class="container">
        <h3>Llamado para papers</h3>
        <p class="text-alt">Presenta tu trabajo en el congreso</p>
        <br />

        <div class="col-sm-6">
            <article>

                <p class="align-left">Se invita a los estudiantes de la carrera Ingeniería en Sistemas de Información de la Universidad Tecnológica Nacional a presentar trabajos concluidos o en proceso de desarrollo avanzado (relacionados con proyectos finales de grado, trabajos prácticos de cátedra, trabajos de investigación en grupos de I+D, u otros trabajos académicos) en donde reporten las ideas y resultados más innovadores y significativos de los mismos, desde una perspectiva universitaria y científica.</p>

            </article>
            <br>
            
            @if(!Auth::guest() && (Auth::User()->userProfile->getUserType() != 'general_audience'))
                <form class="form-horizontal align-center" role="form" method="POST" action="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="author" class="col-md-2 control-label">{{ trans('strings.author') }}</label>
                        <div class="col-md-8">
                            <input id="author" type="text" class="form-control" name="author" value="" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <a href="#" class="btn btn-black btn-sm">Seleccionar archivo</a>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                {{trans ('buttons.send')}}
                            </button>
                        </div>

                    </div>

                </form>
            @endif


        </div>

        <div class="col-sm-6">
            <article>

                <h6><span class="highlight">Consideraciones</span> de presentación</h6>

                <ul class="align-left">
                    <li><span class="fa fa-check check-icon"></span> Los trabajos aceptados serán expuestos durante el CNEISI 2017 a través de pósters. Además, los mejores trabajos seleccionados por el comité evaluador tendrán la posibilidad de ser expuestos oralmente en sesiones de presentación de trabajos.</li>
                    <li><span class="fa fa-check check-icon"></span> Solo se aceptará el envío electrónico de los Papers a través del Envío Online</li>
                    <li><span class="fa fa-check check-icon"></span> El Autor o los Autores podrán presentar más de un trabajo.</li>
                    <li><span class="fa fa-check check-icon"></span> Cada trabajo debería contener un máximo de 12 páginas.</li>
                    <li><span class="fa fa-check check-icon"></span> Formato para el envío de los Papers: Según documento FormatoPapers.doc </li>
                    <li><span class="fa fa-check check-icon"></span> El formato preferido es PDF.</li>
                    <li><span class="fa fa-check check-icon"></span> El idioma requerido es español</li>
                </ul>

            </article>
        </div>
    </div>
</section>
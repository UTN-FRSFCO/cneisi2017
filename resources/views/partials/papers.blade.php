<section id="papers" class="section align-center">
    <div class="container">
        <h3>Llamado para papers</h3>
        <p class="text-alt">Presenta tu trabajo en el congreso</p>
        <br />

        <div class="col-sm-6">
            <article>

                <p class="align-left">Se invita a los estudiantes de la carrera Ingeniería en Sistemas de Información de la Universidad Tecnológica Nacional a presentar trabajos concluidos o en proceso de desarrollo avanzado (relacionados con proyectos finales de grado, trabajos prácticos de cátedra, trabajos de investigación en grupos de I+D, u otros trabajos académicos) en donde reporten las ideas y resultados más innovadores y significativos de los mismos, desde una perspectiva universitaria y científica.</p>
                <p class="align-center"> Enviar los documentos al siguiente mail: </p>
                @include('components.share', ['url' => env('APP_URL') . '#' . 'papers' ])

            </article>
            <br>
        </div>

        <div class="col-sm-6">
            <article>

                <h6><span class="highlight">Consideraciones</span> de presentación</h6>

                <ul class="align-left">
                    <li><span class="fa fa-check check-icon"></span> Los trabajos aceptados serán expuestos durante el CNEISI 2017 a través de pósters. El formato de presentación de poster puede visualizarlo <a href="{{ url('FormatPoster') }}">aquí.</a></li>
                    <li><span class="fa fa-check check-icon"></span> Solo se aceptará el envío electrónico de los Papers a través del Envío Online</li>
                    <li><span class="fa fa-check check-icon"></span> El Autor o los Autores podrán presentar más de un trabajo.</li>
                    <li><span class="fa fa-check check-icon"></span> Cada trabajo debería contener un máximo de 12 páginas.</li>
                    <li><span class="fa fa-check check-icon"></span> Formato para el envío de los Papers: Según documento <a href="{{ url('FormatPaper') }}">FormatoPapers.doc</a> </li>
                    <li><span class="fa fa-check check-icon"></span> El formato preferido es PDF.</li>
                    <li><span class="fa fa-check check-icon"></span> El idioma requerido es español</li>
                    <li><span class="fa fa-check check-icon"></span> Se dará aviso vía mail la aprobación del mismo</li>
                </ul>

            </article>
        </div>
    </div>
</section>
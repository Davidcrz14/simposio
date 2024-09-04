<form method="post" action="inscripciones.php" class="needs-validation" novalidate>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-md-10 col-lg-8">
                <h4 class="mb-4">Proporciona los siguientes datos para inscribirte al taller:</h4>

                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre:</label>
                  <input type="text" id="nombre" name="nombre" class="form-control" maxlength="80" placeholder="Tu(s) nombre(s) y Apellido(s) - se generará constancia electrónica de participación a los asistentes." required>
                </div>

                <div class="mb-3">
                  <label for="correo" class="form-label">Correo electrónico:</label>
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="tucorreo@servidor.com" required>
                </div>

                <div class="mb-3">
                  <label for="instit" class="form-label">Institución de procedencia:</label>
                  <input type="text" class="form-control" id="instit" name="instit" placeholder="Institución o centro educativo desde donde nos visitarás: COBAO 08, Universidad Tecnológica de la Mixteca, etc" maxlength="90" required>
                </div>

                <div class="mb-3">
                  <label for="ciudad" class="form-label">Ciudad o localidad desde donde nos visitarás:</label>
                  <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Tu ciudad o localidad de procedencia: Huajuapan de León, Oaxaca de Juárez, etc." maxlength="90" required>
                </div>

                <div class="mb-3">
                  <label for="taller" class="form-label">Selecciona el taller de tu interés:</label>
                  <select class="form-select" id="taller" name="taller" required>
                    <option value="" selected disabled>Selecciona un taller</option>
                    <option value="1">Programación básica en python (Jueves + Viernes).</option>
                    <option value="2">Hardware y software libre en la educación (Jueves).</option>
                    <option value="3">Algoritmos de Machine Learning en Python. (Jueves).</option>
                    <option value="4">Creación de un chatbot con LLama2 usando Langchain y desplegado usando Truss (Jueves + Viernes).</option>
                    <option value="5">FastAPI-Construcción de API's con Python (Jueves + Viernes).</option>
                    <option value="6">Desarrollo de aplicaciones web con MODx CMS (Jueves + Viernes).</option>
                    <option value="7">Erlang: El paradigma funcional para resolver problemas concurrentes (Jueves + Viernes).</option>
                    <option value="8">Python una herramienta de apoyo en el aprendizaje del Cálculo (Jueves + Viernes).</option>
                    <option value="9">Uso del lenguaje SPARQL para generar y consultar datos abiertos (Viernes).</option>
                  </select>
                </div>

                <div class="mb-3 text-center">
                  <button type="submit" class="btn btn-primary w-100" id="enviar">Enviar solicitud</button>
                </div>

                <div id="mensaje" class="mt-3 text-center">
                  <?php
                  if (isset($msg)) {
                    $class = $msg['type'] == 'success' ? 'text-success' : 'text-warning';
                    echo "<div class='$class'>" . $msg['msg'] . "</div>";
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </form>

<template>
  <div>
    <div class="row justify-content-center">Entrevista Inicial Conductual</div>
    <div class="row">
      <div class="container" style="background-color: #f7f7f8">
        <div v-show="mostrar == 1">
          <div class="row">
            <div class="col-md-2">
              <label for="name">Nombre del Entrevistador:</label>
            </div>
            <div class="col-md-7">
              <input class="form-control" id="name"  name="nombreEntrevistador"/>
            </div>
            <div class="col-md-1">
              <label for="ap">Fecha</label>
            </div>
            <div class="col-md-2">
              <input class="form-control" id="na" name="fecha" />
            </div>
          </div>
          <div class="row"><strong>Datos Personales</strong></div>
          <div class="row">
            <div class="col-md-6">
              <label for="name">Apellidos:</label>
              <input class="form-control" id="name" name="apellidos" />
            </div>
            <div class="col-md-6">
              <label for="ap">Nombre:</label>
              <input class="form-control" id="na" name="nombre" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label for="name">Edad:</label>
              <input class="form-control" id="name" name="edad"/>
            </div>
            <div class="col-md-3">
              <label for="name">Estudios:</label>
              <input class="form-control" id="name" name="estudios"/>
            </div>
            <div class="col-md-3">
              <label for="name">Profesión:</label>
              <input class="form-control" id="name" name="profesion" />
            </div>
            <div class="col-md-3">
              <label for="name">Situación laboral:</label>
              <input class="form-control" id="name" name="situacion_laboral" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="name">Estado Civil:</label>
              <input class="form-control" id="name" name="estado_civil"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="name">Con quién vive:</label>
              <input class="form-control" id="name" name="q1" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="name">Dónde Trabaja/Estudia:</label>
              <input class="form-control" id="name" name="q2" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="name">Fecha de Nacimiento:</label>
              <!-- <input class="form-control" id="name" name="fecha_nacimiento"/>  -->
              <datepicker name="fecha_nacimiento"></datepicker>
            </div>
            <div class="col-md-6">
              <label for="name">Lugar:</label>
              <input class="form-control" id="name" name="q3"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="name">Dirección:</label>
              <input class="form-control" id="name" name="q4" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="name">Tel:</label>
              <input class="form-control" id="name" name="q5" />
            </div>
            <div class="col-md-6">
              <label for="name">E-mail:</label>
              <input class="form-control" id="name" name="q6" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Existe algún problema si recibe alguna llamada telefónica
                nuestra?</label
              >
              <input class="form-control" id="name" name="q8" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">Rasgos físicos distintivos</label>
              <input class="form-control" id="name" name="q9" />
            </div>
          </div>
          <div class="row">
            <strong
              >Descripción de la demanda y el problema: Descripción e
              Historia</strong
            >
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Descríbame, lo más detalladamente posible, el motivo de su
                consulta:
              </label>
              <input class="form-control" id="name" name="q10"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Descríbame lo mejor posible qué le pasa (¿Qué hace, qué siente,
                qué piensa sobre el problema que le ha traído aquí?)</label
              >
              <input class="form-control" id="name" name="q11" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Podría especificar la última vez que le ocurrió ese problema?
                ¿Qué, cuándo, dónde y cómo le ocurrió?</label
              >
              <input class="form-control" id="name" name="q12" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >En general, ¿con qué frecuencia le ocurre ese problema?</label
              >
              <input class="form-control" id="name" name="q13" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cuál es su duración?</label>
              <input class="form-control" id="name" name="q14"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Con qué intensidad ocurre?</label>
              <input class="form-control" id="name" name="q15"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >En una escala de 1 a 5 (en que 1 sería nada o muy poco y 5
                muchísimo), ¿en qué medida considera que estas manifestaciones
                le afectan en su vida cotidiana?</label
              >
              <input class="form-control" id="name" name="q15" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Ocurre, especialmente, en alguna/s situación/es?; por favor,
                descríbala/s</label
              >
              <input class="form-control" id="name" name="q16"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cuándo empezaron esas manifestaciones?</label>
              <input class="form-control" id="name" name="q17"/>
            </div>
          </div>
        </div>
        <div v-show="mostrar == 2">
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Podría describirme qué, cuándo, cómo y dónde le ocurrieron la
                primera vez que aparecieron?</label
              >
              <input class="form-control" id="name" name="q18" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿En qué circunstancias? (aclare aspectos de la situación,
                personas presentes, antecedentes y consecuentes)</label
              >
              <input class="form-control" id="name" name="q19" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Desde entonces, ¿cree que esas manifestaciones se han
                agravado?</label
              >
              <input class="form-control" id="name" name="q20" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Ha buscado ayuda anteriormente para resolver este
                problema?</label
              >
              <input class="form-control" id="name" name="q21" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Si es así, por favor, dígame qué profesionales, qué
                tratamientos (en su caso), con qué resultados y en qué fechas
                ocurrieron:
              </label>
              <input class="form-control" id="name" name="q22" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Finalmente, ¿a qué cree que se debe su problema?</label
              >
              <input class="form-control" id="name" name="q23" />
            </div>
          </div>
          <div class="row"><strong>Otros potenciales problemas</strong></div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Aparte del problema que me cuenta, ¿presenta alguna otra
                situación problemática o manifestación que le parezca anormal o
                que le produzca sufrimiento?</label
              >
              <input class="form-control" id="name" name="q24" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Ha tenido en otras ocasiones, a lo largo de su vida, otros
                problemas psicológicos/mentales/conductuales distintos de estos
                por los que consulta? Si es así, descríbamelos y dígame en qué
                momento y situación de su vida aparecieron:
              </label>
              <input class="form-control" id="name"  name="q25"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Ha sido usted ingresado/a alguna vez por un trastorno
                psicológico?</label
              >
              <input class="form-control" id="name"  name="q26"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Vamos a tratar de precisar si pudieran existir algunos otros
                problemas además de los que usted me ha descrito ya. Le voy a
                leer distintas posibilidades y usted me va a decir si le ocurren
                en el presente:
              </label>
              <input class="form-control" id="name" name="q27" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label for="name">DROGAS</label>
              <input class="form-control" id="name" name="q28" />
            </div>
            <div class="col-md-4">
              <label for="name">PENSAR QUITARSE LA VIDA</label>
              <input class="form-control" id="name" name="q29" />
            </div>
            <div class="col-md-4">
              <label for="name">INSOMNIO </label>
              <input class="form-control" id="name" name="q29" />
            </div>
          </div>
        </div>
        <div v-show="mostrar == 3">
          <div class="row">
            Es también frecuente que a la gente le pasen cosas por dentro, se
            diga a sí misma cosas o sienta determinadas respuestas fisiológicas
            de forma más o menos automática.
          </div>
          <div class="row">
            Voy a leer algunas frases; dígame si le ocurren y, en caso
            afirmativo, con qué nivel de frecuencia (de nunca = 0 a muchísimo =
            4) y en que situación2:
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th>Respuestas Internas (Psicofisiológicas)</th>
                  <th>Frecuencia 1-4</th>
                  <th>Situación</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>- Sudo</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Me late el corazón fuertemente</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Me siento enrojecer</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Siento tensión muscular</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- No paro de moverme</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Tengo un nudo en el estómago</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Respiro agitadamente</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Tiemblo</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>Cualquier otra:</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th>Respuestas Internas (Pensamientos)</th>
                  <th>Frecuencia 1-4</th>
                  <th>Situación</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>- La vida no merece la pena</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Me encuentro solo</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- A nadie le importo</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Me gustaría morirme</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Soy un desastre</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- No voy a poder controlarme</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- A la gente no le gusto</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>- Me voy a desmayar</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>Cualquier otra:</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div v-show="mostrar == 4">
          <div class="row">
            <div class="col-md-12">
              <strong>Condiciones familiares actuales</strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">Me ha dicho usted que vive con:</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Quisiera saber más de su situación familiar actual</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Está casado/a (o vive con una pareja estable)?; dígame la edad
                y ocupación de su pareja:</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cómo se lleva con su pareja?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Si tiene hijos, dígame sus nombres y edades:</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Qué tal se lleva con sus hijos?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Si está divorciado/a o separado/a, ¿cuál fue la razón para la
                ruptura?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Qué otras personas viven con usted y cómo se lleva con
                ellas?:</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Tiene alguna otra relación importante (aparte de los
                amigos/as) que no viva con usted?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <strong>En el caso de vivir con la familia de referencia</strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Si vive con su/s padre/s, dígame qué años tiene/n y a qué se
                dedica/n:</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cómo se lleva con sus padres?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Si tienes hermano/as, dígame qué edad tienen, a qué se dedican
                y si viven con usted:</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cómo se lleva con sus hermano/as?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Qué otras personas viven con usted y cómo se lleva con
                ellas?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Tiene alguna otra relación importante (aparte de los
                amigos/as) que no viva con usted?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
        </div>
        <div v-show="mostrar == 5">
          <div class="row">
            <div class="col-md-12">
              <strong
                >Repercusión del problema por el que consulta en la
                familia</strong
              >
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿El problema por el que consulta qué repercusiones tiene en sus
                relaciones familiares actuales?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Qué hacen los miembros de su familia cuando aparece?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Qué piensan del problema?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Por qué piensan y dicen que le ocurre el problema?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <strong>Historia familiar</strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              Me gustaría saber más de su historia familiar:
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <strong>Madre</strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="name">¿Vive su madre? </label>
              <input class="form-control" id="name" />
            </div>
            <div class="col-md-6">
              <label for="name">(En su caso) ¿De qué murió? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="name">¿A qué edad?</label>
              <input class="form-control" id="name" />
            </div>
            <div class="col-md-6">
              <label for="name">(En su caso) ¿Qué edad tenía usted? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="name">Edad actual: </label>
              <input class="form-control" id="name" />
            </div>
            <div class="col-md-6">
              <label for="name">Ocupación:</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              ¿Cómo podría describir las relaciones con su madre a lo largo de
              la vida? Valore tales relaciones (de 1 = malas a 4 = muy buenas):
            </div>
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th></th>
                  <th>INFANCIA</th>
                  <th>ADOLESCENCIA</th>
                  <th>JUVENTUD</th>
                  <th>OTRA ETAPA</th>
                  <th>ACTUALIDAD</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>VALORACIÓN</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cómo describiría a su madre?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Qué actitudes tenía su madre hacia usted?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Podría decirme qué hacía su madre para conseguir algo de usted
                (premios y castigos)?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Qué actividades hacía usted con su madre cuando era
                niño/a?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <strong>Padre</strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="name">¿Vive su padre? </label>
              <input class="form-control" id="name" />
            </div>
            <div class="col-md-6">
              <label for="name">(En su caso) ¿De qué murió? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="name">¿A qué edad?</label>
              <input class="form-control" id="name" />
            </div>
            <div class="col-md-6">
              <label for="name">(En su caso) ¿Qué edad tenía usted? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="name">Edad actual: </label>
              <input class="form-control" id="name" />
            </div>
            <div class="col-md-6">
              <label for="name">Ocupación:</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              ¿Cómo podría describir las relaciones con su madre a lo largo de
              la vida? Valore tales relaciones (de 1 = malas a 4 = muy buenas):
            </div>
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th></th>
                  <th>INFANCIA</th>
                  <th>ADOLESCENCIA</th>
                  <th>JUVENTUD</th>
                  <th>OTRA ETAPA</th>
                  <th>ACTUALIDAD</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>VALORACIÓN</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cómo describiría a su padre?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Qué actitudes tenía su padre hacia usted?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Podría decirme qué hacía su padre para conseguir algo de usted
                (premios y castigos)?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Qué actividades hacía usted con su padre cuando era niño/a?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cómo se llevaban su madre y su padre?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
        </div>
        <div v-show="mostrar == 6">
          <div class="row">
            <div class="col-md-12">
              <strong
                >Repercusión del problema por el que consulta en la familia
              </strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              Quisiera saber cómo se ha llevado con su/s hermano/a/s a lo largo
              de su infancia y adolescencia
            </div>
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th>ORDEN</th>
                  <th>SEXO/EDAD</th>
                  <th>INFANCIA</th>
                  <th>ADOLESCENCIA</th>
                  <th>JUVENTUD</th>
                  <th>OTRA ETAPA</th>
                  <th>ACTUALIDAD</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Tenían preferencia su padre o madre por usted o por alguno de
                sus hermanos/as? (Sí)(No)</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">Si así es, ¿por quién y por qué?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Cuáles fueron los valores más importantes en su familia? (la
                religión, el trabajo, la igualdad, la solidaridad, etc.):</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Tuvo algunos problemas durante su infancia y/o
                adolescencia?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th>PROBLEMA</th>
                  <th>INFANCIA</th>
                  <th>ADOLESCENCIA</th>
                  <th>JUVENTUD</th>
                  <th>OTRA ETAPA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    -Rendimiento escolar <br />
                    -Problemas de conducta <br />
                    -Ansiedad depresión <br />
                    -Drogas/alcohol <br />
                    -Problemas médicos
                  </td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>Otros</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-md-12">
              <strong>Historia laboral</strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              (Si procede y dependiendo de la edad del sujeto.) Descríbame los
              trabajos que usted ha ido teniendo y las fechas en los que
              ocurrieron. Por favor, indíqueme qué aspectos de cada trabajo eran
              los más satisfactorios para usted (tipo de trabajo) y qué aspectos
              le producían más agrado o desagrado y cómo se llevaba con sus
              compañeros/as de trabajo y con sus jefes/as:
            </div>
          </div>
          <div class="row col-md-12">
            <table class="col-md-12">
              <thead>
                <tr>
                  <th>TRABAJOS</th>
                  <th>ORGANIZACIÓN</th>
                  <th>FECHAS</th>
                  <th>LO QUE MAS ME GUSTABA</th>
                  <th>LO QUE MENOS ME GUSTABA</th>
                  <th>RELACIONES COMPAÑEROS (0-4)</th>
                  <th>RELACIONES JEFAS/ES (0-4)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
                <tr>
                  <td>Actualmente</td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                  <td><input class="form-control" /></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Actualmente qué trabajo (en su caso) lleva a cabo?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Cuántas horas trabaja a la semana (en promedio)?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              +-
              <label for="name"
                >¿Qué cursos o seminarios ha realizado para incrementar sus
                habilidades ocupacionales?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Qué expectativas tiene relativas al trabajo?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
        </div>
        <div v-show="mostrar == 7">
          <div class="row">
            <div class="col-md-12">
              <strong>Historia de intereses y entretenimientos</strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              Me gustaría saber algo más de sus intereses y entretenimientos a
              lo largo de su vida.
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Cómo describiría sus intereses y entretenimientos durante su
                niñez?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿En la adolescencia y juventud?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >En la actualidad, ¿qué hace usted en sus ratos libres en el
                presente?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Cuántas horas dedica al día a esos entretenimientos?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Qué hace los fines de semana?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">Cuénteme, ¿qué hace en vacaciones?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿En qué momentos o situaciones se aburre?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <strong>Relaciones interpersonales</strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              Hemos hablado de su familia, de sus compañeros/as de colegio y de
              trabajo; me gustaría saber más acerca de sus relaciones sociales.
              <br />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Hace amigos/as fácilmente? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Tiene muchos/as amigos/as? • ¿Cuántos
                (aproximadamente)?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cuántos amigos/as íntimos/as?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >En general, ¿se siente cómodo en situaciones sociales?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Expresa sus sentimientos, opiniones y deseos
                fácilmente?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">Cuénteme, ¿qué hace en vacaciones?</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿A cuántas personas le cuenta sus secretos más íntimos?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Sus amigos/as y/o conocidos/as, ¿le cuentan a usted sus
                secretos o le piden ayuda?</label
              >
              <input class="form-control" id="name" />
            </div>
          </div>
        </div>
        <div v-show="mostrar == 8">
          <div class="row">
            <div class="col-md-12">
              <strong>Vida sexual</strong><br />
              Me gustaría que habláramos de sus relaciones sexuales.
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <strong>En el pasado </strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Cuándo y cómo aprendió?, por primera vez, algo referente al
                sexo
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Era el sexo un tema del que se hablara en su casa?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Cuál era la actitud de sus padres hacia el sexo?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Cómo fue y cuándo cree que tuvo conciencia del sexo?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Cuándo, cómo y (en su caso) con quién tuvo su primera
                experiencia sexual?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Se masturbaba/masturba? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cuándo fue la primera vez? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Ha tenido alguna experiencia homosexual?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <strong>Para mujeres </strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cuándo tuvo su primera menstruación? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Sus períodos son regulares ahora (en su caso)?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Tienen molestias? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Se siente frecuentemente depresiva justo antes de tener el
                período?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Usa usted algún tipo de anticonceptivo? ¿De qué tipo?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >(En su caso.) ¿Cuándo ha dejado de tener la menstruación?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
        </div>
        <div v-show="mostrar == 9">
          <div class="row">
            <div class="col-md-12">
              <strong>Para hombres </strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cuándo tuvo su primera polución? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <strong>En la actualidad </strong>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >(Sólo si procede.) ¿Tiene pareja estable?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cómo se lleva usted con su pareja? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Quién cree que es el miembro dominante en su pareja o
                relación?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Describa alguna de las conductas de su pareja que usted
                encuentra particularmente agradables:
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Describa alguna de las conductas de su pareja que usted
                encuentra desagradables:
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Qué actitud tiene usted, en la actualidad, respecto a las
                relaciones sexuales?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Con qué periodicidad tiene relaciones sexuales?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Son satisfactorias sus relaciones sexuales?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <strong>Historia de su salud</strong>
              <br />
              ¿Qué enfermedades ha tenido usted a lo largo de su vida?
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <label for="name">— En la infancia:</label>
            </div>
            <div class="col-md-10">
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <label for="name">— En la adolescencia:</label>
            </div>
            <div class="col-md-10">
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <label for="name">— Durante la juventud:</label>
            </div>
            <div class="col-md-10">
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <label for="name">— Durante la edad adulta:</label>
            </div>
            <div class="col-md-10">
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >Si ha tenido intervenciones quirúrgicas, ¿cuáles y cuándo han
                ocurrido?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Considera importante alguna de las enfermedades descritas?
                ¿Cuál/es y cómo le afectaron?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >En su caso, descríbame sus dolencias físicas presentes (tensión
                alta, diabetes, problemas de corazón, etc)
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
        </div>
        <div v-show="mostrar == 10">
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Tiene problemas para dormir? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cuida usted su dieta? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Realiza una actividad física regular (ir al gimnasio, deporte,
                etc.)?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Consume alguna droga (bebidas, tabaco, otras drogas)?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Qué medicamentos toma y con qué frecuencia?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Cuándo fue la última vez que usted se hizo un examen físico
                completo?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cuáles fueron los resultados? </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <strong>Valores, creencias y sí mismo/a</strong>
              <br />
              (Si procede y dependiendo de la edad del sujeto.) Anteriormente le
              pregunté por los valores de su familia; ahora me gustaría saber
              más sobre ello:
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Cúales cree usted que son sus más importantes valores?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Qué valores actuales, en nuestra sociedad, cree que son más
                importantes?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Qué valores cree que se están perdiendo que a usted le
                gustaría conservar?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Qué valores actuales cree que son más rechazables?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name"
                >¿Se considera usted una persona religiosa?
              </label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              Estamos llegando al final de esta entrevista, al menos por el
              momento, pero aún me gustaría saber cómo se conceptualiza usted a
              sí mismo/a.
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cómo se describiría a sí mismo/a?
</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cuáles son sus características más positivas?
</label>
              <input class="form-control" id="name" />
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cuáles son sus características más negativas?
</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Qué le gustaría a usted cambiar de sí mismo/a?
</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Cómo le gustaría ser?
</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="name">¿Qué espera usted de esta relación profesional?
</label>
              <input class="form-control" id="name" />
            </div>
          </div>
          <br><br><br>
          <div class="row">
            <div class="col-md-12">
              <div class="row justify-content-center">__________________________________________</div>
              <div class="row justify-content-center">FIRMA</div>
            </div>
          </div>
        </div>
        <div class="row">
          <button
            :type="typeBtn"
            class="btn btn-primary mx-auto btn-lg"
            style="background-color: #76cee6"
            v-on:click="Adelante"
          >
            {{ this.buttontext }}
          </button>
        </div>
        <div class="row">
          <div class="col-md-12">
            <strong></strong>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="name"></label>
            <input class="form-control" id="name" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import Datepicker from 'vuejs-datepicker';

export default {
  components: {
    Datepicker
  },
  data() {
    return {
      mostrar: 1,
      tope: 10,
      buttontext: "Siguiente",
      typeBtn: "button",
    };
  },
  methods: {
    Adelante: function () {
      if (this.mostrar < this.tope) {
        this.mostrar += 1;
        this.buttontext = "Siguiente";
      } else {
        this.buttontext = "Enviar";
        this.typeBtn = "submit";
      }
    },
  },
};
</script>

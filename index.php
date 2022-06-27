<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
      <!--header section start -->
      <div class="header_section">
    <div class="container-fluid">
      <!-- Image and text -->
      <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="images/logo.jpg" alt="" width="100%">
          </a>
        </div>
      </nav>
    </div>
  </div>
  <!--contact section start -->
  <div class="contact_section layout_padding mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6  pt-5">
          <form action="validar.php"  method="post" enctype="multipart/form-data">
            <h1 class="contact_text center">Crea tu cuenta</h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Elegir su nombre de usuario y contraseña
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse pt-3" aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample">
                  <div class="mb-3">
                    <label for="nomUs" class="form-label">Nombre de usuario</label>
                    <input type="text" class="form-control" id="nomUs" name="nomUs" required>
                  </div>
                  <div class="row g-3 align-items-center">
                    <div class="col-auto">
                      <label for="contrasena" class="col-form-label">Contraseña</label>
                    </div>
                    <div class="col-auto">
                      <input type="password" id="contrasena" class="form-control" name="contrasena" required>
                    </div>
                    <div class="col-auto">
                      <span id="passwordHelpInline" class="form-text">
                        La contraseña debería tener al menos 8 caracter(es), al menos 1 dígito(s), al menos 1
                        minúscula(s), al menos 1 MAYÚSCULA(S), al menos 1 caracter(es) no-alfanumérico(s) como . $
                        ? / * - + # @
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Más detalles
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="mb-3">
                      <label for="email" class="form-label">Dirección Email</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                      <label for="email2" class="form-label">Confirmación Email</label>
                      <input type="email" class="form-control" id="email2" name="email2" required>
                    </div>
                    <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre(s)</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                      <label for="apellidos" class="form-label">Apellidos</label>
                      <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>
                    <div class="mb-3">
                      <label for="curp" class="form-label">CURP</label>
                      <p><strong>Puedes consultar tu CURP</strong> <a href="https://www.gob.mx/curp/" target="_blank">aquí.</a></p>
                      <input type="text" class="form-control" name="curp" id="curp" oninput="validarInput(this)" required>
                      <pre id="resultado"></pre>
                    </div>
                    <div class="mb-3  ">
                      <label for="cct" class="form-label">CCT</label>
                      <input type="text" class="form-control" id="cct" name="cct" oninput="validarCct(this)" required>
                      <pre id="resultadoCct"></pre>
                    </div>
                    <div class="mb-3">
                      <label for="alcaldia" class="form-label">Alcaldía</label>
                      <input type="text" class="form-control" id="alcaldia" name="alcaldia" required>
                    </div>
                    <div class="mb-3">
                      <label class="form-label">País</label>
                      <select class="form-select" name="country" id="id_country" required>
                        <option value="" selected="">Seleccione su país</option>
                        <option value="AF">Afganistán</option>
                        <option value="AL">Albania</option>
                        <option value="DE">Alemania</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguila</option>
                        <option value="AQ">Antártida</option>
                        <option value="AG">Antigua y Barbuda</option>
                        <option value="SA">Arabia Saudita</option>
                        <option value="DZ">Argelia</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaiyán</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrein</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BE">Bélgica</option>
                        <option value="BZ">Belice</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BY">Bielorrusia</option>
                        <option value="BO">Bolivia (Estado Plurinacional de)</option>
                        <option value="BQ">Bonaire, Sint Eustatius y Saba</option>
                        <option value="BA">Bosnia y Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BR">Brasil</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="BT">Bután</option>
                        <option value="CV">Cabo Verde</option>
                        <option value="KH">Camboya</option>
                        <option value="CM">Camerún</option>
                        <option value="CA">Canadá</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CY">Chipre</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoras</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo (la República Democrática del)</option>
                        <option value="KR">Corea (la República de)</option>
                        <option value="KP">Corea (la República Democrática del Pueblo de)</option>
                        <option value="CI">Costa de Marfil</option>
                        <option value="CR">Costa Rica</option>
                        <option value="HR">Croacia</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Curazao</option>
                        <option value="DK">Dinamarca</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egipto</option>
                        <option value="SV">El Salvador</option>
                        <option value="VA">El Vaticano</option>
                        <option value="AE">Emiratos Árabes Unidos</option>
                        <option value="ER">Eritrea</option>
                        <option value="SK">Eslovaquia</option>
                        <option value="SI">Eslovenia</option>
                        <option value="ES">España</option>
                        <option value="US">Estados Unidos</option>
                        <option value="EE">Estonia</option>
                        <option value="SZ">Eswatini</option>
                        <option value="ET">Etiopía</option>
                        <option value="RU">Federación Rusa</option>
                        <option value="PH">Filipinas</option>
                        <option value="FI">Finlandia</option>
                        <option value="FJ">Fiyi</option>
                        <option value="FR">Francia</option>
                        <option value="GA">Gabón</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="GS">Georgia del Sur y las Islas Sandwich del Sur</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GD">Granada</option>
                        <option value="GR">Grecia</option>
                        <option value="GL">Groenlandia</option>
                        <option value="GP">Guadalupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GQ">Guinea Ecuatorial</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="GF">Guyana Francesa</option>
                        <option value="HT">Haití</option>
                        <option value="NL">Holanda</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungría</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IQ">Irak</option>
                        <option value="IR">Irán (República Islámica de)</option>
                        <option value="IE">Irlanda</option>
                        <option value="IM">Isla de Man</option>
                        <option value="IS">Islandia</option>
                        <option value="AX">Islas Åland</option>
                        <option value="BV">Islas Bouvet</option>
                        <option value="KY">Islas Caimán</option>
                        <option value="CC">Islas Cocos</option>
                        <option value="CK">Islas Cook</option>
                        <option value="CX">Islas de Navidad</option>
                        <option value="FO">Islas Faroe</option>
                        <option value="HM">Islas Heard y McDonald</option>
                        <option value="FK">Islas Malvinas</option>
                        <option value="MP">Islas Marianas del Norte</option>
                        <option value="MH">Islas Marshall</option>
                        <option value="NF">Islas Norfolk</option>
                        <option value="SB">Islas Salomón</option>
                        <option value="TC">Islas Turcas y Caicos</option>
                        <option value="UM">Islas Ultramarinas Menores de Estados Unidos</option>
                        <option value="VI">Islas Vírgenes (Americanas)</option>
                        <option value="VG">Islas Vírgenes (Británícas)</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italia</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japón</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordania</option>
                        <option value="KZ">Kazajstán</option>
                        <option value="KE">Kenia</option>
                        <option value="KG">Kirguistán</option>
                        <option value="KI">Kiribati</option>
                        <option value="KW">Kuwait</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LS">Lesotho</option>
                        <option value="LB">Líbano</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libia</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lituania</option>
                        <option value="LU">Luxemburgo</option>
                        <option value="MO">Macao</option>
                        <option value="MK">Macedonia del Norte</option>
                        <option value="MG">Madagascar</option>
                        <option value="MY">Malasia</option>
                        <option value="MW">Malawi</option>
                        <option value="MV">Maldivas</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MA">Marruecos</option>
                        <option value="MQ">Martinica</option>
                        <option value="MU">Mauricio</option>
                        <option value="MR">Mauritania</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">México</option>
                        <option value="FM">Micronesia (Estados Federados de)</option>
                        <option value="MD">Moldovia (la República de)</option>
                        <option value="MC">Mónaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Naurú</option>
                        <option value="NP">Nepal</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Níger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NO">Noruega</option>
                        <option value="NC">Nueva Caledonia</option>
                        <option value="NZ">Nueva Zelandia</option>
                        <option value="OM">Omán</option>
                        <option value="PK">Pakistán</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestina, Estado de</option>
                        <option value="PA">Panamá</option>
                        <option value="PG">Papúa Nueva Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Perú</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PF">Polinesia Francesa</option>
                        <option value="PL">Polonia</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="GB">Reino Unido</option>
                        <option value="CF">República Centroafricana</option>
                        <option value="CZ">República Checa</option>
                        <option value="DO">República Dominicana</option>
                        <option value="RE">Reunión</option>
                        <option value="RW">Ruanda</option>
                        <option value="RO">Rumania</option>
                        <option value="EH">Sahara Occidental</option>
                        <option value="WS">Samoa</option>
                        <option value="AS">Samoa Americana</option>
                        <option value="BL">San Bartolomé</option>
                        <option value="KN">San Cristóbal y Nevis</option>
                        <option value="SM">San Marino</option>
                        <option value="MF">San Martín (Porción Francesa)</option>
                        <option value="PM">San Pedro y Miquelon</option>
                        <option value="VC">San Vincente y Las Granadinas</option>
                        <option value="SH">Santa Helena, Ascención y Tristán Da Cunha</option>
                        <option value="LC">Santa Lucía</option>
                        <option value="ST">Santo Tomé y Príncipe</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leona</option>
                        <option value="SG">Singapur</option>
                        <option value="SX">Sint Maarten (Porción Holandesa)</option>
                        <option value="SY">Siria</option>
                        <option value="SO">Somalía</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="ZA">Sudáfrica</option>
                        <option value="SD">Sudán</option>
                        <option value="SS">Sudán del Sur</option>
                        <option value="SE">Suecia</option>
                        <option value="CH">Suiza</option>
                        <option value="SR">Surinam</option>
                        <option value="SJ">Svalbard y Jan Mayen</option>
                        <option value="TH">Tailandia</option>
                        <option value="TW">Taiwán</option>
                        <option value="TZ">Tanzania, la República Unida de</option>
                        <option value="TJ">Tayikistán</option>
                        <option value="IO">Territorio Británico del Océano Índico</option>
                        <option value="TF">Territorios Franceses del Sur</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad y Tobago</option>
                        <option value="TN">Túnez</option>
                        <option value="TM">Turkmenistán</option>
                        <option value="TR">Turquía</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UA">Ucrania</option>
                        <option value="UG">Uganda</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela (República Bolivariana de)</option>
                        <option value="VN">Vietnam</option>
                        <option value="WF">Wallis y Futuna</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbawe</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Selecciona tu perfil
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="row mt-3 mb-3">
                      <a class="btn btn-primary col-md-3  ml-2" data-bs-toggle="collapse" href="#multiCollapseExample1"
                        role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Básico</a>
                      <button class="btn btn-primary col-md-3 offset-md-1 ml-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample2" aria-expanded="false"
                        aria-controls="multiCollapseExample2">Intermedio</button>
                      <button class="btn btn-primary col-md-3 offset-md-1 ml-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#multiCollapseExample3" aria-expanded="false"
                        aria-controls="multiCollapseExample3 ">Avanzado</button>
                    </div>
                    <div class="row">
                      <div class="col mb-2">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                          <div class="card card-body">
                            Si eres maestro o maestra que esta por iniciar su acercamiento al Proyecto
                            Cuantrix este es el perfil al que debes ingresar para acceder a tu capacitación.
                          </div>
                        </div>
                      </div>
                      <div class="col mb-2">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                          <div class="card card-body">
                            Si este es tu segundo acercamiento o participación en el Proyecto
                            Cuantrix este es el perfil al que debes ingresar para accesar a tu nueva capacitación.
                          </div>
                        </div>
                      </div>
                      <div class="col mb-2">
                        <div class="collapse multi-collapse" id="multiCollapseExample3">
                          <div class="card card-body">
                            Si este es tu tercer ciclo por implementar el Proyecto Cuantrix este es
                            el perfil al que debes ingresar para accesar a tu nueva capacitación.
                          </div>
                        </div>
                      </div>
                    </div>
                    <select class="form-select" name="perfil" id="iperfil" required>
                      <option value="" selected="">Elegir...</option>
                      <option
                        value="basico">
                        Perfil básico</option>
                      <option
                        value="intermedio">
                        Perfil intermedio
                      </option>
                      <option
                        value="avanzado">
                        Perfil avanzado</option>
                    </select>

                    <div class="mb-3 mt-3 form-check">
                      <input type="checkbox" class="form-check-input" id="aviso1" name="aviso1" required>
                      <label class="form-check-label" for="exampleCheck1">He leído y acepto el <a href="#">aviso de privacidad 1</a></label>
                    </div>
                    <div class="mb-3 mt-3 form-check">
                      <input type="checkbox" class="form-check-input" id="aviso2" name="aviso2" required>
                      <label class="form-check-label" for="exampleCheck1">He leído y acepto el <a href="#">aviso de privacidad 2</a></label>
                    </div>
                    <div class="mb-3 mt-3 form-check">
                      <input type="checkbox" class="form-check-input" id="aviso3"  name="aviso3" required>
                      <label class="form-check-label" for="exampleCheck1">He leído y acepto el <a href="#">aviso de privacidad 3</a></label>
                    </div>
                    <input class=" btn btn-primary" type="submit" value="Enviar" >
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="contact_bg"><img src="images/contact-bg.png"></div>
        </div>
      </div>
    </div>
  </div>
  <script>
    //Función para validar una CURP
    function curpValida(curp) {
      var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = curp.match(re);

      if (!validado)  //Coincide con el formato general?
        return false;

      //Validar que coincida el dígito verificador
      function digitoVerificador(curp17) {
        //Fuente https://consultas.curp.gob.mx/CurpSP/
        var diccionario = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
          lngSuma = 0.0,
          lngDigito = 0.0;
        for (var i = 0; i < 17; i++)
          lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
        lngDigito = 10 - lngSuma % 10;
        if (lngDigito == 10) return 0;
        return lngDigito;
      }

      if (validado[2] != digitoVerificador(validado[1]))
        return false;

      return true; //Validado
    }
    //Handler para el evento cuando cambia el input
    //Lleva la CURP a mayúsculas para validarlo
    function validarInput(input) {
      var curp = input.value.toUpperCase(),
        resultado = document.getElementById("resultado"),
        valido = "No válido";

      if (curpValida(curp)) { // ⬅️ Acá se comprueba
        valido = "Válido";
        resultado.classList.add("ok");
      } else {
        resultado.classList.remove("ok");
      }

      resultado.innerText = "CURP: " + curp + "\nFormato: " + valido;
    }
//////////////////////////////////////////////////////////////////////////
function cctValida(cct) {
      var res = /^([0-3]{1})([0-9]{1})([A-Z]{3})([0-9]{4})([A-Z]{1})$/,
        val = cct.match(res);

      if (!val)  //Coincide con el formato general?00AAA0000A/32AAA2909D
        return false;

      //Validar que coincida el dígito verificador
      function digitoVerificadorc(cct10) {
        //Fuente https://consultas.curp.gob.mx/CurpSP/
        var diccionarioL = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
          lngSuma2 = 0.0,
          lngDigito2 = 0.0;
        for (var i = 0; i < 9; i++)
          lngSuma2 = lngSuma2 + diccionarioL.indexOf(cct10.charAt(i)) * (10 - i);
        lngDigito2 = 10 - lngSuma2 % 10;
        if (lngDigito2 == 10) return 0;
        return lngDigito2;
      }

      if (val[2] != digitoVerificadorc(val[1]))
        return false;

      return true; //Validado
    }
    //Handler para el evento cuando cambia el input
    //Lleva la CURP a mayúsculas para validarlo
    function validarCct(input2) {
      var cct = input2.value.toUpperCase(),
        resultadoCct = document.getElementById("resultadoCct"),
        val = "No válido";

      if (cctValida(cct)) { // ⬅️ Acá se comprueba
        val = "Válido";
        resultadoCct.classList.add("ok");
      } else {
        resultadoCct.classList.remove("ok");
      }

      resultadoCct.innerText = "CCT: " + cct + "\nFormato: " + val;
    }
    
  </script>
 </body>

</html>
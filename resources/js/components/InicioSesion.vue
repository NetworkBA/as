<template>
  <div class="container justify-content-center">
    <div class="row">
      <div style="background-color: #76cee6" class="col">
        <span class="align-middle mx-auto text-white align-self-center"
          >Bienvenido</span
        >
      </div>
      <!-- test -->
      <div class="col">
        <div class="container">
          <div class="row justify-content-center">Inicio Sesion</div>
          <div class="row">
            <div class="col">
              <div class="row justify-content-center">
                <a href="login/facebook"><ion-icon name="logo-facebook"> </ion-icon></a>
                <a href="login/google"> <ion-icon name="logo-google"></ion-icon></a>
              </div>
              <div class="row justify-content-center">ó usa tu cuenta</div>
            </div>
          </div>
          <div class="form-group">
            <label for="Usuario">Usuario</label>
            <input class="form-control" id="Usuario" name="username" required/>
          </div>
          <div class="form-group">
            <label for="pass">Contraseña</label>
            <input type="password" class="form-control" id="pass" name="password" required/>
          </div>
          <div class="row">
            <div class="col">
              <div class="row justify-content-center">Olvide mi contraseña</div>
              <div class="row">
                <button
                  type="button"
                  class="btn btn-primary mx-auto btn-lg"
                  style="background-color: #76cee6"
                >
                  Registrarme
                </button>
              </div><br>
              <div class="row">
                <button
                  type="submit"
                  class="btn btn-success mx-auto btn-lg"
                  style="background-color: #27cc9a"
                >
                  Iniciar sesión
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>

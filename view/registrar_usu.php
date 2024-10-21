
   <div class="container">
      <div class="login-content">
         <form action="?controller=clap&action=registrtar_usu" method="post" autocomplete="off">
            <h2 class="title">Registro de Usuario</h2>
            <div class="input-div one">
               <div class="i">
                  <i class="fas fa-user"></i>
               </div>
               <div class="div">
                  <h5 class="input">Usuario</h5>
                  <input id="usuario" type="text" class="input" name="usuario" placeholder="">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <h5 class="input">Contraseña</h5>
                  <input type="contraseña" id="input" class="input" name="contraseña">
               </div>
            </div>
            <div class="input-div pass">
               <div class="i">
                  <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                  <h5class="input">Tipo de Usuario</h5>
                  <select name="select">
                    
                     <option value="01">ADMINISTRADOR</option>
                     <option value="02" selected>LIDER</option>
                      <option value="">...</option>
                  </select>
               </div>
            </div>
            <input name="btningresar" class="btn" type="submit" value="REGISTRAR">
         </form>
      </div>
   </div>

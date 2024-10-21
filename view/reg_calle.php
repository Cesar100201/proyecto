
        </header>


        <section class="price container">

            <div class="container price__table  sign-in">
                <div class="price__element">
                    <h1 class="subtitle">Registrar Nueva Calle</h1>
                    <form action="?controller=clap&action=cargar_CLAP" method="post">
                        <input type="text" name="ID_Comunidad" placeholder="ID Calle">
                        <input type="text" name="nombre_Comunidad" placeholder="Nombre de la Calle">
                        <input type="text" name="cedula_Comunidad" placeholder="Cedula del Lider Calle">
                        <input type="number" name="cant_alumbrado" placeholder="Alumbrado Publico">
                        <select name="vialidad" id="vialidad">
                            <option value="Asfalto">Asfalto</option>
                            <option value="Regresiva">Regresiva</option>
                            <option value="Camellon">Camellon</option>
                        </select>
                        <select name="aguas_blancas" id="aguas_blancas">
                            <option value="Pozo Profundo">Pozo Profundo</option>
                            <option value="Red Municipal">Red Municipal</option>
                            <option value="Sisterna">Sisterna</option>
                            <option value="Tanque Aereo">Tanque Aereo</option>
                        </select>
                        <select name="aguas_servidas" id="aguas_servidas">
                            <option value="Pozo septico">Pozo septico</option>
                            <option value="Cloacas">Cloacas</option>
                            <option value="Drenaje">Drenaje</option>
                        </select>
                        <div class="control-radio">
                            <label style="color: black;">¿Posee Electricidad?</label>
                            <div class="layout-full">
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="madreSi" name="carnetsi" value="Si" class="form-check-input">
                                    <label style="color: black;" for="madreSi" class="form-check-label">si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="madreNo" name="carnetsi" value="No" class="form-check-input">
                                    <label style="color: black;" for="madreNo" class="form-check-label">no</label>
                                </div>
                            </div>
                        </div>
                        <input type="number" name="transformadores" placeholder="transformadores">
                        <button>Registrar</button>
                    </form>
                </div>



            </div>
        </section>
    </div>




    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">CLAP</h2>

                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="#" class="nav__links">Registos</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Consultas</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Salir</a>
                    </li>

                </ul>
            </nav>


        </section>

        <section class="footer__copy container">


            <h3 class="footer__copyright">copyright &copy; 2023</h3>
        </section>
    </footer>
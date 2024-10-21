

        </header>


        <section class="price container">

            <div class="container price__table  sign-in">
                <div class="price__element">
                    <h1 class="subtitle">Registrar Nucleo Familiar</h1>
                <form action="?controller=clap&action=persona" method="post">
                    <input type="text" name="nombre_Comunidad" placeholder="Numero de Casa">
                    <label for="">Tenencia de la vivienda</label>
                    <select name="condicion" id="condicion">
                            <option value="Propia">Propia</option>
                            <option value="Alquilada">Alquilada</option>
                            <option value="Prestada">Prestada</option>
                            <option value="Invadida">Invadida</option>
                        </select>
                        <input type="number" name="cilindros" placeholder="Cantidad de Cilindros">
                        <div class="control-radio">
                            <label style="color: black;">¿Recibe Clap?</label>
                            <div class="layout-full">
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="r_clap" name="r_clap" value="Si" class="form-check-input">
                                    <label style="color: black;" for="r_clap" class="form-check-label">si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="r_clap" name="r_clap" value="No" class="form-check-input">
                                    <label style="color: black;" for="r_clap" class="form-check-label">no</label>
                                </div>
                            </div>
                        </div>
                        <select name="tipo_casa" id="tipo_casa">
                            <option value="Casa">Casa</option>
                            <option value="Apartamento">Apartamento</option>
                            <option value="Rancho">Rancho</option>
                            <option value="Quinta">Quinta</option>
                        </select>
                    <button>Siguiente</button>
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
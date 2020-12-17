                <form >
                    <div class="form-group row">
                        <label for="nombres" class="col-md-4 col-form-label text-md-right" value="Nombres">
                        Nombres </label>

                        <div class="col-md-6">
                            <input required id="nombres" type="text" class="form-control" name="nombres" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellidos" class="col-md-4 col-form-label text-md-right"> Apellidos</label>

                        <div class="col-md-6">
                            <input required id="apellidos" type="text" class="form-control" name="apellidos" autofocus>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sexo" class="col-md-4 col-form-label text-md-right">Sexo</label>

                        <div class="col-md-6">
                            <select required name="sexo" id="sexo" class="form-control">
                                <option value="masculino">Masculino</option>
                                <option value="femenina">Femenina</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-md-4 col-form-label text-md-right">telefono</label>

                        <div class="col-md-6">
                            <input required id="telefono" type="number" class="form-control" name="telefono" autofocus>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="edad" class="col-md-4 col-form-label text-md-right">Edad</label>

                        <div class="col-md-6">
                            <input required id="edad" type="number" class="form-control" name="edad" autofocus>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Correo</label>

                        <div class="col-md-6">
                            <input required id="email" type="email" class="form-control" name="email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                              Registrarse
                            </button>
                        </div>
                    </div>
                </form>
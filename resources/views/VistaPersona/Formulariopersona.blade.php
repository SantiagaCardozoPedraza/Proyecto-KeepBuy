                                                           
                                                           @if(count($errors)>0)
                                                           <div class="alert alert-danger" role="alert">
                                                               <ul>
                                                               @foreach($errors->all() as $errors )
                                                          <li> {{$errors}}</li>
                                                           @endforeach
                                                            </ul>
                                                           </div>

                                                           

                                                           @endif
                                                           
                                                           <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" placeholder="Numero de indentificacion" id="IdentificacionCliente" value="{{isset($persona->IdentificacionCliente)?$persona->IdentificacionCliente:old('IdentificacionCliente')}}" name="IdentificacionCliente">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" placeholder="Nombre" id="NombreCliente" value="{{isset($persona->NombreCliente)?$persona->NombreCliente:old('NombreCliente')}}" name="NombreCliente">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" placeholder="Apellido"id="ApelllidoCliente"value="{{isset($persona->ApelllidoCliente)?$persona->ApelllidoCliente:old('ApelllidoCliente')}}" name="ApelllidoCliente">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                            <select class="form-control" placeholder="Tipo de documento" id="TipoIdentificacionCliente" value="{{isset($persona->TipoIdentificacionCliente)?$persona->TipoIdentificacionCliente:old('TipoIdentificacionCliente')}}" name="TipoIdentificacionCliente">
                                                                 
                                                                 <option value="T.I">T.I</option>
                                                                 <option value="C.C">C.C</option>
                                                                  <option value="C.E">C.E</option>
                                                                  <option value="NIT">NIT</option>
                                                                </select>
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                                <input type="date" class="form-control" placeholder="Fecha de nacimiento" id="FechaDeNacimientoCliente"value="{{isset($persona->FechaDeNacimientoCliente)?$persona->FechaDeNacimientoCliente:old('FechaDeNacimientoCliente')}}"name="FechaDeNacimientoCliente">
                                                            </div>
                                     
                                                            <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                            <select class="form-control" placeholder="Genero" id="GeneroCliente" value="{{isset($persona->GeneroCliente)?$persona->GeneroCliente:old('GeneroCliente')}}" name="GeneroCliente">
                                                                 
                                                                 <option value="Masculino">Masculino</option>
                                                                 <option value="Femenino">Femenino</option>
                                                                  <option value="Indefinido">Indefinido</option>
                                                                  <option value="Otros">Otros</option>
                                                                </select>
                                                            </div>
                                                            


                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" placeholder="Direccion" id="DireccionCliente" value="{{isset($persona->DireccionCliente)?$persona->DireccionCliente:old('DireccionCliente')}}" name="DireccionCliente">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                                <input type="email" class="form-control" placeholder="Correo" id="CorreoCliente" value="{{isset($persona->CorreoCliente)?$persona->CorreoCliente:old('CorreoCliente')}}"name="CorreoCliente">
                                                            </div>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" placeholder="Telefono" id="TelefonoCliente" value="{{isset($persona->TelefonoCliente)?$persona->TelefonoCliente:old('TelefonoCliente')}}"name="TelefonoCliente">
                                                            </div>

                                                            <div class="text-center custom-pro-edt-ds">
                                                    <input type="submit" value="{{ $modo }}" class="btn btn-ctl-bt waves-effect waves-light">
                                                   
                                                     </div>





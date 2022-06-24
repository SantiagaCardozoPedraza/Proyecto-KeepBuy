                                 @if(count($errors)>0)

                                 <div class="alert alert-danger" role="alert">
                                     <ul>
                                 @foreach($errors->all() as $errors)
                                    <li>{{ $errors }}</li>
                                    @endforeach
                                    </ul>
                                     
                                 </div>   


                                    

                                 @endif

                                            <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                      
                                                        <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Nombre" name="NombreProducto" value="{{isset($producto->NombreProducto)?$producto->NombreProducto:old('NombreProducto')}}" id="NombreProducto">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                             

                                                       <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Marca" name="MarcaProducto"value="{{isset($producto->MarcaProducto)?$producto->MarcaProducto:old('MarcaProducto')}}"id="MarcaProducto">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                                <select class="form-control" placeholder="categoria" id="CategoriaProducto" value="{{isset($producto->CategoriaProducto)?$producto->CategoriaProducto:old('CategoriaProducto')}}" name="CategoriaProducto">
                                                                 
                                                                 <option value="Viveres">Viveres</option>
                                                                 <option value="Bebidas">Bebidas</option>
                                                                  <option value="Aseo">Aseo</option>
                                                                  <option value="Utiles">Utiles</option>
                                                                </select>
                                                            </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Descripcion" name="DescripcionProducto" value="{{isset($producto->DescripcionProducto)?$producto->DescripcionProducto:old('DescripcionProducto')}}" id="DescripcionProducto">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                        <input type="date" class="form-control" placeholder="Fecha de exportacion" name="FechaDeEntradaProducto" value="{{isset($producto->FechaDeEntradaProducto)?$producto->FechaDeEntradaProducto:old('FechaDeEntradaProducto')}}" id="FechaDeEntradaProducto">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                        <input type="date" class="form-control" placeholder="Fecha de caducidad" name="FechaDeVencimientoProducto" value="{{isset($producto->FechaDeVencimientoProducto)?$producto->FechaDeVencimientoProducto:old('FechaDeVencimientoProducto')}}"id="FechaDeVencimientoProducto">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                        <input type="number" class="form-control" placeholder="Cantidad" name="CantidadProducto" value="{{isset($producto->CantidadProducto)?$producto->CantidadProducto:old('CantidadProducto')}}" id="CantidadProducto">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Descuento"name="DescuentoProducto" value="{{isset($producto->DescuentoProducto)?$producto->DescuentoProducto:old('DescuentoProducto')}}"id="DescuentoProducto">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Precio"name="PrecioProducto" value="{{isset($producto->PrecioProducto)?$producto->PrecioProducto:old('PrecioProducto')}}" id="PrecioProducto">
                                                    </div>
                                                    
                                                    <div class="input-group mg-b-pro-edt">
                                                       
                                     
                                                   
                                                        <span class="input-group-addon"><i class="" aria-hidden="true"></i></span>
                                                        @if(isset($producto->ImagenProducto))
                                                        <img src="{{asset('storage').'/'.$producto->ImagenProducto}}" alt="">
                                                        @endif
                                                        <input type="file" class="form-control" placeholder="Foto" name="ImagenProducto" value="{{isset($producto->ImagenProducto)?$producto->ImagenProducto:old('ImagenProducto')}}" id="ImagenProducto">
                                                    </div>

                                                    <div class="text-center custom-pro-edt-ds">
                                                    <input type="submit" value="{{$modo }}" class="btn btn-ctl-bt waves-effect waves-light">
                                                   
                                                     </div>







                                        
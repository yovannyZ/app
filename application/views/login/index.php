 <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Ingresa!</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">¿Olvidaste tu contraseña?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="post" action="<?php echo base_url('Login/validar') ?>">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="usuario">                                        
                                    </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="contraseña">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Recuerdame
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button  type="submit" id="btn-login" class="btn btn-success col-sm-12 ">Ingresar</button>
                                    </div>
                                </div>
                                 <?php
                                 if(isset($error)){
                                      ?> 
                                    <div id="signupalert" style="display:block" class="alert alert-danger">
                                        <p class="text-center"><?php echo $error ?></p>
                                        <span></span>
                                    </div> 
                                     <?php
                                 }
                                 ?>
                            </form>     
                        </div>                     
                    </div>  
        </div>
    </div>
    
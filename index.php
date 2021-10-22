 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <title>Home</title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        
        <div class="container">
            <div class="blue lighten-5 center">
                <h1>Registro</h1>
            </div>
            
            <div class="row">
                
                <form method="post" action="Login.php">
                    <div class="input-field col s4">
                      <input id="User" type="text" name="user" class="validate" required/>
                      <label for="User">Usuario</label>
                    </div>
                    
                    <div class="input-field col s4">
                      <input id="Pass" type="password" name="pass" class="validate" required/>
                      <label for="Pass">Password</label>
                    </div>
                    
                    <div class="input-field col s1">
                        <input type="submit" value="Enviar" class="btn waves-effect waves-light"/>
 
                    </div>
                    
                </form>
                
            </div>
            
        </div>
        
        
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>
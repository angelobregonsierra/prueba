<!DOCTYPE html>
<html lang="es">
  <head>    
    <title>PHP en AWS</title>    
    <meta charset="UTF-8">
    <meta name="title" content="PHP en AWS">
    <meta name="description" content="Página web sobre PHP en AWS">    
  </head>  
  <body>    
    <header>
      <h1>PHP en AWS</h1>      
    </header>    
    <section>      
      <article>
        <p>A continuación se mostrará un número aleatorio (actualice su navegador para ver un nuevo número):
        <strong>
        <?php 
            $num=rand() . "\n";
            echo $num;
        ?></strong></p>
      </article>
    </section>
  </body>  
</html>

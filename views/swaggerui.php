<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link rel="stylesheet" type="text/css" href="http://frogix/resources/swaggerui/swagger-ui.css" />
    <script type="text/javascript" src="http://frogix/resources/swaggerui/swagger-ui.js"></script>
  </head>

  <body>
    <div id="swagger-ui"></div>
  </body>
  <script type="text/javascript">
    window.onload = () => {
      // Create UI in DOM element with id 'swagger-ui'
      const ui = SwaggerUIBundle({
        dom_id: '#swagger-ui',
        url: '<?php echo $url; ?>',
      });
    };
  </script>
</html>
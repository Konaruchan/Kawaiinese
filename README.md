# Kawaiinese

La página oficial de Kawaiinese es una plataforma que tiene como objetivo principal ayudar y expandir el idioma ficticio aún en desarrollo conocido como Kawaiinese. Este proyecto busca proporcionar herramientas para la traducción de palabras al Kawaiinese, así como también ofrecer la posibilidad de sugerir nuevas palabras para enriquecer el vocabulario de este idioma en constante evolución.

## Sistema de Traducción

El sistema de traducción implementado en la página oficial de Kawaiinese se encuentra en la página `traductor.html`. Este sistema está diseñado para traducir palabras del español al Kawaiinese utilizando un archivo de Excel como base de datos.

### Funcionamiento

1. **Carga del archivo Excel:** Cuando se carga la página, se realiza una solicitud HTTP para obtener el archivo Excel que contiene las palabras y sus traducciones al Kawaiinese.

2. **Procesamiento del archivo Excel:** Una vez que se ha cargado el archivo Excel, se utiliza la biblioteca `xlsx.full.min.js` para procesar los datos del archivo. Se lee la hoja de cálculo y se convierte en un objeto JSON que contiene las palabras en español y sus traducciones en Kawaiinese.

3. **Búsqueda de la traducción:** Cuando el usuario ingresa una palabra en español y hace clic en el botón de traducción, se activa la función `buscarTraduccion()`. Esta función busca la palabra ingresada en el objeto JSON obtenido del archivo Excel y muestra la traducción correspondiente en la página.

### Tecnologías Utilizadas

- **HTML:** La estructura básica de la página está escrita en HTML.
- **CSS:** Se utiliza CSS para estilizar la página y hacerla más atractiva visualmente.
- **JavaScript:** Se utiliza JavaScript para implementar la lógica de traducción de palabras y la interacción con el archivo Excel.
- **xlsx.full.min.js:** Esta biblioteca JavaScript se utiliza para procesar archivos Excel en formato `.xlsx`.

## Sistema de Sugerencia de Palabras

El sistema de sugerencia de palabras en la página oficial de Kawaiinese permite a los usuarios proponer nuevas palabras en español y sus traducciones al Kawaiinese. Estas sugerencias son enviadas a través de un formulario en la página `form.html`.

### Funcionamiento

1. **Envío del Formulario:** Los usuarios ingresan la palabra en español y su traducción en Kawaiinese en el formulario proporcionado en la página `form.html`. También pueden proporcionar un comentario adicional y su dirección de correo electrónico y apodo.

2. **Procesamiento del Formulario:** Cuando se envía el formulario, los datos ingresados por el usuario se envían a través de un servicio de formularios en línea, como Formspree, utilizando el método POST.

3. **Recepción y Evaluación:** Una vez que se envía el formulario, los datos son recibidos por el propietario del sitio web, quien puede revisar las sugerencias de palabras recibidas. Se evalúan las sugerencias y se determina si cumplen con los criterios para ser agregadas al diccionario.

4. **Aceptación de Propuestas:** Las sugerencias de palabras que se consideren adecuadas y precisas pueden ser aceptadas por el propietario del sitio web. Estas nuevas palabras pueden ser agregadas al archivo Excel que sirve como base de datos para el sistema de traducción.

### Tecnologías Utilizadas

- **HTML:** El formulario de sugerencia de palabras está diseñado utilizando HTML.
- **CSS:** Se utiliza CSS para estilizar el formulario y mejorar su apariencia visual.
- **JavaScript:** Se puede utilizar JavaScript para validar los campos del formulario y proporcionar una mejor experiencia de usuario.
- **Formspree (o similar):** Se utiliza un servicio de formularios en línea, como Formspree, para recibir y procesar los datos del formulario y enviarlos al correo electrónico del propietario del sitio web.

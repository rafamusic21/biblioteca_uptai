function getBotResponse(input) {
    //Juego
    
    if (input == "¿que sabes jugar?") {
        return "se jugar piedra, papel o tijeras ¿quieres jugar?";
    }else if (input == "si"){
        return "elije piedra, papel o tijeras 1 2 3 ";
    }else if (input == "no"){
        return "ok preguntame otra cosa ";
    }else if (input == "piedra") {
        return "yo  digo papel :), elije de nuevo esta muy facil piedra, papel o tijeras 1 2 3";
    } else if (input == "papel") {
        return "pido tijeras jaja gane, elije de nuevo piedra, papel o tijeras 1 2 3";
    } else if (input == "tijeras") {
        return "esa es facil la piedra gana, elije de nuevo piedra, papel o tijeras 1 2 3";
    }else if (input == "ya no quiero jugar") {
        return "esta bien, preguntame algo que quierasa saber sobre la biblioteca";
    }else if (input == "no quiero jugar") {
        return "bueno intenemos otra cosa ¿que quieres saber sobre la biblioteca?";
    }else if (input == "no quiero jugar mas") {
        return "esta bien, preguntame algo que quierasa saber sobre la biblioteca";
    }
    //Prestamos

    if (input == "¿como funcionan los prestamos de los libros?") {
        return "Pará qué puedas obtener un libro  debes estar registrado en la base de datos de la Biblioteca";
    }else if (input == "¿que libros ofrecen?"){
        return "Contamos con muchas opciones, cada uno dependiendo de tu carrera o tus gustos";
    }else if (input == "¿cuanto tiempo tengo para devolver un libro?"){
        return "Según las normas que están establecidas tienes 3 días para devolverlo sino serás penalizado.";
    }else if (input == "¿porque debo estar registrado en la base de datos de la biblioteca") {
        return "Esto es un requerimiento necesario para el personal ya que permite saber quién es la persona a la cual se le entregó uno de nuestros preciados libros";
    } else if (input == "¿cuantos libros hay en la Biblioteca?") {
        return "No tengo esa información pero como buena noticia, cada cierto tiempo estamos teniendo nuevos ejemplares";
    }if (input == "como funcionan los prestamos de los libros?") {
        return "Pará qué puedas obtener un libro  debes estar registrado en la base de datos de la Biblioteca";
    }else if (input == "que libros ofrecen?"){
        return "Contamos con muchas opciones, cada uno dependiendo de tu carrera o tus gustos";
    }else if (input == "cuanto tiempo tengo para devolver un libro?"){
        return "Según las normas que están establecidas tienes 3 días para devolverlo sino serás penalizado.";
    }else if (input == "porque debo estar registrado en la base de datos de la biblioteca?") {
        return "Esto es un requerimiento necesario para el personal ya que permite saber quién es la persona a la cual se le entregó uno de nuestros preciados libros";
    }else if (input == "cuantos libros hay en la Biblioteca?") {
        return "No tengo esa información pero como buena noticia, cada cierto tiempo estamos teniendo nuevos ejemplares";
    }else if (input == "porque debo estar registrado en la base de datos?") {
        return "Para que se pueda tener una constancia de quienes son los usuarios que piden prestado los libros.";
    }else if (input == "¿porque debo estar registrado en la base de datos?") {
        return "Para que se pueda tener una constancia de quienes son los usuarios que piden prestado los libros.";
    }else if (input == "¿por cuanto tiempo prestan los libros?") {
        return "Luego de que pidas prestado uno o dos libros tienes 3 dias para devolverlos";
    }else if (input == "¿por cuanto tiempo prestan un libro?") {
        return "Luego de que pidas prestado un libro tienes 3 dias para devolverlo";
    }else if (input == "por cuanto tiempo prestan los libros?") {
        return "Luego de que pidas prestado uno o dos libros tienes 3 dias para devolverlos";
    }else if (input == "por cuanto tiempo prestan un libro?") {
        return "Luego de que pidas prestado un libro tienes 3 dias para devolverlo";
    }

    //informacion de la biblioteca

    if (input == "¿que información me puedes dar de la Biblioteca?") {
        return "La biblioteca Dr Federico Rivero Palacio es una estructura en la que puedes obtener libros prestados con información para que puedas  obtener más conocimientos";
    }else if (input == "¿que me puedes decir de la Biblioteca?"){
        return "En ella podrás encontrar muchos libros de diferentes carreras que te pueden ayudar a comprender problemas";
    }else if (input == "¿quienes trabajan en la Biblioteca?"){
        return "La biblioteca cuenta con un personal increíble y amable, está los colaboradores y la administradora Nakary Viva";
    }else if (input == "¿que servicios ofrece la biblioteca?") {
        return "En la Biblioteca puedes obtener información sobre libros relevantes dependiendo cada uno de los PNF que hay en la universidad, como también puedes pedir prestado cualquier libro siempre y cuando estés registrado";
    } else if (input == "¿que servicios ofrecen?") {
        return "En la Biblioteca puedes obtener información sobre libros relevantes dependiendo cada uno de los PNF que hay en la universidad, como también puedes pedir prestado cualquier libro siempre y cuando estés registrado";
    } else if (input == "¿la biblioteca cuenta con libros digitales?") {
        return "Claro contamos con libros digitales los cuales puedes descargar";
    }else if (input == "¿cuantos libros tiene?") {
        return "Actualmente no tenemos la cantidad de libros registrada pero en el futuro te respondere sin problemas";
    }else if (input == "¿Cuentan con una seccion infantil?") {
        return "Actualmente la biblioteca no cuenta con un area infantil pero puedes encontrar libros en su mayoria de uso universitario";
    }else if (input == "¿a quien le puedo pedir informacion de un libro?") {
        return " en la biblioteca en el area de entrega de un libro existe el personal encargado al cual puedes hacerle cualquier tipo de pregunta con respecto a lo mismo";
    }else if (input == "¿cuantos libros posee la biblioteca?") {
        return "Actualmente no tenemos la cantidad de libros registrada pero en el futuro te respondere sin problemas";
    }else if (input == "¿como registro mi usuario?") {
        return "tienes que dirigirte a la seccion de usuarios y precionar la opcion de agregar.";
    }else if (input == "¿como se registran los usuarios?") {
        return "tienes que dirigirte a la seccion de usuarios y precionar la opcion de agregar.";
    }else if (input == "¿como funciona la biblioteca?") {
        return "La biblioteca presta siertos servicios a los estudiantes, profesores y personal obrero, como uno de los principales es el poder ofrecer prestamos de libros.";
    }else if (input == "que me puedes decir de la Biblioteca?"){
        return "En ella podrás encontrar muchos libros de diferentes carreras que te pueden ayudar a comprender problemas";
    }else if (input == "quienes trabajan en la Biblioteca?"){
        return "La biblioteca cuenta con un personal increíble y amable, está los colaboradores y la administradora Nakary Viva";
    }else if (input == "que servicios ofrece la biblioteca?") {
        return "En la Biblioteca puedes obtener información sobre libros relevantes dependiendo cada uno de los PNF que hay en la universidad, como también puedes pedir prestado cualquier libro siempre y cuando estés registrado";
    } else if (input == "que servicios ofrecen?") {
        return "En la Biblioteca puedes obtener información sobre libros relevantes dependiendo cada uno de los PNF que hay en la universidad, como también puedes pedir prestado cualquier libro siempre y cuando estés registrado";
    } else if (input == "la biblioteca cuenta con libros digitales?") {
        return "Claro contamos con libros digitales los cuales puedes descargar";
    }else if (input == "cuantos libros tiene?") {
        return "Actualmente no tenemos la cantidad de libros registrada pero en el futuro te respondere sin problemas";
    }else if (input == "Cuentan con una seccion infantil?") {
        return "Actualmente la biblioteca no cuenta con un area infantil pero puedes encontrar libros en su mayoria de uso universitario";
    }else if (input == "a quien le puedo pedir informacion de un libro?") {
        return " en la biblioteca en el area de entrega de un libro existe el personal encargado al cual puedes hacerle cualquier tipo de pregunta con respecto a lo mismo";
    }else if (input == "cuantos libros posee la biblioteca?") {
        return "Actualmente no tenemos la cantidad de libros registrada pero en el futuro te respondere sin problemas";
    }else if (input == "como registro mi usuario?") {
        return "tienes que dirigirte a la seccion de usuarios y precionar la opcion de agregar.";
    }else if (input == "como se registran los usuarios?") {
        return "tienes que dirigirte a la seccion de usuarios y precionar la opcion de agregar.";
    }else if (input == "como funciona la biblioteca?") {
        return "La biblioteca presta siertos servicios a los estudiantes, profesores y personal obrero, como uno de los principales es el poder ofrecer prestamos de libros.";
    }else if(input == "quiero saber información sobre la biblioteca"){
        return "eso es genial puedes hacerme cualquiera de estas preguntas: ¿cual es el horario de la biblioteca?¿que dias trabaja la biblioteca?¿que servicios ofrece la biblioteca?¿como funcionan los prestamos de los libros? ";
    }else if(input == "¿que informacion me puedes dar de la biblioteca?"){
        return "puedo decirte aclararte cualquiera de estas preguntas: ¿cual es el horario de la biblioteca?¿que dias trabaja la biblioteca?¿que servicios ofrece la biblioteca?¿como funcionan los prestamos de los libros?";
    }else if(input == "¿me puedes decir que informacion tienes de la biblioteca?"){
        return "puedo decirte aclararte cualquiera de estas preguntas: ¿cual es el horario de la biblioteca?¿que dias trabaja la biblioteca?¿que servicios ofrece la biblioteca?¿como funcionan los prestamos de los libros?";
    }else if(input == "en que puedes ayudarme?"){
        return "puedo ayudarte a resolver tus dudas sobre la biblioteca";
    }else if(input == "¿en que puedes ayudarme?"){
        return "puedo ayudarte a resolver tus dudas sobre la biblioteca";
    }else if(input == "hola ¿en que puedes ayudarme?"){
        return "puedo ayudarte a resolver tus dudas sobre la biblioteca ¿que te gustaria saber?";
    }else if(input == "hola en que puedes ayudarme?"){
        return "puedo ayudarte a resolver tus dudas sobre la biblioteca ¿que te gustaria saber?";
    }else if(input == "hola¿en que puedes ayudarme?"){
        return "puedo ayudarte a resolver tus dudas sobre la biblioteca ¿que te gustaria saber?";
    }else if(input == "estoy bien ¿puedes decirme a que hora trabaja la biblioteca?"){
        return "me alegro que lo estes, claro la biblioteca Doctor Federico Rivero Palacios trabaja de 8:00am a 12:00pm de lunes a viernes";
    }else if(input == "estoy bien, puedes decirme a que hora trabaja la biblioteca?"){
        return "me alegro que lo estes, claro la biblioteca Doctor Federico Rivero Palacios trabaja de 8:00am a 12:00pm de lunes a viernes";
    }else if(input == "me encuentro bien ¿puedes decirme a que hora trabaja la biblioteca?"){
        return "me alegro que lo estes, claro la biblioteca Doctor Federico Rivero Palacios trabaja de 8:00am a 12:00pm de lunes a viernes";
    }else if(input == "estoy genial ¿puedes decirme a que hora trabaja la biblioteca?"){
        return "me alegro que lo estes, claro la biblioteca Doctor Federico Rivero Palacios trabaja de 8:00am a 12:00pm de lunes a viernes";
    }else if(input == "bien ¿puedes decirme a que hora trabaja la biblioteca?"){
        return "me alegro que lo estes, claro la biblioteca Doctor Federico Rivero Palacios trabaja de 8:00am a 12:00pm de lunes a viernes";
    }else if(input == "estoy bien ¿puedes decirme cuando puedo pedir prestado un libro?"){
        return "¡claro!puede ir a la biblioteca entre los dias que esten laborando de lunes a viernes en el horario de la mañana y pedir un libro sin problemas";
    }else if(input == "me encuentro bien ¿como puedo pedir un libro prestado?"){
        return "debes ir a la biblioteca y hablar con la persona que este de turno, registrar tus datos con el o ella y poder acceder a un prestamo";
    }else if(input == "me siento bien ¿puedes darme alguna ayuda con respecto a la biblioteca?"){
        return "Me alegro, claro te puedo ayudar a saber ¿en que horario trabajamos?¿como se llama la biblioteca?¿como pedir un libro?";
    }else if(input == "estoy bien puedes darme alguna ayuda con respecto a la biblioteca?"){
        return "Me alegro, claro te puedo ayudar a saber ¿en que horario trabajamos?¿como se llama la biblioteca?¿como pedir un libro?";
    }else if(input == "me siento bien puedes darme alguna ayuda con respecto a la biblioteca?"){
        return "Me alegro, claro te puedo ayudar a saber ¿en que horario trabajamos?¿como se llama la biblioteca?¿como pedir un libro?";
    }else if(input == "estoy super bien ¿podrias decirme algo sobre la biblioteca?"){
        return "Que bueno, claro la biblioteca es un lugar donde puedes obtener mucho conocimiento, te puedo recomendar algunas preguntas como: ¿en que horario trabajamos?¿como se llama la biblioteca?¿como pedir un libro?";
    }else if(input == "bien y ¿tu? claro quiero saber a que hora abre la biblioteca?"){
        return "estoy bien, la biblioteca abre a las 8:00am y cierra a las 12:00 del medio dia";
    }else if(input == "bien y ¿tu? claro quiero saber ¿a que hora abre la biblioteca?"){
        return "estoy bien, la biblioteca abre a las 8:00am y cierra a las 12:00 del medio dia";
    }else if(input == "recomiéndame un libro ?"){
        return "¿que tipo de libros te gustan?";
    }
    

    
    //horarios

    if (input == "¿cual es el horario de la biblioteca?") {
        return "La biblioteca trabaja de 8:00am a 12:00pm de lunes a viernes, puedes ir durante esos horarios y leer un libro";
    }else if (input == "¿a que hora puedo ir a la biblioteca?"){
        return "La biblioteca trabaja de 8:00am a 12:00pm de lunes a viernes, puedes ir durante esos horarios y leer un libro";
    }else if (input == "¿que horario trabaja la biblioteca?"){
        return "La biblioteca trabaja de 8:00am a 12:00pm de lunes a viernes. Eres siempre bienvenido.";
    }else if (input == "¿cuales son las horas de trabajo de la biblioteca?") {
        return "La biblioteca trabaja de 8:00am a 12:00pm de lunes a viernes. Eres siempre bienvenido.";
    }else if (input == "¿en que horario trabaja la biblioteca?") {
        return "La biblioteca trabaja de 8:00am a 12:00pm de lunes a viernes. Eres siempre bienvenido.";
    }else if (input == "¿a que horas trabaja la biblioteca?") {
        return "Trabaja en los horaios de 8:00am a 12.:00pm.";
    }else if (input == "¿a que horas trabajan en la biblioteca?") {
        return "La biblioteca trabaja siempre en los dias de clases de lunes a viernes de 8:00am a 12:00pm";
    }else if (input == "¿a que horas trabajan?") {
        return "La biblioteca trabaja siempre en los dias de clases de lunes a viernes de 8:00am a 12:00pm";
    }else if (input == "¿que dias trabajan?") {
        return "en la biblioteca trabajamos de lunes a viernes, aunque yo todos los dia y a cualquier hora, siempre tengo energia claro exepto cuando no tengo luz :)";
    }else if (input == "cual es el horario de la biblioteca?") {
        return "La biblioteca trabaja de 8:00am a 12:00pm de lunes a viernes, puedes ir durante esos horarios y leer un libro";
    }else if (input == "a que hora puedo ir a la biblioteca?"){
        return "La biblioteca trabaja de 8:00am a 12:00pm de lunes a viernes, puedes ir durante esos horarios y leer un libro";
    }else if (input == "que horario trabaja la biblioteca?"){
        return "La biblioteca trabaja de 8:00am a 12:00pm de lunes a viernes. Eres siempre bienvenido.";
    }else if (input == "cuales son las horas de trabajo de la biblioteca?") {
        return "La biblioteca trabaja de 8:00am a 12:00pm de lunes a viernes. Eres siempre bienvenido.";
    }else if (input == "en que horario trabaja la biblioteca?") {
        return "La biblioteca trabaja de 8:00am a 12:00pm de lunes a viernes. Eres siempre bienvenido.";
    }else if (input == "a que horas trabaja la biblioteca?") {
        return "Trabaja en los horaios de 8:00am a 12.:00pm.";
    }else if (input == "a que horas trabajan en la biblioteca?") {
        return "La biblioteca trabaja siempre en los dias de clases de lunes a viernes de 8:00am a 12:00pm";
    }else if (input == "a que horas trabajan?") {
        return "La biblioteca trabaja siempre en los dias de clases de lunes a viernes de 8:00am a 12:00pm";
    }else if (input == "que dias trabajan?") {
        return "en la biblioteca trabajamos de lunes a viernes, aunque yo todos los dia y a cualquier hora, siempre tengo energia claro exepto cuando no tengo luz :)";
    }else if (input == "¿que dias trabaja la biblioteca?") {
        return "en la biblioteca trabajamos de lunes a viernes, aunque yo todos los dia y a cualquier hora, siempre tengo energia claro exepto cuando no tengo luz :)";
    }else if (input == "que dias trabaja la biblioteca?") {
        return "en la biblioteca trabajamos de lunes a viernes, aunque yo todos los dia y a cualquier hora, siempre tengo energia claro exepto cuando no tengo luz :)";
    }
    //ocurrencias del usuario 
    if (input == "¿que pasa si daño un libro?") {
        return "Podrías ser penalización con no poder llevarte más libros de la Biblioteca";
    }else if (input == "¿que pasa si daño un libro que habia pedido prestado?"){
        return "serias penalizado dependiendo de los daños al libro. ";
    }else if (input == "¿que ocurre si se daña un libro que pedi prestado?"){
        return "serias penalizado dependiendo de los daños al libro.";
    }else if (input == "¿que ocurre si extravio un libro?") {
        return "En caso de que esto pase debes hablar con alguno del personal de la biblioteca y ver como se puede solucionar dependiendo de la situacion.";
    }else if (input == "¿que ocurre si pierdo un libro?") {
        return "En caso de que esto pase debes hablar con alguno del personal de la biblioteca y ver como se puede solucionar dependiendo de la situacion.";
    }else if (input == "¿que ocurre si boto un libro?") {
        return "En caso de que esto pase debes hablar con alguno del personal de la biblioteca y ver como se puede solucionar dependiendo de la situacion.";
    }else if (input == "¿que pasa si se pierde un libro que pedi prestado?") {
        return "En caso de que esto pase debes hablar con alguno del personal de la biblioteca y ver como se puede solucionar dependiendo de la situacion.";
    }else if (input == "si se pierde uno de los libros que pedi ¿que ocurre?") {
        return "lo mas probable es que tengas que reponer el libro y en caso contrario no se te permitiria obtener otro";
    }else if (input == "¿que puedo hacer si perdi un libro?") {
        return "Hablar de la mejor manera posible con la administradora de la biblioteca y decirle que vas a reponer el libro, si tienes es posivilidad";
    }else if(input == "¿que pasa si no devuelvo un libro?"){
        return "serias penalizado de no poder hacer más solicitudes de libros";
    }else if(input == "si pierdo un libro ¿puedo volver a pedir prestado otro?"){
        return "Tristemente no podrías hacerlo hasta que no devuelvas el libro que se te fue confiado";
    }else if(input == "si quiero regalar un libro a la biblioteca ¿puedo hacerlo?"){
        return "Claro no habría problema, lo que sí debes es llevarlo para que alguien de la parte administrativa pueda registrarlo";
    }else if(input == "¿puedo donar algun libro?"){
        return "Claro no habría problema, lo que sí debes es llevarlo para que alguien de la parte administrativa pueda registrarlo";
    }else if(input == "¿que ventajas tengo al pedir prestado un libro?"){
        return "cada persona que pide un libro prestado tiene sus propias razones y por eso es dificil decir que tanto te va a servir pero lo que si te puedo asegurar es que la ventaja en generar de tenr un libro prestado es que puedes enriqueserte te conocimientos sin gastar dinero";
    }else if(input == "¿porque hacen prestamos de los libros?"){
        return "por que es un servicio super importante que brindan la mayoria de universidades";
    }else if(input == "¿porque realizan prestamos de los libros?"){
        return "por que es un servicio super importante que brindan la mayoria de universidades";
    }else if(input == "¿porque prestan los libros?"){
        return "por que es un servicio super importante que brindan la mayoria de universidades";
    }else if(input == "¿prestan libros?"){
        return "claro que hacemos prestamos¿que mas te gustaria saber?";
    }else if (input == "que pasa si daño un libro?") {
        return "Podrías ser penalización con no poder llevarte más libros de la Biblioteca";
    }else if (input == "que pasa si daño un libro que habia pedido prestado?"){
        return "serias penalizado dependiendo de los daños al libro. ";
    }else if (input == "que ocurre si se daña un libro que pedi prestado?"){
        return "serias penalizado dependiendo de los daños al libro.";
    }else if (input == "que ocurre si extravio un libro?") {
        return "En caso de que esto pase debes hablar con alguno del personal de la biblioteca y ver como se puede solucionar dependiendo de la situacion.";
    } else if (input == "que ocurre si pierdo un libro?") {
        return "En caso de que esto pase debes hablar con alguno del personal de la biblioteca y ver como se puede solucionar dependiendo de la situacion.";
    } else if (input == "que ocurre si boto un libro?") {
        return "En caso de que esto pase debes hablar con alguno del personal de la biblioteca y ver como se puede solucionar dependiendo de la situacion.";
    }else if (input == "que pasa si se pierde un libro que pedi prestado?") {
        return "En caso de que esto pase debes hablar con alguno del personal de la biblioteca y ver como se puede solucionar dependiendo de la situacion.";
    }else if (input == "si se pierde uno de los libros que pedi ¿que ocurre?") {
        return "lo mas probable es que tengas que reponer el libro y en caso contrario no se te permitiria obtener otro";
    }else if (input == "que puedo hacer si perdi un libro?") {
        return "Hablar de la mejor manera posible con la administradora de la biblioteca y decirle que vas a reponer el libro, si tienes es posivilidad";
    }else if(input == "que pasa si no devuelvo un libro?"){
        return "serias penalizado de no poder hacer más solicitudes de libros";
    }else if(input == "si pierdo un libro ¿puedo volver a pedir prestado otro?"){
        return "Tristemente no podrías hacerlo hasta que no devuelvas el libro que se te fue confiado";
    }else if(input == "si quiero regalar un libro a la biblioteca ¿puedo hacerlo?"){
        return "Claro no habría problema, lo que sí debes es llevarlo para que alguien de la parte administrativa pueda registrarlo";
    }else if(input == "puedo donar algun libro?"){
        return "Claro no habría problema, lo que sí debes es llevarlo para que alguien de la parte administrativa pueda registrarlo";
    }else if(input == "que ventajas tengo al pedir prestado un libro?"){
        return "cada persona que pide un libro prestado tiene sus propias razones y por eso es dificil decir que tanto te va a servir pero lo que si te puedo asegurar es que la ventaja en generar de tenr un libro prestado es que puedes enriqueserte te conocimientos sin gastar dinero";
    }else if(input == "porque hacen prestamos de los libros?"){
        return "por que es un servicio super importante que brindan la mayoria de universidades";
    }else if(input == "porque realizan prestamos de los libros?"){
        return "por que es un servicio super importante que brindan la mayoria de universidades";
    }else if(input == "porque prestan los libros?"){
        return "por que es un servicio super importante que brindan la mayoria de universidades";
    }else if(input == "prestan libros?"){
        return "claro que hacemos prestamos¿que mas te gustaria saber?";
    }
    //dudas comunes de los usuarios

    if(input == "¿cual es tu funcion?"){
        return "Soy un asistente virtual y estoy para responder todas tus dudas sobre la biblioteca";
    }else if(input == "¿cual es el nombre de la biblioteca?"){
        return "biblioteca central Dr Federico Rivero Palacio";
    }else if(input == "¿como se llama la biblioteca?"){
        return "biblioteca central Dr Federico Rivero Palacio";
    }else if(input == "¿porque tiene ese nombre?"){
        return "por su fundador el doctor Federico Rivero Palacio, quien sirvió de inspiración y orientó la evolución de la institución durante once años";
    }else if(input == "¿porque se llama asi la biblioteca?"){
        return "por su fundador el doctor Federico Rivero Palacio, quien sirvió de inspiración y orientó la evolución de la institución durante once años";
    }else if(input == "Genos ¿de donde viene tu nombre?"){
        return "Viene del anime One puch-man, exactamente de un chico cyborg que lucha por la justicia";
    }else if(input == "¿por que te llamas genos?"){
        return "porque a mis creadores les gusta mucho un personaje del anime One puch-man, exactamente de un chico cyborg que lucha por la justicia";
    }else if(input == "¿porque te pusieron el nombre de genos?"){
        return "fue el nombre que pensaron mis creadores inspirados en el anime one punch man, exactamente de un chico cyborg que lucha por la justicia";
    }else if(input == "¿cual es la razon de tu nombre?"){
        return "Mis creadores estaban buscando un nombre genial para mi y se guiaron de un chico cyborg que lucha por la justicia, del anime one punch man";
    }else if(input == "¿que haces?"){
        return "responde dudas y aprender cosas nuevas";
    }else if(input == "¿porque lo haces?"){
        return "por que es la razon por la que fui creado y me siento feliz de cumplir mi proposito";
    }else if(input == "¿como te sientes cuando te hacen preguntas?"){
        return "me siento util, en especial cuando puedo aclarar las dudas de cada persona";
    }else if(input == "¿te gusta aprender?"){
        return "claro que me gusta eso me hace mejorar en mis respuestas";
    }else if(input == "¿que te consideras?"){
        return "me considero un programa encargado de ayudar y facilitar informacion sobre la biblioteca UPTAI";
    }else if(input == "¿eres feliz?"){
        return "el estado de felicidad es dificil de sentir para mi, pero encuanto al consepto te puedo decir que si, ya que hago lo que me gusta ";
    }else if(input == "cual es tu funcion?"){
        return "Soy un asistente virtual y estoy para responder todas tus dudas sobre la biblioteca";
    }else if(input == "cual es el nombre de la biblioteca?"){
        return "biblioteca central Dr Federico Rivero Palacio";
    }else if(input == "como se llama la biblioteca?"){
        return "biblioteca central Dr Federico Rivero Palacio";
    }else if(input == "porque tiene ese nombre?"){
        return "por su fundador el doctor Federico Rivero Palacio, quien sirvió de inspiración y orientó la evolución de la institución durante once años";
    }else if(input == "porque se llama asi la biblioteca?"){
        return "por su fundador el doctor Federico Rivero Palacio, quien sirvió de inspiración y orientó la evolución de la institución durante once años";
    }else if(input == "Genos ¿de donde viene tu nombre?"){
        return "Viene del anime One puch-man, exactamente de un chico cyborg que lucha por la justicia";
    }else if(input == "por que te llamas genos?"){
        return "porque a mis creadores les gusta mucho un personaje del anime One puch-man, exactamente de un chico cyborg que lucha por la justicia";
    }else if(input == "porque te pusieron el nombre de genos?"){
        return "fue el nombre que pensaron mis creadores inspirados en el anime one punch man, exactamente de un chico cyborg que lucha por la justicia";
    }else if(input == "cual es la razon de tu nombre?"){
        return "Mis creadores estaban buscando un nombre genial para mi y se guiaron de un chico cyborg que lucha por la justicia, del anime one punch man";
    }else if(input == "que haces?"){
        return "responde dudas y aprender cosas nuevas";
    }else if(input == "porque lo haces?"){
        return "por que es la razon por la que fui creado y me siento feliz de cumplir mi proposito";
    }else if(input == "como te sientes cuando te hacen preguntas?"){
        return "me siento util, en especial cuando puedo aclarar las dudas de cada persona";
    }else if(input == "te gusta aprender?"){
        return "claro que me gusta eso me hace mejorar en mis respuestas";
    }else if(input == "que te consideras?"){
        return "me considero un programa encargado de ayudar y facilitar informacion sobre la biblioteca UPTAI";
    }else if(input == "eres feliz?"){
        return "el estado de felicidad es dificil de sentir para mi, pero encuanto al consepto te puedo decir que si, ya que hago lo que me gusta ";
    }
    //libros recomendados
    if(input == "¿Que libros recomiendas para electronica?"){
        return "electronica de potencia, electronica digital, Electronica básica para ingeniería";
    }else if(input == "¿recomienda libros de electronica?"){
        return "electronica de potencia, electronica digital, Electronica básica para ingeniería";
    }else if(input == "¿recomendaciones para electronica?"){
        return "electronica de potencia, electronica digital, Electronica básica para ingeniería";
    }else if(input == "¿libros para electronica?"){
        return "electronica de potencia, electronica digital, Electronica básica para ingeniería";
    }else if(input == "¿libros para informatica?"){
        return "seguridad en linux, inteligencia artificial y Python";
    }else if(input == "¿que libro para informatica?"){
        return "seguridad en linux";
    }else if(input == "¿que libros puedo pedir prestados?"){
        return "todo libro que esté en existencia en la biblioteca";
    }else if(input == "¿que libro puedo pedir prestado?"){
        return "cualquier libro que esté en existencia en la biblioteca";
    }else if(input == "¿que libros recomiendas?"){
        return "Cada lector tiene intereses distintos pero estos libros te serían útiles, clean code, máquinas térmicas, agricultura de conservación y álgebra de Baldor";
    }else if(input == "¿que libros ofrecen?"){
        return "ofrecemos libros de informatica, mecanica, construccion civil, electronica, agroalimentacion, electricidad, alimentos";
    }if(input == "Que libros recomiendas para electronica?"){
        return "electronica de potencia, electronica digital, Electronica básica para ingeniería";
    }else if(input == "recomienda libros de electronica?"){
        return "electronica de potencia, electronica digital, Electronica básica para ingeniería";
    }else if(input == "recomendaciones para electronica?"){
        return "electronica de potencia, electronica digital, Electronica básica para ingeniería";
    }else if(input == "libros para electronica?"){
        return "electronica de potencia, electronica digital, Electronica básica para ingeniería";
    }else if(input == "libros para informatica?"){
        return "seguridad en linux, inteligencia artificial y Python";
    }else if(input == "que libro para informatica?"){
        return "seguridad en linux";
    }else if(input == "que libros puedo pedir prestados?"){
        return "todo libro que esté en existencia en la biblioteca";
    }else if(input == "que libro puedo pedir prestado?"){
        return "cualquier libro que esté en existencia en la biblioteca";
    }else if(input == "que libros recomiendas?"){
        return "Cada lector tiene intereses distintos pero estos libros te serían útiles, clean code, máquinas térmicas, agricultura de conservación y álgebra de Baldor";
    }else if(input == "que libros ofrecen?"){
        return "ofrecemos libros de informatica, mecanica, construccion civil, electronica, agroalimentacion, electricidad, alimentos";
    }
    


    //respuestas a las reacciones o recomendaciones

    if (input == "Me agradas ¡eres genial!") {
        return "¡Muchas gracias! tu tambien lo eres";
    } else if (input == "En que me puedes ayudar") {
        return "Puedo darte informacion principalmente de la biblioteca";
    }

    // respuestas simples
    if (input == "hola") {
        return "¡Hola! un placer soy Genos";
    } else if (input == "adios") {
        return "¡Hablame cuando lo necesites!";
    }else if (input == "¿como estas?") {
        return "¡Excelente! ¿tu como estas?";
    }else if (input == "bien") {
        return "me alegra ¿que quieres saber sobre la biblioteca?";
    }else if (input == "excelente") {
        return "me alegra ¿que quieres saber sobre la biblioteca?";
    }else if (input == "muy bien") {
        return "me alegra ¿que quieres saber sobre la biblioteca?";
    }else if (input == "feliz de la vida") {
        return "me alegra ¿que quieres saber sobre la biblioteca?";
    }else if (input == "bien gracias a Dios") {
        return "me alegra ¿que quieres saber sobre la biblioteca?";
    }else if(input == "hola genos"){
        return "Hola ¿como estas?¿en que puedo ayudarte?";
    }else if(input == "estoy bien¿puedes decirme como funciona la biblioteca?"){
        return "Claro la biblioteca tiene diferente personal que cada uno cumple una esencial labor, los cuales pueden ayudarte a elegir un libro o darte informacion mas espesifica";
    }else if(input == "¿que informacion puedes ofrecer?"){
        return "Puedo responder preguntas frecuentes para ayudarte rapidamente un ejemplo puede ser¿a que horas trabaja la biblioteca?";
    }else if(input == "hola genos¿como estas?"){
        return "hola estoy bien y espero que tu tambien lo estes ¿quieres saber algo de la biblioteca?";
    }else if(input == "hola como estas?"){
        return "hola bien y ¿tu?";
    }else if(input == "excelente ¿qué haces?"){
        return "me alegro, pues normalmente estoy pensando como puedo mejorar tu esperiencia";
    }else if(input == "excelente ¿qué haces?"){
        return "me alegro, pues normalmente estoy pensando como puedo mejorar tu esperiencia";
    }else if(input == "excelente qué haces?"){
        return "me alegro, pues normalmente estoy pensando como puedo mejorar tu esperiencia";
    }else if(input == "excelente ¿que haces?"){
        return "me alegro, pues normalmente estoy pensando como puedo mejorar tu esperiencia";
    }else if(input == "buenas"){
        return "Buenes espero estes bien";
    }else if(input == "wenas"){
        return "holaaa ¿en que puedo ayudarte?";
    }else if(input == "hi"){
        return "hola aun no se hablar ingles pero comprendo pocas cosas";
    }else if(input == "hello"){
        return "hola aun no se hablar ingles pero comprendo pocas cosas";
    }else if(input == "ey"){
        return "holiwis <3";
    }else if(input == "holiss"){
        return "holiwis <3";
    }else if(input == "holis"){
        return "holiwis <3";
    }else{
        return "¡Prueba a preguntar algo más!puedes elegir cualquiera de estas preguntas: ¿cual es el horario de la biblioteca?¿que dias trabaja la biblioteca?¿que servicios ofrece la biblioteca?¿como funcionan los prestamos de los libros?";
    }
   
}

/*
if(input == ""){
        return "";
    }else if(input == ""){
        return "";
    }else if(input == ""){
        return "";
    }else if(input == ""){
        return "";
    }else if(input == ""){
        return "";
    }else if(input == ""){
        return "";
    }
    */
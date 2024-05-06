/* 

OBJETIVOS:
//
TRADUCIR FUNCIONES PHP
CREAR FUNCIONES JAVASCRIPT QUE NO TENGA PHP
TESTEAR/MEJORAR/OPTIMIZAR/ACTUALIZAR FUNCIONES EXISTENTES Y CORREGIR ERRORES
COMENTAR Y MEJORAR COMENTARIOS DE FUNCIONES EXISTENTES
CREAR NUEVAS FUNCIONES
//

ÍNDICE FUNCIONES DE LA LIBRERÍA:
//
capa_abrir_ahjs(id_capa="", name_capa="", class_capa="", devolver=false)
capa_cerrar_ahjs(devolver=false);
condicion_distinto_valor_ahjs(variable_1="", variable_2="");
condicion_escribir_texto_ahjs_ahjs(condicion, mensaje_si="", mensaje_no="", devolver=false);
condicion_existe_conexion_con_libreria_antonio_hristov_js_ahjs();
condicion_mismo_valor_ahjs(variable_1="", variable_2="");
condicion_palindromo_o_capicua_ahjs(texto, diferenciar_mayusculas_y_minusculas=true);
condicion_primo_o_no_ahjs(numero);
devolver_array_definido_ahjs(array=new array(""), definir=false, valor_definido="", posicion_definido=0);
devolver_array_posicion_definido_ahjs(array, posicion, definir=false, valor_definido="");


alerta_ahjs(texto);
//

/*
    FUNCIONES DE LA LIBRERÍA:
*/



/* 

Crea una capa

* El parámetro id_capa es el identificador de la capa
* El parámetro name_capa es el nombre de la capa
* El parámetro class_capa recibe el nombre de las clases que tendrá, para darle propiedades css por ejemplo
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es false

Ejemplos:

capa_abrir_ahjs("id_capa", "nombre_capa", "clase_capa", false);
capa_abrir_ahjs();

*/
function capa_abrir_ahjs(id_capa="", name_capa="", class_capa="", devolver=false)
{
    var string_capa="";
    id_capa = devolver_valor_entre_caracter_ahjs(id_capa, '"');
    name_capa = devolver_valor_entre_caracter_ahjs(name_capa, '"');
    class_capa = devolver_valor_entre_caracter_ahjs(class_capa, '"');
 
    string_capa = "<div id="+id_capa+" name="+name_capa+" class="+class_capa+">";

    if(devolver)
    {
        return string_capa;
    }
    else
    {
        escribir_ahjs(string_capa);
    }
}
//



/*

Cierra la última capa creada/abierta

* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es false

Ejemplos:

capa_cerrar_ahjs();

*/
function capa_cerrar_ahjs(devolver=false)
{
    var string_cierre='</div>';

    if(devolver)
    {
        return string_cierre;
    }
    else
    {
        escribir_texto_simple_ahjs(string_cierre);
    }
}
//



/*

Si 2 Variables tienen distinto valor devuelve true, de lo contrario
devuelve false

* El parámetro variable_1 recibirá el valor a comparar con la 2º variable
* El parámetro variable_2 recibirá el valor a comparar con la 1º variable

Ejemplos:

condicion_distinto_valor_ahjs("hola", "hola");
condicion_distinto_valor_ahjs("hola", "adios");

*/
function condicion_distinto_valor_ahjs(variable_1="", variable_2="")
{
 return variable_1 != variable_2;
}
//



/*

Si una condición especificada se cumple escribirá un mensaje especificado
y si no se cumple escribirá otro mensaje especificado

* El parámetro condicion recibirá si la condicion se cumple (true) o no (false)
* El parámetro mensaje_si recibirá el mensaje a mostrar si se cumple la condición
* El parámetro mensaje_no recibirá el mensaje a mostrar si no se cumple la condición
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es false

Ejemplos:

condicion_escribir_texto_ahjs_ahjs(3+2==5, "Sabes sumar", "No deberia mostrarse esto");
condicion_escribir_texto_ahjs_ahjs(false, "No deberia mostrarse esto", "Mensaje condición false");

*/
function condicion_escribir_texto_ahjs_ahjs(condicion, mensaje_si="", mensaje_no="", devolver=false)
{
    if(condicion)
    {
        if(devolver)
        {
            return mensaje_si;
        }
        else
        {
            escribir_texto_simple_ahjs(mensaje_si);
        }
    }
    else
    {
        if(devolver)
        {
            return mensaje_no;
        }
        else
        {
            escribir_texto_simple_ahjs(mensaje_no);
        }       
    }
}
//



/*

Esta función existe para detectar si hay conexión con esta librería

*/
function condicion_existe_conexion_con_libreria_antonio_hristov_js_ahjs()
{
    return true;
}
//



/*

Si 2 Variables tienen el mismo valor devuelve true, de lo contrario
devuelve false

* El parámetro variable_1 recibirá el valor a comparar con la 2º variable
* El parámetro variable_2 recibirá el valor a comparar con la 1º variable

Ejemplos:

condicion_mismo_valor_ahjs("hola", "hola");
condicion_mismo_valor_ahjs("hola", "adios");

*/
function condicion_mismo_valor_ahjs(variable_1="", variable_2="")
{
 return variable_1 == variable_2;
}
//



/*

Te devuelve true si es palíndromo o capicua y false si no lo es
(Lo es si son los mismos caracteres de izquierda a derecha que derecha a izquierda)

* El parámetro texto recibirá el texto del que quieres saber si es palindromo o no
* El parámetro diferenciar_mayusculas_y_minusculas recibe un valor booleano (true o false)
si es true cuenta las mayúsculas y minúsculas como distintos caracteres, si es false no,
si no se especifica por defecto vale true

Ejemplos:

condicion_palindromo_o_capicua_ahjs("Girafarig");
condicion_palindromo_o_capicua_ahjs("Girafarig", false);

*/
function condicion_palindromo_o_capicua_ahjs(texto, diferenciar_mayusculas_y_minusculas=true)
{
    var cantidad_caracteres = devolver_texto_cantidad_caracteres_ahjs(texto);
    var resultado = true;

    if(diferenciar_mayusculas_y_minusculas)
    {
        for(var contador=0; contador<cantidad_caracteres && resultado; contador++)
        {
            if
            (
                condicion_distinto_valor_ahjs
                (
                    texto[contador]
                    ,
                    texto[cantidad_caracteres-1-contador]
                )
            )
            {
                resultado=false;
            }
        }
    }
    else
    {
        for(var contador=0; contador<cantidad_caracteres && resultado; contador++)
        {
            if
            (
                condicion_distinto_valor_ahjs
                (
                    texto[contador].toUpperCase()
                    ,
                    texto[cantidad_caracteres-1-contador].toUpperCase()
                )
            )
            {
                resultado=false;
            }
        }
    }
    return resultado;
}
//



/*

Te devuelve true si el número es primo, si no te devuelve false

* El parámetro numero recibirá el número del que quieres saber si es primo o no

Ejemplos:

condicion_primo_o_no_ahjs(7);
condicion_primo_o_no_ahjs(12);

*/
function condicion_primo_o_no_ahjs(numero)
{
    if(!Number.isInteger(numero))
    {
        alert("oye");
        return false;
    }   
    for (var i = 2; i < numero; i++) {     
        if( (numero % i) == 0) 
        {      
            return false;
        }
    }
    return true;
}
//



/* 

Si el array enviado está definido te devuelve true, sino te devuelve false

* El parámetro array es el array que comprobará si está definido o no
* El parámetro definir es un valor booleano (true o false) para definir el array de paso 
si en principio no está definida y devolver true como resultado por ello, 
SI VALE FALSE SE IGNORAN LOS PARÁMETROS valor_definido y posicion_definido,
por defecto es false
* El parámetro valor_definido es el valor con el que definir el array si el array 
no está definido y el parámetro definir es true
* El parámetro posicion_definido es la posición del array en el que define el valor 
del array si el array no está definido y el parámetro definir es true

Ejemplos:

devolver_array_definido_ahjs($esta_variable_es_un_array);

*/
function devolver_array_definido_ahjs(array=new array(""), definir=false, valor_definido="", posicion_definido=0)
{
    tamaño_array = devolver_array_tamanio_ahjs(array);
    resultado = false;

    if( tamaño_array > 0 )
    {
        resultado = true;
    }

    /*
    for($contador=0; $contador<$tamaño_array && !$resultado; $contador++)
    {
        if(  isset($array[$contador]))
        {
            $resultado = true;
        }
    }
    */

    if(definir && !resultado)
    {
        array[posicion_definido] = valor_definido;
        resultado = true;
    }

	return resultado;
}
//



/* 

Si la posición del array enviado está definido te devuelve true, sino te devuelve false

* El parámetro array es el array a evaluar
* El parámetro posicion es la posición del array a evaluar si está definido o no
* El parámetro definir es un valor booleano (true o false) para definir la posición 
del array de paso si en principio no está definida y devolver true como resultado por ello, 
SI VALE FALSE SE IGNORA EL PARÁMETRO valor_definido
por defecto es false
* El parámetro valor_definido es el valor con el que definir la posición del array si el array 
no está definido y el parámetro definir es true

Ejemplos:

$devolver_array_posicion_definido_ahjs(  array("valor posicion 0"),  0);
$devolver_array_posicion_definido_ahjs(  array("valor posicion 0"),  1);

*/
function devolver_array_posicion_definido_ahjs(array, posicion, definir=false, valor_definido="")
{
    var resultado = array[posicion];

    if(definir && resultado == undefined)
    {
        array[posicion] = valor_definido;
        resultado = true;
    }
	return resultado;
}
//



function devolver_array_posicion_valor_ahjs(array=new Array(""), valor="", mensaje_error="", devolver=true)
{

    if
    (
        devolver_array_definido_ahjs(array)
        && 
        devolver_array_existe_valor_ahjs(valor, array)
    )
    {
        if(devolver)
        {
            for(var i in array) {
                if(array[i] == valor) return i;
            }
            return false;
        }
        else
        {
            escribir_texto_simple_ahphp(  array_search(valor, array)  );
        }
        
    }
    else
    {
        return mensaje_error;
    }
}





























/*

Si una condición especificada se cumple dará un mensaje de alerta_ahjs especificado
y si no se cumple dará otro mensaje de alerta_ahjs especificado

* El parámetro condicion recibirá si la condicion se cumple (true) o no (false)
* El parámetro mensaje_si recibirá el mensaje a mostrar si se cumple la condición
* El parámetro mensaje_no recibirá el mensaje a mostrar si no se cumple la condición
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es false

Ejemplos:

condicion_escribir_texto_ahjs_ahjs_alerta_ahjs(3+2==5, "Sabes sumar", "No deberia mostrarse esto");
condicion_escribir_texto_ahjs_ahjs_alerta_ahjs(false, "No deberia mostrarse esto", "Mensaje condición false");

*/
function condicion_escribir_texto_ahjs_ahjs_alerta_ahjs(condicion, mensaje_si="", mensaje_no="", devolver=false)
{
    if(condicion)
    {
        if(devolver)
        {
            return mensaje_si;
        }
        else
        {
            alerta_ahjs(mensaje_si);
        }
    }
    else
    {
        if(devolver)
        {
            return mensaje_no;
        }
        else
        {
            alerta_ahjs(mensaje_no);
        }       
    }
}
//



/* 

Te devuelve la cadena enviada entre el caracter que especifiques.
Si especificas el texto como "hola" y el carácter como "@" devolvería "@hola@" por ejemplo

* El parámetro cadena recibirá el texto a "envolver" del carácter
* El parámetro caracter es el valor que "envuelve" la cadena, podría ser texto, etc
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es true

Ejemplos:

devolver_valor_entre_caracter_ahjs("Mi texto mostrado", "*", false);
devolver_valor_entre_caracter_ahjs("Entre Comillas al invocador", '"');

*/
function devolver_valor_entre_caracter_ahjs(cadena="", caracter="", devolver=true)
{
    if(devolver)
    {      
        return caracter + cadena + caracter;
    }
    else
    {
        escribir_texto_simple_ahjs(caracter + cadena + caracter);
    }
}
//



/*

Te devuelve true o false si coincide el mismo valor entre los valores/valor de 2 arrays

* El parámetro array_1 recibirá el array con el valor a comparar con el 2º array
* El parámetro array_2 recibirá el array con el valor a comparar con el 1º array

Ejemplos:

devolver_arrays_coincidir_mismo_valor_ahjs( new Array('Valor 1', 'Valor 2') ),  new Array('Valor 2', 'Valor 3') );
devolver_arrays_coincidir_mismo_valor_ahjs( new Array('Valor 1', 'Valor 2') ,  new Array('Valor 3', 'Valor 4') );

*/
function devolver_arrays_coincidir_mismo_valor_ahjs(array_1, array_2)
{
    var longitud_array_1 = devolver_array_tamanio_ahjs(array_1);
    var longitud_array_2 = devolver_array_tamanio_ahjs(array_2);
    var coincidencia_encontrada = false;

    for(var contador_1 = 0; contador_1 < longitud_array_1 && !coincidencia_encontrada; contador_1++)
    {
        for(var contador_2 = 0; contador_2 < longitud_array_2 && !coincidencia_encontrada; contador_2++)
        {
            if(  condicion_mismo_valor_ahjs( array_1[contador_1],   array_2[contador_2]   )   )
            {
                coincidencia_encontrada=true;
            }
        }
    }
    return coincidencia_encontrada;
}
//



/*

Devuelve el valor de un array

* El parámetro array recibirá el array cuyo valor quieres recibir
* El parámetro valor_entre_valor te permite enviar el valor que separe cada valor,
puede ser un/varios espacios, saltos de líneas, palabras, etc.
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es true

Ejemplos:

devolver_array_valor_ahjs(array ("Valor1", "Valor2"), " Este mensaje entre cada valor del array");
devolver_array_valor_ahjs(array ("Valor1", "Valor2"), " ");

*/
function devolver_array_valor_ahjs(array, valor_entre_valor="", devolver=true)
{
    var longitud_array = devolver_array_tamanio_ahjs(array);
    resultado="";

    for(var contador=0; contador<longitud_array; contador++)
    {
        resultado = resultado + valor_entre_valor + array[contador];
    }
    if(devolver)
    {
        return resultado;
    }
    else
    {
        escribir_texto_simple_ahjs(resultado);
    }
    
}
//



/*

Te devuelve el valor de Pi

*/
function devolver_valor_pi_ahjs()
{
    return Math.PI;
}
//



/*

Devuelve el tamaño de un array

* El parámetro array recibirá el array cuyo tamaño quieres saber

Ejemplos:

devolver_array_tamanio_ahjs(array ("Valor1", "Valor2"), " Este mensaje entre cada valor del array");
devolver_array_tamanio_ahjs(array ("Valor1", "Valor2"), " ");

*/
function devolver_array_tamanio_ahjs(array)
{
    return array.length;
}
//


// POR AQUI VOY TESTEANDO
/*

Te devuelve la cantidad de caracteres números que tiene el texto introducido

* El parámetro texto recibirá la cadena de texto del que quieres saber la cantidad de caracteres números
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es true

Ejemplos:

devolver_texto_cantidad_numeros_ahjs("H4ol7a2", false);

*/
function devolver_texto_cantidad_numeros_ahjs(texto, devolver=true)
{
    var cantidad_letras = devolver_texto_cantidad_caracteres_ahjs($texto);
    var resultado=0;
    var caracteres_numeros = new array("0","1","2","3","4","5","6","7","8","9");

    for(var contador=0; contador<cantidad_letras; contador++)
    {
        if(  devolver_arrays_coincidir_mismo_valor_ahjs(  array(texto[contador]),  caracteres_numeros  )     )
        {
            resultado++;
        }
    }
    if(devolver)
    {
        return resultado;
    }
    else
    {
        escribir_ahjs(resultado);
    }
}
//



/*

Te devuelve la cantidad de letras que tiene el texto introducido

* El parámetro texto recibirá el texto del que quieres saber la cantidad de letras
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es true

Ejemplos:

devolver_texto_cantidad_caracteres_ahjs("Hola", false);

*/
function devolver_texto_cantidad_caracteres_ahjs(texto, devolver=true)
{
    if(devolver)
    {
        return texto.length;
    }
    else
    {
        escribir_ahjs(texto.length);
    }
}
//


/*
Pendiente explicar
*/
function escribir_numeros_pares_entre_2_numeros_ahjs(minimo=0, maximo=10)
{
    
    // Este for es solo para encontrar el primer par
    for(var contador=minimo; contador<=maximo; contador++)
    {
        // Solo una vez entra en este if, al encontrar el primer par
        if(contador % 2 == 0)
        {
            // Porque la condicion es par. Si ya encontró el primero los siguientes serán +2 sucesivamente hasta llegar al máximo
            // Asi evita comprobar la condición de ser par más de una vez y evita procesos de cálculo innecesarios
            // Haciéndolo más eficiente que preguntando por cada número si es par.
            while(contador<=maximo)
            {
                escribir_texto_simple_ahjs( contador );
                escribir_saltos_de_linea_ahjs();
                contador+=2;
            }

        }
    }

}
//



/*

escribir lo que le manden

* El parámetro valor es lo que escribirá

Ejemplos:

escribir_ahjs("Hola mundo");

*/
function escribir_ahjs(texto="")
{
    //document.body.innerHTML+=texto;
    document.write(texto);
}
//



/*

escribir un texto

* El parámetro id_texto es el identificador del texto
* El parámetro name_texto es el nombre del texto
* El parámetro class_texto recibe el nombre de las clases que tendrá, para darle propiedades css por ejemplo
* El parámetro texto es el texto que escribirá
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena

Ejemplos:

escribir_texto_ahjs("id_texto", "name_texto", "texto_azul_ahcss", "Mi Texto", false);
escribir_texto_ahjs("", "", "", "Mi Texto");

*/
function escribir_texto_ahjs(id_texto="", name_texto="", class_texto="", texto="", devolver=false)
{
    id_texto = devolver_valor_entre_caracter_ahjs(id_texto,'"');
    name_texto = devolver_valor_entre_caracter_ahjs(name_texto,'"');
    class_texto = devolver_valor_entre_caracter_ahjs(class_texto,'"');

    var resultado = "<label id="+id_texto+" name="+name_texto+" class="+class_texto+">"+texto+"</label>";
    if(devolver)
    {
        return resultado;
    }
    else
    {
        escribir_ahjs(resultado);
    }
}
//



/*

Lo mismo que escribir_texto_ahjs pero sin los primeros parámetros id_texto, name_texto, class_texto

Ejemplos:

escribir_texto_simple_ahjs("Mi Texto", false);
escribir_texto_simple_ahjs("Mi Texto");

*/
function escribir_texto_simple_ahjs(texto="", devolver=false)
{
    resultado = "<label>"+texto+"</label>";

    if(devolver)
    {
        return resultado;
    }
    else
    {
        escribir_ahjs(resultado);
    }
}
//



function extraer_caracteres_ahjs(cadena="", numero_caracter=1, cantidad_caracteres_a_mostrar=1)
{
    posicion_caracter = numero_caracter-1;
    return cadena.substr(posicion_caracter, cantidad_caracteres_a_mostrar);
}





/*

Es una función de prueba creada para hacer testeos

Ejemplos:

prueba();

*/
function prueba_ahjs()
{
    escribir_texto_simple_ahjs("Hola");
}
//



/*

Hace la cantidad de saltos de línea que especifiques, si no especificas hace 1 por defecto

* El parámetro cantidad es la cantidad de saltos de línea que pintará
* El parámetro devolver recibe un valor booleano (true o false)
si es true devuelve los saltos de línea al invocador en vez de pintarlos directamente,
si es false lo pinta directamente, si no se especifica por defecto es false

Ejemplos:

escribir_saltos_de_linea_ahjs(12);
escribir_saltos_de_linea_ahjs();

*/
function escribir_saltos_de_linea_ahjs(cantidad=1, devolver=false)
{
    var cadena_final="";

    for(var contador=0; contador<cantidad; contador++)
    {
        cadena_final = cadena_final + "<br>";
    }

    if(devolver)
    {
        return cadena_final;
    }
    else
    {
        escribir_ahjs(cadena_final);
    }
}
//



/*

Escribe una línea horizontal

* El parámetro id es el identificador del texto
* El parámetro name es el nombre del texto
* El parámetro class recibe el nombre de las clases que tendrá, para darle propiedades css por ejemplo
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena

Ejemplos:

escribir_linea_horizontal_ahjs("id_texto", "name_texto", "texto_azul_ahcss", false);
escribir_linea_horizontal_ahjs();

*/
function escribir_linea_horizontal_ahjs(id_linea="", name_linea="", class_linea="", devolver=false)
{
    id_linea = devolver_valor_entre_caracter_ahjs(id_linea,'"');
    name_linea = devolver_valor_entre_caracter_ahjs(name_linea,'"');
    class_linea = devolver_valor_entre_caracter_ahjs(class_linea,'"');

    var resultado = "<hr id="+id_linea+" name="+name+" class="+class_linea+" />";
    if(devolver)
    {
        return resultado;
    }
    else
    {
        escribir_ahjs(resultado);
    }
}
//



/*

Escribe una línea horizontal

* El parámetro negro recibe un valor booleano (true o false)
si es true el negro será más intenso, si es false tendrá su intensidad normal
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena

Ejemplos:

escribir_linea_horizontal_simple_ahjs();

*/
function escribir_linea_horizontal_simple_ahjs(negro=true, devolver=false)
{
    var resultado;
    if(negro)
    {
        resultado = '<hr style="border: 1px solid black;" />';
    }
    else
    {
        resultado = "<hr/>";
    }
        
    if(devolver)
    {
        return resultado;
    }
    else
    {
        escribir_ahjs(resultado);
    }
}
//



/*

Manda una ventanita de alerta_ahjs con lo que le manden

* El parámetro valor es lo que escribirá

Ejemplos:

alerta_ahjs("Hola mundo");

*/
function alerta_ahjs(texto)
{
	alert(texto);
}
//



/*

Valor de un elemento a otro
El Elemento 1 tendrá el valor del elemento 2

*/
function Valor_de_un_elemento_a_otro_ahjs(id_elemento_1="", id_elemento_2="")
{
document.getElementById(id_elemento_1).value = document.getElementById(id_elemento_2).value;    
}
//

/*

Valor de un elemento a otro
El Elemento 1 tendrá el valor del elemento 2

*/
function Valor_de_un_elemento_al_action_de_un_formulario_ahjs(id_formulario="", id_elemento_2="")
{
document.getElementById(id_formulario).action = document.getElementById(id_elemento_2).value;    
}
//

function devolver_array_existe_valor_ahjs( valor="", array=new Array("") ) 
{
    for(var i in array) {
        if(array[i] == valor) return true;
    }
    return false;
}

<?php



/*
UTILIDAD



OPTIMIZAR CÓDIGO PHP FRECUENTE, DE FORMA PARAMETRIZADA/PERSONALIZABLE
APRENDER PHP CON EL CONTENIDO DE ESTA LIBRERÍA



FIN UTILIDAD
*/



/*
VERSIÓN: 



1.0.0



FIN VERSIÓN
*/



/*
CAMBIOS DE LA VERSIÓN ANTERIOR:



TODO LO QUE HAY



FIN CAMBIOS DE LA VERSIÓN ANTERIOR:
*/



/*
CRÉDITOS:



TÉSTERS: 
ANTONIO HRISTOV

DOCUMENTACIÓN: 
ANTONIO HRISTOV

PROGRAMADORES:
ANTONIO HRISTOV

CREADOR: 
ANTONIO HRISTOV



FIN CRÉDITOS
*/



/*
OBJETIVOS:



CREAR VARIABLES CON VALORES CONSTANTES TÍPICOS PARA DEVOLVER
CREAR FUNCIONES ÚTILES, "CORTAS" Y "FÁCILES" DE HACER
REVISAR/TESTEAR/MEJORAR/OPTIMIZAR FUNCIONES EXISTENTES Y CORREGIR ERRORES
COMENTAR Y MEJORAR COMENTARIOS DE FUNCIONES EXISTENTES
HACER OFICIAL LA VERSIÓN 1.0.1 
HACER DE MI LIBRERÍA UNA CLASE/OBJETO, PROBABLEMENTE CON LAS FUNCIONES ESTÁTICAS Y TAL VEZ CON MÉTODO SINGLETON
CREAR NUEVAS FUNCIONES "NO TAN CORTAS Y/O FÁCILES / ÚTILES" DE HACER



FIN OBJETIVOS 
*/



/*
ÍNDICE FUNCIONES DE LA LIBRERÍA:



devolver_array_definido_ahphp
(
    &$array = valor_array_no_definido_ahphp // array()
    , 
    bool $definir = no_definir_array_ahphp // false
    , 
    mixed $valor_definido = valor_vacio_ahphp // ""
    , 
    int|string $posicion_definido = primera_posicion_ahphp // 0
)
: ?bool

// Revisado hasta aqui

devolver_array_eliminar_posicion_ahphp($array=array(""), $posicion=0, $eliminar_key_posicion=false, $devolver=true);
devolver_array_posicion_definido_ahphp(&$array=array(""), $posicion=0, $definir=false, $valor_definido="");
devolver_array_posicion_valor_ahphp($array=array(""), $valor="", $mensaje_error="", $devolver=true);
devolver_array_primera_posicion_ahphp($array=array(""), $mensaje_error="", $devolver=true);
devolver_array_tamanio_ahphp($array=array(""));
devolver_array_ultima_posicion_ahphp($array=array(""), $mensaje_error="", $devolver=true);
devolver_array_valor_ahphp($array=array(""), $valor_entre_valor="", $devolver=true);
devolver_array_valor_primera_posicion_ahphp($array=array(""), $mensaje_error="", $devolver=true);
devolver_array_valor_ultima_posicion_ahphp($array=array(""), $mensaje_error="", $devolver=true);
devolver_arrays_coincidir_mismo_valor_ahphp($array_1=array(""), $array_2=array(""));
devolver_calculadora_ahphp(array $operadores=array(""), array $signos_operacion=array(""), $escribir_formula=false, $devolver=true);
devolver_calculadora_simple_ahphp($operador_1=0, $operador_2=0, $signo_operacion="+", $escribir_formula=false, $devolver=true);
devolver_condicion_existe_conexion_con_libreria_antonio_hristov_php_ahphp();
devolver_condicion_hash_correcto_ahphp(string $contraseña=valor_vacio_ahphp, string $hash=valor_vacio_ahphp): bool
devolver_condicion_palindromo_ahphp($texto="", $diferenciar_mayusculas_y_minusculas=true);
devolver_condicion_numero_primo_ahphp($numero=0);
devolver_condicion_tipo_array_ahphp(mixed $valor): ?bool
devolver_condicion_tipo_booleano_ahphp(mixed $valor): ?bool
devolver_condicion_tipo_decimal_ahphp(mixed $valor): ?bool
devolver_condicion_tipo_double_ahphp(mixed $valor): ?bool
devolver_condicion_tipo_float_ahphp(mixed $valor): ?bool
devolver_condicion_tipo_funcion_ahphp(mixed $valor): ?bool
devolver_condicion_tipo_nulo_ahphp(mixed $valor): ?bool
devolver_condicion_tipo_numero_ahphp(mixed $valor): ?bool
devolver_condicion_tipo_objeto_ahphp(mixed $valor): ?bool
devolver_condicion_tipo_texto_ahphp(mixed $valor): ?bool
devolver_condicion_valores_distintos_ahphp( mixed $variable_1=valor_vacio_ahphp, mixed $variable_2=valor_vacio_ahphp, bool $comparacion_estricta_ahphp = comparacion_estricta_ahphp, callable $funcion_true=null, callable $funcion_false=null, array $argumentos_funcion_true=valor_array_vacio_ahphp, array $argumentos_funcion_false=valor_array_vacio_ahphp): ?bool
devolver_condicion_valores_igual_tipo_ahphp(mixed $variable_1=valor_vacio_ahphp, mixed $variable_2=valor_vacio_ahphp): ?bool
devolver_condicion_valores_iguales_ahphp($variable_1="", $variable_2="");
devolver_formulario_recibir_variable_ahphp(&$variable="", $name_elemento_con_los_datos_a_recuperar="", $es_metodo_get=true);
devolver_hash(string $valor_contrasenia = valor_vacio_ahphp, string|int|null $tipo_de_hash = PASSWORD_DEFAULT, array $opciones = valor_array_vacio_ahphp, $devolver=true): ?string
devolver_informacion_ahphp($valor="", $detalles=true);
devolver_numeros_mayor_a_menor_ahphp($array=array(""));
devolver_texto_cantidad_caracteres_ahphp($texto="", $devolver=true);
devolver_texto_cantidad_consonantes_ahphp($texto="", $devolver=true);
devolver_texto_cantidad_numeros_ahphp($texto="", $devolver=true);
devolver_texto_cantidad_vocales_ahphp($texto="", $devolver=true);
devolver_texto_nombre_variable_ahphp();
devolver_texto_sin_EOF($texto="", $devolver=true);
devolver_tipo(mixed $valor=valor_vacio_ahphp, bool $devolver=true): ?string
devolver_valor_entre_caracter_ahphp($cadena="", $caracter="", $devolver=true);
devolver_valor_pi_ahphp();
devolver_variable_definida_ahphp(&$variable="");
escribir_ahphp($valor="", $sin_eof=true);
escribir_boton_ahphp($id="", $name="", $class="", $texto="", $onclick="", $enviar=true);
escribir_boton_simple_ahphp($texto="", $onclick="", $enviar=true);
escribir_caja_de_numeros_ahphp($id="", $name="", $class="", $numero="", $min="", $max="", $saltos=1);
escribir_caja_de_texto_ahphp($id="", $name="", $class="", $placeholder="", $texto="");
escribir_capa_abrir_ahphp(string $id="", string $name="", string $class="", bool $devolver=false): ?string
escribir_capa_cerrar_ahphp($devolver=false);
escribir_desplegable_ahphp($id="", $name="", $class="", array $valores=array(""));
escribir_espacios_en_blanco_ahphp($cantidad=1, $codigo_html=true, $devolver=false);
escribir_etiqueta_abrir_ahphp(string $id="", string $name="", string $class="", string $etiqueta_html=etiqueta_texto_ahphp, array $atributos_con_valores_extra=valor_array_vacio_ahphp, bool $devolver=false): ?string
escribir_etiqueta_cerrar_ahphp(string $etiqueta_html=etiqueta_texto_ahphp, bool $devolver=false): ?string
escribir_etiqueta_crear_ahphp(string $id="", string $name="", string $class="", string $etiqueta_html=etiqueta_texto_ahphp, array $atributos_con_valores_extra=valor_array_vacio_ahphp, string $contenido=valor_vacio_ahphp, bool $devolver=false): ?string
escribir_formulario_abrir_ahphp($id="", $name="", $class="", $ruta_action="");
escribir_formulario_abrir_simple_ahphp($ruta_action="");
escribir_formulario_cerrar_ahphp();
escribir_informacion_ahphp($valor="", $detalles=true);
escribir_linea_horizontal_ahphp($id="", $name="", $class="", $devolver=false);
escribir_linea_horizontal_simple_ahphp($negro=true, $devolver=false);
escribir_lista_desordenada_ahphp($id="", $name="", $class="", array $valores=array(""), $tipo="circle", $devuelve=false);
escribir_lista_desordenada_simple_ahphp(array $valores=array(""), $tipo="circle", $devuelve=false);
escribir_piramide_caracter_ahphp($id_piramide="", $name_piramide="", $class_piramide="", $class_caracter="", $caracter="", $tamaño=0, $colores_aleatorios=false, $devolver=false);
escribir_piramide_caracter_simple_ahphp($caracter="", $tamaño=0, $colores_aleatorios=false, $devolver=false);
escribir_saltos_de_linea_ahphp($cantidad=1, $devolver=false);
escribir_texto_ahphp($id="", $name="", $class="", $texto="", $etiqueta_texto="label", $devolver=false);

escribir_texto_condicion_ahphp
(
    bool $condicion = falso_ahphp, // false
    string $mensaje_verdad = valor_vacio_ahphp, // ""
    string $mensaje_falso = valor_vacio_ahphp, // ""
    bool $devolver_resultado = escribir_resultado_ahphp // false
)
: ?string

escribir_texto_simple_ahphp($texto="", $etiqueta_texto="label", $devolver=false);

funcion_condicion_llamar_ahphp
( 
    bool $condicion = falso_ahphp // false
    ,
    callable $funcion_verdad = null
    , 
    callable $funcion_falso = null
    , 
    array $argumentos_funcion_verdad = valor_array_vacio_ahphp // array("")
    , 
    array $argumentos_funcion_falso = valor_array_vacio_ahphp // array("")
)
: ?bool

funcion_llamar_ahphp( callable $funcion=valor_vacio_ahphp, array $parametros=array() ): ?bool
pdf_crear_instancia_ahphp(&$variable_instancia_pdf="");
pdf_crear_ahphp($array_texto_valor=array(""), array $array_saltos_de_linea_extra_antes_de_escribir=array(0), $array_nueva_pagina=array(true), $array_fuente_texto=array("Arial"), $array_fuente_estilo_texto=array(""), $array_fuente_tamaño_texto=array(12), $array_texto_ancho_de_celda=array(0), $array_texto_alto_de_celda=array(0), $array_texto_borde=array(0), $array_texto_alineacion_texto=array("L"), $array_texto_fondo_de_la_celda_dibujada=array(false), $nombre_archivo="doc.pdf", $destino_archivo="I", $es_utf_8_archivo=false);
pdf_crear_nueva_pagina_ahphp(&$variable_instancia_pdf="");
pdf_escribir_texto(&$variable_instancia_pdf="", $texto="", $saltos_de_linea_extra_antes_de_escribir=0, $ancho_de_celda=120, $alto_de_celda=5, $borde=1, $alineacion_texto="L", $fondo_de_la_celda_dibujada=false);
pdf_fuente_texto_ahphp(&$variable_instancia_pdf="", $fuente="Arial", $estilo="", $tamaño=12);
pdf_generar_archivo_ahphp(&$variable_instancia_pdf="", $nombre="doc.pdf", $destino="I", $es_utf_8=false);
pdf_saltos_de_linea_extra_ahphp(&$variable_instancia_pdf="", $cantidad=1);
prueba_ahphp();
resultado_devolver_o_escribir_ahphp(mixed $resultado = valor_vacio_ahphp, bool $devolver = devolver_resultado_ahphp, callable $funcion_escribir = valor_nulo_ahphp): ?bool



FIN ÍNDICE FUNCIONES DE LA LIBRERÍA
*/



/*
VARIABLES CONSTANTES
*/



// VALORES TRADUCIDOS
const verdadero_ahphp = true;
const falso_ahphp = false;
const nulo_ahphp = null;
// FIN VALORES TRADUCIDOS

// VALORES BOOLEANOS
const devolver_resultado_ahphp = verdadero_ahphp;
const escribir_resultado_ahphp = falso_ahphp;
const sin_errores_resultado_ahphp = verdadero_ahphp;
const error_resultado_ahphp = falso_ahphp;
const bool_espacio_en_blanco_html_ahphp = verdadero_ahphp;
const bool_espacio_en_blanco_ahphp = falso_ahphp;
const comparacion_estricta_ahphp = verdadero_ahphp;
const comparacion_no_estricta_ahphp = falso_ahphp;
const definir_array_ahphp = true;
const no_definir_array_ahphp = false;
const con_detalles_ahphp = true;
const sin_detalles_ahphp = false;
// FIN VALORES BOOLEANOS

// VALORES NUMERICOS
const primera_posicion_ahphp = 0;
const cero_valor_ahphp = 0;
const primer_valor_ahphp = 1;
const segundo_valor_ahphp = 2;
const tercer_valor_ahphp = 3;
const cuarto_valor_ahphp = 4;
const quinto_valor_ahphp = 5;
const sexto_valor_ahphp = 6;
const septimo_valor_ahphp = 7;
const octavo_valor_ahphp = 8;
const noveno_valor_ahphp = 9;
const decimo_valor_ahphp = 10;
// FIN VALORES NUMERICOS

// VALORES TEXTO
const texto_creador_ahphp = "Antonio Hristov";
const valor_vacio_ahphp = ""; 
const texto_espacio_en_blanco_ahphp = " ";
const texto_espacio_en_blanco_html_ahphp = "&nbsp";
// FIN VALORES TEXTO

// VALORES VACIOS
const valor_sin_id_ahphp = valor_vacio_ahphp;
const valor_sin_name_ahphp = valor_vacio_ahphp;
const valor_sin_class_ahphp = valor_vacio_ahphp;
const valor_array_no_definido_ahphp = array();
const valor_array_vacio_ahphp = array(valor_vacio_ahphp);
const valor_sin_atributos_extra_ahphp = valor_array_vacio_ahphp;
// FIN VALORES VACIOS

// COMILLAS
const comilla_doble_ahphp = '"'; 
const comillas_dobles_ahphp = '""'; 
const comilla_simple_ahphp = "'"; 
const comillas_simples_ahphp = "''"; 
// FIN COMILLAS

// ABRIR/CERRAR ETIQUETAS
const abrir_etiqueta_ahphp = "<"; 
const cerrar_etiqueta_ahphp = ">"; 
const abrir_cierre_etiqueta_ahphp = "</"; 
// FIN ABRIR/CERRAR ETIQUETAS

// ETIQUETAS HTML
const etiqueta_capa_ahphp = "div"; 
const etiqueta_texto_ahphp = "label"; 
const etiqueta_parrafo_ahphp = "p"; 
// FIN ETIQUETAS HTML

// ATRIBUTOS HTML
const atributo_id_ahphp = "id=";
const atributo_name_ahphp = "name=";
const atributo_class_ahphp = "class=";
const atributo_value_ahphp = "value=";
const atributo_min_ahphp = "min=";
const atributo_max_ahphp = "max=";
// FIN ATRIBUTOS HTML

// FUNCIONES ESCRIBIR
const funcion_escribir_ahphp = 'escribir_ahphp';
const funcion_escribir_texto_ahphp = 'escribir_texto_simple_ahphp';
// FIN FUNCIONES ESCRIBIR



/*
FIN VARIABLES CONSTANTES
*/



/*
FUNCIONES DE LA LIBRERÍA
*/


/* 

Función devolver_array_definido_ahphp


¿Cómo funciona?

//
Si el array especificado está definido te devuelve true, 
Si el array especificado no está definido te devuelve false.

Si el array especificado no está definido tienes la opción de definirlo
con un valor personalizado en una posición del array personalizado.
//

¿Qué parámetros tiene y qué valor devuelve?

//
* El parámetro array recibe un valor tipo array (varios datos / datos indefinidos), si no se especifica por defecto es array(). 

Recibirá el array que comprobará si está definido o no.

* El parámetro definir recibe un valor tipo booleano (true o false), si no se especifica por defecto es false.

SI EL PARÁMETRO ARRAY ES UN ARRAY DEFINIDO 
SE IGNORA ESTE Y POSTERIORES PARÁMETROS (definir, valor_definido y posicion_definido).
SI ESTE PARÁMETRO TIENE EL VALOR FALSE 
SE IGNORAN LOS POSTERIORES PARÁMETROS (valor_definido y posicion_definido).

Solo en el caso de que el 1º parámetro array no esté definido te da la opción 
de definirlo o dejarlo sin definir.

* El parámetro valor_definido recibe un valor tipo mixed (cualquier tipo), si no se especifica por defecto es "". 

Recibirá el valor con el que definir el array si el array del parámetro array no está definido 
y el parámetro definir tiene el valor true, de lo contrario se ignorará este parámetro.

* El parámetro posicion_definido recibe un valor tipo int o string (número entero o texto), si no se especifica por defecto es 0. 

Recibirá la posición del array del parámetro array, en el que define el valor del array 
si no está definido y el parámetro definir tiene el valor true, de lo contrario se ignorará este parámetro.

* Valor devuelto: 

Devuelve un booleano (true o false).
Devolverá true si el array del parámetro array está definido o el parámetro definir tiene el valor true.
Devolverá false si el array del parámetro array no está definido y el parámetro definir tiene el valor false.
//

Ejemplos:

//
(Ejemplo 1)
$esta_variable_es_un_array_no_definido = array();
$resultado_array_definido = devolver_array_definido_ahphp($esta_variable_es_un_array_no_definido);
escribir_texto_condicion_ahphp
(
    $resultado_array_definido, 
    "Este array está definido, su contenido es: " . devolver_array_valor_ahphp($esta_variable_es_un_array_no_definido, texto_espacio_en_blanco_ahphp), // texto_espacio_en_blanco_ahphp vale " "
    "Este array no está definido"
);

(Ejemplo 2)
$esta_variable_es_un_array_definido = array("hola", "adios");
$resultado_array_definido = devolver_array_definido_ahphp($esta_variable_es_un_array_definido);
escribir_texto_condicion_ahphp
(
    $resultado_array_definido, 
    "Este array está definido, su contenido es: " . devolver_array_valor_ahphp($esta_variable_es_un_array_definido, texto_espacio_en_blanco_ahphp), // texto_espacio_en_blanco_ahphp vale " "
    "Este array no está definido"
);

(Ejemplo 3)
$esta_variable_es_un_array_no_definido_que_se_definira = array();
$resultado_array_definido = devolver_array_definido_ahphp($esta_variable_es_un_array_no_definido_que_se_definira, definir_array_ahphp, "Valor definido", primera_posicion_ahphp); // definir_array_ahphp vale true, primera_posicion_ahphp vale 0
escribir_texto_condicion_ahphp
(
    $resultado_array_definido, 
    "Este array está definido, su contenido es: " . devolver_array_valor_ahphp($esta_variable_es_un_array_no_definido_que_se_definira, texto_espacio_en_blanco_ahphp), // texto_espacio_en_blanco_ahphp vale " "
    "Este array no está definido"
);
//

*/
function devolver_array_definido_ahphp
(
    &$array = valor_array_no_definido_ahphp // array()
    , 
    bool $definir = no_definir_array_ahphp // false
    , 
    /* mixed */ $valor_definido = valor_vacio_ahphp // ""
    , 
    /* int|string */ $posicion_definido = primera_posicion_ahphp // 0
)
: ?bool

{
    $resultado = !empty($array);

    if($definir && !$resultado)
    {
        $array[$posicion_definido] = $valor_definido;
        $resultado = $definir; // true
    }

	return $resultado;
}
// Fin de la función devolver_array_definido_ahphp



/*
*/
function devolver_array_eliminar_posicion_ahphp($array=array(""), $posicion=0, $eliminar_key_posicion=false, $devolver=true)
{
    $tamaño_array = devolver_array_tamanio_ahphp($array);
    $array_auxiliar = array();

    if($eliminar_key_posicion)
    {
        unset($array);
    }
    else
    {
        for($contador=0; $contador<$tamaño_array-1; $contador++)
        {
            if(  $contador < $posicion  )
            {
                $array_auxiliar[$contador] = $array[$contador];
            }
            else
            {
                $array_auxiliar[$contador] = $array[$contador+1];
            }
        }
        $array = $array_auxiliar;
    }

    if($devolver)
    {
        return $array;
    }
    else
    {
        escribir_texto_simple_ahphp($array);
    }
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

$devolver_array_posicion_definido_ahphp(  array("valor posicion 0"),  0);
$devolver_array_posicion_definido_ahphp(  array("valor posicion 0"),  1);

*/
function devolver_array_posicion_definido_ahphp(&$array=array(""), $posicion=0, $definir=false, $valor_definido="")
{
    $resultado = isset($array[$posicion]);
    if($definir && !$resultado)
    {
        $array[$posicion] = $valor_definido;
        $resultado = true;
    }
	return $resultado;
}
//



function devolver_array_posicion_valor_ahphp($array=array(""), $valor="", $mensaje_error="", $devolver=true)
{

    if
    (
        devolver_array_definido_ahphp($array)
        && 
        in_array($valor, $array, true)
    )
    {
        if($devolver)
        {
            return array_search($valor, $array);
        }
        else
        {
            escribir_texto_simple_ahphp(  array_search($valor, $array)  );
        }
        
    }
    else
    {
        if($devolver)
        {
            return $mensaje_error;
        }
        else
        {
            escribir_texto_simple_ahphp(  $mensaje_error  );
        }
    }
}



function devolver_array_primera_posicion_ahphp($array=array(""), $mensaje_error="", $devolver=true)
{

    if
    (
        devolver_array_definido_ahphp($array)
        //&& 
        //in_array($valor, $array, true)
    )
    {
        if($devolver)
        {
            return array_key_first($array);
        }
        else
        {
            escribir_texto_simple_ahphp(  array_key_first($array)  );
        }
    }
    else
    {
        return $mensaje_error;
    }
}



/*

Devuelve el tamaño de un array

* El parámetro array recibirá el array cuyo tamaño quieres saber

Ejemplos:

devolver_array_tamanio_ahphp(array ("Valor1", "Valor2"), " Este mensaje entre cada valor del array");
devolver_array_tamanio_ahphp(array ("Valor1", "Valor2"), " ");

*/
function devolver_array_tamanio_ahphp($array=array(""))
{
    return count($array);
}
//



function devolver_array_ultima_posicion_ahphp($array=array(""), $mensaje_error="", $devolver=true)
{
    if
    (
        devolver_array_definido_ahphp($array)
        && 
        in_array($valor, $array)
    )
    {
        if($devolver)
        {
            return array_key_last($array);
        }
        else
        {
            escribir_texto_simple_ahphp(  array_key_last($array)  );
        }
    }
    else
    {
        return $mensaje_error;
    }
}



/*

Devuelve todos los valores de un array

* El parámetro array recibirá el array cuyo valor quieres recibir
* El parámetro valor_entre_valor te permite enviar el valor que separe cada valor,
puede ser un/varios espacios, saltos de líneas, palabras, etc.
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es true

Ejemplos:

devolver_array_valor_ahphp(array ("Valor1", "Valor2", "Valor3"), " Este mensaje entre cada valor del array");
devolver_array_valor_ahphp(array ("Valor1", "Valor2"), " ");

*/
function devolver_array_valor_ahphp($array=array(), $valor_entre_valor="", $devolver=true)
{
    $resultado = valor_vacio_ahphp;

    if( devolver_array_definido_ahphp($array) )
    {
        $posicion_primer_valor = devolver_array_primera_posicion_ahphp($array, "Error");

        foreach ($array as $posicion => $valor)
        {
            if( devolver_condicion_valores_distintos_ahphp($posicion , $posicion_primer_valor) )
            {
                $resultado .= "$valor_entre_valor" . "$valor";
            }
            else
            {
                $resultado .= "$valor";
            }
        }
    }
    
    if($devolver)
    {
        return $resultado;
    }
    else
    {
        escribir_texto_simple_ahphp($resultado);
    }
    
}
//



function devolver_array_valor_primera_posicion_ahphp($array=array(""), $mensaje_error="", $devolver=true)
{
    if
    (
        devolver_array_definido_ahphp($array)
    )
    {
        if($devolver)
        {
            return $array[  array_key_first($array)  ];
        }
        else
        {
            escribir_texto_simple_ahphp(  $array[  array_key_first($array)  ]  );
        }
    }
    else
    {
        return $mensaje_error;
    }
}



function devolver_array_valor_ultima_posicion_ahphp($array=array(""), $mensaje_error="", $devolver=true)
{
    if
    (
        devolver_array_definido_ahphp($array)
    )
    {
        if($devolver)
        {
            return $array[  array_key_last($array)  ];
        }
        else
        {
            escribir_texto_simple_ahphp(  $array[  array_key_last($array)  ]  );
        }
    }
    else
    {
        return $mensaje_error;
    }
}



/*

Te devuelve true o false si coincide el mismo valor entre los valores/valor de 2 arrays

* El parámetro array_1 recibirá el array con el valor a comparar con el 2º array
* El parámetro array_2 recibirá el array con el valor a comparar con el 1º array

Ejemplos:

devolver_arrays_coincidir_mismo_valor_ahphp(array("Valor_1","Valor_2"), array("Valor_2","Valor_3"));
devolver_arrays_coincidir_mismo_valor_ahphp(array("Valor_1","Valor_2"), array("Valor_3","Valor_4"));

*/
function devolver_arrays_coincidir_mismo_valor_ahphp($array_1=array(""), $array_2=array(""))
{
    $longitud_array_1 = devolver_array_tamanio_ahphp($array_1);
    $longitud_array_2 = devolver_array_tamanio_ahphp($array_2);
    $coincidencia_encontrada = false;

    for($contador_1 = 0; $contador_1 < $longitud_array_1 && !$coincidencia_encontrada; $contador_1++)
    {
        for($contador_2 = 0; $contador_2 < $longitud_array_2 && !$coincidencia_encontrada; $contador_2++)
        {
            if(  devolver_condicion_valores_iguales_ahphp( $array_1[$contador_1],   $array_2[$contador_2]   )   )
            {
                $coincidencia_encontrada=true;
            }
        }
    }
    return $coincidencia_encontrada;
}
//



/*

Envías números, signos de cálculo y si quieres recibir el resultado de la operación 
o la fórmula del calculo que haría para sacar el resultado de la operación.

Cuando hay más de 2 operadores: 
Primero se hace el cálculo de los 2 primeros operadores con su signo, 
el siguiente (en este caso 3º operador y 2º signo especificado)
se hace el nuevo cálculo al resultado de la operación anterior y asi sucesivamente (sin prioridades de operación).

Cuando son raices cuadradas:
Se aplicará la raiz cuadrada al primer operador/resultado que vaya tantas veces como valor tenga el 
2do operador/siguiente operador del resultado de la operación que vaya.
(
    si el segundo operador es 3 por ejemplo se harían 3 veces la raiz cuadrada al primer operador
    si el tercer operador es 2 por ejemplo (y es raiz cuadrada el signo también) se le harían 2 raices
    al resultado de la operación anterior y asi sucesivamente
)

Lo correcto sería que la cantidad de signos de operación sean 1 menos que la cantidad de números
pero si faltan signos se usa el último signo de operación declarado con los números que no tienen signo declarado (los últimos por donde vaya),
si sobran signos simplemente se ignoran los que sobren.

* El parámetro operadores recibirá números en un array, los que se usarán en orden para hacer operaciones,
debe haber mínimo 1 número
* El parámetro signos_operacion recibirá signos de operaciones en un array, los que se usarán en orden para hacer operaciones,
debe haber mínimo 1 signo. 
Valores posibles:
"+"
"-"
"*"
"/"
"%"
"e"
"r"
Significado:
Suma
Resta
Multiplicación
División
Resto/Módulo
Elevado/Potencia
Raiz Cuadrada

* El parámetro escribir_formula recibirá un valor booleano (true o false), si no se especifica por defecto valdrá false,
Si vale true te devuelve la fómula de la operación que realizaría de izquierda a derecha al resultado de cada operación,
si vale false te devuelve el resultado de la operación.

Ejemplos:

escribir_ahphp( devolver_calculadora_ahphp( array(6,2,3), array("*","/"), false) );
escribir_ahphp( devolver_calculadora_ahphp( array(6,2), array("-"), true) );

*/
function devolver_calculadora_ahphp(array $operadores=array(""), array $signos_operacion=array(""), $escribir_formula=false, $devolver=true)
{
    $mensaje_error_no_hay_operadores="ERROR, NO HAY NINGÚN NÚMERO PARA HACER OPERACIONES";
    $mensaje_error_no_hay_signos="ERROR, NO HAY SIGNOS DE OPERACIÓN";
    $mensaje_error_dividir_entre_cero="ERROR, NO SE PUEDE DIVIDIR UN NÚMERO ENTRE 0";
    $cantidad_operadores = devolver_array_tamanio_ahphp($operadores);
    $cantidad_signos = devolver_array_tamanio_ahphp($signos_operacion);
    $valor_ultimo_signo;
    $resultado;
    
    if(  devolver_condicion_valores_iguales_ahphp($escribir_formula, false)  )
    {               
        if(  $cantidad_operadores <= 0)
        {
            if($devolver)
            {
                return $mensaje_error_no_hay_operadores;
            }
            else
            {
                escribir_texto_simple_ahphp($mensaje_error_no_hay_operadores);
            }
        }
        else
        if($cantidad_signos <= 0)
        {
            if($devolver)
            {
                return $mensaje_error_no_hay_signos;
            }
            else
            {
                escribir_texto_simple_ahphp($mensaje_error_no_hay_signos);
            } 
        }
        else
        {
            $resultado=$operadores[0];
            for($contador = 1; $contador < $cantidad_operadores; $contador++)
            {
                if($contador <= $cantidad_signos)
                {
                    $valor_ultimo_signo = $signos_operacion[$contador-1];
                }

                if(  devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "+")  )
                {
                    $resultado += $operadores[$contador];
                }
                else
                if(  devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "-")  )
                {
                    $resultado -= $operadores[$contador];
                }
                else
                if(  devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "*")  )
                {
                    $resultado *= $operadores[$contador];
                }
                else
                if(  devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "/")  )
                {
                    if(  devolver_condicion_valores_iguales_ahphp($operadores[$contador], 0)  && $contador>0  )
                    {                
                        if($devolver)
                        {
                            return $mensaje_error_dividir_entre_cero;
                        }
                        else
                        {
                            escribir_texto_simple_ahphp($mensaje_error_dividir_entre_cero);
                        } 
                    }
                    else
                    {
                        $resultado /= $operadores[$contador];
                    }
                }
                else
                if(  devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "%")  )
                {                   
                    if(  devolver_condicion_valores_iguales_ahphp($operadores[$contador], 0)  && $contador>0  )
                    {
                        if($devolver)
                        {
                            return $mensaje_error_dividir_entre_cero;
                        }
                        else
                        {
                            escribir_texto_simple_ahphp($mensaje_error_dividir_entre_cero);
                        } 
                    }
                    else
                    {
                        $resultado %= $operadores[$contador];
                    }
                }
                else
                if(  devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "e")  )
                {               
                    $resultado = pow($resultado, $operadores[$contador]);           
                }
                else
                if(  devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "r")  )
                {          
                    if(  devolver_condicion_valores_iguales_ahphp($operadores[$contador], 0)  && $contador>0  )
                    {
                        if($devolver)
                        {
                            return $mensaje_error_dividir_entre_cero;
                        }
                        else
                        {
                            escribir_texto_simple_ahphp($mensaje_error_dividir_entre_cero);
                        } 
                    }
                    else
                    {
                        for($contador_raices=0; $contador_raices<$operadores[$contador]; $contador_raices++)
                        {
                           $resultado = sqrt($resultado);                 
                        }   
                    }         
                }          
            }
        return $resultado;
        }
    }
    else
    {
        $resultado="";
        if(  $cantidad_operadores <= 0)
        {
            if($devolver)
            {
                return $mensaje_error_no_hay_operadores;
            }
            else
            {
                escribir_texto_simple_ahphp($mensaje_error_no_hay_operadores);
            }
        }
        else
        if($cantidad_signos <= 0)
        {
            if($devolver)
            {
                return $mensaje_error_no_hay_signos;
            }
            else
            {
                escribir_texto_simple_ahphp($mensaje_error_no_hay_signos);
            } 
        }
        else
        {
            $resultado = "$resultado $operadores[0]";
            for($contador = 1; $contador < $cantidad_operadores; $contador++)
            {
                if($contador <= $cantidad_signos)
                {
                    $valor_ultimo_signo = $signos_operacion[$contador-1];
                }
                if
                (
                    devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "r")
                    ||
                    devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "√")
                )
                {
                    $valor_ultimo_signo = "√";      

                    $resultado = "$valor_ultimo_signo $resultado";  
                    $resultado = "$operadores[$contador] $resultado";                                  
                                   
                }
                else
                if
                (
                    devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "e")
                )
                {
                   $resultado = "$resultado <sup>$operadores[$contador]</sup>";
                }
                else
                {
                    $resultado = "$resultado $valor_ultimo_signo ";
                    $resultado = "$resultado $operadores[$contador]";
                }


                if
                ( 
                    (
                     devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "/")  
                     ||
                     devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "%")  
                     ||
                     devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "r")  
                     ||
                     devolver_condicion_valores_iguales_ahphp($valor_ultimo_signo, "√")  
                    )
                     &&
                     devolver_condicion_valores_iguales_ahphp($operadores[$contador], 0)
                )
                {
                    if($devolver)
                    {
                        return $mensaje_error_dividir_entre_cero;
                    }
                    else
                    {
                        escribir_texto_simple_ahphp($mensaje_error_dividir_entre_cero);
                    } 
                }
                

                $resultado = "($resultado)";


            }

            $resultado = "$resultado = ";

                
            return $resultado;

        }
    }
}
//



/*

Igual que la función devolver_calculadora_ahphp, con la diferencia que solo acepta 2 números y 1 signo de operación
haciéndolo más simple en caso de que se te complique la versión original por las opciones
de operadores y signos.

*/
function devolver_calculadora_simple_ahphp($operador_1=0, $operador_2=0, $signo_operacion="+", $escribir_formula=false, $devolver=true)
{
    $mensaje_error_no_hay_operadores="ERROR, NO HAY NINGÚN NÚMERO PARA HACER OPERACIONES";
    $mensaje_error_no_hay_signos="ERROR, NO HAY SIGNOS DE OPERACIÓN";
    $mensaje_error_dividir_entre_cero="ERROR, NO SE PUEDE DIVIDIR UN NÚMERO ENTRE 0";
    $resultado;
    $error=false;
    
    if(  devolver_condicion_valores_iguales_ahphp($escribir_formula, false)  )
    {       
        if(  devolver_condicion_valores_iguales_ahphp($signo_operacion, "+")  )
        {
            $resultado = $operador_1 + $operador_2;
        }
        else
        if(  devolver_condicion_valores_iguales_ahphp($signo_operacion, "-")  )
        {
            $resultado = $operador_1 - $operador_2;
        }
        else
        if(  devolver_condicion_valores_iguales_ahphp($signo_operacion, "*")  )
        {
            $resultado = $operador_1 * $operador_2;
        }
        else
        if(  devolver_condicion_valores_iguales_ahphp($signo_operacion, "/")  )
        {
            if(  devolver_condicion_valores_iguales_ahphp($operador_2 , 0)  )
            {
                if($devolver)
                {
                    return $mensaje_error_dividir_entre_cero;
                }
                else
                {
                    escribir_texto_simple_ahphp($mensaje_error_dividir_entre_cero);
                } 
            }
            else
            {
                $resultado = $operador_1 / $operador_2;
            }
        }
        else
        if(  devolver_condicion_valores_iguales_ahphp($signo_operacion, "%")  )
        {                   
            if(  devolver_condicion_valores_iguales_ahphp($operador_2 , 0)   )
            {
                if($devolver)
                {
                    return $mensaje_error_dividir_entre_cero;
                }
                else
                {
                    escribir_texto_simple_ahphp($mensaje_error_dividir_entre_cero);
                } 
            }
            else
            {
                $resultado = $operador_1 % $operador_2;
            }
        }
        else
        if(  devolver_condicion_valores_iguales_ahphp($signo_operacion, "e")  )
        {            
            $resultado = pow($operador_1, $operador_2);               
        }
        else
        if(  devolver_condicion_valores_iguales_ahphp($signo_operacion, "r")  )
        {        
            $resultado = $operador_1;  
            for($contador_raices=0; $contador_raices<$operador_2; $contador_raices++)
            {
               $resultado = sqrt($resultado);                   
            }                        
        }

        return $resultado; 
    }
    else
    {
        if
        ( 
            (
             devolver_condicion_valores_iguales_ahphp($signo_operacion, "/")  
             ||
             devolver_condicion_valores_iguales_ahphp($signo_operacion, "%")  
            )
             &&
             devolver_condicion_valores_iguales_ahphp($operador_2, 0)
        )
        {
            if($devolver)
            {
                return $mensaje_error_dividir_entre_cero;
            }
            else
            {
                escribir_texto_simple_ahphp($mensaje_error_dividir_entre_cero);
            } 
        }
        else
        {   
            if
            (
                devolver_condicion_valores_iguales_ahphp($signo_operacion, "e")
            )
            {
                $resultado = "$operador_1 <sup>$operador_2</sup>";
            }
            else
            if
            (
                devolver_condicion_valores_iguales_ahphp($signo_operacion, "r")
                ||
                devolver_condicion_valores_iguales_ahphp($signo_operacion, "√")                           
            )
            {
                $signo_operacion = "√";  
                $resultado = "$operador_2 $signo_operacion $operador_1";             
            }
            else
            {
                $resultado = "$operador_1 $signo_operacion $operador_2";
            }   
            
            $resultado = "$resultado = ";
        }
        return $resultado; 
    }
}
//



/*

Esta función existe para detectar si hay conexión con esta librería

*/
function devolver_condicion_existe_conexion_con_libreria_antonio_hristov_php_ahphp()
{
    return verdadero_ahphp;
}
//



/*

*/
function devolver_condicion_hash_correcto_ahphp(string $contraseña=valor_vacio_ahphp, string $hash=valor_vacio_ahphp): bool
{
    return password_verify($contraseña, $hash);
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

devolver_condicion_palindromo_ahphp("Girafarig");
devolver_condicion_palindromo_ahphp("Girafarig", false);

*/
function devolver_condicion_palindromo_ahphp($texto="", $diferenciar_mayusculas_y_minusculas=true)
{
    $cantidad_caracteres = devolver_texto_cantidad_caracteres_ahphp($texto);
    $resultado = true;

    if($diferenciar_mayusculas_y_minusculas)
    {
        for($contador=0; $contador<$cantidad_caracteres && $resultado; $contador++)
        {
            if
            (
                devolver_condicion_valores_distintos_ahphp
                (
                    $texto[$contador]
                    ,
                    $texto[$cantidad_caracteres-1-$contador]
                )
            )
            {
                $resultado=false;
            }
        }
    }
    else
    {
        for($contador=0; $contador<$cantidad_caracteres && $resultado; $contador++)
        {
            if
            (
                devolver_condicion_valores_distintos_ahphp
                (
                    strtoupper($texto[$contador])
                    ,
                    strtoupper($texto[$cantidad_caracteres-1-$contador])
                )
            )
            {
                $resultado=false;
            }
        }
    }
    return $resultado;
}
//



/*

Te devuelve true si el número es primo, si no te devuelve false

* El parámetro numero recibirá el número del que quieres saber si es primo o no

Ejemplos:

devolver_condicion_numero_primo_ahphp(7);
devolver_condicion_numero_primo_ahphp(12);

*/
function devolver_condicion_numero_primo_ahphp($numero=0)
{
    if(!is_numeric($numero))
    {
        return false;
    }   
    for ($i = 2; $i < $numero; $i++) {     
        if (($numero % $i) == 0) 
        {      
            return false;
        }
    }
    return true;
}
//



/*

*/
function devolver_condicion_tipo_array_ahphp(/*mixed*/$valor): ?bool
    {
        return is_array($valor);
    }
    //
    
    
    
    /*
    
    */
    function devolver_condicion_tipo_booleano_ahphp(/*mixed*/$valor): ?bool
    {
        return is_bool($valor);
    }
    //
    
    
    
    /*
    
    */
    function devolver_condicion_tipo_decimal_ahphp(/*mixed*/$valor): ?bool
    {
        return 
        (  
            devolver_condicion_tipo_double_ahphp($valor)
            || 
            devolver_condicion_tipo_float_ahphp($valor) 
        );
    }
    //
    
    
    
    /*
    
    */
    function devolver_condicion_tipo_double_ahphp(/*mixed*/$valor): ?bool
    {
        return is_double($valor);
    }
    //
    
    
    
    /*
    
    */
    function devolver_condicion_tipo_float_ahphp(/*mixed*/$valor): ?bool
    {
        return is_float($valor);
    }
    //
    
    
    
    
    /*
    
    */
    function devolver_condicion_tipo_funcion_ahphp(/*mixed*/$valor): ?bool
    {
        return is_callable($valor);
    }
    //
    
    
    
    /*
    
    */
    function devolver_condicion_tipo_nulo_ahphp(/*mixed*/$valor): ?bool
    {
        return is_null($valor);
    }
    //
    
    
    
    /*
    
    */
    function devolver_condicion_tipo_numero_ahphp(/*mixed*/$valor): ?bool
    {
        return is_integer($valor);
    }
    //
    
    
    
    /*
    
    */
    function devolver_condicion_tipo_objeto_ahphp(/*mixed*/$valor): ?bool
    {
        return is_object($valor);
    }
    //
    
    
    
    /*
    
    */
    function devolver_condicion_tipo_texto_ahphp(/*mixed*/$valor): ?bool
    {
        return is_string($valor);
    }
    //
    
    
    
    /*
    
    Si 2 Variables tienen distinto valor devuelve true, de lo contrario
    devuelve false
    
    * El parámetro variable_1 recibirá el valor a comparar con la 2º variable
    * El parámetro variable_2 recibirá el valor a comparar con la 1º variable
    
    Ejemplos:
    
    devolver_condicion_valores_distintos_ahphp("hola", "hola");
    devolver_condicion_valores_distintos_ahphp("hola", "adios");
    
    */
    function devolver_condicion_valores_distintos_ahphp
    ( 
        /*mixed*/$variable_1 = valor_vacio_ahphp
        , 
        /*mixed*/$variable_2 = valor_vacio_ahphp
        , 
        bool $comparacion_estricta_ahphp = comparacion_estricta_ahphp
        ,
        callable $funcion_true = null
        , 
        callable $funcion_false = null
        , 
        array $argumentos_funcion_true = valor_array_vacio_ahphp
        , 
        array $argumentos_funcion_false = valor_array_vacio_ahphp
    )
        : ?bool
    {
    
        $resultado;
        
        if($comparacion_estricta_ahphp)
        {
            $resultado = $variable_1 !== $variable_2;
        }
        else
        {
            $resultado = $variable_1 != $variable_2;
        }
    
    
        if
        ( 
            devolver_condicion_tipo_nulo_ahphp($funcion_true)
            &&
            devolver_condicion_tipo_nulo_ahphp($funcion_false)
        )
        {
            return $resultado;
        }
        else
        if(  $resultado  )
        {
            return funcion_llamar_ahphp( $funcion_true, $argumentos_funcion_true );
        }
        else
        {
            return funcion_llamar_ahphp( $funcion_false, $argumentos_funcion_false );
        }
    }
    //
    
    
    
    function devolver_condicion_valores_igual_tipo_ahphp(/*mixed*/ $variable_1=valor_vacio_ahphp, /*mixed*/ $variable_2=valor_vacio_ahphp): ?bool
    {
        return devolver_tipo($variable_1, $variable_2);
    }
    
    
    
    /*
    
    Si 2 Variables tienen el mismo valor devuelve true, de lo contrario
    devuelve false
    
    * El parámetro variable_1 recibirá el valor a comparar con la 2º variable
    * El parámetro variable_2 recibirá el valor a comparar con la 1º variable
    
    Ejemplos:
    
    devolver_condicion_valores_iguales_ahphp("hola", "hola");
    devolver_condicion_valores_iguales_ahphp("hola", "adios");
    
    */
    function devolver_condicion_valores_iguales_ahphp
        ( 
            /*mixed*/$variable_1 = valor_vacio_ahphp
            , 
            /*mixed*/$variable_2 = valor_vacio_ahphp
            , 
            bool $comparacion_estricta_ahphp = comparacion_estricta_ahphp
            ,
            callable $funcion_true = null
            , 
            callable $funcion_false = null
            , 
            array $argumentos_funcion_true = valor_array_vacio_ahphp
            , 
            array $argumentos_funcion_false = valor_array_vacio_ahphp
        )
            : ?bool
    {
     
        $resultado;
        
        if($comparacion_estricta_ahphp)
        {
            $resultado = $variable_1 === $variable_2;
        }
        else
        {
            $resultado = $variable_1 == $variable_2;
        }
    
    
        if
        ( 
            devolver_condicion_tipo_nulo_ahphp($funcion_true)
            &&
            devolver_condicion_tipo_nulo_ahphp($funcion_false)
        )
        {
            return $resultado;
        }
        else
        if(  $resultado  )
        {
            return funcion_llamar_ahphp( $funcion_true, $argumentos_funcion_true );
        }
        else
        {
            return funcion_llamar_ahphp( $funcion_false, $argumentos_funcion_false );
        }
    }
    //



/* 

Recibe el valor de las variables en un formulario que envió los datos después de pulsar
el botón enviar.
Se puede declarar variables con el resultado de esta función

* El parámetro variable es la variable enviada por referencia que recibirá el valor
del elemento que lleve el nombre especificado como 2º parámetro de esta función
* El parámetro name_elemento_con_los_datos_a_recuperar recibe una cadena de texto que debe 
tener el mismo valor que tiene el elemento con los datos a recuperar en su propiedad name
* El parámetro es_metodo_get recibe un valor booleano (true o false) en el que debes indicar
si el formulario que envió los datos tiene el método get o post, 
si es get es true, si es post es false

Ejemplos:

devolver_formulario_recibir_variable_ahphp("variable_con_valor_caja_de_texto", "name_de_una_caja_de_texto_por_ejemplo", false);
devolver_formulario_recibir_variable_ahphp("variable_con_valor_desplegable", "name_de_una_lista_deplegable_por_ejemplo", true);

*/
function devolver_formulario_recibir_variable_ahphp(&$variable="", $name_elemento_con_los_datos_a_recuperar="", $es_metodo_get=true)
{
    if($es_metodo_get)
    {
        if
            (
			devolver_variable_definida_ahphp($_GET["$name_elemento_con_los_datos_a_recuperar"]) 
			)
		{
        $variable = $_GET["$name_elemento_con_los_datos_a_recuperar"];
        return $variable;
        }
    }
    else
    {
        if
            (
			devolver_variable_definida_ahphp($_POST["$name_elemento_con_los_datos_a_recuperar"]) 
			)
		{
        $variable = $_POST["$name_elemento_con_los_datos_a_recuperar"];
        return $variable;
        }
    }
}
//



/*

*/
function devolver_hash
(
    string $valor_contrasenia=valor_vacio_ahphp
    , 
    /*string|int|null*/ $tipo_de_hash=PASSWORD_DEFAULT
    ,
    array $opciones =  valor_array_vacio_ahphp
    ,
    $devolver=true
): ?string
{
    $resultado = password_hash($valor_contrasenia, $tipo_de_hash, $opciones);

    if($devolver)
    {
        return $resultado;
    }
    else
    {
        return escribir_ahphp($resultado);
    }
}
//



function devolver_informacion_ahphp($valor="", $detalles=true)
{
    $resultado = "";
    if($detalles)
    {
        /* 
        $nombre_variable_invocadora recibe el nombre de la variable invocadora de fuera 
        que envió el parámetro $valor.
        (Caja negra, esta parte la obtuve de internet y no entiendo con claridad como funciona)
        */
        $backtrace   = debug_backtrace();
        $file = file($backtrace[0]['file']);
        $src  = $file[$backtrace[0]['line']-1];
        $pat = '#(.*)'.__FUNCTION__.' *?\( *?(.*) *?\)(.*)#i';
        $nombre_variable_invocadora  = preg_replace($pat, '$2', $src);
        //

        $resultado .= "Nombre Variable:";
        $resultado .= escribir_saltos_de_linea_ahphp(1, devolver_resultado_ahphp);
        $resultado .= $nombre_variable_invocadora;
        $resultado .= escribir_saltos_de_linea_ahphp(2, devolver_resultado_ahphp);
        $resultado .= "Invocación en el archivo:";
        $resultado .= escribir_saltos_de_linea_ahphp(1, devolver_resultado_ahphp);
        $resultado .= $backtrace[0]['file'];
        $resultado .= escribir_saltos_de_linea_ahphp(2, devolver_resultado_ahphp);
        $resultado .= "Invocación en la línea:";
        $resultado .= escribir_saltos_de_linea_ahphp(1, devolver_resultado_ahphp);
        $resultado .= $backtrace[0]['line'];
        $resultado .= escribir_saltos_de_linea_ahphp(2, devolver_resultado_ahphp);
        $resultado .= "Tipo Variable:";
        $resultado .= escribir_saltos_de_linea_ahphp(1, devolver_resultado_ahphp);
        $resultado .= gettype($valor);
    }
    $resultado .= var_dump($valor);
    return $resultado;
}



function devolver_numeros_mayor_a_menor_ahphp($array=array(""))
{
    $auxiliar;
        // Ordena todos los "números"
    for($contador=0; $contador < devolver_array_tamanio_ahphp($array)-1 ; $contador++)
    {
        // Ordena 1 "número" comparando hasta el final
        for($contador2=0; $contador2 < devolver_array_tamanio_ahphp($array)-1 ; $contador2++)
        {
            if
            (
                $array[$contador2] < $array[$contador2+1]
            )
            {
                $auxiliar = $array[$contador2];
                $array[$contador2] = $array[$contador2+1];
                $array[$contador2+1] = $auxiliar;
            }
        }
    }
    return $array;
}



/*

Te devuelve la cantidad de letras que tiene el texto introducido

* El parámetro texto recibirá el texto del que quieres saber la cantidad de letras
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es true

Ejemplos:

devolver_texto_cantidad_caracteres_ahphp("Hola", false);

*/
function devolver_texto_cantidad_caracteres_ahphp($texto="", $devolver=true)
{
    if($devolver)
    {
        return strlen($texto) ;
    }
    else
    {
        escribir_ahphp(strlen($texto) );
    }
}
//



/*

Te devuelve la cantidad de consonantes que tiene el texto introducido

* El parámetro texto recibirá el texto del que quieres saber la cantidad de consonantes
* El parámetro devuelve recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es true

Ejemplos:

devolver_texto_cantidad_consonantes_ahphp("Hola", false);

*/
function devolver_texto_cantidad_consonantes_ahphp($texto="", $devolver=true)
{
    $cantidad_caracteres = devolver_texto_cantidad_caracteres_ahphp($texto);
    $resultado=0;
    $caracteres_consonantes = array("b","B","c","C","d","D","f","F","g","G","h","H","j","J","k","K","l","L","m","M","n","N","ñ","Ñ","p","P","q","Q","r","R","s","S","t","T","v","V","w","W","x","X","y","Y","z","Z");

    for($contador=0; $contador<$cantidad_caracteres; $contador++)
    {     
        if(  devolver_arrays_coincidir_mismo_valor_ahphp(  array("$texto[$contador]"),  $caracteres_consonantes  )     )
        {
            
            $resultado++;
        }
    }
    if($devolver)
    {
        return $resultado;
    }
    else
    {
        escribir_ahphp($resultado);
    }
}
//



/*

Te devuelve la cantidad de caracteres números que tiene el texto introducido

* El parámetro texto recibirá la cadena de texto del que quieres saber la cantidad de caracteres números
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es true

Ejemplos:

devolver_texto_cantidad_numeros_ahphp("H4ol7a2", false);

*/
function devolver_texto_cantidad_numeros_ahphp($texto="", $devolver=true)
{
    $cantidad_caracteres = devolver_texto_cantidad_caracteres_ahphp($texto);
    $resultado=0;
    $caracteres_numeros = array("0","1","2","3","4","5","6","7","8","9");

    for($contador=0; $contador<$cantidad_caracteres; $contador++)
    {
        if(  devolver_arrays_coincidir_mismo_valor_ahphp(  array("$texto[$contador]"),  $caracteres_numeros  )     )
        {
            $resultado++;
        }
    }
    if($devolver)
    {
        return $resultado;
    }
    else
    {
        escribir_ahphp($resultado);
    }
}
//



/*

Te devuelve la cantidad de vocales que tiene el texto introducido

* El parámetro texto recibirá el texto del que quieres saber la cantidad de vocales
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es true

Ejemplos:

devolver_texto_cantidad_vocales_ahphp("Hola", false);

*/
function devolver_texto_cantidad_vocales_ahphp($texto="", $devolver=true)
{
    $cantidad_caracteres = devolver_texto_cantidad_caracteres_ahphp($texto);
    $resultado=0;
    $caracteres_vocales = array("a","à","á","A","À","Á","e","è","é","E","È","É","i","ì","í","I","Ì","Í","o","ò","ó","O","Ò","Ó","u","ù","ú","U","Ù","Ú");

    for($contador=0; $contador<$cantidad_caracteres; $contador++)
    {
        if(  devolver_arrays_coincidir_mismo_valor_ahphp(  array("$texto[$contador]"),  $caracteres_vocales  )     )
        {
            $resultado++;
        }
    }

    if($devolver)
    {
        return $resultado;
    }
    else
    {
        escribir_ahphp($resultado);
    }
}
//



function devolver_texto_nombre_variable_ahphp()
{
    // read backtrace
    $bt   = debug_backtrace();
    // read file
    $file = file($bt[0]['file']);
    // select exact print_var_name($varname) line
    $src  = $file[$bt[0]['line']-1];
    // search pattern
    $pat = '#(.*)'.__FUNCTION__.' *?\( *?(.*) *?\)(.*)#i';
    // extract $varname from match no 2
    $var  = preg_replace($pat, '$2', $src);
    // print to browser
    //echo '<pre>' . trim($var) . ' = ' . print_r(current(func_get_args()), true) . '</pre>';
    return $var;
}



function devolver_texto_sin_EOF($texto="", $devolver=true)
{
    $array_texto = explode("<<<EOF", $texto);
    $tamanio_array_texto = devolver_array_tamanio_ahphp($array_texto);
    $texto="";

    for($contador=0; $contador<$tamanio_array_texto; $contador++)
    {
        if(  devolver_array_posicion_definido_ahphp($array_texto, $contador)  )
        {
            $texto = "$texto" . "$array_texto[$contador]";
            if(  $contador+1 < $tamanio_array_texto  )
            {
                $texto = "$texto" . "";
            }
        }
    }

    if($devolver)
    {
        return $texto;
    }
    else
    {
        escribir_ahphp($texto);
    }
}
//



function devolver_tipo(/*mixed*/ $valor=valor_vacio_ahphp, bool $devolver=true): ?string
{
    $resultado = gettype($valor);

    if($devolver)
    {
        return $resultado;
    }
    else
    {
        return escribir_ahphp($resultado);
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

devolver_valor_entre_caracter_ahphp("Mi texto mostrado", "*", false);
devolver_valor_entre_caracter_ahphp("Entre Comillas al invocador", '"');

*/
function devolver_valor_entre_caracter_ahphp($cadena="", $caracter="", $devolver=true)
{
    if($devolver)
    {      
        return "$caracter$cadena$caracter";
    }
    else
    {
        escribir_ahphp("$caracter$cadena$caracter");
    }
}
//



/*

Te devuelve el valor de Pi

*/
function devolver_valor_pi_ahphp()
{
    return pi();
}
//



/* 

Si la variable enviada está definida te devuelve true, sino te devuelve false

*/
function devolver_variable_definida_ahphp(&$variable="")
{
	return isset($variable);
}
//



/*

escribir lo que le manden

* El parámetro valor es lo que escribirá

Ejemplos:

escribir_ahphp("Hola mundo");

*/
function escribir_ahphp($valor="", $sin_eof=true)
{
    if($sin_eof)
    {
        echo devolver_texto_sin_EOF($valor);
    }
    else
    {
        echo $valor;
    }
    
}
//



/*

Te pinta un botón

* El parámetro id es el identificador del botón
* El parámetro name es el nombre del botón
* El parámetro class recibe el nombre de las clases que tendrá, para darle propiedades css por ejemplo
* El parámetro texto es el texto que mostrará/valor que tendrá
* El parámetro onclick es la función javascript que ejecutará al hacer click en el botón
* El parámetro enviar puede ser true o false, true si envia los datos de un formulario, sino false, por defecto es true

Ejemplos:

escribir_boton_ahphp('id_btn_enviar', 'btn_enviar', 'fondo_rojo_ahcss','Enviar', 'escribir_Documento("Ejecutando esta funcion Javascript");');
escribir_boton_ahphp('id_btn_enviar', 'btn_enviar', '', '', 'escribir_Documento("Ejecutando esta funcion Javascript");');
escribir_boton_ahphp('id_btn_enviar', '', '', 'Enviar');

*/
function escribir_boton_ahphp($id="", $name="", $class="", $texto="", $onclick="", $enviar=true)
{	
    if($enviar)
    {
        escribir_ahphp("<input type='submit' id='".$id."' name='".$name."' class='".$class."' value='".$texto."'  onclick='".$onclick."'  />");
    }
    else
    {
        escribir_ahphp("<input type='button' id='".$id."' name='".$name."' class='".$class."' value='".$texto."'  onclick='".$onclick."'  />");
    }
}
//



/*

Lo mismo que la función escribir_boton pero sin los 2 primeros parámetros id, name

Ejemplos:

escribir_boton_simple_ahphp('Enviar', 'escribir_Documento("Ejecutando esta funcion Javascript");', false);
escribir_boton_simple_ahphp('', 'escribir_Documento("Ejecutando esta funcion Javascript");', true);
escribir_boton_simple_ahphp('Enviar');

*/
function escribir_boton_simple_ahphp($texto="", $onclick="", $enviar=true)
{	
    if($enviar)
    {
        escribir_ahphp("<input type='submit' value='".$texto."'  onclick='".$onclick."'  />");
    }
    else
    {
        escribir_ahphp("<input type='button' value='".$texto."'  onclick='".$onclick."'  />");
    }
}
//



/*

Te pinta una caja de números

* El parámetro id es el identificador de la caja de números
* El parámetro name es el nombre de la caja de números
* El parámetro class recibe el nombre de las clases que tendrá, para darle propiedades css por ejemplo
* El parámetro numero es el numero que mostrará/valor que tendrá
* El parámetro min es el numero mínimo que podra valer
* El parámetro max es el numero máximo que podra valer
* El parámetro saltos admite números y es la cantidad de valor que cambia en cada click de aumentar o disminuir, 
  si está vacío por defecto es 1. Admite números decimales, si quieres decimales este es tu parámetro
  ".1" es 1 decimal, ".01" son 2 decimales etc

Ejemplos:

escribir_caja_de_numeros_ahphp("id_numero", "nombre_numero", "fondo_amarillo_ahcss", 7, 5, 10, ".1");
escribir_caja_de_numeros_ahphp("id_numero", "nombre_numero", "", 20, "", "", 5);
escribir_caja_de_numeros_ahphp("id_numero", "nombre_numero", "", 70);

*/
function escribir_caja_de_numeros_ahphp($id="", $name="", $class="", $numero="", $min="", $max="", $saltos=1)
{
	escribir_ahphp("<input type='number' id='".$id."' name='".$name."' class='".$class."' value='".$numero."' min='".$min."' max='".$max."' step='".$saltos."'    />");
}
//



/*

Te pinta una caja de texto

* El parámetro id es el identificador la caja de texto
* El parámetro name es el nombre la caja de texto
* El parámetro class recibe el nombre de las clases que tendrá, para darle propiedades css por ejemplo
* El parámetro placeholder es el texto que mostrará cuando el valor del texto esté vacío
* El parámetro texto es el texto que mostrará/valor que tendrá

Ejemplos:

escribir_caja_de_texto_ahphp("id_txt_nombre", "nombre_usuario", "fondo_amarillo_ahcss", "Dime Tu Nombre", "Antonio");
escribir_caja_de_texto_ahphp("id_txt_nombre", "nombre_usuario", "", "", "Antonio");
escribir_caja_de_texto_ahphp("id_txt_nombre", "", "", "Dime Tu Nombre");

*/
function escribir_caja_de_texto_ahphp($id="", $name="", $class="", $placeholder="", $texto="")
{
	escribir_ahphp("<input type='text' id='".$id."' name='".$name."' class='".$class."' placeholder='".$placeholder."' value='".$texto."'/>");
}
//



/*

Te pinta un menú desplegable, el 1º valor estará seleccionado por defecto

* El parámetro id es el identificador la caja de texto
* El parámetro name es el nombre la caja de texto
* El parámetro class recibe el nombre de las clases que tendrá, para darle propiedades css por ejemplo
* Los parámetros de valores son para los valores, es un array

Ejemplos:

escribir_desplegable_ahphp("id_desplegable", "nombre_desplegable", Array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes") );
escribir_desplegable_ahphp("", "", Array("Arriba", "Abajo", "Izquierda", "Derecha") );

*/
function escribir_desplegable_ahphp
(
$id="", $name="", $class="",
array $valores=array("")
)
{
    $id = devolver_valor_entre_caracter_ahphp($id, '"');
    $name = devolver_valor_entre_caracter_ahphp($name, '"');
    $class = devolver_valor_entre_caracter_ahphp($class, '"');

    escribir_ahphp('<select id="'.$id.'" name="'.$name.'" class="'.$class.'"   >');
    escribir_ahphp(devolver_array_tamanio_ahphp($valores));

    for($contador=0; $contador < devolver_array_tamanio_ahphp($valores); $contador++)
    {
        escribir_ahphp('<option value="'. $valores[$contador].'">'.$valores[$contador].'</option>');
    }

    escribir_ahphp('</select>');
}
//



/*

Te pinta la cantidad de espacios en blanco que especifiques, si no especificas hace 1 por defecto

* El parámetro cantidad es la cantidad de espacios que pintará
* El parámetro devolver recibe un valor booleano (true o false)
si es true devuelve los espacios en blanco al invocador en vez de pintarlos directamente,
si es false lo pinta directamente, si no se especifica por defecto es false

Ejemplos:

escribir_espacios_en_blanco_ahphp(12);
escribir_espacios_en_blanco_ahphp();

*/
function escribir_espacios_en_blanco_ahphp($cantidad=1, $codigo_html=true, $devolver=false)
{
    $cadena_final="";

    for($contador=0; $contador<$cantidad; $contador++)
    {
        if($codigo_html)
        {
            $cadena_final = "$cadena_final" . texto_espacio_en_blanco_html_ahphp;
        }
        else
        {
            $cadena_final = "$cadena_final" . texto_espacio_en_blanco_ahphp;
        }
    }

    if($devolver)
    {
        return $cadena_final;
    }
    else
    {
        escribir_ahphp($cadena_final);
    }
}
//



/*

Abre la etiqueta html especificada.

* El parámetro id es el valor que tendrá su atributo id en html.

    Su propósito es identificar el elemento al vincularlo 
    en scripts (php, javascript) u hojas de estilo (css).

    El valor no debería ser igual a la id de otro elemento 
    del documento (Excepto si el valor es vacío).

    Si su valor es vacío la etiqueta no tendrá el atributo id.
    Su valor por defecto es vacío.

* El parámetro name es el valor que tendrá su atributo name en html.

    Su propósito es permitir a un script (php, javascript) 
    acceder a su contenido.

    El valor puede ser igual al name de otro elemento 
    (Ejemplo: en elementos input type="radio").

    Si su valor es vacío la etiqueta no tendrá el atributo name.
    Su valor por defecto es vacío.

* El parámetro class es el valor que tendrá su atributo class en html 
    y recibe el nombre de las clases que tendrá 
    (Separados por 1 espacio entre cada uno).

    Su propósito es darle propiedades css y manipular 
    el modelo de objeto de documento con código JavaScript y DHTML.

    El valor/valores pueden ser igual al class de otro elemento.

    Si su valor es vacío la etiqueta no tendrá el atributo class.
    Su valor por defecto es vacío.

* El parámetro etiqueta_html es el nombre de la etiqueta html que abrirá.

    Posibles valores: "p", "label", "b", "div", "nombre_personalizado", etc.

    Su valor por defecto es etiqueta_texto_ahphp (constante con valor "label").

* El parámetro atributos_con_valores_extra es un array como parámetro opcional 
    en el que puedes especificar nombres de atributos extra y sus valores.
    Es: 
    nombre de atributo extra 1 en posición 0 seguido de su valor en posición 1
    nombre de atributo extra 2 en posición 2 seguido de su valor en posición 3
    nombre de atributo extra 3 en posición 4 seguido de su valor en posición 5

* El parámetro devolver recibe un valor booleano (true o false). 

    Si el valor de este parámetro es true 
    devuelve el resultado en tipo string al invocador.
    Ejemplos: Asignar el resultado a una variable, añadir el resultado 
    al contenido de una variable con código html previo. 
    Sin ejecutar el código html del resultado 
    de esta función aún (Sin abrir la etiqueta). 

    Si el valor de este parámetro es false
    ejecuta el código html del resultado de esta función 
    abriendo la etiqueta y devuelve un valor booleano (true o false),
    si abre la etiqueta sin errores devuelve true
    de lo contrario devuelve false.
    
    Si no se especifica el valor de este parámetro por defecto es false.

Ejemplos:

Falta

*/
function escribir_etiqueta_abrir_ahphp(string $id="", string $name="", string $class="", string $etiqueta_html=etiqueta_texto_ahphp, array $atributos_con_valores_extra=valor_array_vacio_ahphp, bool $devolver=false): ?string
{
        // DECLARACIÓN VARIABLES FUNCIÓN
        $resultado = 
        abrir_etiqueta_ahphp 
        . 
        $etiqueta_html 
        . 
        texto_espacio_en_blanco_ahphp;
        // FIN DECLARACIÓN VARIABLES FUNCIÓN
        
        if
        (  
            devolver_condicion_valores_distintos_ahphp($id, valor_vacio_ahphp)  
        )
        {
            $id = devolver_valor_entre_caracter_ahphp($id, comilla_doble_ahphp);
            $resultado .= atributo_id_ahphp . $id . texto_espacio_en_blanco_ahphp;
        }
        if
        (  
            devolver_condicion_valores_distintos_ahphp($name, valor_vacio_ahphp)  
        )
        {
            $name = devolver_valor_entre_caracter_ahphp($name, comilla_doble_ahphp);
            $resultado .= atributo_name_ahphp . $name . texto_espacio_en_blanco_ahphp;
        }
        if
        (  
            devolver_condicion_valores_distintos_ahphp($class, valor_vacio_ahphp)  
        )
        {
            $class = devolver_valor_entre_caracter_ahphp($class, comilla_doble_ahphp);
            $resultado .= atributo_class_ahphp . $class . texto_espacio_en_blanco_ahphp;
        }

        if
        (  
            devolver_condicion_valores_distintos_ahphp
            (
                $atributos_con_valores_extra
                ,
                valor_array_vacio_ahphp
            )  
        )
        {
            foreach ($atributos_con_valores_extra as $clave => $valor)
            {
                    if($clave%2==0)
                    {
                        $resultado .= $valor . "=";
                    }
                    else
                    {
                        $valor = devolver_valor_entre_caracter_ahphp($valor, comilla_doble_ahphp);
                        $resultado .= $valor . texto_espacio_en_blanco_ahphp;
                    }
            }
        }

    
        $resultado .= cerrar_etiqueta_ahphp;
    
        if($devolver)
        {
            return $resultado;
        }
        else
        {
            return escribir_ahphp($resultado);
        }
}
//



/*

Cierra la etiqueta html especificada.

* El parámetro etiqueta_html es el nombre de la etiqueta html que cerrará.

    Posibles valores: "p", "label", "b", "div", "nombre_personalizado", etc.

    Su valor por defecto es etiqueta_texto_ahphp (constante con valor "label").

* El parámetro devolver recibe un valor booleano (true o false). 

    Si el valor de este parámetro es true 
    devuelve el resultado en tipo string al invocador.
    Ejemplos: Asignar el resultado a una variable, añadir el resultado 
    al contenido de una variable con código html previo. 
    Sin ejecutar el código html del resultado 
    de esta función aún (Sin cerrar la etiqueta). 

    Si el valor de este parámetro es false
    ejecuta el código html del resultado de esta función 
    cerrando la etiqueta y devuelve un valor booleano (true o false),
    si cierra la etiqueta sin errores devuelve true
    de lo contrario devuelve false.
    
    Si no se especifica el valor de este parámetro por defecto es false.

Ejemplos:

Falta

*/
function escribir_etiqueta_cerrar_ahphp(string $etiqueta_html=etiqueta_texto_ahphp, bool $devolver=false): ?string
{
        // DECLARACIÓN VARIABLES FUNCIÓN
        $resultado = 
        abrir_cierre_etiqueta_ahphp
        . 
        $etiqueta_html 
        . 
        cerrar_etiqueta_ahphp;

        // FIN DECLARACIÓN VARIABLES FUNCIÓN
        
        if($devolver)
        {
            return $resultado;
        }
        else
        {
            return escribir_ahphp($resultado);
        }
}
//



function escribir_etiqueta_crear_ahphp(string $id="", string $name="", string $class="", string $etiqueta_html=etiqueta_texto_ahphp, array $atributos_con_valores_extra=valor_array_vacio_ahphp, string $contenido=valor_vacio_ahphp, bool $devolver=false): ?string
{
    if($devolver)
    {
        return 
            escribir_etiqueta_abrir_ahphp
            ($id, $name, $class, $etiqueta_html, $atributos_con_valores_extra, $devolver)
            .
            $contenido
            .
            escribir_etiqueta_cerrar_ahphp($etiqueta_html, $devolver)
        ;
    }
    else
    {
        return 
            escribir_ahphp
            (
                escribir_etiqueta_abrir_ahphp
                ($id, $name, $class, $etiqueta_html, $atributos_con_valores_extra, devolver_resultado_ahphp)
                .
                $contenido
                .
                escribir_etiqueta_cerrar_ahphp($etiqueta_html, devolver_resultado_ahphp)
            )
        ;
    }

        
}
//




function escribir_informacion_ahphp($valor="", $detalles=true)
{
    if($detalles)
    {
        /* 
        $nombre_variable_invocadora recibe el nombre de la variable invocadora de fuera 
        que envió el parámetro $valor.
        (Caja negra, esta parte la obtuve de internet y no entiendo con claridad como funciona)
        */
        $backtrace   = debug_backtrace();
        $file = file($backtrace[0]['file']);
        $src  = $file[$backtrace[0]['line']-1];
        $pat = '#(.*)'.__FUNCTION__.' *?\( *?(.*) *?\)(.*)#i';
        $nombre_variable_invocadora  = preg_replace($pat, '$2', $src);
        //

        escribir_ahphp("Nombre Variable:");
        escribir_saltos_de_linea_ahphp();
        escribir_ahphp($nombre_variable_invocadora);
        escribir_saltos_de_linea_ahphp(2);
        escribir_ahphp("Invocación en el archivo:");
        escribir_saltos_de_linea_ahphp();
        escribir_ahphp($backtrace[0]['file']);
        escribir_saltos_de_linea_ahphp(2);
        escribir_ahphp("Invocación en la línea:");
        escribir_saltos_de_linea_ahphp();
        escribir_ahphp($backtrace[0]['line']);
        escribir_saltos_de_linea_ahphp(2);
        escribir_ahphp("Tipo Variable:");
        escribir_saltos_de_linea_ahphp();
        escribir_ahphp(gettype($valor));
    }
    var_dump($valor);
}



/*

Escribe una línea horizontal

* El parámetro id es el identificador del texto
* El parámetro name es el nombre del texto
* El parámetro class recibe el nombre de las clases que tendrá, para darle propiedades css por ejemplo
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena

Ejemplos:

escribir_linea_horizontal_ahphp("id_texto", "name_texto", "texto_azul_ahcss", false);
escribir_linea_horizontal_ahphp();

*/
function escribir_linea_horizontal_ahphp($id="", $name="", $class="", $devolver=false)
{
    $id = devolver_valor_entre_caracter_ahphp($id,'"');
    $name = devolver_valor_entre_caracter_ahphp($name,'"');
    $class = devolver_valor_entre_caracter_ahphp($class,'"');

    $resultado = "<hr id=$id name=$name class=$class />";
    if($devolver)
    {
        return $resultado;
    }
    else
    {
        escribir_ahphp($resultado);
    }
}
//



/*

Escribe una línea horizontal

* El parámetro negro recibe un valor booleano (true o false)
si es true el negro será más intenso, si es false tendrá su intensidad normal
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena

Ejemplos:

escribir_linea_horizontal_simple_ahphp();

*/
function escribir_linea_horizontal_simple_ahphp($negro=true, $devolver=false)
{
    if($negro)
    {
        $resultado = '<hr style="border: 1px solid black;" />';
    }
    else
    {
        $resultado = "<hr/>";
    }
        
    if($devolver)
    {
        return $resultado;
    }
    else
    {
        escribir_ahphp($resultado);
    }
}
//



/*

Te pinta una lista desordenada con los elementos que especifiques

* El parámetro id es el identificador de la lista
* El parámetro name es el nombre de la lista
* El parámetro class recibe el nombre de las clases que tendrá, para darle propiedades css por ejemplo
* El parámetro array recibe todos los valores que tendrá la lista
* El parámetro tipo recibe el tipo de simbolo que tendrá cada valor, si no se especifica es un círculo
* El parámetro devuelve recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es false

Ejemplo:

escribir_lista_desordenada_ahphp(
                    "id_lista", 
                    "name_lista", 
                    "class_lista",
                    array
                    (
					"Valor 1",
					"Valor 2",
					"Valor 3"
                    ),
                    "square"
                
				);

*/
function escribir_lista_desordenada_ahphp(
    $id="", $name="", $class="",
    array $valores=array(""),
    $tipo="circle",
    $devuelve=false
    )
    {
        $id = devolver_valor_entre_caracter_ahphp($id, '"');
        $name = devolver_valor_entre_caracter_ahphp($name, '"');
        $class = devolver_valor_entre_caracter_ahphp($class, '"');
        $cantidad_valores = devolver_array_tamanio_ahphp($valores);


        $cadena_resultado = '<ul ';
        if(  devolver_condicion_valores_distintos_ahphp($id, '""')  )
        {
        $cadena_resultado = "$cadena_resultado" . "id=$id ";
        }
        if(  devolver_condicion_valores_distintos_ahphp($name, '""')  )
        {
        $cadena_resultado = "$cadena_resultado" . "name=$name ";
        }
        if(  devolver_condicion_valores_distintos_ahphp($class, '""')  )
        {
        $cadena_resultado = "$cadena_resultado" . "class=$class ";
        }

        $cadena_resultado = $cadena_resultado . 'type='.devolver_valor_entre_caracter_ahphp($tipo, '"').'> ';

        for($contador=0; $contador<$cantidad_valores; $contador++)
        {
            $cadena_resultado = "$cadena_resultado <li> $valores[$contador]";
        }

        $cadena_resultado = "$cadena_resultado </ul>";

        if($devuelve)
        {
            return $cadena_resultado;
        }
        else
        {
            escribir_ahphp($cadena_resultado);
        }
    }
    //



/*

Lo mismo que escribir_lista_desordenada pero sin los parámetros id, name ni clase

Ejemplo:

escribir_lista_desordenada_simple_ahphp(
                    array
                    (
					"Valor 1",
					"Valor 2",
					"Valor 3"
                    )
                
				);

*/
function escribir_lista_desordenada_simple_ahphp(
    array $valores=array(""),
    $tipo="circle",
    $devuelve=false
    )
    {

        $cantidad_valores = devolver_array_tamanio_ahphp($valores);
        $cadena_resultado = '<ul type='.devolver_valor_entre_caracter_ahphp($tipo, '"').'> ';

        for($contador=0; $contador<$cantidad_valores; $contador++)
        {
            $cadena_resultado = "$cadena_resultado <li> $valores[$contador]";
        }

        $cadena_resultado = "$cadena_resultado </ul>";

        if($devuelve)
        {
            return $cadena_resultado;
        }
        else
        {
            escribir_ahphp($cadena_resultado);
        }  
    }
    //



/*

Te dibuja una pirámide del caracter que especifiques

* El parámetro caracter es el caracter/texto que formará la pirámide
* El parámetro tamaño es el tamaño que tendrá la pirámide
* El parámetro class recibe el nombre de las clases que tendrá, para darle propiedades css por ejemplo
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es false

Ejemplos:

escribir_piramide_caracter_ahphp("@", 4, "alineacion_texto_centro_horizontal_ahcss", false, false);

*/
function escribir_piramide_caracter_ahphp($id_piramide="", $name_piramide="", $class_piramide="", $class_caracter="", $caracter="", $tamaño=0, $colores_aleatorios=false, $devolver=false)
{
    $resultado = "";
    $class_caracter = devolver_valor_entre_caracter_ahphp($class_caracter, '"');

    $resultado = $resultado . escribir_capa_abrir_ahphp($id_piramide, $name_piramide, $class_piramide, true);
    for($contador=0; $contador<$tamaño; $contador++)
    {
        for($contador2=0; $contador2<$contador+1; $contador2++)
        {
            if($colores_aleatorios)
            {
                $numero_aleatorio_1 = mt_rand(0,255);
                $numero_aleatorio_2 = mt_rand(0,255);
                $numero_aleatorio_3 = mt_rand(0,255);
                $numero_aleatorio_4 = mt_rand(0,255);
                $txt_rgba="rgba($numero_aleatorio_1,$numero_aleatorio_2,$numero_aleatorio_3,$numero_aleatorio_4)";
                $estilo="background-color: $txt_rgba";
                $estilo = devolver_valor_entre_caracter_ahphp($estilo, '"');
                $resultado = $resultado."<label style=$estilo class=".$class_caracter.">$caracter</label>";
            }
            else
            {
                $resultado = $resultado."<label class=".$class_caracter.">$caracter</label>";
            }       
        }
        $resultado = "$resultado" . escribir_saltos_de_linea_ahphp(1, true);           
    }
    $resultado = "$resultado" . escribir_capa_cerrar_ahphp(true);
    if($devolver)
    {
        return $resultado;
    }
    else
    {
        escribir_ahphp($resultado);
    }
}
//



/*

Lo mismo que la función escribir_piramide_caracter pero sin los primeros parámetros
id_piramide, name_piramide, class_piramide, class_caracter 

Ejemplos:

escribir_piramide_caracter_simple_ahphp("*", 7, true, false);
escribir_piramide_caracter_simple_ahphp("#", 12);

*/
function escribir_piramide_caracter_simple_ahphp($caracter="", $tamaño=0, $colores_aleatorios=false, $devolver=false)
{
    $resultado = "";

    for($contador=0; $contador<$tamaño; $contador++)
    {
        for($contador2=0; $contador2<$contador+1; $contador2++)
        {
            if($colores_aleatorios)
            {
                $numero_aleatorio_1 = mt_rand(0,255);
                $numero_aleatorio_2 = mt_rand(0,255);
                $numero_aleatorio_3 = mt_rand(0,255);
                $numero_aleatorio_4 = mt_rand(0,255);
                $txt_rgba="rgba($numero_aleatorio_1,$numero_aleatorio_2,$numero_aleatorio_3,$numero_aleatorio_4)";
                $estilo="background-color: $txt_rgba";
                $estilo = devolver_valor_entre_caracter_ahphp($estilo, '"');
                $resultado = $resultado."<label style=$estilo>$caracter</label>";
            }
            else
            {
                $resultado = $resultado."<label>$caracter</label>";
            }
            
            
        }
        $resultado = "$resultado" . escribir_saltos_de_linea_ahphp(1, true);           
    }

    if($devolver)
    {
        return $resultado;
    }
    else
    {
        escribir_ahphp($resultado);
    }
}
//



/*

Hace la cantidad de saltos de línea que especifiques, si no especificas hace 1 por defecto

* El parámetro cantidad es la cantidad de saltos de línea que pintará
* El parámetro devolver recibe un valor booleano (true o false)
si es true devuelve los saltos de línea al invocador en vez de pintarlos directamente,
si es false lo pinta directamente, si no se especifica por defecto es false

Ejemplos:

escribir_saltos_de_linea_ahphp(12);
escribir_saltos_de_linea_ahphp();

*/
function escribir_saltos_de_linea_ahphp($cantidad=1, $devolver=false)
{
    $cadena_final="";

    for($contador=0; $contador<$cantidad; $contador++)
    {
        $cadena_final = "$cadena_final" . "<br>";
    }

    if($devolver)
    {
        return $cadena_final;
    }
    else
    {
        escribir_ahphp($cadena_final);
    }
}
//



/*

escribir un texto

* El parámetro id es el identificador del texto
* El parámetro name es el nombre del texto
* El parámetro class recibe el nombre de las clases que tendrá, para darle propiedades css por ejemplo
* El parámetro texto es el texto que escribirá
* El parámetro etiqueta_texto es la etiqueta html que tendrá el texto, por defecto es label
* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena

Ejemplos:

escribir_texto_ahphp("id_texto", "name_texto", "texto_azul_ahcss", "Mi Texto", "pre", false);
escribir_texto_ahphp("", "", "", "Mi Texto");

*/
function escribir_texto_ahphp($id="", $name="", $class="", $texto="", $etiqueta_texto="label", $devolver=false)
{
    $resultado = "<$etiqueta_texto ";
    $id = devolver_valor_entre_caracter_ahphp($id,'"');
    $name = devolver_valor_entre_caracter_ahphp($name,'"');
    $class = devolver_valor_entre_caracter_ahphp($class,'"');

    if(  devolver_condicion_valores_distintos_ahphp($id, '""')  )
    {
    $resultado = "$resultado" . "id=$id ";
    }
    if(  devolver_condicion_valores_distintos_ahphp($name, '""')  )
    {
    $resultado = "$resultado" . "name=$name ";
    }
    if(  devolver_condicion_valores_distintos_ahphp($class, '""')  )
    {
    $resultado = "$resultado" . "class=$class ";
    }


    $resultado = "$resultado" . ">$texto</$etiqueta_texto>";
    //$resultado = "<$etiqueta_texto id=$id name=$name class=$class>$texto</$etiqueta_texto>";
    if($devolver)
    {
        return $resultado;
    }
    else
    {
        escribir_ahphp($resultado);
    }
}
//



/*

Función escribir_texto_condicion_ahphp


¿Cómo funciona?

//
Si una condición especificada se cumple dará un mensaje especificado 
y si no se cumple dará otro mensaje especificado.
También tienes la opción de guardar el resultado o mostrarlo.
//

¿Qué parámetros tiene y qué valor devuelve?

//
* El parámetro condicion es tipo booleano (true, false), si no se especifica por defecto es false. 
Recibirá la condicion a evaluar.

* El parámetro mensaje_verdad es tipo string (texto), si no se especifica por defecto es "". 
Recibirá el mensaje a mostrar si se cumple la condición (si el parametro condicion es true).

* El parámetro mensaje_falso es tipo string (texto), si no se especifica por defecto es "". 
Recibirá el mensaje a mostrar si no se cumple la condición (si el parametro condicion es false).

* El parámetro devolver_resultado es tipo booleano (true, false), si no se especifica por defecto es false. 
Si es true devuelve la cadena del resultado al invocador, si es false lo muestra en la página web, 

* Valor devuelto: 
Devuelve un string o un booleano dependiendo del valor del parámetro booleano devolver_resultado (true = string, false = boolean)
//

Ejemplos:

//

(Ejemplo 1)
escribir_texto_condicion_ahphp(3+2==5, "Sabes sumar", "No deberia mostrarse esto", escribir_resultado_ahphp);

(Ejemplo 2)
escribir_texto_condicion_ahphp(1+1==3, "No deberia mostrarse esto", "No sabes sumar");

(Ejemplo 3)
$resultado = escribir_texto_condicion_ahphp(false, "Si", "No", devolver_resultado_ahphp); 
escribir_texto_simple_ahphp($resultado);

//

*/
function escribir_texto_condicion_ahphp
(
    bool $condicion = falso_ahphp, // false
    string $mensaje_verdad = valor_vacio_ahphp, // ""
    string $mensaje_falso = valor_vacio_ahphp, // ""
    bool $devolver_resultado = escribir_resultado_ahphp // false
)
: ?string

{
    if($condicion)
    {
        return resultado_devolver_o_escribir_ahphp($mensaje_verdad, $devolver_resultado, funcion_escribir_texto_ahphp);
    }
    else
    {
        return resultado_devolver_o_escribir_ahphp($mensaje_falso, $devolver_resultado, funcion_escribir_texto_ahphp);   
    }
}
//



/*

Lo mismo que escribir_texto pero sin los primeros parámetros id, name, class

Ejemplos:

escribir_texto_simple_ahphp("Mi Texto", "h1", false);
escribir_texto_simple_ahphp("Mi Texto");

*/
function escribir_texto_simple_ahphp($texto="", $etiqueta_texto="label", $devolver=false)
{
    if(  devolver_condicion_valores_iguales_ahphp($etiqueta_texto, "")  )
    {
        $etiqueta_texto = "label";
    }

    $resultado = "<$etiqueta_texto>$texto</$etiqueta_texto>";

    if($devolver)
    {
        return $resultado;
    }
    else
    {
        escribir_ahphp($resultado);
    }
}
//



/* 

Función escribir_capa_abrir_ahphp(string $id="", string $name="", string $class="", bool $devolver=false): ?string

Crea una capa personalizable con código html

* El parámetro id es el valor que tendrá su atributo id en html.

    Su propósito es identificar el elemento al vincularlo 
    en scripts (php, javascript) u hojas de estilo (css).

    El valor no debería ser igual a la id de otro elemento 
    del documento (Excepto si el valor es vacío).

    Si su valor es vacío la capa no tendrá el atributo id.
    Su valor por defecto es vacío.

* El parámetro name es el valor que tendrá su atributo name en html.

    Su propósito es permitir a un script (php, javascript) 
    acceder a su contenido.

    El valor puede ser igual al name de otro elemento 
    (Ejemplo: en elementos input type="radio").

    Si su valor es vacío la capa no tendrá el atributo name.
    Su valor por defecto es vacío.

* El parámetro class es el valor que tendrá su atributo class en html 
    y recibe el nombre de las clases que tendrá 
    (Separados por 1 espacio entre cada uno).

    Su propósito es darle propiedades css y manipular 
    el modelo de objeto de documento con código JavaScript y DHTML.

    El valor/valores pueden ser igual al class de otro elemento.

    Si su valor es vacío la capa no tendrá el atributo class.
    Su valor por defecto es vacío.

* El parámetro devolver recibe un valor booleano (true o false). 

    Si el valor de este parámetro es true 
    devuelve el resultado en tipo string al invocador.
    Ejemplos: Asignar el resultado a una variable, añadir el resultado 
    al contenido de una variable con código html previo. 
    Sin ejecutar el código html del resultado 
    de esta función aún (Sin crear la capa). 

    Si el valor de este parámetro es false
    ejecuta el código html del resultado de esta función 
    creando la capa y devuelve un valor booleano (true o false),
    si crea la capa sin errores devuelve true
    de lo contrario devuelve false.
    
    Si no se especifica el valor de este parámetro por defecto es false.

Ejemplos:

// Crea una nueva capa no personalizable en código html
escribir_capa_abrir_ahphp(); 

// Crea una capa personalizable y personalizada con clases en código html
escribir_capa_abrir_ahphp("id_capa_1", "name_capa_1", "fondo_azul_ahcss tamanio_50px_alto_ahcss tamanio_50px_ancho_ahcss", escribir_ahphp); 

// Asigna el código html de una capa no personalizable a una variable
$codigo_html_crear_capa_no_personalizable = escribir_capa_abrir_ahphp(valor_sin_id_ahphp, valor_sin_name_ahphp, valor_sin_class_ahphp, devolver_resultado_ahphp);
// Ejecuta el código html asignado a la variable.
escribir_ahphp($codigo_html_crear_capa_no_personalizable); 

// Asigna el código html de una capa personalizable (no personalizada con clases) a una variable
$codigo_html_crear_capa_personalizable = escribir_capa_abrir_ahphp("id_capa_2", "name_capa_2", valor_sin_class_ahphp, devolver_resultado_ahphp); 
// Ejecuta el código html asignado a la variable.
escribir_ahphp($codigo_html_crear_capa_personalizable);

// No olvidar cerrar la capa/s abierta/s en algún momento (Cuando se ejecutó el código html).
escribir_capa_cerrar_ahphp();

*/
function escribir_capa_abrir_ahphp(string $id="", string $name="", string $class="", bool $devolver=false): ?string
{
    return escribir_etiqueta_abrir_ahphp($id, $name, $class, etiqueta_capa_ahphp, valor_sin_atributos_extra_ahphp, $devolver);
}
// FIN Función escribir_capa_abrir_ahphp



/*

Cierra la última capa creada/abierta

* El parámetro devolver recibe un valor booleano (true o false), si es true devuelve la cadena
del resultado al invocador, si es false lo pinta, si no se especifica por defecto es false

Ejemplos:

escribir_capa_cerrar_ahphp();

*/
function escribir_capa_cerrar_ahphp($devolver=false)
{
    return escribir_etiqueta_cerrar_ahphp(etiqueta_capa_ahphp, $devolver);
}
//



/*

Crea un nuevo formulario

* El parámetro id es el identificador del formulario
* El parámetro name es el nombre del formulario
* El parámetro class recibe el nombre de las clases que tendrá, para darle propiedades css por ejemplo
* El parámetro ruta_action tiene la ruta del archivo que procesará 
los datos enviados al servidor (por ejemplo, un script de PHP),
Si se especifica una ruta entiendo que el método del formulario será post y sino será get

Ejemplos:

escribir_formulario_abrir_ahphp("id_formulario", "nombre_formulario", "clase_formulario", "ruta_archivo_php_que_se_ejecuta_al_enviar_el_formulario_con_el_boton_enviar.php";
escribir_formulario_abrir_ahphp("id_formulario", "nombre_formulario", "../librerias_antonio_hristov/Antonio_Hristov.php");
escribir_formulario_abrir_ahphp("id_formulario", "nombre_formulario");

*/
function escribir_formulario_abrir_ahphp($id="", $name="", $class="", $ruta_action="")
{
    if(   devolver_condicion_valores_distintos_ahphp($ruta_action, "")   )
    {
        escribir_ahphp('<form id="'.$id.'" name="'.$name.'" class="'.$class.'" action="'.$ruta_action.'" method="post"   >');
    }
    else
    {
        escribir_ahphp('<form id="'.$id.'" name="'.$name.'" class="'.$class.'" method="get"   >');
    }
}
//



/*

Lo mismo que la función formulario_abrir pero sin los 3 primeros parámetros id, name, class

Ejemplos:

escribir_formulario_abrir_simple_ahphp("ruta_archivo_php_que_se_ejecuta_al_enviar_el_formulario_con_el_boton_enviar.php");
escribir_formulario_abrir_simple_ahphp("../librerias_antonio_hristov/Antonio_Hristov.php");
escribir_formulario_abrir_simple_ahphp();

*/
function escribir_formulario_abrir_simple_ahphp($ruta_action="")
{
    if(   devolver_condicion_valores_distintos_ahphp($ruta_action, "")   )
    {
        escribir_ahphp('<form action="'.$ruta_action.'" method="post"   >');
    }
    else
    {
        escribir_ahphp('<form method="get"   >');
    }
}
//



/*

Cierra el último formulario abierto/Creado

*/
function escribir_formulario_cerrar_ahphp()
{
    escribir_ahphp('</form>');
}
//



/*

Función funcion_condicion_llamar_ahphp


¿Cómo funciona?

//
Si una condición especificada se cumple se invocará una función especificada y sus parámetros en caso de tenerlos.
y si no se cumple se invocará otra función especificada y sus parámetros en caso de tenerlos.
//

¿Qué parámetros tiene y qué valor devuelve?

//
* El parámetro condicion es tipo booleano (true, false), si no se especifica por defecto es false. 
Recibirá la condicion a evaluar.

* El parámetro funcion_verdad es tipo callable (nombre de una función), si no se especifica por defecto es null. 
Recibirá el nombre de la función a invocar si se cumple la condición (si el parametro condicion es true).

* El parámetro funcion_falso es tipo callable (nombre de una función), si no se especifica por defecto es null. 
Recibirá el nombre de la función a invocar si no se cumple la condición (si el parametro condicion es false).

* El parámetro argumentos_funcion_verdad es tipo array (varios datos / datos indefinidos), si no se especifica por defecto es array(""). 
Recibirá los parámetros de la función especificada en función_verdad en caso de que dicha función lleve parámetros.

* El parámetro argumentos_funcion_falso es tipo array (varios datos / datos indefinidos), si no se especifica por defecto es array(""). 
Recibirá los parámetros de la función especificada en funcion_falso en caso de que dicha función lleve parámetros.

* Valor devuelto: 
Devuelve un booleano dependiendo del si la función se ejecuta con/sin errores.
Si no se especificó la función a la que se invoca o hay otro tipo de error se devuelve false,
si la función se ejecuta sin errores devuelve true.
//

Ejemplos:

//

(Ejemplo 1)
function sabes_sumar($parametro_1, $parametro_2)
{
    escribir_texto_simple_ahphp("El resultado $parametro_1 es $parametro_2");
}
function no_sabes_sumar($parametro_1)
{
    escribir_texto_simple_ahphp("El resultado es $parametro_1");
}
funcion_condicion_llamar_ahphp( 2+2==4, 'sabes_sumar', 'no_sabes_sumar', array('Si', 'Correcto'), array('Incorrecto') );
escribir_saltos_de_linea_ahphp();
funcion_condicion_llamar_ahphp( 2+2==5, 'sabes_sumar', 'no_sabes_sumar', array('Si', 'Correcto'), array('Incorrecto') );

(Ejemplo 2)
function resultado($parametro_1, $parametro_2)
{
    escribir_texto_simple_ahphp("El resultado $parametro_1 es $parametro_2");
}
funcion_condicion_llamar_ahphp( true, 'resultado', 'resultado', array('Si', 'Correcto'), array('No', 'Correcto') );
escribir_saltos_de_linea_ahphp();
funcion_condicion_llamar_ahphp( false, 'resultado', 'resultado', array('Si', 'Correcto'), array('No', 'Correcto') );

(Ejemplo 3)
function verdad()
{
    escribir_texto_simple_ahphp("El resultado de la condición es verdad, no hay parámetros aqui.");
}
function falso()
{
    escribir_texto_simple_ahphp("El resultado de la condición es falso, no hay parámetros aqui.");
}
funcion_condicion_llamar_ahphp( true, 'verdad', 'falso');
escribir_saltos_de_linea_ahphp();
funcion_condicion_llamar_ahphp( false, 'verdad', 'falso');

//

*/
function funcion_condicion_llamar_ahphp
( 
    bool $condicion = falso_ahphp // false
    ,
    callable $funcion_verdad = null
    , 
    callable $funcion_falso = null
    , 
    array $argumentos_funcion_verdad = valor_array_vacio_ahphp // array("")
    , 
    array $argumentos_funcion_falso = valor_array_vacio_ahphp // array("")
)
: ?bool

{

    if(  $condicion  )
    {
        if(devolver_condicion_tipo_nulo_ahphp($funcion_verdad))
        {
            return error_resultado_ahphp;
        }
        else
        {
            return funcion_llamar_ahphp( $funcion_verdad, $argumentos_funcion_verdad );
        }
    }
    else
    {
        if(devolver_condicion_tipo_nulo_ahphp($funcion_falso))
        {
            return error_resultado_ahphp;
        }
        else
        {
            return funcion_llamar_ahphp( $funcion_falso, $argumentos_funcion_falso );
        }
    }
}
//



/*

*/
function funcion_llamar_ahphp( callable $funcion=null, array $parametros=array() ): ?bool
{

    if
    ( 
        is_null($funcion)
    )
    {
        return error_resultado_ahphp;
    }
    else
    {
        if( devolver_condicion_valores_distintos_ahphp($parametros, valor_array_vacio_ahphp) )
        {
            return call_user_func_array($funcion, $parametros);
        }
        else
        {
            return $funcion();
        }
    }

}
//



/*

El invocador de esta función debe tener referenciada la librería fpdf versión 1.84 para que funcione con
include("(ruta de la libreria fpdf versión 1.84)");

Crea una nueva instancia de un objeto pdf de la librería fpdf versión 1.84

* El parámetro variable_instancia_pdf recibe una variable por referencia (no por valor)
La variable que el usuario pasó en este parámetro tendrá la instancia creada una vez se ejecute esta función.

Ejemplos:

pdf_crear_instancia_ahphp($instancia_pdf);

*/
function pdf_crear_instancia_ahphp(&$variable_instancia_pdf="")
{
    ob_start();
    $variable_instancia_pdf = new FPDF();
}
//



/* FALTA """devolver_variable_definida_ahphp""" dar la opcion de definirlas automáticamente

El invocador de esta función debe tener referenciada la librería fpdf versión 1.84 para que funcione con
include("(ruta de la libreria fpdf versión 1.84)");

Crea un pdf con los parámetros especificados

* El parámetro variable_instancia_pdf recibe una variable por referencia (no por valor)
La variable que el usuario pasó en este parámetro tendrá una nueva página creada una vez se ejecute esta función.

Ejemplos:

pdf_crear_ahphp();

*/
function pdf_crear
( 
    array $array_texto_valor=array(""),
    array $array_saltos_de_linea_extra_antes_de_escribir=array(0),
    array $array_nueva_pagina = array(true), 
    array $array_fuente_texto=array("Arial"), 
    array $array_fuente_estilo_texto=array(""),  
    array $array_fuente_tamaño_texto=array(12),
    array $array_texto_ancho_de_celda=array(0),
    array $array_texto_alto_de_celda=array(5),
    array $array_texto_borde=array(0),
    array $array_texto_alineacion_texto=array("L"),
    array $array_texto_fondo_de_la_celda_dibujada=array(false),
    $nombre_archivo="doc.pdf",
    $destino_archivo="I",
    $es_utf_8_archivo=false
)
{
    // DECLARACIÓN VARIABLES
    $valor_vacio = "";
    $pdf_instancia = "";
    $pdf_longitud_array = devolver_array_tamanio_ahphp($array_texto_valor);
    $pdf_ultimo_saltos_de_linea_extra_antes_de_escribir = "";
    $pdf_ultimo_fuente_texto = "";
    $pdf_ultimo_fuente_estilo_texto = "";
    $pdf_ultimo_fuente_tamaño_texto = "";
    $pdf_ultimo_texto_ancho_de_celda = "";
    $pdf_ultimo_texto_alto_de_celda = "";
    $pdf_ultimo_texto_borde = "";
    $pdf_ultimo_texto_alineacion_texto = "";
    $pdf_ultimo_texto_fondo_de_la_celda_dibujada = "";
    //


    
    /*
    DEFINE LOS ARRAYS CON UN VALOR VACÍO SI NO SON DEFINIDOS POR EL USUARIO
    */
    //devolver_array_definido_ahphp(&$array=array(""), $definir=false, $valor_definido="", $posicion_definido=0)
    devolver_array_definido_ahphp($array_texto_valor, true);
    devolver_array_definido_ahphp($array_saltos_de_linea_extra_antes_de_escribir, true);
    devolver_array_definido_ahphp($array_nueva_pagina, true);
    devolver_array_definido_ahphp($array_fuente_texto, true);
    devolver_array_definido_ahphp($array_fuente_estilo_texto, true);
    devolver_array_definido_ahphp($array_fuente_tamaño_texto, true);
    devolver_array_definido_ahphp($array_texto_ancho_de_celda, true);
    devolver_array_definido_ahphp($array_texto_alto_de_celda, true);
    devolver_array_definido_ahphp($array_texto_borde, true);
    devolver_array_definido_ahphp($array_texto_alineacion_texto, true);
    devolver_array_definido_ahphp($array_texto_fondo_de_la_celda_dibujada, true);
    //

    /*
    DEFINE LA PRIMERA POSICIÓN CON SU VALOR POR DEFECTO SI ESTÁ VACÍO
    */
    if(  devolver_condicion_valores_iguales_ahphp($array_saltos_de_linea_extra_antes_de_escribir[0], "")  )
    {
        $array_saltos_de_linea_extra_antes_de_escribir[0] = 0;
    }
    if(  devolver_condicion_valores_iguales_ahphp($array_nueva_pagina[0], "")  )
    {
        $array_nueva_pagina[0] = true;
    }
    if(  devolver_condicion_valores_iguales_ahphp($array_fuente_texto[0], "")  )
    {
        $array_fuente_texto[0] = "Arial";
    }
    if(  devolver_condicion_valores_iguales_ahphp($array_fuente_tamaño_texto[0], "")  )
    {
        $array_fuente_tamaño_texto[0] = 12;
    }
    if(  devolver_condicion_valores_iguales_ahphp($array_texto_ancho_de_celda[0], "")  )
    {
        $array_texto_ancho_de_celda[0] = 0;
    }
    if(  devolver_condicion_valores_iguales_ahphp($array_texto_alto_de_celda[0], "")  )
    {
        $array_texto_alto_de_celda[0] = 5;
    }
    if(  devolver_condicion_valores_iguales_ahphp($array_texto_borde[0], "")  )
    {
        $array_texto_borde[0] = 0;
    }
    if(  devolver_condicion_valores_iguales_ahphp($array_texto_alineacion_texto[0], "")  )
    {
        $array_texto_alineacion_texto[0] = "L";
    }
    if(  devolver_condicion_valores_iguales_ahphp($array_texto_fondo_de_la_celda_dibujada[0], "")  )
    {
        $array_texto_fondo_de_la_celda_dibujada[0] = false;
    }
    //

    pdf_crear_instancia_ahphp($pdf_instancia);

    for($contador=0; $contador<$pdf_longitud_array; $contador++)
    {
        
        // Nueva página
        if( devolver_array_posicion_definido_ahphp($array_nueva_pagina, $contador) && devolver_condicion_valores_distintos_ahphp($array_nueva_pagina[$contador], $valor_vacio) && $array_nueva_pagina[$contador] )
        {
            pdf_crear_nueva_pagina_ahphp($pdf_instancia);
        }
        //
        
        
        // Último valor definido si está vacío el dato que toque (contador) en la posición del bucle
        if( $contador>0 )
        {
            if(  !devolver_array_posicion_definido_ahphp($array_saltos_de_linea_extra_antes_de_escribir, $contador) || devolver_condicion_valores_iguales_ahphp($array_saltos_de_linea_extra_antes_de_escribir[$contador], $valor_vacio)  )
            {
                $array_saltos_de_linea_extra_antes_de_escribir[$contador] = $pdf_ultimo_saltos_de_linea_extra_antes_de_escribir;
            }
            if(  !devolver_array_posicion_definido_ahphp($array_fuente_texto, $contador)  )
            {
                $array_fuente_texto[$contador] = $pdf_ultimo_fuente_texto;
            }
            if(  !devolver_array_posicion_definido_ahphp($array_fuente_estilo_texto, $contador)  )
            {
                $array_fuente_estilo_texto[$contador] = $pdf_ultimo_fuente_estilo_texto;
            }
            if(  !devolver_array_posicion_definido_ahphp($array_fuente_tamaño_texto, $contador) || devolver_condicion_valores_iguales_ahphp($array_fuente_tamaño_texto[$contador], $valor_vacio)  )
            {
                $array_fuente_tamaño_texto[$contador] = $pdf_ultimo_fuente_tamaño_texto;
            }
            if(  !devolver_array_posicion_definido_ahphp($array_texto_ancho_de_celda, $contador) || devolver_condicion_valores_iguales_ahphp($array_texto_ancho_de_celda[$contador], $valor_vacio)  )
            {
                $array_texto_ancho_de_celda[$contador] = $pdf_ultimo_texto_ancho_de_celda;
            }
            if(  !devolver_array_posicion_definido_ahphp($array_texto_alto_de_celda, $contador) || devolver_condicion_valores_iguales_ahphp($array_texto_alto_de_celda[$contador], $valor_vacio)  )
            {
                $array_texto_alto_de_celda[$contador] = $pdf_ultimo_texto_alto_de_celda;
            }
            if(  !devolver_array_posicion_definido_ahphp($array_texto_borde, $contador) || devolver_condicion_valores_iguales_ahphp($array_texto_borde[$contador], $valor_vacio)  )
            {
                $array_texto_borde[$contador] = $pdf_ultimo_texto_borde;
            }
            if(  !devolver_array_posicion_definido_ahphp($array_texto_alineacion_texto, $contador) || devolver_condicion_valores_iguales_ahphp($array_texto_alineacion_texto[$contador], $valor_vacio)  )
            {
                $array_texto_alineacion_texto[$contador] = $pdf_ultimo_texto_alineacion_texto;
            }
            if(  !devolver_array_posicion_definido_ahphp($array_texto_fondo_de_la_celda_dibujada, $contador) || devolver_condicion_valores_iguales_ahphp($array_texto_fondo_de_la_celda_dibujada[$contador], $valor_vacio)  )
            {
                $array_texto_fondo_de_la_celda_dibujada[$contador] = $pdf_ultimo_texto_fondo_de_la_celda_dibujada;
            }
        }
        //
        
        

        pdf_fuente_texto_ahphp($pdf_instancia, $array_fuente_texto[$contador], $array_fuente_estilo_texto[$contador], $array_fuente_tamaño_texto[$contador]);


        

        pdf_escribir_texto
        (
        $pdf_instancia, 
        $array_texto_valor[$contador], 
        $array_saltos_de_linea_extra_antes_de_escribir[$contador],
        $array_texto_ancho_de_celda[$contador], 
        $array_texto_alto_de_celda[$contador], 
        $array_texto_borde[$contador], 
        $array_texto_alineacion_texto[$contador], 
        $array_texto_fondo_de_la_celda_dibujada[$contador]
        );

        // Actualizando el último valor de las variables
        $pdf_ultimo_saltos_de_linea_extra_antes_de_escribir = $array_saltos_de_linea_extra_antes_de_escribir[$contador];
        $pdf_ultimo_fuente_texto = $array_fuente_texto[$contador];
        $pdf_ultimo_fuente_estilo_texto = $array_fuente_estilo_texto[$contador];
        $pdf_ultimo_fuente_tamaño_texto = $array_fuente_tamaño_texto[$contador];
        $pdf_ultimo_texto_ancho_de_celda = $array_texto_ancho_de_celda[$contador];
        $pdf_ultimo_texto_alto_de_celda = $array_texto_alto_de_celda[$contador];
        $pdf_ultimo_texto_borde = $array_texto_borde[$contador];
        $pdf_ultimo_texto_alineacion_texto = $array_texto_alineacion_texto[$contador];
        $pdf_ultimo_texto_fondo_de_la_celda_dibujada = $array_texto_fondo_de_la_celda_dibujada[$contador];
        //

    }


  

    //GENERA EL ARCHIVO PDF
    pdf_generar_archivo_ahphp($pdf_instancia, $nombre_archivo, $destino_archivo, $es_utf_8_archivo);
}
//



/*

El invocador de esta función debe tener referenciada la librería fpdf versión 1.84 para que funcione con
include("(ruta de la libreria fpdf versión 1.84)");

Crea una nueva página a la instancia de un objeto pdf de la librería fpdf versión 1.84

* El parámetro variable_instancia_pdf recibe una variable por referencia (no por valor)
La variable que el usuario pasó en este parámetro tendrá una nueva página creada una vez se ejecute esta función.

Ejemplos:

pdf_crear_nueva_pagina_ahphp($instancia_pdf);

*/
function pdf_crear_nueva_pagina_ahphp(&$variable_instancia_pdf="")
{
    $variable_instancia_pdf ->AddPage();
}
//



/*

El invocador de esta función debe tener referenciada la librería fpdf versión 1.84 para que funcione con
include("(ruta de la libreria fpdf versión 1.84)");

Permite escribir texto a la instancia de un objeto pdf de la librería fpdf versión 1.84

* El parámetro variable_instancia_pdf recibe una variable por referencia (no por valor)
La variable que el usuario pasó en este parámetro tendrá texto escrito una vez se ejecute esta función.
* El parámetro texto recibe la cadena de texto que escribirá.
* El parámetro ancho_de_celda recibe el ancho de la celda, si es 0 la celda se extiende hasta el márgen derecho.
* El parámetro alto_de_celda recibe el alto de la celda.
* El parámetro borde indica si los bordes deben ser dibujados alrededor de la celda,
(Puede recibir una combinación de valores, no solo un valor)
Posibles Valores y significado: 
0: sin borde
1: marco
L: izquierda
T: superior
R: derecha
B: inferior
* El parámetro alineacion_texto permite centrar o alinear el texto.
Posibles Valores y significado: 
L o una cadena vacia: alineación izquierda (valor por defecto)
C: centro
R: alineación derecha
* El parámetro fondo_de_la_celda_dibujada indica si el fondo de la celda debe ser dibujada (true) o transparente (false).

Ejemplos:

pdf_escribir_texto_ahphp($instancia_pdf, "Hola Mundo", 0, 10, 0, 1);
pdf_escribir_texto_ahphp($instancia_pdf, "Mi Texto");

*/
function pdf_escribir_texto
(
    &$variable_instancia_pdf="", 
    $texto="", 
    $saltos_de_linea_extra_antes_de_escribir=0,
    $ancho_de_celda=0, 
    $alto_de_celda=5, 
    $borde=0, 
    $alineacion_texto="L", 
    $fondo_de_la_celda_dibujada=false
)
{
    pdf_saltos_de_linea_extra_ahphp($variable_instancia_pdf, $saltos_de_linea_extra_antes_de_escribir);
    $variable_instancia_pdf->MultiCell($ancho_de_celda, $alto_de_celda, $texto, $borde, $alineacion_texto, $fondo_de_la_celda_dibujada);
}
//



/*

El invocador de esta función debe tener referenciada la librería fpdf versión 1.84 para que funcione con
include("(ruta de la libreria fpdf versión 1.84)");

Permite personalizar el texto a la instancia de un objeto pdf de la librería fpdf versión 1.84

* El parámetro variable_instancia_pdf recibe una variable por referencia (no por valor)
La variable que el usuario pasó en este parámetro tendrá una nueva fuente de texto establecida una vez se ejecute esta función.
* El parámetro fuente permite elegir la fuente del texto.
* El parámetro estilo permite elegir el estilo del texto.
Posibles Valores y significado:
(Vacío): Defecto
B: bold
I: italic
U: underline
(Y combinaciones)
* El parámetro tamaño permite elegir el tamaño del texto.

Ejemplos:

pdf_fuente_texto_ahphp($instancia_pdf, "Times", "B", 20);
pdf_fuente_texto_ahphp($instancia_pdf, "Courier", "I", 14);
pdf_fuente_texto_ahphp($instancia_pdf, "Symbol", "U");
pdf_fuente_texto_ahphp($instancia_pdf, "", "BU");
pdf_fuente_texto_ahphp($instancia_pdf);

*/
function pdf_fuente_texto_ahphp(&$variable_instancia_pdf="", $fuente="Arial", $estilo="", $tamaño=12)
{
    $variable_instancia_pdf->SetFont("$fuente", "$estilo", $tamaño);
}
//



/*

El invocador de esta función debe tener referenciada la librería fpdf versión 1.84 para que funcione con
include("(ruta de la libreria fpdf versión 1.84)");

Genera un archivo pdf con el valor de la instancia de un objeto pdf de la librería fpdf versión 1.84

* El parámetro nombre indica el nombre del archivo, se ignora si el valor del parámetro destino es "S".
* El parámetro destino indica el destino donde se envia el archivo
Posibles Valores y significado:
I: Envia el archivo en línea al navegador. Se utiliza el visor de PDF si está disponible.
D: Envia al navegador y fuerza la descarga de un archivo con el nombre dado por nombre.
F: Guarda en un archivo local con el nombre dado por nombre (puede incluir una ruta).
S: Devuelve el archivo como una cadena de texto.

Ejemplos:

pdf_generar_archivo_ahphp(instancia_pdf, "nombre_archivo.pdf", "I", true);
pdf_generar_archivo_ahphp(instancia_pdf, "nombre_archivo.pdf");

*/
function pdf_generar_archivo_ahphp(&$variable_instancia_pdf="", $nombre="doc.pdf", $destino="I", $es_utf_8=false)
{
    //$variable_instancia_pdf->Output('', 'basic.pdf');
    $variable_instancia_pdf->Output($destino, $nombre, $es_utf_8);
    ob_end_flush(); 
}
//

/*
Nota, no funciona antes del primer texto al inicio de una página
¿Porqué? No lo se
*/
function pdf_saltos_de_linea_extra_ahphp(&$variable_instancia_pdf="", $cantidad=1)
{
    for($contador=0; $contador<$cantidad; $contador++)
    {
        $variable_instancia_pdf->Ln();
    }
}



/*

Es una función de prueba creada para hacer testeos

Ejemplos:

prueba_ahphp();

*/
function prueba_ahphp()
{
	escribir_ahphp("Esto es una prueba");
}
//



/*

*/
function resultado_devolver_o_escribir_ahphp
(
    /*mixed*/ $resultado=valor_vacio_ahphp
    , 
    bool $devolver = devolver_resultado_ahphp
    , 
    callable $funcion_escribir = null
)
    : ?string
{
    //$funcion_escribir_defecto = 'escribir_ahphp';
    
    if($devolver)
    {
        return $resultado;
    }
    else
    if(  devolver_condicion_valores_iguales_ahphp($funcion_escribir, nulo_ahphp) )
    {
   
        return funcion_llamar_ahphp( funcion_escribir_ahphp, array($resultado) );
    }
    else
    {
        
        return funcion_llamar_ahphp( $funcion_escribir, array($resultado) );
    }
}
//



/*
FUNCIONES NO OFICIALES AUN
*/






/* 
FIN FUNCIONES NO OFICIALES AUN
*/



/*
FIN FUNCIONES DE LA LIBRERÍA
*/



?>
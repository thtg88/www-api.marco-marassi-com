<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':Attribute debe ser aceptado.',
    'active_url'           => ':Attribute no es un URL valido.',
    'after'                => ':Attribute debe ser una fecha posterior a :date.',
    'alpha'                => ':Attribute puede contener letras solamente.',
    'alpha_dash'           => ':Attribute puede contener letras, numeros, y gui&oacute;nes solamente.',
    'alpha_num'            => ':Attribute puede contener letras y numeros solamente.',
    'array'                => ':Attribute debe ser un vector.',
    'before'               => ':Attribute debe ser una fecha anterior a :date.',
    'between'              => [
        'numeric' => ':Attribute debe estar entre :min y :max.',
        'file'    => ':Attribute debe estar entre :min y :max kilobyte.',
        'string'  => ':Attribute debe estar entre :min y :max caracteres.',
        'array'   => ':Attribute debe estar entre :min y :max elementos.',
    ],
    'boolean'              => 'El campo :Attribute debe ser verdadero o falso.',
    'confirmed'            => ':Attribute y su confirmaci&oacute;n no coinciden.',
    'date'                 => ':Attribute no es una fecha valida.',
    'date_format'          => ':Attribute no iguala el formato :format.',
    'different'            => ':Attribute y :other deben ser diferentes.',
    'digits'               => ':Attribute debe ser de :digits d&iacute;gitos.',
    'digits_between'       => ':Attribute debe ser entre :min e :max d&iacute;gitos.',
    'dimensions'           => 'Las dimensiones de la imagen :Attribute no son validas.',
    'distinct'             => ':Attribute tiene un valor duplicado.',
    'email'                => ':Attribute debe ser una direcci&oacute;n de correo electr&oacute;nico valida.',
    'exists'               => ':Attribute seleccionado no es valido.',
    'file'                 => ':Attribute debe ser un archivo.',
    'filled'               => 'El campo :Attribute es obligatorio.',
    'image'                => ':Attribute debe ser una imagen.',
    'in'                   => ':Attribute seleccionado no es valido.',
    'in_array'             => 'El campo :Attribute no existe en :Other.',
    'integer'              => ':Attribute debe ser un n&uacute;mero entero.',
    'ip'                   => ':Attribute debe ser una direcci&oacute;n IP valida.',
    'json'                 => ':Attribute debe ser una cadena de caracteres JSON valida.',
    'max'                  => [
        'numeric' => ':Attribute no puede ser mayor de :max.',
        'file'    => ':Attribute no puede ser mayor de :max kilobyte.',
        'string'  => ':Attribute no puede ser mayor de :max caracteres.',
        'array'   => ':Attribute no puede ser mayor de :max elementos.',
    ],
    'mimes'                => ':Attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => ':Attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => ':Attribute debe ser por lo menos :min.',
        'file'    => ':Attribute debe ser por lo menos :min kilobyte.',
        'string'  => ':Attribute debe ser por lo menos :min caracteres.',
        'array'   => ':Attribute debe tener por lo menos :min elementos.',
    ],
    'not_in'               => ':Attribute seleccionado no es valido.',
    'numeric'              => ':Attribute debe ser un numero.',
    'present'              => ':Attribute debe estar presente.',
    'regex'                => 'Formato :Attribute no valido.',
    'required'             => 'El campo :Attribute es obligatorio.',
    'required_if'          => 'El campo :Attribute es obligatorio cuando :other es :value.',
    'required_unless'      => 'El campo :Attribute es obligatorio a menos que :other este en :values.',
    'required_with'        => 'El campo :Attribute es obligatorio cuando :values este presente.',
    'required_with_all'    => 'El campo :Attribute es obligatorio cuando :values no este presente.',
    'required_without'     => 'El campo :Attribute es obligatorio cuando :values no es presente.',
    'required_without_all' => 'El campo :Attribute es obligatorio cuando ningun de :values est&acute;n presentes.',
    'same'                 => ':Attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => ':Attribute debe ser :size.',
        'file'    => ':Attribute debe ser :size kilobyte.',
        'string'  => ':Attribute debe ser :size caracteres.',
        'array'   => ':Attribute debe contener :size elementos.',
    ],
    'string'               => ':Attribute debe ser una cadena de caracteres.',
    'timezone'             => ':Attribute debe ser una zona horario valida.',
    'unique'               => ':Attribute ya existe.',
    'uploaded'             => ':Attribute fall&oacute; en la carga.',
    'url'                  => 'Formato de :Attribute no valido.',

];

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

    'accepted'             => ':Attribute deve essere accettato.',
    'active_url'           => ':Attribute non &egrave; un URL valido.',
    'after'                => ':Attribute deve essere una data successiva a :date.',
    'alpha'                => ':Attribute pu&ograve; contenere solo lettere.',
    'alpha_dash'           => ':Attribute pu&ograve; contenere solo lettere, numeri, e trattini.',
    'alpha_num'            => ':Attribute pu&ograve; contenere solo lettere e numeri.',
    'array'                => ':Attribute deve essere un array.',
    'before'               => ':Attribute deve essere una data precedente a :date.',
    'between'              => [
        'numeric' => ':Attribute deve essere compreso tra :min e :max.',
        'file'    => ':Attribute deve essere compreso tra :min e :max kilobyte.',
        'string'  => ':Attribute deve essere compreso tra :min e :max caratteri.',
        'array'   => ':Attribute deve essere compreso tra :min e :max elementi.',
    ],
    'boolean'              => 'Il campo :attribute deve essere vero o falso.',
    'confirmed'            => ':Attribute e la relativa conferma non corrispondono.',
    'date'                 => ':Attribute non &egrave; una data valida.',
    'date_format'          => ':Attribute non corrisponde al formato :format.',
    'different'            => ':Attribute e :other devono essere diversi.',
    'digits'               => ':Attribute deve essere composto di :digits cifre.',
    'digits_between'       => ':Attribute deve essere composto da un numero di cifre compreso tra :min e :max.',
    'dimensions'           => ':Attribute ha dimensioni di immagine non valide.',
    'distinct'             => ':Attribute ha un duplicato.',
    'email'                => ':Attribute deve essere un indirizzo email valido.',
    'exists'               => ':Attribute selezionato non &egrave; valido.',
    'file'                 => ':Attribute deve essere un file.',
    'filled'               => 'Il campo :attribute &egrave; richiesto.',
    'image'                => ':Attribute deve essere un\'immagine.',
    'in'                   => ':Attribute selezionato non valido.',
    'in_array'             => 'Il campo :attribute non &egrave; presente in :other.',
    'integer'              => ':Attribute deve essere un intero.',
    'ip'                   => ':Attribute deve essere un indirizzo IP valido.',
    'json'                 => ':Attribute deve essere una stringa JSON valida.',
    'max'                  => [
        'numeric' => ':Attribute non pu&ograve; essere maggiore di :max.',
        'file'    => ':Attribute non pu&ograve; essere maggiore di than :max kilobyte.',
        'string'  => ':Attribute non pu&ograve; essere maggiore di :max caratteri.',
        'array'   => ':Attribute non pu&ograve; essere maggiore di than :max elementi.',
    ],
    'mimes'                => ':Attribute deve essere un file di tipo: :values.',
    'mimetypes'            => ':Attribute deve essere un file di tipo: :values.',
    'min'                  => [
        'numeric' => ':Attribute deve essere almeno :min.',
        'file'    => ':Attribute deve essere almeno :min kilobyte.',
        'string'  => ':Attribute deve essere almeno :min caratteri.',
        'array'   => ':Attribute deve avere almeno :min elementi.',
    ],
    'not_in'               => ':Attribute selezionato non valido.',
    'numeric'              => ':Attribute deve essere un numero.',
    'present'              => ':Attribute deve essere presente.',
    'regex'                => 'Il formato di :Attribute non &egrave; valido.',
    'required'             => ':Attribute &egrave; richiesto.',
    'required_if'          => ':Attribute &egrave; richiesto quando :other &egrave; :value.',
    'required_unless'      => ':Attribute &egrave; richiesto a meno che :other sia in :values.',
    'required_with'        => ':Attribute &egrave; richiesto quando :values &egrave; presente.',
    'required_with_all'    => ':Attribute &egrave; richiesto quando :values &egrave; presente.',
    'required_without'     => ':Attribute &egrave; richiesto quando :values non &egrave; presente.',
    'required_without_all' => ':Attribute &egrave; richiesto quando nessuno di :values sono presenti.',
    'same'                 => ':Attribute e :other devono coincidere.',
    'size'                 => [
        'numeric' => ':Attribute deve essere :size.',
        'file'    => ':Attribute deve essere :size kilobyte.',
        'string'  => ':Attribute deve essere :size caratteri.',
        'array'   => ':Attribute deve contenere :size elementi.',
    ],
    'string'               => ':Attribute deve essere una stringa.',
    'timezone'             => ':Attribute deve essere un fuso orario valido.',
    'unique'               => ':Attribute già presente.',
    'uploaded'             => ':Attribute upload fallito.',
    'url'                  => ':Attribute formato non valido.',

];

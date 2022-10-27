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

    'accepted' => ':attribute harus disetujui.',
    'active_url' => ':attribute URL tidak valid.',
    'after' => ':attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => ':attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => ':attribute hanya dapat berupa alphabet atau huruf.',
    'alpha_dash' => ':attribute hanya dapat berupa alphabet, angka, tanda hubung dan garis bawah.',
    'alpha_num' => ':attribute hanya dapat berupa alphabet dan angka.',
    'array' => ':attribute hanya dapat berupa array.',
    'before' => ':attribute hanya dapat berupa tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute harus dalam diantara :min hingga :max.',
        'file' => ':attribute ukurannya harus diantara :min hingga :max kilobytes.',
        'string' => ':attribute jumlah karakternya harus diantara :min hingga :max.',
        'array' => ':attribute harus memiliki variabel diantara :min hingga :max.',
    ],
    'boolean' => ':attribute isinya harus berupa pilihan benar atau salah.',
    'confirmed' => 'konfirmasi :attribute tidak cocok.',
    'date' => ':attribute tidak berupa tanggal yang valid.',
    'date_equals' => ':attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => ':attribute tidak cocok dengan format :format.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus memiliki :digits jumlah karakter.',
    'digits_between' => ':attribute harus memiliki jumlah karakter diantara :min hingga :max.',
    'dimensions' => ':attribute dimensi gambarnya tidak valid.',
    'distinct' => ':attribute terdapat isi yang terduplikat.',
    'email' => ':attribute harus berupa email yang valid.',
    'ends_with' => ':attribute harus berakhiran dengan: :values.',
    'exists' => ':attribute yang dipilih tidak valid.',
    'file' => ':attribute harus berupa file.',
    'filled' => ':attribute harus terisi.',
    'gt' => [
        'numeric' => ':attribute harus lebih dari :value.',
        'file' => ':attribute harus lebih dari :value kilobytes.',
        'string' => ':attribute harus lebih :value karakter.',
        'array' => ':attribute harus lebih dari :value variabel.',
    ],
    'gte' => [
        'numeric' => ':attribute harus lebih atau sama dengan :value.',
        'file' => ':attribute harus lebih atau sama dengan :value kilobytes.',
        'string' => ':attribute harus lebih atau berjumlah :value karakter.',
        'array' => ':attribute harus memiliki :value variable atau lebih.',
    ],
    'image' => ':attribute harus berupa gambar.',
    'in' => ':attribute yang terpilih tidak valid.',
    'in_array' => ':attribute tidak terdapat pada :other.',
    'integer' => ':attribute harus berupa angka.',
    'ip' => ':attribute harus berupa alamat IP yang valid.',
    'ipv4' => ':attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => ':attribute harus berupa alamat IPv6 yang valid.',
    'json' => ':attribute harus berupa JSON yang valid.',
    'lt' => [
        'numeric' => ':attribute harus kurang dari :value.',
        'file' => ':attribute harus kurang dari :value kilobytes.',
        'string' => ':attribute harus kurang dari :value karakter.',
        'array' => ':attribute harus kurang dari :value variabel.',
    ],
    'lte' => [
        'numeric' => ':attribute harus kurang dari atau sama dengan :value.',
        'file' => ':attribute harus kurang dari atau sama dengan :value kilobytes.',
        'string' => ':attribute harus kurang dari atau sama dengan :value karakter.',
        'array' => ':attribute harus kurang dari :value variabel.',
    ],
    'max' => [
        'numeric' => ':attribute harus kurang dari :max.',
        'file' => ':attribute harus kurang dari :max kilobytes.',
        'string' => ':attribute harus kurang dari :max karakter.',
        'array' => ':attribute harus kurang dari than :max variabel.',
    ],
    'mimes' => ':attribute harus memiliki ektensi file: :values.',
    'mimetypes' => ':attribute harus memiliki ektensi file: :values.',
    'min' => [
        'numeric' => ':attribute minimal harus :min.',
        'file' => ':attribute minimal harus :min kilobytes.',
        'string' => ':attribute minimal harus :min karakter.',
        'array' => ':attribute minimal harus :min variabel.',
    ],
    'not_in' => ':attribute yang terpilih tidak valid.',
    'not_regex' => ':attribute format tidak valid.',
    'numeric' => ':attribute harus berupa angka.',
    'password' => 'password tidak benar.',
    'present' => ':attribute harus ada.',
    'regex' => ':attribute format tidak valid.',
    'required' => ':attribute harus diisi.',
    'required_if' => ':attribute harus diisi ketika :other berisi :value.',
    'required_unless' => ':attribute harus diisi kecuali :other terdapat pada :values.',
    'required_with' => ':attribute harus diisi ketika :values ada.',
    'required_with_all' => ':attribute harus diisi ketika :values ada.',
    'required_without' => ':attribute harus diisi ketika :values tidak ada.',
    'required_without_all' => ':attribute harus diisi ketika tidak terdapat :values.',
    'same' => ':attribute dan :other harus sama.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size kilobytes.',
        'string' => ':attribute harus :size karakter.',
        'array' => ':attribute harus terdapat :size variabel.',
    ],
    'starts_with' => ':attribute harus dimulai dengan: :values.',
    'string' => ':attribute harus berupa teks.',
    'timezone' => ':attribute harus berupa zona yang valid.',
    'unique' => ':attribute sudah ada.',
    'uploaded' => ':attribute gagal diupload.',
    'url' => ':attribute format tidak valid.',
    'uuid' => ':attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

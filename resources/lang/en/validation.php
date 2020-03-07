];

    'attributes' => [],

    */
    |
    | of "email". This simply helps us make our message more expressive.
    | with something more reader friendly such as "E-Mail Address" instead
    | The following language lines are used to swap our attribute placeholder
    |
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    /*

    ],
        ],
            'rule-name' => 'custom-message',
        'attribute-name' => [
    'custom' => [

    */
    |
    | specify a specific custom language line for a given attribute rule.
    | convention "attribute.rule" to name the lines. This makes it quick to
    | Here you may specify custom validation messages for attributes using the
    |
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    /*

    'uuid' => 'The :attribute must be a valid UUID.',
    'url' => 'The :attribute format is invalid.',
    'uploaded' => 'The :attribute failed to upload.',
    'unique' => 'The :attribute has already been taken.',
    'timezone' => 'The :attribute must be a valid zone.',
    'string' => 'The :attribute must be a string.',
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    ],
        'array' => 'The :attribute must contain :size items.',
        'string' => 'The :attribute must be :size characters.',
        'file' => 'The :attribute must be :size kilobytes.',
        'numeric' => 'The :attribute must be :size.',
    'size' => [
    'same' => 'The :attribute and :other must match.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required' => 'The :attribute field is required.',
    'regex' => 'The :attribute format is invalid.',
    'present' => 'The :attribute field must be present.',
    'password' => 'The password is incorrect.',
    'numeric' => 'The :attribute must be a number.',
    'not_regex' => 'The :attribute format is invalid.',
    'not_in' => 'The selected :attribute is invalid.',
    ],
        'array' => 'The :attribute must have at least :min items.',
        'string' => 'The :attribute must be at least :min characters.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'numeric' => 'The :attribute must be at least :min.',
    'min' => [
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'mimes' => 'The :attribute must be a file of type: :values.',
    ],
        'array' => 'The :attribute may not have more than :max items.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'numeric' => 'The :attribute may not be greater than :max.',
    'max' => [
    ],
        'array' => 'The :attribute must not have more than :value items.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'numeric' => 'The :attribute must be less than or equal :value.',
    'lte' => [
    ],
        'array' => 'The :attribute must have less than :value items.',
        'string' => 'The :attribute must be less than :value characters.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'numeric' => 'The :attribute must be less than :value.',
    'lt' => [
    'json' => 'The :attribute must be a valid JSON string.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ip' => 'The :attribute must be a valid IP address.',
    'integer' => 'The :attribute must be an integer.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'in' => 'The selected :attribute is invalid.',
    'image' => 'The :attribute must be an image.',
    ],
        'array' => 'The :attribute must have :value items or more.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'numeric' => 'The :attribute must be greater than or equal :value.',
    'gte' => [
    ],
        'array' => 'The :attribute must have more than :value items.',
        'string' => 'The :attribute must be greater than :value characters.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'numeric' => 'The :attribute must be greater than :value.',
    'gt' => [
    'filled' => 'The :attribute field must have a value.',
    'file' => 'The :attribute must be a file.',
    'exists' => 'The selected :attribute is invalid.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'email' => 'The :attribute must be a valid email address.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'digits' => 'The :attribute must be :digits digits.',
    'different' => 'The :attribute and :other must be different.',
    'date_format' => 'The :attribute does not match the format :format.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date' => 'The :attribute is not a valid date.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'boolean' => 'The :attribute field must be true or false.',
    ],
        'array' => 'The :attribute must have between :min and :max items.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'numeric' => 'The :attribute must be between :min and :max.',
    'between' => [
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'before' => 'The :attribute must be a date before :date.',
    'array' => 'The :attribute must be an array.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha' => 'The :attribute may only contain letters.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'after' => 'The :attribute must be a date after :date.',
    'active_url' => 'The :attribute is not a valid URL.',
    'accepted' => 'The :attribute must be accepted.',

    */
    |
    | as the size rules. Feel free to tweak each of these messages here.
    | the validator class. Some of these rules have multiple versions such
    | The following language lines contain the default error messages used by
    |
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    /*

return [

<?php

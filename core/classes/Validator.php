<?php

namespace myfrm;
class Validator {

    protected $errors = [];
    protected $rules_list = ['require', 'min', 'max', 'email'];
    protected $messages = [
        'require' => 'The :fieldname: is required',
        'min' => 'The :fieldname: field must be a minimum :ruleval: characters',
        'max' => 'The :fieldname: field must be a maximum :ruleval: characters',
        'email' => 'Not a valid email'
    ];

    public function validate (array $data, array $rules) {
        foreach ($data as $fieldname => $value) {
            if(isset($rules[$fieldname])) {
                $this->check([
                    'fieldname' => $fieldname,
                    'value' => $value,
                    'rules' => $rules[$fieldname]
                ]);
            }
        }
        return $this;
    }
    protected function check($field) {
        foreach($field['rules'] as $rule => $rul_val) {
            if(in_array($rule, $this->rules_list)) {
                if(!call_user_func_array([$this, $rule], [$field['value'], $rul_val])) {
                    $this->addErr($field['fieldname'], str_replace([':fieldname:', ':ruleval:'],
                        [$field['fieldname'], $rul_val], $this->messages[$rule]));
                }
            }
        }
    }
    protected function addErr($fieldname, $error) {
        $this->errors[$fieldname][] = $error;
    }

    public function listErrors($field)
    {
        $output = '';
        if(isset($this->errors[$field])) {
            $output .= '<div id="validationServer05Feedback" class="invalid-feedback d-block"><ul class="list-unstyled">';
            foreach($this->errors[$field] as $err) {
                $output .= "<li>{$err}</li>";
            }
            $output .= "</ul></div>";
        }
        return $output;
    }

    protected function require($value, $rule_val)
    {
        return !empty(trim($value));
    }
    protected function min($value, $rule_val)
    {
        return mb_strlen($value, 'UTF-8') >= $rule_val;
    }
    protected function max($value, $rule_val)
    {
        return mb_strlen($value, 'UTF-8') <= $rule_val;
    }
    protected function email($value, $rule_val)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    public function hasErrors()
    {
        return !empty($this->errors);
    }
}
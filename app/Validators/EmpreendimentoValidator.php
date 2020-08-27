<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class EmpreendimentoValidator.
 *
 * @package namespace App\Validators;
 */
class EmpreendimentoValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
          'nome_fantasia' => 'required',
          'razao_social'  => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];

  protected $messages = [
    'nome_fantasia.required' => 'Nome Fantasia é obrigatório',
    'razao_social.required' => 'Razão Social   é obrigatório',
  ];
}

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
          'nome' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];

  protected $messages = [
    'nome_fantasia.required' => 'Nome Fantasia é obrigatório',
    'razao_social.required' => 'Razão Social   é obrigatório',
  ];
}

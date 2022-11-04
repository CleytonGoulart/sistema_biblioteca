<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emprestimo Entity
 *
 * @property int $id
 * @property int|null $cliente_id
 * @property int|null $livro_id
 * @property \Cake\I18n\FrozenTime|null $data_emprestimo
 * @property int|null $emprestimo_funcionario_id
 * @property \Cake\I18n\FrozenTime|null $data_devolucao
 * @property int|null $devolucao_funcionario_id
 * @property string|null $observacao
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Livro $livro
 * @property \App\Model\Entity\Usuario $usuario
 */
class Emprestimo extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'cliente_id' => true,
        'livro_id' => true,
        'data_emprestimo' => true,
        'emprestimo_funcionario_id' => true,
        'data_devolucao' => true,
        'devolucao_funcionario_id' => true,
        'observacao' => true,
        'created' => true,
        'modified' => true,
        'cliente' => true,
        'livro' => true,
        'usuario' => true,
    ];
}

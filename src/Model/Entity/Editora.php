<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Editora Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property int|null $situacao_id
 * @property int|null $cadastrado_por
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modificado_por
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Situaco $situaco
 * @property \App\Model\Entity\Livro[] $livros
 */
class Editora extends Entity
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
        'nome' => true,
        'situacao_id' => true,
        'cadastrado_por' => true,
        'created' => true,
        'modificado_por' => true,
        'modified' => true,
        'situaco' => true,
        'livros' => true,
    ];
}

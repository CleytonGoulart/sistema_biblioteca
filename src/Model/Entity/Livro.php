<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Livro Entity
 *
 * @property int $id
 * @property int|null $editora_id
 * @property int|null $categoria_id
 * @property string|null $nome
 * @property string|null $assunto
 * @property string|null $autor
 * @property int|null $situacao_id
 * @property int|null $cadastrado_por
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int|null $modificado_por
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Editora $editora
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Situaco $situaco
 */
class Livro extends Entity
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
        'editora_id' => true,
        'categoria_id' => true,
        'nome' => true,
        'assunto' => true,
        'autor' => true,
        'situacao_id' => true,
        'cadastrado_por' => true,
        'created' => true,
        'modificado_por' => true,
        'modified' => true,
        'editora' => true,
        'categoria' => true,
        'situaco' => true,
    ];
}

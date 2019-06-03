<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Livrosgenero Entity
 *
 * @property int $id
 * @property int|null $livros_id
 * @property int|null $generos_id
 *
 * @property \App\Model\Entity\Livro $livro
 * @property \App\Model\Entity\Genero $genero
 */
class Livrosgenero extends Entity
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
        'livros_id' => true,
        'generos_id' => true,
        'livro' => true,
        'genero' => true
    ];
}

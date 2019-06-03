<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livrosgenero $livrosgenero
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Livrosgenero'), ['action' => 'edit', $livrosgenero->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Livrosgenero'), ['action' => 'delete', $livrosgenero->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livrosgenero->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Livrosgeneros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livrosgenero'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="livrosgeneros view large-9 medium-8 columns content">
    <h3><?= h($livrosgenero->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Livro') ?></th>
            <td><?= $livrosgenero->has('livro') ? $this->Html->link($livrosgenero->livro->id, ['controller' => 'Livros', 'action' => 'view', $livrosgenero->livro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genero') ?></th>
            <td><?= $livrosgenero->has('genero') ? $this->Html->link($livrosgenero->genero->id, ['controller' => 'Generos', 'action' => 'view', $livrosgenero->genero->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($livrosgenero->id) ?></td>
        </tr>
    </table>
</div>

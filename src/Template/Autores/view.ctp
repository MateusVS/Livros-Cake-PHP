<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autore $autore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Autor'), ['action' => 'edit', $autore->id]) ?> </li>Are
        <li><?= $this->Form->postLink(__('Deletar Autor'), ['action' => 'delete', $autore->id], ['confirm' => __('Tem certeza que realmente deseja deletar # {0}?', $autore->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Autores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Autor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="autores view large-9 medium-8 columns content">
    <h3><?= h($autore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($autore->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($autore->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($autore->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($autore->modified) ?></td>
        </tr>
    </table>
</div>

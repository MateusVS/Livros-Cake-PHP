<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genero $genero
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Genero'), ['action' => 'edit', $genero->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Genero'), ['action' => 'delete', $genero->id], ['confirm' => __('Tem certeza que deseja deletar # {0}?', $genero->descricao)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Generos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Genero'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="generos view large-9 medium-8 columns content">
    <h3><?= h($genero->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($genero->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($genero->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($genero->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($genero->descricao)); ?>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Livro'), ['action' => 'edit', $livro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Livro'), ['action' => 'delete', $livro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Livros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Livro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Autores'), ['controller' => 'Autores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Autor'), ['controller' => 'Autores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="livros view large-9 medium-8 columns content">
    <h3><?= h($livro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($livro->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autor') ?></th>
            <td><?= $livro->has('autore') ? $this->Html->link($livro->autore->nome, ['controller' => 'Autores', 'action' => 'view', $livro->autore->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($livro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($livro->quantidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isbn') ?></th>
            <td><?= $this->Number->format($livro->isbn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($livro->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($livro->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($livro->descricao)); ?>
    </div>
</div>

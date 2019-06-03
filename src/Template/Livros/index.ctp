<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro[]|\Cake\Collection\CollectionInterface $livros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Adicionar Livro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Autores'), ['controller' => 'Autores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Adicionar Autor'), ['controller' => 'Autores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="livros index large-9 medium-8 columns content">
    <h3><?= __('Livros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isbn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autor_id') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livros as $livro): ?>
            <tr>
                <td><?= $this->Number->format($livro->id) ?></td>
                <td><?= h($livro->titulo) ?></td>
                <td><?= $this->Number->format($livro->quantidade) ?></td>
                <td><?= $this->Number->format($livro->isbn) ?></td>
                <td><?= h($livro->created) ?></td>
                <td><?= h($livro->modified) ?></td>
                <td><?= $livro->has('autore') ? $this->Html->link($livro->autore->nome, ['controller' => 'Autores', 'action' => 'view', $livro->autore->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver mais'), ['action' => 'view', $livro->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $livro->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $livro->id], ['confirm' => __('Tem certeza que deseja deletar {0}?', $livro->titulo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Inicio')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} gravações de um total {{count}}')]) ?></p>
    </div>
</div>

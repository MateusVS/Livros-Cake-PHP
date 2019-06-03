<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livrosgenero[]|\Cake\Collection\CollectionInterface $livrosgeneros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Livrosgenero'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="livrosgeneros index large-9 medium-8 columns content">
    <h3><?= __('Livrosgeneros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('livros_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('generos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livrosgeneros as $livrosgenero): ?>
            <tr>
                <td><?= $this->Number->format($livrosgenero->id) ?></td>
                <td><?= $livrosgenero->has('livro') ? $this->Html->link($livrosgenero->livro->id, ['controller' => 'Livros', 'action' => 'view', $livrosgenero->livro->id]) : '' ?></td>
                <td><?= $livrosgenero->has('genero') ? $this->Html->link($livrosgenero->genero->id, ['controller' => 'Generos', 'action' => 'view', $livrosgenero->genero->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $livrosgenero->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $livrosgenero->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $livrosgenero->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livrosgenero->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

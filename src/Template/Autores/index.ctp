<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autore[]|\Cake\Collection\CollectionInterface $autores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Autor'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="autores index large-9 medium-8 columns content">
    <h3><?= __('Autores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($autores as $autore): ?>
            <tr>
                <td><?= $this->Number->format($autore->id) ?></td>
                <td><?= h($autore->nome) ?></td>
                <td><?= h($autore->created) ?></td>
                <td><?= h($autore->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver mais'), ['action' => 'view', $autore->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $autore->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $autore->id], ['confirm' => __('Tem certeza que realmente deseja deletar # {0}?', $autore->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} gravações de um total de {{count}}')]) ?></p>
    </div>
</div>

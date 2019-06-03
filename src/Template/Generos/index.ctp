<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genero[]|\Cake\Collection\CollectionInterface $generos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Genero'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="generos index large-9 medium-8 columns content">
    <h3><?= __('Generos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descrição') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($generos as $genero): ?>
            <tr>
                <td><?= $this->Number->format($genero->id) ?></td>
                <td><?= h($genero->descricao) ?></td>
                <td><?= h($genero->created) ?></td>
                <td><?= h($genero->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver mais'), ['action' => 'view', $genero->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $genero->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $genero->id], ['confirm' => __('Tem certeza que realmente deseja deletar # {0}?', $genero->descricao)]) ?>
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
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} gravações de um total de {{count}} ')]) ?></p>
    </div>
</div>

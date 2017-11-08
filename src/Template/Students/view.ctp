<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="students view large-9 medium-8 columns content">
    <h3><?= h($student->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Student Code') ?></th>
            <td><?= h($student->student_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student Password') ?></th>
            <td><?= h($student->student_password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student Email') ?></th>
            <td><?= h($student->student_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student Phone Number') ?></th>
            <td><?= h($student->student_phone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student Html Point') ?></th>
            <td><?= h($student->student_html_point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($student->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($student->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($student->modified) ?></td>
        </tr>
    </table>
</div>

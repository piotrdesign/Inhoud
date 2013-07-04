<h3><?php echo empty($user->id) ? 'Dodaj nowego użytkownika' : 'Edytuj użytkownika: ' . $user->name; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
    <tr>
        <td>Imię</td>
        <td><?php echo form_input('name', set_value('name', $user->name)); ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo form_input('email', set_value('email', $user->email)); ?></td>
    </tr>
    <tr>
        <td>Hasło</td>
        <td><?php echo form_password('password'); ?></td>
    </tr>
    <tr>
        <td>Potwierdź hasło</td>
        <td><?php echo form_password('password_confirm'); ?></td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_submit('submit', 'Zapisz', 'class="btn btn-primary"'); ?></td>
    </tr>
</table>
<?php echo form_close(); ?>
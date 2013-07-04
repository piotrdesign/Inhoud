<div class="modal-header">
    <h3>Zaloguj się</h3>
    <p>Użyj swoich danych w celu zalogowania się</p>
</div>
<div class="modal-body">
    <?php echo validation_errors(); ?>
    <?php echo form_open(); ?>
    <table class="table">
        <tr>
            <td>Email</td>
            <td><?php echo form_input('email'); ?></td>
        </tr>
        <tr>
            <td>Hasło</td>
            <td><?php echo form_input('password'); ?></td>
        </tr>
        <tr>
            <td></td>
            <td><?php echo form_submit('submit', 'Zaloguj', 'class="btn btn-primary"'); ?></td>
        </tr>
    </table>
    <?php echo form_close(); ?>
</div>
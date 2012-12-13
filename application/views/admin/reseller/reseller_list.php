<!-- list all resellers in the administrative area -->

<br />
<br />
<br />

This is a list of reseller data from the database:<br />
<?php foreach($resellers as $reseller): ?>
    <li>
        <?php echo $reseller; ?>
    </li>
<?php endforeach;?>
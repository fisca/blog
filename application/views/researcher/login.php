<div class="container">

    <div class="row">
        <h2 style="text-align: center;">User Login</h2>
    </div>

    <form method="post" class="form-horizontal" role="form">

        <?php foreach ($input as $item): ?>
            <div class="form-group">          
                <?php echo $item; ?>
            </div>
        <?php endforeach; ?>

    </form>
    <!--
    <strong>Session ID:</strong> <?php echo $session_data['session_id']; ?><br>
    <strong>IP Address:</strong> <?php echo $session_data['ip_address']; ?><br>
    <strong>User Agent:</strong> <?php echo $session_data['user_agent']; ?><br>
    <strong>Last Activity:</strong> <?php echo $session_data['last_activity']; ?>
    -->
    <?php echo $show . ' xxxxxx'; ?><br>
    <?php echo $username; ?><br>
    <?php echo $password; ?>
</div> <!-- /.container -->
<!DOCTYPE html>
<html>
    <head>
        <title>Admin AM - transaction</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= base_url('bootstrap-grid.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('admin-style.css'); ?>">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col">
                    <h1 class="admin-text-1">Select User</h1>
                </div>
            </div>
            <div class="row center">
                <div class="col">
                    <form action="/Admin/get_to_admin_transaction" method="post">
                        <table class="center">
                            <tr>
                                <td>Pilih Email User</td>
                                <td>
                                    <select id="email" name="email" required>
                                        <option value="" disabled selected>Pilih Email User</option>
                                        <?php foreach ($Data_Email as $row) : ?>
                                            <option value="<?= $row['email'] ?>"><?= $row['email'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" value="Masuk Detail User"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-bottom:30px">
                <div class="col-xs-3">
                    <a href="/admin"><button class="view-button-2">Exit to Menu</button></a>
                </div>
            </div>
        </div>
    </body>
</html>
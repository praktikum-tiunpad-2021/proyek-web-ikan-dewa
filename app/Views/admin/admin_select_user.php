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
            <form action="/Admin/admin_user_data" method="post">
                <div class="row center">
                    <div class="col">
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
                        </table>
                    </div>
                </div>
                <div class="row justify-content-md-center" style="margin-top:20px">
                    <div class="col">
                        <table class="center">
                            <tr>
                                <td colspan="2">                        
                                    <input class="view-button-2" type="submit" value="Masuk Detail User">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
            <div class="row justify-content-md-center" style="margin-top:5px">
                <div class="col">
                    <table class="center">
                        <tr>
                            <td colspan="2">                        
                                <a href="/admin"><button class="view-button-2">Exit to Menu</button></a>     
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
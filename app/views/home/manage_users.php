
<!DOCTYPE html>
<html>
  
    <body>
        <table>
        <tr>
            <th>Id</th>
            <th>Username</th> 
            <th>Email</th>
        </tr>
            <?php print_r(json_encode($data['users']));?>
            <?php foreach($data['users'] as $user):?>
                <tr>
                    <td><?=$user->id?></td>
                    <td><?=$user->username?></td>
                    <td><?=$user->email?></td>
                </tr>
            <?php endforeach;?>

        </table>
        

    </body>
</html>
<?php
require_once 'database.php';
$query = '';
$statement = $db->prepare($query);
$statement->execute();
$users = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html lang="en">
    <!-- the head section -->
    <head>
        <title>Create User
        </title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>
    <!-- the body section -->
    <body>
        <header>
            <h1>Create User
            </h1>
        </header>
        <main>
            <h1>Category List
            </h1>
            <table>
                <tr>
                    <th>Name
                    </th>    
                    <th>
                    </th>  
                </tr>
                <?php foreach ($users as $users) : ?>
                <tr>             
                    <td>
                        <?php echo $users['categoryName']; ?></td>
                    <td>
                        <form action="add_user.php" method="post">
                            <input type="hidden" name="username" value="<?php echo $users['username']; ?>">
                            <input type="submit" value="Add">
                        </form>
                    </td>              
                </tr>
                <?php endforeach; ?>
            </table>
            <h2>Add User
            </h2> 
            <form action="add_user.php" method="post">  
                <label>Name:
                </label>
                <input type="text" name="username">
                <input type="submit" value="Add">
            </form> 
            <br>
            <p>
                <a href="index.php">List Products
                </a>
            </p>
        </main>
        <footer>
            <p>&copy; 
                <?php echo date('Y'); ?> My Guitar Shop, Inc.
            </p>
        </footer>
    </body>
</html>

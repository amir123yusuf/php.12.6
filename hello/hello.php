<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Таблица истинности</title>
</head>
<body>
    <h1 align="center">Таблица истинности PHP</h1>
    <table>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
        </tr>
        <tr>
            <td>
            <?php echo $a = 0 ?>
            </td>
            <td>
            <?php echo $b = 0 ?>
            </td>
            <td>
            <?php echo !$a ?>
            </td>
            <td>
            <?php echo (int)($a || $b) ?>
            </td>
            <td>
            <?php echo (int)($a && $b) ?>
            </td>
            <td>
            <?php echo (int)($a xor $b) ?>
            </td>
        </tr>
        <tr>
        <td>
            <?php echo $a = 0 ?>
            </td>
            <td>
            <?php echo $b = 1 ?>
            </td>
            <td>
            <?php echo !$a ?>
            </td>
            <td>
            <?php echo (int)($a || $b) ?>
            </td>
            <td>
            <?php echo (int)($a && $b) ?>
            </td>
            <td>
            <?php echo (int)($a xor $b) ?>
        </tr>
        <tr>
        <td>
            <?php echo $a = 1 ?>
            </td>
            <td>
            <?php echo $b = 0 ?>
            </td>
            <td>
            <?php echo !$a ?>
            </td>
            <td>
            <?php echo (int)($a || $b) ?>
            </td>
            <td>
            <?php echo (int)($a && $b) ?>
            </td>
            <td>
            <?php echo (int)($a xor $b) ?>
        </tr>
        <tr>
        <td>
            <?php echo $a = 1 ?>
            </td>
            <td>
            <?php echo $b = 1 ?>
            </td>
            <td>
            <?php echo !$a ?>
            </td>
            <td>
            <?php echo (int)($a || $b) ?>
            </td>
            <td>
            <?php echo (int)($a && $b) ?>
            </td>
            <td>
            <?php echo (int)($a xor $b) ?>
            </td>
        </tr>
    </table>
<br>
<h2 align="center">Таблица гибкого сравнения</h2>
<br>
    <table>
        <?php $a = true; ?>
        <?php $b = false; ?>
        <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
        </tr>
        <tr>
        <th>true</th>
            <td><?php echo (int)($a == $a); ?></td>
            <td><?php echo (int)($a == $b); ?></td>
            <td><?php echo (int)($a == 1); ?></td>
            <td><?php echo (int)($a == 0); ?></td>
            <td><?php echo (int)($a == -1); ?></td>
            <td><?php echo (int)($a == "1"); ?></td>
            <td><?php echo (int)($a == null); ?></td>
            <td><?php echo (int)($a == "php"); ?></td>
        </tr>
        <tr>
        <th>false</th>
            <td><?php echo (int)($b == $a); ?></td>
            <td><?php echo (int)($b == $b); ?></td>
            <td><?php echo (int)($b == 1); ?></td>
            <td><?php echo (int)($b == 0); ?></td>
            <td><?php echo (int)($b == -1); ?></td>
            <td><?php echo (int)($b == "1"); ?></td>
            <td><?php echo (int)($b == null); ?></td>
            <td><?php echo (int)($b == "php"); ?></td>
        </tr>
        <tr>
        <th>1</th>
            <td><?php echo (int)(1 == $a); ?></td>
            <td><?php echo (int)(1 == $b); ?></td>
            <td><?php echo (int)(1 == 1); ?></td>
            <td><?php echo (int)(1 == 0); ?></td>
            <td><?php echo (int)(1 == -1); ?></td>
            <td><?php echo (int)(1 == "1"); ?></td>
            <td><?php echo (int)(1 == null); ?></td>
            <td><?php echo (int)(1 == "php"); ?></td>
        </tr>
        <tr>
        <th>0</th>
            <td><?php echo (int)(0 == $a); ?></td>
            <td><?php echo (int)(0 == $b); ?></td>
            <td><?php echo (int)(0 == 1); ?></td>
            <td><?php echo (int)(0 == 0); ?></td>
            <td><?php echo (int)(0 == -1); ?></td>
            <td><?php echo (int)(0 == "1"); ?></td>
            <td><?php echo (int)(0 == null); ?></td>
            <td><?php echo (int)(0 == "php"); ?></td>
        </tr>
        <tr>
        <th>-1</th>
            <td><?php echo (int)(1 == $a); ?></td>
            <td><?php echo (int)(1 == $b); ?></td>
            <td><?php echo (int)(1 == 1); ?></td>
            <td><?php echo (int)(1 == 0); ?></td>
            <td><?php echo (int)(1 == -1); ?></td>
            <td><?php echo (int)(1 == "1"); ?></td>
            <td><?php echo (int)(1 == null); ?></td>
            <td><?php echo (int)(1 == "php"); ?></td>
        </tr>
        <tr>
        <th>"1"</th>
            <td><?php echo (int)("1" == $a); ?></td>
            <td><?php echo (int)("1" == $b); ?></td>
            <td><?php echo (int)("1" == 1); ?></td>
            <td><?php echo (int)("1" == 0); ?></td>
            <td><?php echo (int)("1" == -1); ?></td>
            <td><?php echo (int)("1" == "1"); ?></td>
            <td><?php echo (int)("1" == null); ?></td>
            <td><?php echo (int)("1" == "php"); ?></td>
        </tr>
        <tr>
            <th>null</th>
            <td><?php echo (int)(null == $a); ?></td>
            <td><?php echo (int)(null == $b); ?></td>
            <td><?php echo (int)(null == 1); ?></td>
            <td><?php echo (int)(null == 0); ?></td>
            <td><?php echo (int)(null == -1); ?></td>
            <td><?php echo (int)(null == "1"); ?></td>
            <td><?php echo (int)(null == null); ?></td>
            <td><?php echo (int)(null == "php"); ?></td>
        </tr>
        <tr>
            <th>"php"</th>
            <td><?php echo (int)("php" == $a); ?></td>
            <td><?php echo (int)("php" == $b); ?></td>
            <td><?php echo (int)("php" == 1); ?></td>
            <td><?php echo (int)("php" == 0); ?></td>
            <td><?php echo (int)("php" == -1); ?></td>
            <td><?php echo (int)("php" == "1"); ?></td>
            <td><?php echo (int)("php" == null); ?></td>
            <td><?php echo (int)("php" == "php"); ?></td>
        </tr>
    </table>
<br>
<h2 align="center">Таблица жесткого сравнения</h2>
<br>
    <table>
        <?php $a = true; ?>
        <?php $b = false; ?>
        <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>
        </tr>
        <tr>
        <th>true</th>
            <td><?php echo (int)($a === $a); ?></td>
            <td><?php echo (int)($a === $b); ?></td>
            <td><?php echo (int)($a === 1); ?></td>
            <td><?php echo (int)($a === 0); ?></td>
            <td><?php echo (int)($a === -1); ?></td>
            <td><?php echo (int)($a === "1"); ?></td>
            <td><?php echo (int)($a === null); ?></td>
            <td><?php echo (int)($a === "php"); ?></td>
        </tr>
        <tr>
        <th>false</th>
            <td><?php echo (int)($b === $a); ?></td>
            <td><?php echo (int)($b === $b); ?></td>
            <td><?php echo (int)($b === 1); ?></td>
            <td><?php echo (int)($b === 0); ?></td>
            <td><?php echo (int)($b === -1); ?></td>
            <td><?php echo (int)($b === "1"); ?></td>
            <td><?php echo (int)($b === null); ?></td>
            <td><?php echo (int)($b === "php"); ?></td>
        </tr>
        <tr>
        <th>1</th>
            <td><?php echo (int)(1 === $a); ?></td>
            <td><?php echo (int)(1 === $b); ?></td>
            <td><?php echo (int)(1 === 1); ?></td>
            <td><?php echo (int)(1 === 0); ?></td>
            <td><?php echo (int)(1 === -1); ?></td>
            <td><?php echo (int)(1 === "1"); ?></td>
            <td><?php echo (int)(1 === null); ?></td>
            <td><?php echo (int)(1 === "php"); ?></td>
        </tr>
        <tr>
        <th>0</th>
            <td><?php echo (int)(0 === $a); ?></td>
            <td><?php echo (int)(0 === $b); ?></td>
            <td><?php echo (int)(0 === 1); ?></td>
            <td><?php echo (int)(0 === 0); ?></td>
            <td><?php echo (int)(0 === -1); ?></td>
            <td><?php echo (int)(0 === "1"); ?></td>
            <td><?php echo (int)(0 === null); ?></td>
            <td><?php echo (int)(0 === "php"); ?></td>
        </tr>
        <tr>
        <th>-1</th>
            <td><?php echo (int)(1 === $a); ?></td>
            <td><?php echo (int)(1 === $b); ?></td>
            <td><?php echo (int)(1 === 1); ?></td>
            <td><?php echo (int)(1 === 0); ?></td>
            <td><?php echo (int)(1 === -1); ?></td>
            <td><?php echo (int)(1 === "1"); ?></td>
            <td><?php echo (int)(1 === null); ?></td>
            <td><?php echo (int)(1 === "php"); ?></td>
        </tr>
        <tr>
        <th>"1"</th>
            <td><?php echo (int)("1" === $a); ?></td>
            <td><?php echo (int)("1" === $b); ?></td>
            <td><?php echo (int)("1" === 1); ?></td>
            <td><?php echo (int)("1" === 0); ?></td>
            <td><?php echo (int)("1" === -1); ?></td>
            <td><?php echo (int)("1" === "1"); ?></td>
            <td><?php echo (int)("1" === null); ?></td>
            <td><?php echo (int)("1" === "php"); ?></td>
        </tr>
        <tr>
            <th>null</th>
            <td><?php echo (int)(null === $a); ?></td>
            <td><?php echo (int)(null === $b); ?></td>
            <td><?php echo (int)(null === 1); ?></td>
            <td><?php echo (int)(null === 0); ?></td>
            <td><?php echo (int)(null === -1); ?></td>
            <td><?php echo (int)(null === "1"); ?></td>
            <td><?php echo (int)(null === null); ?></td>
            <td><?php echo (int)(null === "php"); ?></td>
        </tr>
        <tr>
            <th>"php"</th>
            <td><?php echo (int)("php" === $a); ?></td>
            <td><?php echo (int)("php" === $b); ?></td>
            <td><?php echo (int)("php" === 1); ?></td>
            <td><?php echo (int)("php" === 0); ?></td>
            <td><?php echo (int)("php" === -1); ?></td>
            <td><?php echo (int)("php" === "1"); ?></td>
            <td><?php echo (int)("php" === null); ?></td>
            <td><?php echo (int)("php" === "php"); ?></td>
        </tr>
    </table>
</body>
</html>
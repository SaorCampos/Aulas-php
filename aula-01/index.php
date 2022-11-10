<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Cidade</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i =1; $i <=10; $i++){
            echo "<tr>
                <td>Chiquim {$i}</td>
                <td>Chiquim{$i}@email.com</td>
                <td>Cidade {$i}</td>
            </tr>";
        }
        ?>
    </tbody>
</table>
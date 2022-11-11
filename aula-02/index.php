<form action="">
    <label for="data_nascimento">Data Nascimento</label>
    <select name="" id="data_nascimento">
        <option selected disabled>Selecione</option>
        <?php
        for($i = 1; $i <= 31; $i ++){
            echo "<option value={$i}>{$i}</option>";
        }
        ?>
    </select>
    <br>
    <label for="mes">Mês</label>
    <select name="" id="mes">
        <option selected disabled>Selecione</option>
        <?php
        // for($i = 1; $i <=12; $i ++){
        //     echo "<option value={$i}>{$i}</option>";
        // }
        $meses=[
            1 => 'Janeiro',
            2=> 'Fevereiro',
            3=> 'Março',
            4=> 'Abril',
            5=> 'Maio',
            6=> 'Junho',
            7=> 'Julho',
            8=> 'Agosto',
            9=> 'Setembro',
            10=> 'Outubro',
            11=> 'Novembro',
            12=> 'Dezembro',
        ];
        for($mes = 1; $mes <=12; $mes ++){
            echo "<option>{$meses[$mes]}</option>";
        }
        ?>
    </select>
    <br>
    <label for="ano">Ano</label>
    <select name="" id="ano">
        <option selected disabled>Selecione</option>
        <?php
        for($i=1900; $i <=2022; $i ++){
            echo "<option value={$i}>{$i}</option>";
        }
        ?>
    </select>
    <br>
    <button type="submit">Enviar</button>
</form>
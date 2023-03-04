<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-disposition: attachment; filename=farmacos.xls");
?>
    <table border="1"  style="background-color: black;color: white;">>
        <thead>
            <tr>
                <th>Medicamento</th>
                <th>Presentacion</th>
                <th>Drogra</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Etidol</td>
                <td>Capsulas</td>
                <td>Ibuprofeno</td>
                <td>23.000</td>
            </tr>
            <tr>
                <td>Actron</td>
                <td>Capsulas</td>
                <td>Ibuprofeno</td>
                <td>27.000</td>
            </tr>
            <tr>
                <td>Kitadol</td>
                <td>Pastillas</td>
                <td>Ibuprofeno</td>
                <td>15.000</td>
            </tr>
            <tr>
                <td>Broncotos</td>
                <td>Jarabe</td>
                <td>Antitusivo, Antiinflamatorio</td>
                <td>63.000</td>
            </tr>

        </tbody>
        <tfoot>
            <tr>
                <td>Total</td>
                <td colspan=2></td>
                <td>128.000</td>
            </tr>
        </tfoot>
    </table>
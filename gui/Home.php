<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <script></script>
        <div>
            <form method="post" action="Recuperar.php" >
                <table>
                    <tr>
                        <td>texto MD5</td>
                        <td>
                            <input type="text" name="txttextoMd5" id="txttextoMd5" value="ABCabc123">
                        </td>
                        <td>
                            <button  id="btnEncripMd5" name="btnEncripMd5" type="submit">Encriptar MD5</button>
                        </td>
                    </tr>
                    <tr>
                        <td>texto SHA1</td>
                        <td>
                            <input type="text" name="txttextoSha1" id="txttextoSha1" value="ABCabc123">
                        </td>
                        <td>
                            <button  id="btnEncripSha1" name="btnEncripSha1" type="submit">Encriptar SHA1</button>
                        </td>
                    </tr>
                    <tr>
                        <td>texto HASH</td>
                        <td>
                            <input type="text" name="txttextoHash" id="txttextoHash" value="ABCabc123">
                        </td>
                        <td>
                            <button  id="btnEncripHash" name="btnEncripHash" type="submit">Encriptar HASH</button>
                        </td>
                    </tr>
                    <tr>
                        <td>texto CRYPT</td>
                        <td>
                            <input type="text" name="txttextoCrypt" id="txttextoCrypt" value="ABCabc123">
                        </td>
                        <td>
                            <button  id="btnEncripCrypt" name="btnEncripCrypt" type="submit">Encriptar CRYPT</button>
                        </td>
                    </tr>
                    <tr>
                        <td>texto BASE64_ENCODE</td>
                        <td>
                            <input type="text" name="txttextoBase64" id="txttextoBase64" value="ABCabc123">
                        </td>
                        <td>
                            <button  id="btnEncripBase64" name="btnEncripBase64" type="submit">Encriptar BASE64_ENCODE</button>
                        </td>
                    </tr>
                    <td>
                            <button  id="btnTodos" name="btnTodos" type="submit">Encriptar Todos</button>
                    </td>
                </table>
            </form>
        </div>
    </body>
</html>

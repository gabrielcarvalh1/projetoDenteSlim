<form action="">
    <fieldset>
        <legend>Filtros</legend>
        <div>nome <input type="text" name="nome" id="nome"></div>
        <div>ncrm <input type="text" name="crm" id="crm"></div>
        <button type="button">Consultar</button>
        <button type="reset">Limpar</button>

    </fieldset>
    <div id="medicolista">
        <table>
            <thead>
                <tr>
                    <th>Código do médico</th>
                    <th>Nome</th>
                    <th>CRM</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
        </table>
    </div>
</form>
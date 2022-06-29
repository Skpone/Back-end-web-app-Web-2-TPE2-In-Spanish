<form id="tableForm" action="add-product">
    <div>
        <label>Nombre Producto:</label><br>
        <input type="text" name="params" required>    
    </div>
    <div>
        <label>País:</label><br>
        <select name="params" required>
            <option></option>
            <option value="argentina">Argentina</option>
            <option value="italia">Italia</option>
            <option value="china">China</option>
        </select>
    </div>
    <div>
        <label>Precio:</label><br>
        <input type="text" name="params" required>    
    </div>
    <button type="submit">Agregar</button>
</form>
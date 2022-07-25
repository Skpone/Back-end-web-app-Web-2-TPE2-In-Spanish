<form id="addProductForm">
    <div>
        <label class="form-label">Nombre Producto:</label>
        <input type="text" name="params" class="form-control" required>    
    </div>
    <div>
        <label class="form-label">Tipo:</label>
        <input type="text" name="params" class="form-control" required>    
    </div>
    <div>
        <label class="form-label">País:</label>
        <select name="params" class="form-select" required>
            <option></option>
            <option value="argentina">Argentina</option>
            <option value="italia">Italia</option>
            <option value="china">China</option>
        </select>
    </div>
    <div>
        <label class="form-label">Ingredientes:</label>
        <textarea name="params" required class="form-control"></textarea>
    </div>
    <div>
        <label class="form-label">Precio:</label>
        <input type="text" name="params" class="form-control" required>    
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>
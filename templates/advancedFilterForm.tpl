<form id="advancedFilterForm">
    <div>
        <label class="form-label">Filtro avanzado</label>
    </div>
    <div>
        <label class="form-label">Producto:</label>
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
    <button type="submit" class="btn btn-primary">Filtrar</button>
</form>
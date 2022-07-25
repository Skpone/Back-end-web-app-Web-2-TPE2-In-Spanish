<form class="form-floating" id="advancedFilterForm">
    <div>
        <h4 class="form-label text-info">Filtro avanzado</h4>
    </div>
    <div>
        <input type="text" name="params" class="form-control" placeholder="Producto" required>
    </div>
    <div>
        <input type="text" name="params" class="form-control" placeholder="Tipo" required>    
    </div>
    <div>
        <select name="params" class="form-select" required> {*seguir aca como hacer placeholder en select*}
            <option></option>
            <option value="argentina">Argentina</option>
            <option value="italia">Italia</option>
            <option value="china">China</option>
        </select>
    </div>
    <div>
        <textarea name="params" class="form-control" placeholder="Ingredientes" required></textarea>
    </div>
    <div>
        <input type="text" name="params" class="form-control" placeholder="Precio" required>    
    </div>
    <button type="submit" class="btn btn-info">Filtrar</button>
</form>
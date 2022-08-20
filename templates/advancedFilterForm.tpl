<form class="form-floating" id="advancedFilterForm">
    <h4 class="form-label text-info">Filtro avanzado</h4>
    <div class="mb-3">
        <input type="text" name="params" class="form-control" placeholder="Producto" required>
    </div>
    <div class="mb-3">
        <input type="text" name="params" class="form-control" placeholder="Tipo" required>    
    </div>
    <div class="mb-3">
        <select name="params" class="text-capitalize form-select" required>
            <option disabled>País</option>
            {foreach from=$countries item=$country}
                <option value="{$country->country}">{$country->country}</option>
            {/foreach}
        </select>
    </div>
    <div class="mb-3">
        <textarea name="params" class="form-control" placeholder="Ingredientes" required></textarea>
    </div>
    <div class="mb-2">
        <input type="text" name="params" class="form-control" placeholder="Precio" required>    
    </div>
    <button type="submit" class="btn btn-info mb-2">Filtrar</button>
</form>
<form id="countryFilterForm">
    <h4 class="form-label text-info">Filtrar por país:</h4>
    <div class="mb-2">
        <select name="params" class="text-capitalize form-select" required>
            <option disabled>País</option>
            {foreach from=$countries item=$country}
                <option value="{$country->country}">{$country->country}</option>
            {/foreach}
        </select>
    </div>
    <button type="submit" class="btn btn-info mb-2">Filtrar</button>
</form>
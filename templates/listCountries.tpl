{include file="header.tpl"}
    <div class="container">
        {include file="addCountryForm.tpl"}
    </div>

    <div class="container">
        <div class="accordion">
            {foreach from=$countries item=$country}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <button class="text-capitalize accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{$country->id}">
                            {$country->country}
                        </button>
                    </div>
                    <div id="collapse{$country->id}" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <ul class="list-group">
                                <a class="list-group-item list-group-item-action disabled">ID:{$country->id}</a>
                                <button type="submit" class="modifyBtns btn btn-secondary list-group-item" data-id="{$country->id}">Editar</button>
                            </ul>
                        </div>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
    <script type="text/javascript" src="js/countries.js"></script>
{include file="footer.tpl"}
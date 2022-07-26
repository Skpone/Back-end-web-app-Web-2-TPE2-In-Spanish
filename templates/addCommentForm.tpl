<form id="addCommentForm">
    <h4 class="form-label text-primary">Comenta!</h4>
    <div class="mb-3">
        <input type="text" name="params" class="form-control" placeholder="Comentario" required>    
    </div>
    <div class="mb-3">
        <select name="params" class="form-select mb-2" required>
            <option disabled>Puntaje</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Comentar</button>
</form>
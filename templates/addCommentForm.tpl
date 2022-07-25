<form id="addCommentForm">
    <div>
        <label for="comment" class="form-label">Comentario:</label>
        <input type="text" name="params" class="form-control" required>    
    </div>
    <div>
        <label for="score" class="form-label">Estrellas:</label>
        <select name="params" class="form-select" required>
            <option></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Comentar</button>
</form>
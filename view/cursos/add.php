<form action="/salvar-curso" method="post">
    <div class="form-group">
        <label for="descricao">Descrição: </label>
        <input type="text" id="descricao" name="descricao" value="<?= isset($curso) ? $curso->getDescricao() : ""; ?>" class="form-control"/>
        <input type="hidden" id="id" name="id" value="<?= isset($curso) ? $curso->getId() : "" ?>">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
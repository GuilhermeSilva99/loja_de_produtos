<div class="input-field">
    <input type="text" name="descricao" minlength="3" value="{{isset($produto->descricao) ? $produto->descricao:''}}" required>
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="preco" onkeypress="return onlynumber();" value="{{isset($produto->preco) ? $produto->preco:''}}" required>
    <label>Preço</label>
</div>
<div class="form-group">
    <br><br>
    <label>Total: </label>
    <p id="total"></p>
    <br>
    <a href="#" id="btnNewItem" class="btn btn-default">Novo Item</a>
    <br><br>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <select class="form-control" name="item[0][product_id]">
                    @foreach($products as $p)
                        <option value="{{$p->id}}" data-price="{{$p->price}}">{{$p->name}} --- {{$p->price}}</option>
                    @endforeach
                </select>
            </td>
            <td>
                {!! Form::text('items[0][qtd]',1,['class'=>'form-control']) !!}
            </td>
        </tr>
        </tbody>
    </table>

</div>